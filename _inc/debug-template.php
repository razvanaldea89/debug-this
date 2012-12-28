<?php
defined('ABSPATH') || die();
ob_start();?>
<!doctype html>
<head>
	<meta charset="utf-8">
	<title><?php _e('Debug This', 'debug-this');?></title>
	<?php wp_head();?>
</head>
<body>
<div class='debug-this'>
	<a href="/<?php global $wp; echo $wp->request;?>" class="escape">x</a>
	<div class='debug'>
		%DEBUG%
	</div>
	<?php wp_footer();?>
</div>
</body>
</html>
<?php
$html = ob_get_contents();
ob_get_clean();

#Render the entire page to buffer to process to log all actions and filters
ob_start();
do_action('debug_this', Debug_This::$mode);
$debug = ob_get_contents();
ob_get_clean();
$html = str_replace('%DEBUG%', $debug, $html);
echo $html;