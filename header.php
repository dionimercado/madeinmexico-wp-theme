<!DOCTYPE html>
<html <?php language_attributes() ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,100italic,100,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <?php wp_head() ?>

  </head>
  <body id="home" <?php body_class() ?>>
    <header id="header" class="bg-light fixed-top position-sticky">
      <!-- Static navbar -->
      <nav class="navbar navbar-mim navbar-expand-lg">
        <a href="#rsvp" class="page-scroll d-block d-lg-none text-red" style="font-size: 28px;"><i class="fas fa-calendar-alt"></i></a>
        <a class="navbar-brand d-lg-none" href="<?php echo home_url() ?>"><img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="<?php bloginfo('name') ?>" /></a>
        <button class="navbar-toggler p-0 m-0" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center text-center" id="mainMenu">
          <?php
          if( is_page('gallery') ) {
            wp_nav_menu( array(
              // 'menu'              => 'menu-gallery',
              'theme_location'    => 'gallery-menu',
              'depth'             => 2,
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'navbar-nav',
              'link_before' => '<span>',
              'link_after'  => '</span>',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
          } else {
            wp_nav_menu( array(
              // 'menu'              => 'menu-main',
              'theme_location'    => 'main-menu',
              'depth'             => 2,
              'container'         => '',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'navbar-nav',
              'link_before' => '<span>',
              'link_after'  => '</span>',
              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
              'walker'            => new wp_bootstrap_navwalker())
            );
          }

          ?>
        </div>
      </nav>
    </header>
