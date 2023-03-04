<?php /* Template Name: About us */ ?>
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


<section class="py-12 md:py-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('our_story')['section_title']; ?>
    </h2>
    <div class="flex space-x-2 md:space-x-4 justify-center items-center mb-8 md:mb-10">
      <div class="w-16 md:w-[140px] h-[3px] bg-[#222222]"></div>
      <div class="font-medium md:text-2xl whitespace-nowrap">
        <?php echo get_field('our_story')['date']; ?>
      </div>
      <div class="w-16 md:w-[140px] h-[3px] bg-[#222222]"></div>
    </div>

    <div class="md:flex">
      <div class="hidden md:block w-1/2 relative">
        <img src="<?php echo get_field('our_story')['image']; ?>" alt="story" class="w-full h-full object-cover" />
        <div class="absolute inset-0 bg-[#242424] opacity-70 z-10"></div>
      </div>
      <div
        class="md:w-1/2 flex md:px-16 text-center leading-loose md:leading-loose justify-center items-center text-sm md:text-base">
        <?php echo get_field('our_story')['content']; ?>
      </div>
    </div>
  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('gallery', 'option')['section_title']; ?>
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 md:gap-y-12">
      <?php 
      $rows = get_field('gallery', 'option')['project'];
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

      <div>
        <img class="block mb-4 md:mb-6" src="<?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>">
        <div class="font-medium text-center text-base md:text-2xl mb-4 md:mb-6"><?php echo $row['title'] ?></div>
        <div class="text-center text-xs md:text-xl"><?php echo $row['description'] ?></div>
      </div>

      <?php  } } ?>
    </div>


  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('contacts_global')['section_title']; ?>
    </h2>
    <div class="md:flex md:space-x-10 mb-4">
      <div class="w-full md:max-w-[506px] shrink-0">

        <?php echo do_shortcode( get_field('contacts_global')['form'] ); ?>

      </div>
      <div class="hidden md:block relative w-full rounded-md overflow-hidden max-h-[416px]">
        <img src="<?php echo get_field('contacts_global')['background_image']; ?>" alt="hero background"
          class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
        <div class="absolute inset-0 -z-10 bg-primary opacity-60"></div>
      </div>

    </div>

  </div>
</section>
<?php get_footer() ?>