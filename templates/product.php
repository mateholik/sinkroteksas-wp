<?php /* Template Name: Product */ ?>
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
      <?php echo get_field('tech_specification')['section_title']; ?>
    </h2>

    <div class="md:flex md:space-x-8">
      <div class="md:w-1/2">
        <?php 
        $rows = get_field('tech_specification')['block'];
        if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

        <div class="mb-6 md:mb-10">
          <div class="font-medium text-xl md:text-2xl mb-4">
            <?php echo $row['title'] ?>
          </div>
          <div class="text-sm md:text-xl">
            <?php echo $row['content'] ?>
          </div>
        </div>

        <?php  } } ?>
      </div>


      <div class="md:w-1/2">
        <div>
          <?php 
        $rows = get_field('tech_specification')['media_blocks']['image'];
        if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

          <div class="mb-6 md:mb-10">
            <img src=" <?php echo $row['image'] ?>" alt="<?php echo $row['title'] ?>">
            <div class="font-medium text-xl md:text-2xl mt-4">
              <?php echo $row['title'] ?>
            </div>

          </div>

          <?php  } } ?>
        </div>

        <div>
          <?php 
        $rows = get_field('tech_specification')['media_blocks']['video'];
        if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

          <div class="mb-6 md:mb-10">


            <div class="relative h-0 pb-[56.25%]">
              <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.youtube.com/embed/<?php echo $row['youtube_video_link'] ?>"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowFullScreen></iframe>
            </div>

            <div class="font-medium text-xl md:text-2xl mt-4">
              <?php echo $row['title'] ?>
            </div>

          </div>

          <?php  } } ?>
        </div>
      </div>
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