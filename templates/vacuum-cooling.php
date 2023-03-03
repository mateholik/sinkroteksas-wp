<?php /* Template Name: Vacuum cooling */ ?>
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
      <?php echo get_field('section_title'); ?>

    </h2>
    <div class="grid grid-cols-2 gap-6">

      <?php 
      $rows = get_field('product');
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>
      <a href="  <?php echo $row['link'] ?>" class="block">
        <img src="  <?php echo $row['image'] ?>" alt="" />
        <p class="font-semibold md:text-xl mt-2 md:mt-4 text-center">
          <?php echo $row['name'] ?>
        </p>
      </a>
      <?php  } } ?>


      </a>
    </div>
  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('why_us_blocks')['section_title']; ?>
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-3">

      <?php 
      $rows = get_field('why_us_blocks')['block'];
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

      <div class="md:text-center md:border-r px-4 md:px-6 border-gray-500">
        <div>
          <div class="flex items-center justify-center md:flex-col">
            <img class="md:w-[72px] md:h-[72px] w-10 h-10 md:mb-4 mr-4 md:mr-0"
              src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="icon" />
            <div class="font-medium md:text-lg md:mb-5">
              <?php echo $row['title'] ?>
            </div>
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base leading-loose mt-4 md:mt-0 text-center">
            <?php echo $row['text'] ?>
          </p>
        </div>
      </div>

      <?php  } } ?>

    </div>
  </div>
</section>

<?php get_footer() ?>