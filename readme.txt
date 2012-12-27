=== Debug This  ===
Tags: debug, debugger, print_r, var_dump, developer, tool, tools, debug tool, debug tools, debugger tool, debugger tools
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=5UYFG5FV4VA42&lc=US&item_name=Debug%20This%20WordPress%20Plugin%20Development&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted
Contributors: misternifty
Tested up to: 3.5
Requires at least: 3.5
Stable Tag: 0.01
License: GPLv2 or later

This plugin gives WordPress super admins an easy way to peek under the hood of the front-face of a WordPress installation via the admin bar.

== Description ==
This plugin gives WordPress super admins an easy way to peek under the hood of the front-face of a WordPress installation via the admin bar.

Forty-nine debug modes are included. Here is a sample of the packed-in debug goodness:

* oEmbed providers
* Post attachments
* Variety of WP_Query modes
* Variety of PHP modes (defined functions, constants, classes, phpinfo, etc...)
* Users (Current author, all users)
* Cron
* Cache
* Registered image sizes
* Post types
* Menus, Widgets, Sidebars
* Rendered page analysis (CSS, JS, Images)

== Frequently Asked Questions ==

How do I extend Debug This?

= PHP =

New debug modes can be created easily:
`add_debug_extension($mode, $menu_label, $description, $callback, $group = 'General');`

**Example**

`
add_debug_extension(
	//Mode
	'actions',
	//Menu Label
	__('Actions', 'debug-this'),
	//Description
	__('$wp_actions contains all active registered actions', 'debug-this'),
	//Callback (accepts object methods)
	'foo_callback',
	//Admin Bar Menu Group - default == 'General'
	'Filters And Actions'
);
function foo_callback($buffer, $template){
	global $wp_actions;
	$debug = print_r($wp_actions, true);
	return $debug;
}
`
Extensions can be removed as well.
`remove_debug_extension($mode);`

You can also hook into the 'debug-this' WordPress hook:

`add_action('debug_this', 'foo_callback');
function foo_callback($mode){
	//Do Something
}
`

= JavaScript =

The `debugThis` object is defined for easy access the current mode, default mode, template file name, and defined debug query var.

There are two functions available:

* `isDebug()`
* `getDebugMode()` - uses isDebug()

A jQuery hook is also available:
`
jQuery(document).bind('debug-this', function(event, debugThis){
	console.log(debugThis);
});
`

To use these functions enqueue your script with 'debug-this' as your dependency. Your script will inherit a jQuery dependency.

== Changelog ==

= 0.01 =
* Debug This Creation

== Installation ==

1. Upload to your plugins folder, usually `wp-content/plugins/`
2. Activate the plugin on the plugin screen.
3. Navigate to the front-face of your website and hover over the 'Debug This' menu item in the admin bar.

== Screenshots ==

1. This shows the modes navigation menu
2. Example mode - Attachments
3. Example mode - WP_DEBUG mode
4. Example mode - Queried Object
5. Example mode - bloginfo()

== Upgrade Notice ==

Thanks for choosing the first iteration of Debug This!