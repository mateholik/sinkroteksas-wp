<?php /* Template Name: Homepage */ ?>
<?php get_header() ?>


<section class="relative">
  <img src="<?php echo get_field('hero')['background_image']; ?>" alt="hero background"
    class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
  <div class="absolute inset-0 -z-10 bg-[#242424] opacity-80"></div>
  <div class="container">
    <div class="flex min-h-[390px] md:min-h-[600px] items-center justify-center md:justify-start">
      <div>
        <h1 class="font-semibold text-white text-3xl md:text-5xl mb-4 uppercase text-center md:text-left">
          <?php echo get_field('hero')['title']; ?>
        </h1>
        <div class="font-medium text-white md:text-xl mb-12 text-center md:text-left text-sm">
          <?php echo get_field('hero')['subtitle']; ?>
        </div>
        <div class="flex justify-center md:justify-start">
          <a class="text-sm md:text-xl text-white py-3 md:py-4 px-10 bg-secondary rounded min-w-[224px] md:min-w-0 text-center"
            href="<?php echo get_field('hero')['button']['link']; ?>"><?php echo get_field('hero')['button']['text']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-primary py-5 md:py-8">
  <div class="container">
    <div class="flex">
      <div class="w-1/3 flex justify-center items-center pr-4">
        <img class="mr-2 md:mr-4 h-4 w-4 md:w-6 md:h-6"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/divider-check.svg" alt="check" />
        <span
          class="text-white md:font-semibold text-xs md:text-base"><?php echo get_field('hero')['icons_with_text']['text_1']; ?></span>
      </div>
      <div class="w-1/3 flex justify-center items-center pr-4">
        <img class="mr-2 md:mr-4 h-4 w-4 md:w-6 md:h-6"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/divider-case.svg" alt="check" />
        <span
          class="text-white md:font-semibold text-xs md:text-base"><?php echo get_field('hero')['icons_with_text']['text_2']; ?></span>
      </div>
      <div class="w-1/3 flex justify-center items-center pr-4">
        <img class="mr-2 md:mr-4 h-4 w-4 md:w-6 md:h-6"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/divider-helmet.svg" alt="check" />
        <span
          class="text-white md:font-semibold text-xs md:text-base"><?php echo get_field('hero')['icons_with_text']['text_3']; ?></span>
      </div>
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

      <a href=" <?php echo $row['link']['link'] ?>" class="text-center md:border-r md:last:border-r-0 px-4 md:px-6 border-gray-500 flex flex-col justify-between group pb-4  
        <?php echo $index == 0 ? 'border-r border-b md:border-b-0' : '' ?> 
        <?php echo $index == 1 ? 'border-b md:border-b-0' : '' ?>
        <?php echo $index == 2 ? 'border-r pt-4 md:pt-0' : '' ?>
        <?php echo $index == 3 ? 'pt-4 md:pt-0' : '' ?>
        ">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            <?php echo $row['title'] ?>
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base">
            <?php echo $row['text'] ?>
          </p>
        </div>
        <div
          class="underline text-secondary nd:group-hover:underline md:group-hover:text-secondary md:no-underline md:text-black text-xs md:text-base">
          <?php echo $row['link']['title'] ?></div>
      </a>

      <?php  } } ?>

    </div>


  </div>
</section>

<section class="relative py-12 md:py-24">
  <img src="<?php echo get_field('about')['background_image']; ?>" alt="hero background"
    class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
  <div class="absolute inset-0 -z-10 bg-primary opacity-90"></div>
  <div class="container">
    <div class="md:flex md:space-x-10">
      <div class="hidden md:block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpeg" alt="apie mus"
          class="w-full h-full object-cover object-center" />
      </div>
      <div class="w-full md:max-w-[468px] shrink-0 text-white">
        <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
          <?php echo get_field('about')['section_title']; ?>
        </h2>
        <p class="text-center leading-loose mb-10">
          <?php echo get_field('about')['text']; ?>
        </p>
        <div class="flex justify-center">
          <a class="text-sm md:text-xl text-secondary border-secondary border py-3 md:py-4 px-10 rounded min-w-[224px] md:min-w-[182px] text-center hover:bg-secondary hover:text-white duration-200"
            href="<?php echo get_field('about')['button']['link']; ?>"><?php echo get_field('about')['button']['text']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 md:py-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl uppercase">
      <?php echo get_field('clients')['section_title']; ?>
    </h2>
    <div class="flex justify-between space-x-10 overflow-auto h-20">

      <?php 
      $rows = get_field('clients')['logos'];
      if( $rows ) {
          foreach( $rows as $index=>$row ) { ?>

      <img src="<?php echo $row['image'] ?>" alt="logo" class="object-contain" />

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