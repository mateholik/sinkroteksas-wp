<?php /* Template Name: Contact */ ?>
<?php get_header() ?>



<section class="relative">
  <img src="<?php echo get_field('content')['background_image']; ?>" alt="hero background"
    class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
  <div class="absolute inset-0 -z-10 bg-[#242424] opacity-80"></div>
  <div class="container">
    <div class="flex min-h-[214px] md:min-h-[370px] items-center justify-center">
      <h1 class="font-semibold text-white text-3xl md:text-5xl uppercase text-center">
        <?php echo get_field('content')['title']; ?>
      </h1>
    </div>
  </div>
</section>

<?php if(get_field('title_and_content')['content']) { ?>
<section class="pt-12 md:pt-24">
  <div class="container">
    <?php if(get_field('title_and_content')['title']) { ?>
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('title_and_content')['title']; ?>
    </h2>
    <?php } ?>
    <div class="text-center leading-loose">
      <?php echo get_field('title_and_content')['content']; ?>
    </div>
  </div>
</section>
<?php } ?>

<?php
    $logo = get_field('logo', 'option');
    $phone_1 = get_field('phone_1', 'option');
    $phone_2 = get_field('phone_2', 'option');
    $address = get_field('address', 'option');
    $email = get_field('email', 'option');
?>

<section class="py-12 md:py-24">
  <div class="container">
    <div class="md:flex md:space-x-8">
      <div class="md:w-1/2 mb-10 md:mb-0">
        <div class="flex items-center mb-10">
          <img class="block mr-4 md:mr-6 w-12 h-12 md:w-16 md:h-16"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/c-map.svg" alt="icon">
          <div>
            <div class="text-base md:text-xl"> <?php echo $address; ?></div>
          </div>
        </div>
        <div class="flex items-center mb-10">
          <img class="block mr-4 md:mr-6 w-12 h-12 md:w-16 md:h-16"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/c-phone.svg" alt="icon">
          <div>
            <a href="tel:<?php echo $phone_1; ?>" class="text-base md:text-xl mb-2 block"> <?php echo $phone_1; ?></a>
            <a href="tel:<?php echo $phone_2; ?>" class="text-base md:text-xl mb-2 block"> <?php echo $phone_2; ?></a>
          </div>
        </div>
        <div class="flex items-center">
          <img class="block mr-4 md:mr-6 w-12 h-12 md:w-16 md:h-16"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/c-email.svg" alt="icon">
          <div>
            <a href="mailto:<?php echo $email; ?>" class="text-base md:text-xl"><?php echo $email; ?></a>
          </div>
        </div>
      </div>
      <div class="md:w-1/2">
        <?php echo do_shortcode( get_field('form_shortcode')); ?>
      </div>
    </div>
  </div>
</section>



<section class="pb-12 md:pb-24">
  <div class="container">
    <?php echo get_field('map_iframe'); ?>
  </div>
</section>
<?php get_footer() ?>