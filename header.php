<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="apple-touch-icon" href="apple-touch-icon.png"> -->
  <!-- Place favicon.ico in the root directory -->
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
  <header id="header">
    <img src="<?php bloginfo('template_directory'); ?>/img/logo.gif" alt="Jay Skript and the Domsters" />
  </header>

    <?php
           wp_nav_menu( array(
               'menu'              => 'primary',
               'theme_location'    => 'primary',
               'depth'             => 2,
               'container'         => 'div',
               'container_class'   => '',
               'container_id'      => 'navigation',
               'menu_class'        => '',
               'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
               'walker'            => new wp_bootstrap_navwalker())
           );
       ?>
