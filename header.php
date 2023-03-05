<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <?php wp_head() ?>
</head>

<body <?php body_class('flex flex-col h-screen') ?>>

  <?php
    $logo = get_field('logo', 'option');
    $phone_1 = get_field('phone_1', 'option');
    $phone_2 = get_field('phone_2', 'option');
    $address = get_field('address', 'option');
?>

  <header>
    <div class="container">
      <div class="flex justify-between items-center">
        <a href="<?php echo get_home_url(); ?>" class="block max-w-[200px] lg:max-w-[260px] xl:max-w-[316px]">
          <img class="w-full" src="<?php echo $logo; ?>" alt="logo" />
        </a>
        <div class="hidden lg:flex">
          <a class="text-sm xl:text-base flex items-center mr-8" href="tel:+<?php echo $phone_1; ?>">
            <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
              alt="phone" />
            <?php echo $phone_1; ?>
          </a>
          <a class="text-sm xl:text-base flex items-center mr-8" href="tel:<?php echo $phone_1; ?>">
            <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
              alt="phone" />
            <?php echo $phone_1; ?>
          </a>
          <div class="text-sm xl:text-base flex items-center">
            <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"
              alt="phone" />
            <?php echo $address; ?>
          </div>
        </div>
        <div class="hidden lg:flex items-center">
          <a href="#" class="block mr-6">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flag-en.svg" alt="flag-en" />
          </a>
          <a href="#" class="block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/flag-lt.svg" alt="flag-en" />
          </a>
        </div>
        <img id="burger" class="w-12 h-12 block lg:hidden"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger.svg" alt="menu" />
      </div>
    </div>
    <nav class="hidden lg:block bg-primary">
      <div class="container">
        <div class="desktop-menu">
          <?php wp_nav_menu(    array (  'theme_location' => 'main-menu'  )  ); ?>
        </div>
      </div>
    </nav>
    <nav id="mobileMenu" class="mobile-menu">
      <div class="content">
        <img id="close" class="close" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/close.svg"
          alt="menu" />
        <?php wp_nav_menu(    array (  'theme_location' => 'main-menu'  )  ); ?>
      </div>
    </nav>
  </header>

  <main>