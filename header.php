<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>

  <div class="body-container">

  <header class="" id="header">
    <img src="<?php bloginfo('template_directory'); ?>/img/logo.gif" class="img-fluid" alt="Jay Skript and the Domsters" />
      <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">menu</button >
  </header>

        <?php
               wp_nav_menu( array(
                   'menu'              => 'primary',
                   'theme_location'    => 'primary',
                   'depth'             => 2,
                   'container'         => 'div',
                   'container_class'   => 'collapse navbar-toggleable-md',
                   'container_id'      => 'exCollapsingNavbar',
                   'menu_class'        => 'nav navbar-nav',
                   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                   'walker'            => new wp_bootstrap_navwalker())
               );
           ?>
