<?php get_header(); ?>
  <div id="header">
    <img src="<?php bloginfo('template_directory'); ?>/img/logo.gif" alt="Jay Skript and the Domsters" />
  </div>

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


  <div id="content">
    <h1>Welcome</h1>
    <p id="intro">Welcome to the official website of Jay Skript and the Domsters. Here, you can <a href="about.html">learn more about the band</a>, view <a href="photos.html">photos of the band</a>, find out about <a href="live.html">tour dates</a> and <a href="contact.html">get in touch with the band</a>.</p>

  </div>

<?php get_footer(); ?>
