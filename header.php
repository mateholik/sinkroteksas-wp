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
  <?php wp_body_open(); ?>

  <!-- <header class="flex-0 bg-slate-100 px-4 border shadow-md">
        <div class="max-w-screen-lg mx-auto flex justify-between items-center min-h-[40px]">
            <div class="">
                <a href="<?php echo home_url() ?>">Logo</a>
            </div>
            <div>
                <?php echo wp_nav_menu() ?>
            </div>
        </div>
    </header> -->

  <?php
    $logo = get_field('logo', 'option');
    $phone_1 = get_field('phone_1', 'option');
    $phone_2 = get_field('phone_2', 'option');
    $address = get_field('address', 'option');
?>

  <header>
    <div class="container">
      <div class="flex justify-between items-center">
        <img class="max-w-[200px] lg:max-w-[260px] xl:max-w-[316px]" src="<?php echo $logo; ?>" alt="logo" />
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
        <img class="w-12 h-12 block lg:hidden"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/burger.svg" alt="menu" />
      </div>
    </div>
    <nav class="hidden lg:block bg-primary">
      <div class="container">
        <ul class="flex py-7 justify-center">
          <li class="hover:text-secondary duration-200">
            <a class="block mr-7 text-xl text-white group" href="#">Home
              <span class="block bg-secondary h-px w-0 group-hover:w-full duration-200"></span></a>
          </li>
          <li>
            <a class="mr-7 text-xl text-white" href="">Vacuum cooling</a>
          </li>
          <li>
            <a class="mr-7 text-xl text-white" href="">About us</a>
          </li>
          <li>
            <div class="relative flex items-center mr-7 text-xl text-white group">
              Solutions
              <img class="w-3 h-[6px] ml-2"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow-white.svg" alt="arrow" />
              <ul class="hidden group-hover:block absolute top-7 left-0 bg-primary p-2">
                <li>
                  <a class="py-2 font-medium text-base whitespace-nowrap text-white" href="">Industrial process
                    automation</a>
                </li>
                <li>
                  <a class="py-2 font-medium text-base whitespace-nowrap text-white" href="">PLC & HMI programming</a>
                </li>
                <li>
                  <a class="py-2 font-medium text-base whitespace-nowrap text-white" href="">Electrical assembly</a>
                </li>
              </ul>
            </div>
          </li>
          <li><a class="mr-7 text-xl text-white" href="">Project</a></li>
          <li><a class="mr-7 text-xl text-white" href="">Contact</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>