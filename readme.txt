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

= Debug This Functions =

New debug modes can be created easily:
`add_debug_extension($mode, $menu_label, $description, $callback, $group = 'General');`

**Example**

`
add_debug_extension(
	'actions', //Mode
	__('Actions', 'debug-this'), //Menu Label
	__('$wp_actions contains all active registered actions', 'debug-this'), //Description
	'foo_callback', //Callback (accepts object methods)
	'Filters And Actions' //Admin Bar Menu Group - default == 'General'
);
function foo_callback($buffer, $template){
	global $wp_actions;
	$debug = print_r($wp_actions, true);
	return $debug;
}
`
Extensions can be removed as well.
`remove_debug_extension($mode);`

**No PRE Tags**

If you don't want your debug output to be enclosed in PRE tags, simply set the following in your extension:

`Debug_This::$no_pre = true;`

= WP Actions =

* debug_this - receives the $mode arg - outputs the debug code sent from the extension modes. The default action is set to priority 5. This allows you to prepend or append any output without conflict using less or greater priorities.

= WP Filters =

Tbere are a few filters you can use to customize Debug This to your needs:

* debug_this_template - receives $template arg - Use your own template
* debug_this_default_mode  - receives $mode arg - Alters the mode for the parent DT admin bar button link.
* debug_this_output - receives $output, $mode args - Filter debug content before it's rendered


= JavaScript =

To access the built-in Debug This JS functionality, enqueue your custom script with the dependency set to `debug-this`. Your script will inherit a jQuery dependency.

**Object:**

* debugThis.mode - current mode
* debugThis.defaultMode
* template - current included template
* queryVar - the defined query string variable

**Functions:**

* `isDebug()`
* `getDebugMode()` - uses `isDebug()`

**Events:**

A jQuery `debug-this` event is fired from the footer. You can hook into this event with the following;
`
jQuery(document).bind('debug-this', function(event, debugThis){
	console.log(debugThis);
});
`

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