<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no, user-scalable=no" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Brickstone</title>
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendors.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/fonts/icomoon/style.css" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Hebrew:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/favicon-16x16.png" />
  <!-- <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" /> -->
  <meta name="msapplication-TileColor" content="#3a2c48" />
  <meta name="theme-color" content="#ffffff" />
  <?php //wp_head(); ?>
</head>

<body>
    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $image = wp_get_attachment_image_src( $custom_logo_id, 'full');
    ?>
  <script>
    document.querySelector("body").classList.add("js");
  </script>

  <div class="preloader">
    <!-- <img src="<?php// echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="preloader"> -->
    <img src="<?php echo $image[0]; ?>" alt="preloader">
  </div>

  <header class="main-header <?php if (!is_front_page()) echo 'main-header--dark'; ?>">
    <div class="main-header__logo">
        <picture>
          <source srcset="<?php echo $image[0]; ?>" media="(min-width: 600px)">
          <img src="<?php echo $image[0]; ?>" alt="MDN">
        </picture>
    </div>
    <div class="burger-menu">
      <div class="burger-menu__btn">
        <span class="burger-menu__line"></span>
      </div>
    </div>
    <nav class="main-nav">
      <div class="main-nav__close">
        <span></span>
      </div>
        <?php
            wp_nav_menu(
                array(
                        'menu_class'      => 'my-menu', 
                        'menu_id'         => 'my-menu-id',
                        'items_wrap'      => '<ul class="main-nav__list">%3$s</ul>',
                        'menu' => 'Menu ' . get_locale()
                    )
            ); 
        ?>
      <div class="socials">
        <ul class="socials__list">
          <li>
            <a href="#" class="socials__link facebook">
              <span class="icon-fb"></span>
            </a>
          </li>
          <li>
            <a href="#" class="socials__link facebook">
              <span class="icon-in"></span>
            </a>
          </li>
          <li>
            <a href="#" class="socials__link facebook">
              <span class="icon-youtube"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="main-nav__footer">
        <a href="tel:34444444" class="btn">
          <span class="icon-call"></span>
          MAKE A CALL
        </a>
      </div>
    </nav>
    <div class="main-header__lang group-select">
      <select class="light-select" name="language" id="main-language">
        <option value="">EN</option>
        <option value="fr">FR</option>
        <option value="he">HE</option>
      </select>
    </div>
  </header>