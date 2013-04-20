<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>
<!-- 以下script都要加入 -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="//malsup.github.io/jquery.blockUI.js"></script>
<script type="text/javascript" src="wp-content/themes/finalproject_wp_themes/javascript.js"></script>
<!-- 以上script都要加入 -->
</head>
<body  style="display:none; " onload="comment_event();">
<!--<span style="color:#F00;"><label>this is not true label </label></span> <br/>
 測試用 <div id="detect"></div>-->
<div id ="show_header" style="display:none">
<h1>This is for showing effect.</h1>
</div>


<div id ="header">
<h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name')?></a></h1>
</div>

