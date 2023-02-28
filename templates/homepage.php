<?php /* Template Name: Homepage */ ?>
<?php get_header() ?>

<section class="relative">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-lander-hero.jpeg" alt="hero background"
    class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
  <div class="absolute inset-0 -z-10 bg-[#242424] opacity-80"></div>
  <div class="container">
    <div class="flex min-h-[390px] md:min-h-[600px] items-center justify-center md:justify-start">
      <div>
        <h1 class="font-semibold text-white text-3xl md:text-5xl mb-4 uppercase text-center md:text-left">
          We are Sinkroteksas
        </h1>
        <p class="font-medium text-white md:text-xl mb-12 text-center md:text-left text-sm">
          A trusted of industrial machinery <br />
          and process automation solutions.
        </p>
        <div class="flex justify-center md:justify-start">
          <a class="text-sm md:text-xl text-white py-3 md:py-4 px-10 bg-secondary rounded min-w-[224px] md:min-w-0 text-center"
            href="#">Read more</a>
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
        <span class="text-white md:font-semibold text-xs md:text-base">25+ years</span>
      </div>
      <div class="w-1/3 flex justify-center items-center pr-4">
        <img class="mr-2 md:mr-4 h-4 w-4 md:w-6 md:h-6"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/divider-case.svg" alt="check" />
        <span class="text-white md:font-semibold text-xs md:text-base">500+ projects</span>
      </div>
      <div class="w-1/3 flex justify-center items-center pr-4">
        <img class="mr-2 md:mr-4 h-4 w-4 md:w-6 md:h-6"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/divider-helmet.svg" alt="check" />
        <span class="text-white md:font-semibold text-xs md:text-base">Experienced</span>
      </div>
    </div>
  </div>
</section>

<section class="py-12 md:py-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl">
      Our services
    </h2>
    <div class="grid grid-cols-2 md:grid-cols-4">
      <div
        class="text-center md:border-r px-4 md:px-6 border-gray-500 flex flex-col justify-between group mb-4 md:mb-0">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            Vacuum cooling
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base">
            Faster Cooling, Improved Food Safety, Quality Preservation
          </p>
        </div>
        <a href="" class="group-hover:underline group-hover:text-secondary text-xs md:text-base">Read more</a>
      </div>
      <div class="text-center border-r px-4 md:px-6 border-gray-500 flex flex-col justify-between group mb-4 md:mb-0">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            Industrial process automation
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base">
            High Productivity, High Quality, High Flexibility, High
            Information Accuracy, High Safety
          </p>
        </div>
        <a href="" class="group-hover:underline group-hover:text-secondary text-xs md:text-base">Read more</a>
      </div>
      <div class="text-center border-r px-4 md:px-6 border-gray-500 flex flex-col justify-between group mb-4 md:mb-0">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            PLC & HMI programming
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base">
            Programmable Logic Controllers and Human Machine Interface
          </p>
        </div>
        <a href="" class="group-hover:underline group-hover:text-secondary text-xs md:text-base">Read more</a>
      </div>
      <div class="text-center border-r px-4 md:px-6 border-gray-500 flex flex-col justify-between group mb-4 md:mb-0">
        <div>
          <img class="md:w-[72px] md:h-[72px] w-[48px] h-[48px] mb-4 mx-auto"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/service.png" alt="" />
          <div class="font-medium md:text-lg md:mb-5 mb-4 text-xs">
            Electrical assembly
          </div>
          <p class="mb-8 md:mb-9 text-gray-500 text-xs md:text-base">
            Our mission is to be the source of low cost, high quality and on
            time contract manufacturing services to our customers in all
            stages of a product's life
          </p>
        </div>
        <a href="#" class="group-hover:underline group-hover:text-secondary text-xs md:text-base">Read more</a>
      </div>
    </div>
  </div>
</section>

<section class="relative py-12 md:py-24">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-lander-about.jpeg" alt="hero background"
    class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
  <div class="absolute inset-0 -z-10 bg-primary opacity-90"></div>
  <div class="container">
    <div class="md:flex md:space-x-10">
      <div class="hidden md:block">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpeg" alt="apie mus"
          class="w-full h-full object-cover object-center" />
      </div>
      <div class="w-full md:max-w-[468px] shrink-0 text-white">
        <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl">
          About us
        </h2>
        <p class="text-center leading-loose mb-10">
          Since 1998, Sinkroteksas has been active in the industrial
          machinery industry. Established as a small company specializing in
          the production of industrial machinery and process automation for
          bakeries and breweries
        </p>
        <div class="flex justify-center">
          <a class="text-sm md:text-xl text-secondary border-secondary border py-3 md:py-4 px-10 rounded min-w-[224px] md:min-w-[182px] text-center hover:bg-secondary hover:text-white duration-200"
            href="#">More</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-12 md:py-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl">
      Clients
    </h2>
    <div class="flex justify-between space-x-10 overflow-auto h-20">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/1.png" alt="" class="object-contain" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/2.png" alt="" class="object-contain" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/3.png" alt="" class="object-contain" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/4.png" alt="" class="object-contain" />
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/5.png" alt="" class="object-contain" />
    </div>
  </div>
</section>

<section class="pb-12 md:pb-24">
  <div class="container">
    <h2 class="mb-8 md:mb-12 text-center font-medium text-2xl md:text-3xl">
      Do you have any questions?
    </h2>
    <form>
      <div class="md:flex md:space-x-10 mb-4">
        <div class="w-full md:max-w-[506px] shrink-0">
          <div class="md:grid gap-x-4 grid grid-cols-2 mb-4">
            <input type="text" placeholder="Full name"
              class="text-xs md:text-base p-4 md:p-6 bg-gray-200 rounded-md block" />

            <input class="text-xs md:text-base p-4 md:p-6 bg-gray-200 rounded-md block" type="text"
              placeholder="Last name" />
          </div>
          <input class="text-xs md:text-base p-4 md:p-6 bg-gray-200 rounded-md w-full mb-4 block" type="mail"
            placeholder="Your email" />
          <textarea class="text-xs md:text-base p-4 md:p-6 bg-gray-200 rounded-md w-full block" placeholder="Massage"
            rows="8"></textarea>
        </div>
        <div class="hidden md:block relative w-full rounded-md overflow-hidden">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-lander-contact.jpeg" alt="hero background"
            class="absolute inset-0 -z-20 w-full h-full object-cover object-left md:object-center" />
          <div class="absolute inset-0 -z-10 bg-primary opacity-60"></div>
        </div>
      </div>

      <button
        class="block text-sm md:text-xl text-white border-secondary border bg-secondary py-3 md:py-4 px-10 rounded min-w-[224px] md:min-w-[182px] text-center hover:bg-white hover:text-secondary duration-200 mx-auto md:mx-0"
        type="submit">
        Send
      </button>
    </form>
  </div>
</section>

<?php get_footer() ?>