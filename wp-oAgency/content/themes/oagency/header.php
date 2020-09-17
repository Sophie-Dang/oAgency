<!DOCTYPE html>
<html lang="<?php language_attributes() ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>
<body style="background-color:<?= get_theme_mod('oagency_colors_bg') ?>">
  <!--HEADER-->
  <header class="header">

    <!--Main nav-->
    <nav class="navbar navbar-expand-lg navbar-light">
      <!--logo-->
      <a class="navbar-brand" href="<?= home_url() ?>"><?php bloginfo('name') ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!--/logo-->
      
      <!--nav items-->
      <?php 
        $menu = wp_nav_menu([
          'theme_location' => 'main',
          'container_class' => 'collapse navbar-collapse',
          'container_id' => 'navbarNav',
        ])
      ?>
      <!--/nav items-->
    </nav>
    <!--/Main nav-->
  </header>
  <!--/HEADER-->
  
  <!--MAIN-->
  <main class="main">