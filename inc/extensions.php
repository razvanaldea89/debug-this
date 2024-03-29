<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

class Debug_This_Extensions {

	public function __construct() {
		$version = get_bloginfo( 'version' );

		add_debug_extension( 'actions', esc_html__( 'Actions', 'debug-this' ), esc_html__( '$wp_actions contains all active registered actions', 'debug-this' ), array(
			$this,
			'actions'
		), 'Filters And Actions' );

		add_debug_extension( 'apache', esc_html__( 'Apache Information', 'debug-this' ), esc_html__( 'Apache version and list of modules', 'debug-this' ), array(
			$this,
			'apache'
		), 'Server' );

		add_debug_extension( 'attachments', esc_html__( 'Attachments', 'debug-this' ), esc_html__( 'List of post attachments', 'debug-this' ), array(
			$this,
			'attachments'
		), 'Media' );

		add_debug_extension( 'author', esc_html__( 'Post Author', 'debug-this' ), esc_html__( 'Current author data', 'debug-this' ), array(
			$this,
			'author'
		), 'Users' );

		add_debug_extension( 'backtrace', esc_html__( 'Backtrace', 'debug-this' ), esc_html__( 'PHP Backtrace', 'debug-this' ), array(
			$this,
			'backtrace'
		), 'PHP' );

		add_debug_extension( 'bloginfo', esc_html__( 'Blog Info', 'debug-this' ), esc_html__( 'Key/Values for get_bloginfo() or bloginfo()', 'debug-this' ), array(
			$this,
			'bloginfo'
		) );

		add_debug_extension( 'classes', esc_html__( 'Classes', 'debug-this' ), esc_html__( 'Declared Classes', 'debug-this' ), array(
			$this,
			'classes'
		), 'PHP' );

		add_debug_extension( 'cache', esc_html__( 'Object Cache', 'debug-this' ), esc_html__( 'Object Cache stats', 'debug-this' ), array(
			$this,
			'cache'
		), 'Cache' );

		add_debug_extension( 'constants', esc_html__( 'Constants', 'debug-this' ), esc_html__( 'Defined Constants', 'debug-this' ), array(
			$this,
			'constants'
		), 'PHP' );

		add_debug_extension( 'constants-wp', esc_html__( 'Constants (WordPress)', 'debug-this' ), esc_html__( 'Defined WordPress Constants', 'debug-this' ), array(
			$this,
			'constants_wordpress'
		), 'PHP' );

		add_debug_extension( 'content-width', esc_html__( 'Content Width', 'debug-this' ), esc_html__( 'global $content_width', 'debug-this' ), array(
			$this,
			'content_width'
		), 'Themes' );

		add_debug_extension( 'context', esc_html__( 'Context', 'debug-this' ), esc_html__( 'Conditional Context Tags', 'debug-this' ), array(
			$this,
			'context'
		), 'Query' );

		add_debug_extension( 'cron-schedules', esc_html__( 'WP Cron Schedules', 'debug-this' ), esc_html__( 'WP Cron Schedules', 'debug-this' ), array(
			$this,
			'cron_schedules'
		), 'Cron' );

		add_debug_extension( 'cron-jobs', esc_html__( 'WP Cron Jobs', 'debug-this' ), esc_html__( 'WP Cron Jobs', 'debug-this' ), array(
			$this,
			'cron_jobs'
		), 'Cron' );

		add_debug_extension( 'css', esc_html__( 'CSS', 'debug-this' ), esc_html__( 'Rendered CSS', 'debug-this' ), array(
			$this,
			'css'
		), 'Rendered HTML' );

		add_debug_extension( 'php-extensions', esc_html__( 'Extensions', 'debug-this' ), esc_html__( 'List of all loaded PHP extensions', 'debug-this' ), array(
			$this,
			'extensions'
		), 'PHP' );

		add_debug_extension( 'file-permissions', esc_html__( 'File Permissions', 'debug-this' ), esc_html__( 'Info about WP root, plugins and theme directories.', 'debug-this' ), array(
			$this,
			'file_permissions'
		), 'Server' );

		add_debug_extension( 'files', esc_html__( 'Files', 'debug-this' ), esc_html__( 'All required and included files', 'debug-this' ), array(
			$this,
			'files'
		), 'PHP' );

		add_debug_extension( 'filters', esc_html__( 'Filters', 'debug-this' ), esc_html__( '$wp_filter contains all registered filters', 'debug-this' ), array(
			$this,
			'filters'
		), 'Filters And Actions' );

		add_debug_extension( 'filters-current', esc_html__( 'Current Log', 'debug-this' ), esc_html__( 'Current Filters and Actions', 'debug-this' ), array(
			$this,
			'filters_current'
		), 'Filters And Actions' );

		add_debug_extension( 'functions', esc_html__( 'Functions', 'debug-this' ), esc_html__( 'All defined user functions', 'debug-this' ), array(
			$this,
			'functions'
		), 'PHP' );

		add_debug_extension( 'images', esc_html__( 'Images', 'debug-this' ), esc_html__( 'Rendered images on the current page/post', 'debug-this' ), array(
			$this,
			'images'
		), 'Rendered HTML' );

		add_debug_extension( 'imagesizes', esc_html__( 'Image Sizes', 'debug-this' ), esc_html__( 'All registered image sizes. Uses get_intermediate_image_sizes() & global $_wp_additional_image_sizes', 'debug-this' ), array(
			$this,
			'imagesizes'
		), 'Media' );

		add_debug_extension( 'js', esc_html__( 'JavaScript', 'debug-this' ), esc_html__( 'Rendered JS', 'debug-this' ), array(
			$this,
			'js'
		), 'Rendered HTML' );

		add_debug_extension( 'load-time', esc_html__( 'Load Time', 'debug-this' ), esc_html__( 'True page load time (sans Debug This)', 'debug-this' ), array(
			$this,
			'load_time'
		), 'Rendered HTML' );

		add_debug_extension( 'menus', esc_html__( 'Registered Menus', 'debug-this' ), esc_html__( 'All registered menus', 'debug-this' ), array(
			$this,
			'menus'
		), 'Menus' );

		add_debug_extension( 'menus_dynamic', esc_html__( 'Dynamic Menus', 'debug-this' ), esc_html__( 'Dynamic Menus and Locations', 'debug-this' ), array(
			$this,
			'menus_dynamic'
		), 'Menus' );

		add_debug_extension( 'oembed', esc_html__( 'oEmbed', 'debug-this' ), esc_html__( 'Registered oEmbed providers', 'debug-this' ), array(
			$this,
			'oembed'
		), 'Media' );

		add_debug_extension( 'options', esc_html__( 'Options', 'debug-this' ), esc_html__( 'A list of all autoloaded options', 'debug-this' ), array(
			$this,
			'options'
		) );

		add_debug_extension( 'options_unserialized', esc_html__( 'Options (unserialized)', 'debug-this' ), esc_html__( 'A list of all autoloaded options (unserialized)', 'debug-this' ), array(
			$this,
			'options_unserialized'
		) );

		add_debug_extension( 'phpinfo', esc_html__( 'phpinfo()', 'debug-this' ), esc_html__( 'phpinfo()', 'debug-this' ), array(
			$this,
			'phpinfo'
		), 'PHP' );

		add_debug_extension( 'phpini', esc_html__( 'php.ini', 'debug-this' ), esc_html__( 'php.ini configuration', 'debug-this' ), array(
			$this,
			'phpini'
		), 'PHP' );

		/**
		 * Plugins
		 */

		add_debug_extension( 'plugins', esc_html__( 'Installed Plugins', 'debug-this' ), esc_html__( 'A list of installed plugins', 'debug-this' ), array(
			$this,
			'plugins'
		), 'Plugins' );

		add_debug_extension( 'active_plugins', esc_html__( 'Active Plugins', 'debug-this' ), esc_html__( 'A list of active plugins', 'debug-this' ), array(
			$this,
			'active_plugins'
		), 'Plugins' );

		add_debug_extension( 'mu_plugins', esc_html__( 'Must-Use Plugins', 'debug-this' ), esc_html__( 'A list of all must-use plugins', 'debug-this' ), array(
			$this,
			'mu_plugins'
		), 'Plugins' );

		add_debug_extension( 'dropins', esc_html__( 'Dropins', 'debug-this' ), esc_html__( 'List of all dropins that replace core WP functionality', 'debug-this' ), array(
			$this,
			'dropins'
		), 'Plugins' );

		add_debug_extension( 'post', esc_html__( 'Post', 'debug-this' ), esc_html__( 'Single post object', 'debug-this' ), array(
			$this,
			'post'
		), 'Queried Object' );

		add_debug_extension( 'post-meta', esc_html__( 'Post Meta', 'debug-this' ), esc_html__( 'Post meta for the queried object.', 'debug-this' ), array(
			$this,
			'post_meta'
		), 'Queried Object' );

		add_debug_extension( 'posts', esc_html__( 'Post Objects', 'debug-this' ), esc_html__( 'Archive post objects', 'debug-this' ), array(
			$this,
			'posts'
		), 'Query' );

		add_debug_extension( 'post-types', esc_html__( 'All Post Types', 'debug-this' ), esc_html__( 'Lists all registered post types in WordPress', 'debug-this' ), array(
			$this,
			'posttypes'
		), 'Post Types' );

		add_debug_extension( 'post-type-current', esc_html__( 'Current Post Type', 'debug-this' ), esc_html__( 'Post type for the queried object', 'debug-this' ), array(
			$this,
			'posttype_current'
		), 'Post Types' );

		add_debug_extension( 'queries', esc_html__( 'Saved Queries', 'debug-this' ), esc_html__( 'All queries run on the current page load (sans Debug This)', 'debug-this' ), array(
			$this,
			'queries'
		), 'Query' );

		add_debug_extension( 'request', esc_html__( 'Request', 'debug-this' ), esc_html__( 'Current request', 'debug-this' ), array(
			$this,
			'request'
		), 'Query' );

		add_debug_extension( 'rewrites', esc_html__( 'Rewrites', 'debug-this' ), esc_html__( 'A list of all cached rewrites. To refresh the cache, visit Settings->Permalinks', 'debug-this' ), array(
			$this,
			'rewrites'
		), 'Query' );

		add_debug_extension( 'scripts', esc_html__( 'Scripts', 'debug-this' ), esc_html__( 'List of registered scripts. Uses $wp_scripts', 'debug-this' ), array(
			$this,
			'scripts'
		), 'Enqueue' );

		add_debug_extension( 'server', esc_html__( '$_SERVER', 'debug-this' ), esc_html__( '$_SERVER information', 'debug-this' ), array(
			$this,
			'server'
		), 'Server' );

		add_debug_extension( 'shortcodes', esc_html__( 'Shortcodes', 'debug-this' ), esc_html__( 'List of all registered shortcodes', 'debug-this' ), array(
			$this,
			'shortcodes'
		), 'Shortcodes' );

		add_debug_extension( 'shortcodes-regex', esc_html__( 'Shortcodes Regex', 'debug-this' ), esc_html__( 'Dynamically generated shortcode regex - get_shortcode_regex()', 'debug-this' ), array(
			$this,
			'shortcodes_regex'
		), 'Shortcodes' );

		add_debug_extension( 'sidebars-current', esc_html__( 'Current Sidebars', 'debug-this' ), esc_html__( 'All instances of get_sidebar() and dynamic_sidebar() in the current template', 'debug-this' ), array(
			$this,
			'sidebars_rendered'
		), 'Sidebar' );

		add_debug_extension( 'sidebars', esc_html__( 'Registered Sidebars', 'debug-this' ), esc_html__( 'All registered sidebars. Uses $wp_registered_sidebars', 'debug-this' ), array(
			$this,
			'sidebars_registered'
		), 'Sidebar' );

		add_debug_extension( 'styles', esc_html__( 'Styles', 'debug-this' ), esc_html__( 'List of rendered and registered styles', 'debug-this' ), array(
			$this,
			'styles'
		), 'Enqueue' );

		add_debug_extension( 'taxonomies', esc_html__( 'Taxonomies', 'debug-this' ), esc_html__( 'Lists all registered taxonomies in WordPress', 'debug-this' ), array(
			$this,
			'taxonomies'
		), 'Taxonomy' );

		add_debug_extension( 'template', esc_html__( 'Current Template', 'debug-this' ), esc_html__( 'Current template file', 'debug-this' ), array(
			$this,
			'template'
		), 'Themes' );

		add_debug_extension( 'terms', esc_html__( 'Post Terms', 'debug-this' ), esc_html__( 'All terms for the current single post/page', 'debug-this' ), array(
			$this,
			'terms'
		), 'Taxonomy' );

		add_debug_extension( 'terms-all', esc_html__( 'All Terms', 'debug-this' ), esc_html__( 'A list of all terms', 'debug-this' ), array(
			$this,
			'terms_all'
		), 'Taxonomy' );

		if ( $version >= 3.4 ) {
			add_debug_extension( 'themes', esc_html__( 'Themes', 'debug-this' ), esc_html__( 'List of all WP_Theme objects', 'debug-this' ), array(
				$this,
				'themes'
			), 'Themes' );
		}

		add_debug_extension( 'users', esc_html__( 'All Users', 'debug-this' ), esc_html__( 'List of all users', 'debug-this' ), array(
			$this,
			'users'
		), 'Users' );

		add_debug_extension( 'variables', esc_html__( 'Variables', 'debug-this' ), esc_html__( 'List of all defined variables', 'debug-this' ), array(
			$this,
			'variables'
		), 'PHP' );

		add_debug_extension( 'widgets', esc_html__( 'Widgets' ), esc_html__( 'All registered widgets - uses $wp_widget_factor->widgets', 'debug-this' ), array(
			$this,
			'widgets'
		), 'Sidebar' );

		add_debug_extension( 'wp-debug', esc_html__( 'WP Debug Log' ), esc_html__( 'Displays a list of notices rendered by WP_DEBUG mode', 'debug-this' ), array(
			$this,
			'wp_debug'
		), 'PHP' );

		add_debug_extension( 'wp_query', esc_html__( 'WP_Query' ), esc_html__( 'Current WP_Query object - global $wp_query', 'debug-this' ), array(
			$this,
			'wp_query'
		), 'Query' );

		add_debug_extension( 'help', esc_html__( 'Debug This Menu', 'debug-this' ), esc_html__( 'Modes Navigation', 'debug-this' ), array(
			$this,
			'help'
		) );
	}

	/**
	 * Our array printer
	 *
	 * @param $array
	 * @param $htmlentities
	 * @param $force_plain
	 *
	 * @return string
	 */
	public function printer( $array, $htmlentities = false, $force_plain = false ) {
		$no_pre = Debug_This::get_no_pre();
		ob_start();
		if ( class_exists( 'Kint' ) && ! $force_plain ) {
			// Don't use d() because Kint Debugger plugin overrides it
			// to use an output buffer when Debug Bar is installed.
			echo Kint::dump( $array );
		}
		else {
			if ( ! $no_pre ) {
				echo '<pre>';
			}
			if ( $htmlentities ) {
				echo htmlentities( print_r( $array, true ) );
			} else {
				echo esc_attr(print_r( $array, true ));
			}
			if ( ! $no_pre ) {
				echo '</pre>';
			}
		}
		$return = ob_get_contents();
		ob_end_clean();

		return $return;
	}

	public function actions() {
		global $wp_actions;
		$wp_actions['shutdown'] = 1;
		$debug                  = $this->printer( $wp_actions, true );

		return $debug;
	}

	public function attachments() {
		global $post;
		$debug = '';
		$args  = array(
			'post_type'      => 'attachment',
			'post_parent'    => $post->ID,
			'posts_per_page' => - 1
		);
		$attachments = get_children( $args );
		if ( $attachments ) {
			foreach ( $attachments as $attachment ) {
				$title = $attachment->post_title ? $attachment->post_title : esc_html__( 'No Title', 'debug-this' );
				$debug .= "<h3 class='emphasize'>$title</h3>";
				$debug .= '<pre>';
				$debug .= '<ul>';
				$debug .= '<li>' . sprintf( esc_html__( 'ID: %s', 'debug-this' ), $attachment->ID ) . '</li>';
				$debug .= '<li>' . sprintf( esc_html__( 'Mime Type: %s', 'debug-this' ), $attachment->post_mime_type ) . '</li>';
				$url = wp_get_attachment_url( $attachment->ID );
				$debug .= '<li>' . esc_html__( 'URL: ', 'debug-this' ) . "<a href='$url'>$url</a></li>";
				if ( $attachment->post_content ) {
					$debug .= '<li>' . sprintf( esc_html__( 'Description: %s', 'debug-this' ), $attachment->post_content );
				}
				$debug .= '</ul>';
				$debug .= '</pre>';
			}
		} else {
			$debug = esc_html__( 'No attachments found.', 'debug-this' );
		}

		return $debug;
	}

	public function apache() {
		if ( ! preg_match( '/[Aa]pache/', $_SERVER["SERVER_SOFTWARE"] ) ) {
			return esc_html__( 'This extension only works on Apache.', 'debug-this' );
		}

		$debug = '<h3 class="emphasize">' . esc_html__( 'Version', 'debug-this' ) . '</h3>';
		$debug .= '<pre>' . apache_get_version() . '</pre>';
		$debug .= '<h3 class="emphasize">' . esc_html__( 'Modules', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( apache_get_modules(), true );
		if ( ! $debug ) {
			$debug = esc_html__( 'No modules were found. This could be a symptom of running PHP as CGI.', 'debug-this' );
		}

		return $debug;
	}

	public function author() {
		if ( ! is_singular() ) {
			return esc_html__( 'This mode can only be used on a single post/page.', 'debug-this' );
		}
		global $post, $authordata;
		setup_postdata( $post );
		$debug = $this->printer( $authordata, true );

		return $debug;
	}

	public function backtrace() {
		$version = get_bloginfo( 'version' );
		$debug = '';
		if ( $version >= 3.4 ) {
			$debug = '<h3>' . esc_html__( 'Backtrace Summary', 'debug-this' ) . '</h3>';
			$debug .= $this->printer( explode( ', ', wp_debug_backtrace_summary() ), true );
		}
		$debug .= '<h3>' . esc_html__( 'debug_backtrace()', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( debug_backtrace(), true );

		return $debug;
	}

	public function bloginfo() {
		$bloginfo = array(
			'name'                 => get_bloginfo( 'name' ),
			'description'          => get_bloginfo( 'description' ),
			'wpurl'                => get_bloginfo( 'wpurl' ),
			'url'                  => get_bloginfo( 'url' ),
			'admin_email'          => get_bloginfo( 'admin_email' ),
			'charset'              => get_bloginfo( 'charset' ),
			'version'              => get_bloginfo( 'version' ),
			'html_type'            => get_bloginfo( 'html_type' ),
			'language'             => get_bloginfo( 'language' ),
			'stylesheet_url'       => get_bloginfo( 'stylesheet_url' ),
			'stylesheet_directory' => get_bloginfo( 'stylesheet_directory' ),
			'template_url'         => get_bloginfo( 'template_url' ),
			'template_directory'   => get_bloginfo( 'template_directory' ),
			'pingback_url'         => get_bloginfo( 'pingback_url' ),
			'atom_url'             => get_bloginfo( 'atom_url' ),
			'rdf_url'              => get_bloginfo( 'rdf_url' ),
			'rss_url'              => get_bloginfo( 'rss_url' ),
			'rss2_url'             => get_bloginfo( 'rss2_url' ),
			'comments_atom_url'    => get_bloginfo( 'comments_atom_url' ),
			'comments_rss2_url'    => get_bloginfo( 'comments_rss2_url' ),
		);
		$debug = $this->printer( $bloginfo );

		return $debug;
	}

	public function cache() {
		# Appropriated from WP Debug Bar Plugin - class-debug-bar-object-cache.php
		global $wp_object_cache;
		ob_start();
		echo '<pre>';
		$wp_object_cache->stats();
		echo '</pre>';
		$debug = ob_get_contents();
		ob_end_clean();

		return $debug;
	}

	public function classes() {
		$debug = $this->printer( get_declared_classes() );

		return $debug;
	}

	public function constants() {
		$constants = get_defined_constants();
		foreach ( $constants as $constant => $value ) {
			if ( $value === false ) {
				$constants[ $constant ] = '<span class="error">' . esc_html__( 'false', 'debug-this' ) . '</span>';
			} elseif ( $value === '' ) {
				$constants[ $constant ] = '<span class="error">' . esc_html__( 'empty string', 'debug-this' ) . '</span>';
			}
		}
		$debug = $this->printer( $constants );

		return $debug;
	}

	public function constants_wordpress() {
		$wp_constants = array(
			'AUTOSAVE_INTERVAL',
			'CORE_UPGRADE_SKIP_NEW_BUNDLED',
			'DISABLE_WP_CRON',
			'EMPTY_TRASH_DAYS',
			'IMAGE_EDIT_OVERWRITE',
			'MEDIA_TRASH',
			'WPLANG',
			'WP_DEFAULT_THEME',
			'WP_CRON_LOCK_TIMEOUT',
			'WP_MAIL_INTERVAL',
			'WP_POST_REVISIONS',
			'WP_MAX_MEMORY_LIMIT',
			'WP_MEMORY_LIMIT',
			'APP_REQUEST',
			'COMMENTS_TEMPLATE',
			'DOING_AJAX',
			'DOING_AUTOSAVE',
			'DOING_CRON',
			'IFRAME_REQUEST',
			'IS_PROFILE_PAGE',
			'SHORTINIT',
			'WP_ADMIN',
			'WP_BLOG_ADMIN',
			'WP_IMPORTING',
			'WP_INSTALLING',
			'WP_LOAD_IMPORTERS',
			'WP_NETWORK_ADMIN',
			'WP_REPAIRING',
			'WP_SETUP_CONFIG',
			'WP_UNINSTALL_PLUGIN',
			'WP_USER_ADMIN',
			'XMLRPC_REQUEST',
			'ABSPATH',
			'WPINC',
			'WP_LANG_DIR',
			'WP_PLUGIN_DIR',
			'WP_PLUGIN_URL',
			'WP_CONTENT_DIR',
			'WP_CONTENT_URL',
			'WP_HOME',
			'WP_SITEURL',
			'WP_TEMP_DIR',
			'WPMU_PLUGIN_DIR',
			'WPMU_PLUGIN_URL',
			'DB_CHARSET',
			'DB_COLLATE',
			'DB_HOST',
			'DB_NAME',
			'DB_PASSWORD',
			'DB_USER',
			'WP_ALLOW_REPAIR',
			'CUSTOM_USER_TABLE',
			'CUSTOM_USER_META_TABLE',
			'ALLOW_SUBDIRECTORY_INSTALL',
			'BLOGUPLOADDIR',
			'BLOG_ID_CURRENT_SITE',
			'DOMAIN_CURRENT_SITE',
			'DIEONDBERROR',
			'ERRORLOGFILE',
			'MULTISITE',
			'NOBLOGREDIRECT',
			'PATH_CURRENT_SITE',
			'UPLOADBLOGSDIR',
			'SITE_ID_CURRENT_SITE',
			'SUBDOMAIN_INSTALL',
			'SUNRISE',
			'UPLOADS',
			'WPMU_ACCEL_REDIRECT',
			'WPMU_SENDFILE',
			'WP_ALLOW_MULTISITE',
			'WP_CACHE',
			'COMPRESS_CSS',
			'COMPRESS_SCRIPTS',
			'CONCATENATE_SCRIPTS',
			'ENFORCE_GZIP',
			'FS_CHMOD_DIR',
			'FS_CHMOD_FILE',
			'FS_CONNECT_TIMEOUT',
			'FS_METHOD',
			'FS_TIMEOUT',
			'FTP_BASE',
			'FTP_CONTENT_DIR',
			'FTP_HOST',
			'FTP_LANG_DIR',
			'FTP_PASS',
			'FTP_PLUGIN_DIR',
			'FTP_PRIKEY',
			'FTP_PUBKEY',
			'FTP_SSH',
			'FTP_SSL',
			'FTP_USER',
			'WP_PROXY_BYPASS_HOSTS',
			'WP_PROXY_HOST',
			'WP_PROXY_PASSWORD',
			'WP_PROXY_PORT',
			'WP_PROXY_USERNAME',
			'WP_HTTP_BLOCK_EXTERNAL',
			'WP_ACCESSIBLE_HOSTS',
			'BACKGROUND_IMAGE',
			'HEADER_IMAGE',
			'HEADER_IMAGE_HEIGHT',
			'HEADER_IMAGE_WIDTH',
			'HEADER_TEXTCOLOR',
			'NO_HEADER_TEXT',
			'STYLESHEETPATH',
			'TEMPLATEPATH',
			'WP_USE_THEMES',
			'SAVEQUERIES',
			'SCRIPT_DEBUG',
			'WP_DEBUG',
			'WP_DEBUG_DISPLAY',
			'WP_DEBUG_LOG',
			'ADMIN_COOKIE_PATH',
			'ALLOW_UNFILTERED_UPLOADS',
			'AUTH_COOKIE',
			'AUTH_KEY',
			'AUTH_SALT',
			'COOKIEHASH',
			'COOKIEPATH',
			'COOKIE_DOMAIN',
			'CUSTOM_TAGS',
			'DISALLOW_FILE_EDIT',
			'DISALLOW_FILE_MODS',
			'DISALLOW_UNFILTERED_HTML',
			'FORCE_SSL_ADMIN',
			'FORCE_SSL_LOGIN',
			'LOGGED_IN_COOKIE',
			'LOGGED_IN_KEY',
			'LOGGED_IN_SALT',
			'NONCE_KEY',
			'NONCE_SALT',
			'PASS_COOKIE',
			'PLUGINS_COOKIE_PATH',
			'SECURE_AUTH_COOKIE',
			'SECURE_AUTH_KEY',
			'SECURE_AUTH_SALT',
			'SITECOOKIEPATH',
			'TEST_COOKIE',
			'USER_COOKIE'
		);
		ksort( $wp_constants );
		$defined_constants   = array();
		$undefined_constants = array();
		foreach ( $wp_constants as $constant ) {
			if ( ! defined( $constant ) ) {
				unset( $wp_constants[ $constant ] );
				$undefined_constants[] = $constant;
			} else {
				$value = constant( $constant );
				if ( $value === false ) {
					$defined_constants[ $constant ] = '<span class="error">' . esc_html__( 'false', 'debug-this' ) . '</span>';
				} elseif ( $value === '' ) {
					$defined_constants[ $constant ] = '<span class="error">' . esc_html__( 'empty string', 'debug-this' ) . '</span>';
				} else {
					$defined_constants[ $constant ] = $value;
				}
			}
		}
		ksort( $defined_constants );
		sort( $undefined_constants );
		$debug = '<h3 class="emphasize">' . esc_html__( 'Defined Constants', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( $defined_constants );
		$debug .= '<h3 class="emphasize">' . esc_html__( 'Undefined Constants', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( $undefined_constants );

		return $debug;
	}

	public function content_width() {
		global $content_width;
		$debug = "<pre>$content_width</pre>";

		return $debug;
	}

	public function cron_schedules() {
		$schedules = wp_get_schedules();
		$debug     = $this->printer( $schedules );

		return $debug;
	}

	public function cron_jobs() {
		$jobs = _get_cron_array();
		if ( $jobs ) {
			$debug = $this->printer( $jobs );
		} else {
			$debug = esc_html__( 'No cron jobs found.', 'debug-this' );
		}

		return $debug;
	}

	public function context() {
		global $wp_query;

		$conditionals = array(
			'is_single',
			'is_preview',
			'is_page',
			'is_archive',
			'is_date',
			'is_year',
			'is_month',
			'is_day',
			'is_time',
			'is_author',
			'is_category',
			'is_tag',
			'is_tax',
			'is_search',
			'is_feed',
			'is_comment_feed',
			'is_trackback',
			'is_home',
			'is_404',
			'is_embed',
			'is_paged',
			'is_admin',
			'is_attachment',
			'is_singular',
			'is_robots',
			'is_posts_page',
			'is_post_type_archive'
		);
		$debug  = '<pre><ul>';
		foreach ( $conditionals as $conditional ) {
			if ( $wp_query->$conditional ) {
				$debug .= "<li>$conditional</li>";
			}
		}
		$debug .= '</ul></pre>';
		$debug = apply_filters( 'debug_context', $debug );

		return $debug;
	}

	public function css( $buffer, $template ) {
		//Make backwards compatible for no pretty permalinks
		global $wp;
		$debug = '<pre>';
		$debug .= sprintf( esc_html__( 'Template: %s', 'debug-this' ), $template ) . "\n";
		$debug .= sprintf( esc_html__( 'URL: %s', 'debug-this' ), get_bloginfo( 'url' ) . '/' . $wp->request );
		$debug .= '</pre>';
		$debug .= '<h3 class="emphasize">' . esc_html__( 'Stylesheets', 'debug-this' ) . '</h3>';
		preg_match_all( '/(http.+\.css)/', $buffer, $matches );
		$debug .= $this->printer( $matches[0] );

		return $debug;
	}

	public function dropins() {
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
		$dropins = get_dropins();
		if ( $dropins ) {
			$debug = $this->printer( $dropins );
		} else {
			$url = 'http://hakre.wordpress.com/2010/05/01/must-use-and-drop-ins-plugins/';
			$link = sprintf( wp_kses( __( 'No dropins found. <a href="%s">Click here to learn more</a>.', 'debug-this' ), array( 'a' => array( 'href' => array(), 'target' => array(), 'class' => array() ) ) ), esc_url( $url ) );
			$debug = '<pre>' . $link . '</pre>';
		}

		return $debug;
	}

	public function extensions() {
		$debug = $this->printer( get_loaded_extensions() );

		return $debug;
	}

	public function file_permissions() {

		if ( ! preg_match( '/[Aa]pache/', $_SERVER["SERVER_SOFTWARE"] ) ) {
			return esc_html__( 'This extension has only been tested on Apache.', 'debug-this' );
		}

		function debug_this_file_info( $file, $recommended_perms, $current ) {
			$output = "<h3 class='emphasize'>$file</h3>";
			$perms  = debug_this_get_file_perms( $file );
			if ( $perms ) {
				$perms_output = '';
				$rwx          = debug_this_convert_perms_to_rwx( $perms, $file );
				if ( $perms !== $recommended_perms ) {
					$perms_output = '<span class="error">' . sprintf( esc_html__( '%s %s Recommended: %s - To change, run: chmod %s %s', 'debug-this' ), $perms, $rwx, $recommended_perms, $recommended_perms, $file ) . "</span>";
				}
				$perms .= " $rwx";
				$output .= sprintf( esc_html__( 'Permissions: %s', 'debug-this' ), $perms_output ? $perms_output : $perms ) . "\n";
			}

			$own = debug_this_get_file_ownership( $file );
			if ( $own ) {
				$user_perm  = $perms[1];
				$group_perm = $perms[2];
				if ( $current['user']['name'] === $own['user']['name'] && (int) $user_perm < 4 ) {
					$user = "<span class='error'>{$own['user']['name']}</span>";
				} else {
					$user = "<span class='okay'>{$own['user']['name']}</span>";
				}

				if ( $current['group']['name'] === $own['group']['name'] && (int) $group_perm < 4 ) {
					$group = "<span class='error'>{$own['group']['name']}</span>";
				} else {
					$group = "<span class='okay'>{$own['group']['name']}</span>";
				}

				if ( $current['group']['name'] !== $own['group']['name'] && $current['user']['name'] !== $own['user']['name'] ) {
					$output .= '<span class="error">' . esc_html__( 'The current WordPress user might not have access to this file/folder.', 'debug-this' ) . "</span>\n";
				}

				$output .= sprintf( esc_html__( 'Owner/Group: %s:%s', 'debug-this' ), $user, $group ) . "\n";
			}

			return $output;
		}

		$legend = '<span class="okay">' . esc_html__( 'access', 'debug-this' ) . '</span> - <span class="error">' . esc_html__( 'no access', 'debug-this' ) . "</span>";
		$debug  = sprintf( esc_html__( 'Rubric: %s', 'debug-this' ), $legend );

		if ( ! function_exists( 'posix_getpwuid' ) || ! function_exists( 'posix_getgrgid' ) ) {
			return '<span class="error">POSIX missing</span>';
		}

		$user         = posix_getpwuid( getmyuid() );
		$group        = posix_getgrgid( getmygid() );
		$current_user = compact( 'user', 'group' );

		$debug .= '<h3 class="emphasize">' . esc_html__( 'WordPress User', 'debug-this' ) . '</h3>';
		$debug .= sprintf( esc_html__( 'User: %s', 'debug-this' ), $user['name'] ) . "\n";
		$debug .= sprintf( esc_html__( 'Group: %s', 'debug-this' ), $group['name'] );

		$debug .= debug_this_file_info( ABSPATH, '0755', $current_user );
		if ( file_exists( ABSPATH . '.htaccess' ) ) {
			$debug .= debug_this_file_info( ABSPATH . '.htaccess', '0604', $current_user );
		}

		if ( file_exists( ABSPATH . 'php.ini' ) ) {
			$debug .= debug_this_file_info( ABSPATH . 'php.ini', '0600', $current_user );
		}

		if ( file_exists( ABSPATH . 'wp-config.php' ) ) {
			$debug .= debug_this_file_info( ABSPATH . 'wp-config.php', '0600', $current_user );
		} else {
			$parts = explode( '/', trim( ABSPATH, '/' ) );
			array_pop( $parts );
			$one_below = '/' . implode( '/', $parts ) . '/wp-config.php';
			if ( file_exists( $one_below ) ) {
				$debug .= debug_this_file_info( $one_below, '0600', $current_user );
			} else {
				$debug .= "<h3 class='emphasize error'>wp-config.php</h3>";
				$debug .= '<span class="error">' . esc_html__( "Couldn't find wp-config.php!", 'debug-this' ) . '</span>';
			}
		}

		$debug .= debug_this_file_info( WP_CONTENT_DIR, '0755', $current_user );
		$debug .= debug_this_file_info( WP_PLUGIN_DIR, '0755', $current_user );
		$debug .= debug_this_file_info( get_theme_root(), '0755', $current_user );
		$uploads = wp_upload_dir();
		$debug .= debug_this_file_info( $uploads['basedir'], '0755', $current_user );

		return $debug;
	}

	public function files() {
		$debug = '<h3 class="emphasize">' . esc_html__( 'Required Files', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( get_required_files() );
		$debug .= '<h3 class="emphasize">' . esc_html__( 'Included Files', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( get_included_files() );

		return $debug;
	}

	public function filters() {
		global $wp_filter;

		$filters_array = array();
		foreach ( $wp_filter as $id => $groups ) {
			if ( 'debug_this' == $id ) {
				continue;
			}
			foreach ( $groups as $priority => $filters ) {
				if ( 90210 == $priority ) {
					continue;
				}
				foreach ( $filters as $filter => $values ) {
					if ( is_string( $values['function'] ) ) {
						// A function in the global namespace
						$callback = $values['function'];
					} elseif ( $values['function'] instanceof Closure ) {
						// An anonymous function
						$callback = 'anonymous function';
					} elseif ( is_object( $values['function'][0]) ) {
						// An instantiated class
						$callback = get_class( $values['function'][0] ) . '->' . $values['function'][1];
					} elseif ( is_array( $values['function'] ) ) {
						// A static method
						$callback = $values['function'][0] . '->' . $values['function'][1];
					} else {
						$callback = '';
					}

					if ( $callback ) {
						$filters_array[ $id ][ $priority ][ $filter ] = $callback;
					}
				}
			}
		}
		$debug = $this->printer( $filters_array );

		return $debug;
	}

	public function filters_current() {
		global $debug_this_current_filter;
		$debug = $this->printer( $debug_this_current_filter, false, true );

		return $debug;
	}

	public function functions() {
		$functions = get_defined_functions();
		$debug     = $this->printer( $functions['user'] );

		return $debug;
	}

	public function images( $buffer ) {
		;
		preg_match_all( '/src=[\'"](http.+\.(jpg|jpeg|png|svg))\'?"?/', $buffer, $matches );
		$debug = $this->printer( $matches[1] );

		return $debug;
	}

	public function imagesizes() {
		global $_wp_additional_image_sizes;
		$sizes = get_intermediate_image_sizes();
		$debug = '<h3>' . esc_html__( 'Registered Size Names', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( $sizes );
		$debug .= '<h3>' . esc_html__( 'Registered Size Definitions', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( $_wp_additional_image_sizes );

		return $debug;
	}

	public function js( $buffer, $template ) {
		//make backwards compatible for no permalinks
		global $wp;
		$debug = '<pre>';
		$debug .= sprintf( esc_html__( 'Template: %s', 'debug-this' ), $template ) . "\n";
		$debug .= sprintf( esc_html__( 'URL: %s', 'debug-this' ), get_bloginfo( 'url' ) . '/' . $wp->request );
		$debug .= '</pre>';
		$debug .= '<h3 class="emphasize">' . esc_html__( 'JavaScript Files', 'debug-this' ) . '</h3>';
		preg_match_all( '/(http.+\.js)/', $buffer, $matches );
		$debug .= $this->printer( $matches[0] );

		return $debug;
	}

	public function load_time( $buffer, $template ) {
		//make backwards compatible for no permalinks
		global $wp;
		$debug = '<pre>';
		$debug .= sprintf( esc_html__( 'Template: %s', 'debug-this' ), $template ) . "\n";
		$debug .= sprintf( esc_html__( 'URL: %s', 'debug-this' ), get_bloginfo( 'url' ) . '/' . $wp->request ) . "\n";
		$debug .= sprintf( esc_html__( 'Execution Time: %s', 'debug-this' ), Debug_This::$execution_time . ' ' . __( 'seconds', 'debug-this' ) );
		$debug .= '</pre>';

		return $debug;
	}

	public function menus() {
		$debug = $this->printer( get_registered_nav_menus() );

		return $debug;
	}

	public function menus_dynamic() {
		$debug = '<h3>' . esc_html__( 'Dynamic Menu Locations', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( get_nav_menu_locations() );
		$debug .= '<h3>' . esc_html__( 'Dynamic Menus', 'debug-this' ) . '</h3>';
		$menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );
		foreach ( $menus as $id => $menu ) {
			$menus[ $id ]->items = wp_get_nav_menu_items( $menu->term_id );
		}
		$debug .= $this->printer( $menus );

		return $debug;
	}

	public function oembed() {
		include_once ABSPATH . '/wp-includes/class-oembed.php';
		$debug = $this->printer( _wp_oembed_get_object() );

		return $debug;
	}

	public function options() {
		$debug = $this->printer( wp_load_alloptions(), true );

		return $debug;
	}

	public function options_unserialized() {
		$options = wp_load_alloptions();
		$options_array = array();
		foreach ( $options as $key => $value ) {
			$options_array[ $key ] = maybe_unserialize( $value );
		}
		$debug = $this->printer( $options_array, true );

		return $debug;
	}

	public function phpinfo() {
		ob_start();
		phpinfo();
		$debug = ob_get_contents();
		ob_end_clean();
		Debug_This::$no_pre = true;

		return $debug;
	}

	public function phpini() {
		$debug = $this->printer( ini_get_all() );

		return $debug;
	}

	public function plugins() {
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
		$debug = $this->printer( get_plugins(), true );

		return $debug;
	}

	public function active_plugins() {
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
		$plugins = get_plugins();
		$active_plugins = array();
		foreach ( $plugins as $plugin => $info ) {
			if ( is_plugin_active( $plugin ) ) {
				$active_plugins[ $plugin ] = $info;
			}
		}
		$debug = $this->printer( $active_plugins, true );

		return $debug;
	}

	public function mu_plugins() {
		include_once ABSPATH . '/wp-admin/includes/plugin.php';
		$debug = $this->printer( get_mu_plugins(), true );

		return $debug;
	}

	public function post() {
		if ( is_singular() ) {
			global $post;
			$debug = $this->printer( $post, true );
		} else {
			$debug = esc_html__( 'This mode only works for single posts/pages', 'debug-this' );
		}

		return $debug;
	}

	public function posts() {
		if ( is_singular() ) {
			return esc_html__( 'This mode only works for archive/home pages', 'debug-this' );
		}

		global $wp_query;
		$posts_count = count( $wp_query->posts );
		$debug = '<h3>' . sprintf( esc_html__( 'Number of Posts: %d' ), $posts_count ) . '</h3>';
		$debug .= $this->printer( $wp_query->posts, true );

		return $debug;
	}

	public function post_meta() {
		if ( ! is_singular() ) {
			return esc_html__( 'This mode only works for single posts/pages', 'debug-this' );
		}

		global $post;
		$debug = $this->printer( get_post_custom( $post->ID ) );

		return $debug;
	}

	public function posttypes() {
		$post_types = get_post_types( '', 'objects' );
		$debug      = $this->printer( $post_types );

		return $debug;
	}

	public function posttype_current() {
		global $wp_query;
		if ( $wp_query->queried_object ) {
			$post = $wp_query->queried_object;
		}
		$post_types = get_post_types( '', 'objects' );
		$debug      = $this->printer( array( $post->post_type => $post_types[ $post->post_type ] ) ) . "\n\n";

		return $debug;
	}

	public function queries() {
		if ( Debug_This::$queries ) {
			$debug = $this->printer( Debug_This::$queries );
		} elseif ( ! defined( 'SAVEQUERIES' ) ) {
			$debug = '<span class="error">' . esc_html__( 'Please set define("SAVEQUERIES", true); in wp-config.php to see saved queries. Please disable when completed as this can be a large performance hit.', 'debug-this' ) . '</span>';
		} else {
			$debug = esc_html__( 'No queries found.', 'debug-this' );
		}

		return $debug;
	}

	public function request() {
		global $wp;
		$wp->matched_rule = "<a href='?debug=rewrites'>$wp->matched_rule</a>";
		$debug            = $this->printer( $wp );

		return $debug;
	}

	public function rewrites() {
		global $wp_rewrite, $wp;
		$permalink_structure = get_option( 'permalink_structure' );

		if ( ! $permalink_structure ) {
			return esc_html__( 'Pretty permalinks must be enabled to use this mode. To set a permalink structure, go to Settings->Permalinks in wp-admin.', 'debug-this' );
		}

		$debug = '<h3>' . esc_html__( 'Current Rewrite', 'debug-this' ) . '</h3>';
		$debug .= esc_html__( 'Matched Rule', 'debug-this' ) . ": <span class='current'>$wp->matched_rule</span>\n";
		$debug .= esc_html__( 'Matched Query', 'debug-this' ) . ": $wp->matched_query\n";
		$debug .= esc_html__( 'Query String', 'debug-this' ) . ": $wp->query_string\n\n";
		$debug .= '<h3>' . esc_html__( 'Rewrite Rules', 'debug-this' ) . '</h3>';

		if ( ! empty( $wp_rewrite->rules ) ) {
			$debug .= '<table><thead><tr>';
			$debug .= '<td><strong>' . esc_html__( 'Rule', 'debug-this' ) . '</strong></td><td><strong>' . esc_html__( 'Rewrite', 'debug-this' ) . '</strong></td>';
			$debug .= '</tr></thead><tbody>';
			foreach ( $wp_rewrite->rules as $rule => $rewrite ) {
				$class = $wp->matched_rule === $rule ? 'class="current"' : '';
				$debug .= '<tr><td ' . $class . '>' . $rule . '</td><td ' . $class . '>' . $rewrite . '</td></tr>';
			}
			$debug .= '</tbody></table>';
		} else {
			echo esc_html__( 'No rules defined.', 'debug-this' );
		}

		return $debug;
	}

	public function scripts() {
		global $wp_scripts;
		$debug = $this->printer( $wp_scripts->registered );

		return $debug;
	}

	public function server() {
		$debug = $this->printer( $_SERVER );

		return $debug;
	}

	public function shortcodes() {
		global $shortcode_tags;
		$debug = $this->printer( $shortcode_tags, true );

		return $debug;
	}

	public function shortcodes_regex() {
		$regex = get_shortcode_regex();
		//$debug = $this->printer( $regex, true );
		$debug = htmlentities( $regex );

		return $debug;
	}

	public function sidebars_rendered( $buffer, $template ) {
		global $wp_registered_sidebars;
		$template_contents = file_get_contents( $template );
		preg_match_all( '/(get_sidebar|dynamic_sidebar).+\)/', $template_contents, $matches );
		$sidebars = array();
		foreach ( $matches[0] as $sidebar ) {
			if ( $sidebar === 'get_sidebar()' ) {
				$sidebars[] = 'get_sidebar() ' . locate_template( 'sidebar.php' );
			} else {
				preg_match_all( '/\(.+\)/', $sidebar, $parts );
				foreach ( $parts[0] as $part ) {
					$sidebar_name = trim( $part, ' )(\'"' );
					if ( preg_match( '/dynamic/', $sidebar ) ) {
						$sidebars[] = sprintf( esc_html__( 'Dynamic Sidebar: %s' ), $sidebar_name );
					} else {
						$path       = locate_template( "$sidebar_name.php" );
						$path       = $path ? $path : sprintf( esc_html__( 'Missing sidebar template for %s.php', 'debug-this' ), $sidebar_name );
						$sidebars[] = "get_sidebar('$sidebar_name') $path";
					}
				}
			}
		}
		$debug = '<pre>' . sprintf( esc_html__( 'Current Template: %s', 'debug-this' ), wp_normalize_path( $template ) ) . '</pre>';
		if ( $sidebars ) {
			$debug .= $this->printer( $sidebars, true ) . "\n";
		} else {
			$debug .= '<p>' . esc_html__( 'No sidebars were found in this template.', 'debug-this' ) . '</p>' ;
		}

		return $debug;
	}

	public function sidebars_registered() {
		global $wp_registered_sidebars;
		$debug = '<h3>' . esc_html__( 'Registered Sidebars', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( $wp_registered_sidebars, true );

		return $debug;
	}

	public function styles() {
		global $wp_styles;
		$debug = $this->printer( $wp_styles->registered );

		return $debug;
	}

	public function taxonomies() {
		$debug = $this->printer( get_taxonomies( '', 'objects' ) );

		return $debug;
	}

	public function template() {
		$debug = '<pre>';
		$debug .= wp_normalize_path( Debug_This::$template_included ) . "\n\n";
		$url = 'https://wordpress.org/plugins/what-the-file/';
		$debug .= sprintf( wp_kses( __( 'For more information, consider this plugin: <a href="%s">What The File</a>', 'debug-this' ), array( 'a' => array( 'href' => array(), 'target' => array(), 'class' => array() ) ) ), esc_url( $url ) );
		$debug .= '</pre>';

		return $debug;
	}

	public function terms_all() {
		$taxonomies = get_taxonomies( '', 'names' );
		$debug      = $this->printer( get_terms( $taxonomies ) );

		return $debug;
	}

	public function terms() {
		global $post;
		if ( is_singular() ) {
			$debug      = '';
			$taxonomies = get_taxonomies( '', 'names' );
			foreach ( $taxonomies as $taxonomy ) {
				$terms = wp_get_post_terms( $post->ID, $taxonomy );
				if ( $terms ) {
					$debug .= "<h3 class='emphasize'>$taxonomy</h3>";
					$debug .= '<pre>';
					$debug .= '<ul>';
					foreach ( $terms as $term ) {
						$debug .= '<li>' . sprintf( esc_html__( 'Term ID #%s - %s - %s', 'debug-this' ), $term->term_id, $term->slug, $term->name ) . '</li>';
					}
					$debug .= '</ul>';
					$debug .= '</pre>';
				}
			}

		} else {
			$debug = '<span class="error">' . esc_html__( 'This mode only works on single pages/posts.', 'debug-this' ) . '</span>';
		}

		return $debug;
	}

	public function themes() {
		$debug = '<h3 class="emphasize">' . esc_html__( 'Current Theme', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( wp_get_theme() ) . "\n\n";
		$debug .= '<h3 class="emphasize">' . esc_html__( 'Themes', 'debug-this' ) . '</h3>';
		$debug .= $this->printer( wp_get_themes() );

		return $debug;
	}

	public function users() {
		$users = get_users();
		$debug = '';
		foreach ( $users as $user ) {
			$login = property_exists( $user, 'data' ) ? $user->data->user_login : $user->user_login;
			$debug .= "<h3 class='emphasize'>{$login}</h3>";
			$debug .= $this->printer( $user );
		}

		return $debug;
	}

	public function variables() {
		$debug = '';
		$anchors = array();

		foreach ( $GLOBALS as $id => $values ) {
			if ( $id === 'GLOBALS' || $id === 'html' ) {
				continue;
			}

			// Remove Debug_This buffer
			if ( 'wp_filter' == $id ) {
				if ( isset( $values['template_redirect']['90210'] ) ) {
					unset( $values['template_redirect']['90210'] );
				}
			}

			$anchors[] = '<a href="#' . $id . '" class="scroll">' . $id . '</a>';

			$debug .= '<a name="' . $id . '"></a>';
			$debug .= '<h3>' . $id . '</h3>';
			if ( is_array( $values ) || is_object( $values ) ) {
				$debug .= $this->printer( $values, true );
			} elseif ( is_string( $values ) ) {
				$debug .= '<pre><code>(' . gettype($values) . ') ' . htmlentities( "$values" ) . '</code></pre>';
			} elseif ( is_numeric( $values ) ) {
				$debug .= '<pre><code>(' . gettype($values) . ') ' . $values . '</code></pre>';
			} elseif ( is_bool( $values ) ) {
				$debug .= '<pre><code>(' . gettype($values) . ') ' . ( $values ? 'true' : 'false' ) . '</code></pre>';
			} else {
				$debug .= '<pre><code>(' . gettype($values) . ') ' . print_r( $values, true ) . '</code></pre>';
			}
		}

		$anchor_list = '<p>' . join( ' | ', $anchors ) . '</p>';
		$debug = $anchor_list . $debug;

		return $debug;
	}

	public function widgets() {
		global $wp_widget_factory;
		$debug = $this->printer( $wp_widget_factory->widgets );

		return $debug;
	}

	public function wp_debug() {
		if ( defined( 'WP_DEBUG' ) && WP_DEBUG === true && defined( 'WP_DEBUG_LOG' ) && WP_DEBUG_LOG === true ) {

			$path = ini_get('error_log');
			$debug = '';
			if ( file_exists( $path ) && is_writeable( $path ) ) {
				add_debug_header_link( Debug_This::get_current_debug_url() . '&clear-debug-log=true', esc_html__( 'Reset log file', 'debug-this' ) );
				if ( isset( $_GET['clear-debug-log'] ) ) {
					if ( file_put_contents( $path, '' ) === 0 ) {
						$debug .= esc_html__( 'Debug log was successfully cleared.', 'debug-this' );
					} else {
						$debug .= esc_html__( 'Debug log could not be reset. Please try again', 'debug-this' );
					}
				}
				$debug .= $this->printer( file_get_contents( $path ), true, true );
				if ( ! $debug ) {
					$debug .= esc_html__( 'Looking good! No notices were logged.', 'debug-this' );
				}
			} elseif ( touch( $path ) ) {
				$debug = esc_html__( 'Looking good! No notices were logged.', 'debug-this' );
			}
			else {
				$debug = esc_html__( 'Could not open debug.log. Please make sure your wp-content folder is writeable by the web server user.', 'debug-this' );
			}

		} else {

			$debug = esc_html__( "Please add the following to wp-config.php to use this mode.\ndefine('WP_DEBUG', true);\ndefine('WP_DEBUG_LOG', true);\ndefine('WP_DEBUG_DISPLAY', false);", 'debug-this' );

		}
			return $debug;
	}

	public function wp_query() {
		global $wp_query;
		$debug = $this->printer( $wp_query, true );

		return $debug;
	}

}

new Debug_This_Extensions;
