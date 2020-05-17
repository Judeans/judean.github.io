<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( name )?></title>
    <?php wp_head(); ?>
  </head>
  <body>
  <div id="up"></div>
    <header>
      <div class="phone">
        <div class="logo">
          <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/logo.png" alt="" />
          <div class="logo__text">
            <p><?php bloginfo( description  )?></p>
            <h1><?php bloginfo( name )?></h1>
          </div>
        </div>
        <div class="burger">
          <div class="lines"></div>
        </div>
      </div>
      <?php wp_nav_menu( [
          'theme_location'  => 'top',
          'menu'            => '', 
          'container'       => 'nav', 
        ] );
      ?>
      <div class="CallBtn">заказать звонок</div>
    </header>