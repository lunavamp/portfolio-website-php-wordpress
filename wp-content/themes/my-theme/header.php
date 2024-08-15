<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap"
      rel="stylesheet"
    />
    <?php wp_head(); ?>
  </head>
  <body <?php echo body_class()?>>
    <div class="page-top"></div>
    <header class="header">
  <div class="container">
    <div class="fx-sb header-menu-container">
      <?php
  wp_nav_menu(array(
      'theme_location' => 'primary', 
      'container' => 'nav',
      'menu_class' => 'header-menu', 
      'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
  ));
  ?>
      <button class="btn1 openModal">Start Project</button>
      <div class="burger-menu-container">
      <div class="burger-icon fx-col-sb">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    </div>
  </div>
</header>
