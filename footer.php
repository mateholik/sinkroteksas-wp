    </main>
    <?php
    $logo = get_field('logo', 'option');
    $phone_1 = get_field('phone_1', 'option');
    $phone_2 = get_field('phone_2', 'option');
    $address = get_field('address', 'option');
    $facebook = get_field('facebook_link', 'option');
    $instagram = get_field('linkedin_link', 'option');
    $linkedin = get_field('instagram_link', 'option');
?>
    <footer>
      <div class="container">
        <div class="flex justify-center sm:justify-between items-center flex-wrap sm:flex-nowrap border-t mb-4 md:mb-0">
          <img class="block max-w-[200px] lg:max-w-[260px] xl:max-w-[316px] mb-4 sm:mb-0"
            src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="logo" />
          <div class="flex">
            <a class="text-sm xl:text-base flex items-center mr-8" href="tel:<?php echo $phone_1; ?>">
              <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
                alt="phone" />
              <?php echo $phone_1; ?>
            </a>
            <a class="text-sm xl:text-base flex items-center mr-8" href="tel:<?php echo $phone_2; ?>">
              <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/phone.svg"
                alt="phone" />
              <?php echo $phone_2; ?>
            </a>
            <div class="hidden lg:flex text-sm xl:text-base items-center">
              <img class="w-6 h-6 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/map.svg"
                alt="phone" />
              <?php echo $address; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="bg-primary py-10 md:py-[60px]">
        <div class="container">
          <div class="flex space-x-10 justify-center">
            <a href="<?php echo $facebook; ?>" target="_blank">
              <img class="text-white fill-white"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/facebook.svg" alt="facebook" />
            </a>
            <a href="<?php echo $linkedin; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/linkedin.svg" alt="linkedin" />
            </a>
            <a href="<?php echo $instagram; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/instagram.svg" alt="instagram" />
            </a>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer() ?>
    </body>

    </html>