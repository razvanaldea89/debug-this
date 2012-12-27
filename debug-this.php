<?php
/*
Plugin Name: Debug This
Plugin URI: http://coderrr.com/debug-this-wordpress-plugin
Description: Gives super admins the ability to easily view a variety of debug outputs on front-facing pages
Version: 0.1
Author: Brian Fegter
Author URI: http://coderrr.com
License: GPLv2 or Later

	Copyright 2012 Brian Fegter  (email : brian@fegter.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

defined('ABSPATH') || die();

class Debug_This{
	protected $buffer;
	protected $debug;
	protected $description;
	protected $mode;
	protected $query_var = 'debug-this';
	public static $no_pre = false;
	protected $default_mode = 'wp_query';
	protected $original_template;

	public function __construct(){
		if(
			$this->is_user_permitted()
			&& !is_admin()
		){
			add_action('plugins_loaded', array($this, 'load_textdomain'));
			add_action('wp_enqueue_scripts', array($this, 'enqueue'), 90210);
			add_action('admin_bar_menu', array($this, 'admin_bar'), 90210);
			include_once dirname(__FILE__).'/_inc/extensions.php';
		}
		if(
			$this->is_user_permitted()
			&& $this->is_debug()
			&& !is_admin()
		){
			add_filter('template_include', array($this, 'template_include'), 90210, 1);
			add_filter('template_redirect', array($this, 'buffer_page'), 90210);
			add_filter('query_vars', array($this, 'add_query_var'), 90210);
			add_action('debug_this', array($this, 'debug'), $this->mode, 5);
		}
	}

	public function load_textdomain(){
		load_plugin_textdomain('debug-this', false, plugin_basename(__FILE__) . '/languages/');
	}

	public function enqueue(){
		if($this->is_debug()){
			wp_enqueue_style('bootstrap', plugins_url('_inc/css/bootstrap.css', __FILE__));
			wp_enqueue_style('debug-this', plugins_url('_inc/css/debug-this.css', __FILE__));
		}
		wp_enqueue_script('jquery');
		wp_enqueue_script('debug-this', plugins_url('_inc/js/debug-this.js', __FILE__), array('jquery'));
		$l10n = array(
			'mode'         => $this->mode,
			'defaultMode' => $this->default_mode,
			'template'     => $this->original_template,
			'queryVar'    => $this->query_var
		);
		wp_localize_script('debug-this', 'debugThis', $l10n);
		wp_enqueue_script('debug-this-trigger', plugins_url('_inc/js/debug-this-trigger.js', __FILE__), array('debug-this'), '', true);
	}

	public function add_query_var($vars){
		$vars[] = $this->query_var;
		return $vars;
	}

	public function template_include($template){
		$this->original_template = $template;
		$template = dirname(__FILE__).'/_inc/debug-template.php';
		$template = apply_filters('debug-this-template', $template);
		return $template;
	}

	public function buffer_page(){
		global $wp;
		$url = get_bloginfo('url') . '/' . $wp->request;
		$this->buffer = file_get_contents($url);
	}

	protected function is_debug(){
		if(isset($_GET[$this->query_var])){
			$this->mode = $_GET[$this->query_var] ? $_GET[$this->query_var] : apply_filters('debug_this_default_mode', $this->default_mode);
			return true;
		}
	}

	protected function is_user_permitted(){
		return is_user_logged_in() && is_super_admin() ? true : false;
	}

	protected function is_domain_permitted(){
		return preg_match('/(stage|dev|local)/', $_SERVER['SERVER_NAME']);
	}

	public function debug(){
		global $_debugger_extensions;
		if(isset($_debugger_extensions[$this->mode]) && is_array($_debugger_extensions[$this->mode])){
			$extension = $_debugger_extensions[$this->mode];
			$this->debug = call_user_func($extension['callback'], $this->buffer, $this->original_template);
			$this->debug = apply_filters('debug_this_output', $this->debug, $this->mode);
			$this->description = $extension['description'];
			$this->_render();
		}
		else{
			$debug = '<span class="error">'.__('A debug extension could not be found.', 'debug-this')."</span>\n\n";
			$debug .= $this->include_example_extension();
			$this->debug = $debug;
			$this->_render();
		}
	}

	protected function _render(){
		$description = $this->description ? ' - '. $this->description : '';
		echo '<p>'.__('Debug This Mode', 'debug_this').': '.$this->mode.$description.'</p>';
		if(self::$no_pre)
			echo $this->debug;
		else
			echo "<pre>$this->debug</pre>";
	}

	protected function include_example_extension(){
		$output = file_get_contents(dirname(__FILE__).'/_inc/example-extension.txt');
		$output = htmlentities(str_replace('$mode', $this->mode, $output));
		$output = '<p>'.__('Example Debug Extension', 'debug-this').'</p>'.$output;
		return $output;
	}

	public function admin_bar() {
	    global $wp_admin_bar, $_debugger_extensions;
	    if ( !is_super_admin() || !is_admin_bar_showing() )
	        return;
	    $wp_admin_bar->add_menu( array('id' => 'debug_this', 'title' => __( 'Debug This', 'debug-this' ), 'href' => "?$this->query_var=$this->default_mode"));
	    foreach($this->get_extensions_by_group() as $group => $extensions){
	    	if($group === 'Hide')
	    		continue;
	    	$group_title = ucwords(str_replace('-', ' ', $group));
	    	$wp_admin_bar->add_menu( array('id' => $group, 'parent' => 'debug_this', 'title' => $group_title, 'href' => false));
	    	foreach($extensions as $id => $values)
	    		$wp_admin_bar->add_menu(array('id' => $id, 'parent' => $group, 'title' => $values['name'], 'href' => "?$this->query_var=$id"));
	   	}
	}

	protected function get_extensions_by_group(){
		global $_debugger_extensions;
		foreach($_debugger_extensions as $id => $values){
			if($id === 'help')
				continue;
			else
				$grouped[$values['group']][$id] = $values;
		}
		ksort($grouped);
		return $grouped;
	}

}
add_action('init', function(){new Debug_This;});

function add_debug_extension($id, $name, $description, $callback, $group = 'General'){
	global $_debugger_extensions;
	$_debugger_extensions[$id] = array(
		'name' => $name,
		'description' => $description,
		'callback' => $callback,
		'group' => $group
	);
}

function remove_debug_extension($id){
	global $_debugger_extensions;
	if(isset($_debugger_extensions[$id]))
		unset($_debugger_extensions[$id]);
}