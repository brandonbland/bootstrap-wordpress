<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title><?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <?php wp_head(); ?>

  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo esc_url(site_url()); ?>"><?php bloginfo('title'); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <?php
      		wp_nav_menu( array(
      			'theme_location'    => 'primary',
      			'depth'             => 2,
      			'container'         => 'div',
      			'container_class'   => 'collapse navbar-collapse',
      			'container_id'      => 'bs-example-navbar-collapse-1',
      			'menu_class'        => 'nav navbar-nav',
      			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
      			'walker'            => new WP_Bootstrap_Navwalker(),
      		) );
      		?>
    </nav>

    
    <main role="main">

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="display-4 mt-3"><?php bloginfo('title'); ?></h1>
            <hr>
          </div>
        </div>
        <div class="row">

          <!-- Content area -->
          <div class="col-md-6  offset-md-1">
