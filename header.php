<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtm11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?> >
<head>
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<link rel="stylesheet" href="/wp-content/themes/zzj/style.css" type="text/css" media="screen" />
<!--
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - ËùÓÐÎÄÕÂ" href="<?php echo get_bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0 - ËùÓÐÆÀÂÛ" href="<?php bloginfo('comments_rss2_url'); ?>" />

<?php wp_head(); ?>

<?php flush(); ?>
-->
</head>
<body>


<div id="wrapper">

<div id="header">
    <h1>
        <!--<a href="<?php echo get_option('home');?>"><img src="/blog/wp-content/themes/dron/face.jpg" width="90" height="90" id="logo" />--></a>
        <a href="<?php echo get_option('home');?>" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a>
    </h1>
    <p class="description"><?php bloginfo('description'); ?></p>
</div>

<form id="search" role="search" method="get" id="searchform" action="/index.php" >
    <input type="text" name="s" class="text" size="20" />
    <input type="submit" class="submit" value="搜索" />
</form>

<div id="nav" style="background-color: #CCE8CC;">
<?php wp_list_categories('depth=1&title_li=<a>&orderby=id&show_count=0&hide_empty=1&child_of=0&style=0'); ?>
<a href="<?php bloginfo('rss2_url'); ?>" target="_blank">订阅</a>
</div>