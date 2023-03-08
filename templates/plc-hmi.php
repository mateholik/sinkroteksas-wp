<?php /* Template Name: PLC & HMI programming */ ?>
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
      <?php echo get_field('services')['section_title']; ?>
    </h2>
    <div class="grid grid-cols-2 md:grid-cols-4">
      <?php 
      $rows = get_field('services')['blocks'];
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

      <div class="text-center md:border-r px-4 md:px-6 border-gray-500 flex flex-col justify-between group pb-4  
        <?php echo $index == 0 ? 'border-r border-b md:border-b-0' : '' ?> 
        <?php echo $index == 1 ? 'border-b md:border-b-0' : '' ?>
        <?php echo $index == 2 ? 'border-r border-b md:border-b-0 pt-4 md:pt-0' : '' ?>
        <?php echo $index == 3 ? 'pt-4 border-b md:border-b-0 md:pt-0' : '' ?>
        <?php echo $index == 4 ? 'border-r  md:border-l md:mt-12 pt-4 md:pt-0' : '' ?>
        <?php echo $index == 5 ? 'md:mt-12 pt-4 md:pt-0' : '' ?>
        ">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto" src="<?php echo $row['icon'] ?>"
            alt="icon" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            <?php echo $row['title'] ?>
          </div>

        </div>
      </div>

      <?php   if($index == 3) echo '<div class="hidden md:block"></div>' ?>

      <?php  } } ?>

    </div>
  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('title_and_content')['title']; ?>
    </h2>
    <div class="text-center leading-loose">
      <?php echo get_field('title_and_content')['content']; ?>
    </div>
  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('work_with')['section_title']; ?>
    </h2>
    <div class="grid grid-cols-3 lg:grid-cols-6 gap-8 items-center justify-center">

      <?php 
      $rows = get_field('work_with')['partner'];
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

      <div>
        <img class="mx-auto" src="    <?php echo $row['image'] ?>" alt="partner" />
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