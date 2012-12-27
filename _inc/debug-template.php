<?php defined('ABSPATH') || die();?>
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
		<?php do_action('debug_this', Debug_This::$mode);?>
	</div>
	<?php wp_footer();?>
</div>
</body>
</html>