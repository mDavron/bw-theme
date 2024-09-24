    <?php get_header(); ?>
    <div class="about" id="about">
      <style>
      .about {
        background: url(<?php the_field('bg_light');
        ?>) center 100% repeat-x,
        url(<?php the_field('bg_dark');
        ?>) center 100% repeat-x,
        #1d1d1d;
      }
      </style>
      <div class="container">
        <div class="about__inner">
          <!-- <?php  $card = get_field('card');?> -->
          <?php if(get_field('card')): ?>
          <?php while(has_sub_field('card')) : ?>
          <div class="about__item">
            <div class="about__year"><?php the_sub_field('card_year'); ?></div>
            <div class="about__text">
              <!-- <?php print_r($card[0] ['card_year'] . ' ' . $card[0]['card_text'])?> -->
              <?php the_sub_field('card_text'); ?>
            </div>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="team" id="team">
      <div class="container">
        <div class="block__head">
          <h2 class="block__title"><?php the_field('team_title');?></h2>
          <p class="block__text"><?php the_field('team_description');?></p>
        </div>
        <!-- team inner starts-->
        <div class="team__inner">

          <!-- Swiper -->
          <div class="swiper mySwiper">
            <!-- Swiper wrapper starts -->
            <div class="swiper-wrapper">
              <?php if(get_field('team_card')): ?>
              <?php while(has_sub_field('team_card')) : ?>
              <!-- Swiper slide starts-->
              <div class="swiper-slide">
                <div class="team__item">
                  <img class="team__item-img" src="<?php the_sub_field('team_img'); ?>" alt="">
                  <h3 class="team__item-title"><?php the_sub_field('team_name'); ?></h3>
                  <p class="team__item-text"><?php the_sub_field('team_post'); ?></p>
                  <div class="team__icon-box">

                    <?php if(get_sub_field('team_facebook')) : ?>
                    <a href="<?php echo get_sub_field('team_facebook') ?>"><i class="icon-facebook"></i></a>
                    <?php endif;?>

                    <?php if(get_sub_field('team_instagram')) : ?>
                    <a href="<?php echo get_sub_field('team_instagram') ?>"><i class="icon-instagram"></i></a>
                    <?php endif;?>

                    <?php if(get_sub_field('team_twitter')) : ?>
                    <a href="<?php echo get_sub_field('team_twitter') ?>"><i class="icon-twitter"></i></a>
                    <?php endif;?>

                    <?php if(get_sub_field('team_vk')) : ?>
                    <a href="<?php echo get_sub_field('team_vk') ?>"><i class="icon-vkontakte"></i></a>
                    <?php endif;?>
                  </div>
                </div>

              </div>
              <?php endwhile; ?>
              <?php endif; ?>
              <!-- Swiper slide ends-->
            </div>
            <!-- Swiper wrapper ends -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- <div class="swiper-pagination"></div> -->
          </div>
          <!-- Swiper JS -->

        </div>
        <!-- team inner ends -->
      </div>
    </div>

    <div class="provide" id="provide">
      <div class="container">
        <div class="block__head inverse">
          <h2 class="block__title"><?php the_field('services_title')?></h2>
          <p class="block__text"><?php the_field('services_text')?></p>
        </div>
        <div class="provide__inner">
          <?php $arr = get_field('services_card')?>
          <?php if(get_field('services_card')): ?>
          <?php while(has_sub_field('services_card')) : ?>
          <div class="provide__item">
            <img src="<?php the_sub_field('services_card_img'); ?>" alt="">
            <h3 class="provide__item-title"><?php the_sub_field('services_card_title')?></h3>
            <!-- <h2><?php $arr = print_r($arr[0]);?></h2> -->
            <p class="provide__item-text"><?php the_sub_field('services_card_text')?>
            </p>
          </div>
          <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <div class="contact" id="contact">
      <div class="container">
        <div class="block__head">
          <h2 class="block__title"><?php the_field('contact_title');?></h2>
          <p class="block__text"><?php the_field('contact_description');?></p>
        </div>
        <div class="contact__inner">
          <div class="contact__icon-box">
            <div class="contact__item">
              <i class="icon-phone"></i>
              <div class="contact__text"><a href="tel:555222333"><?php the_field('contact_phone');?></a></div>
            </div>
            <div class="contact__item">
              <i class="icon-location"></i>
              <!-- https://goo.gl/maps/ot9BCyYtQbSXoJYRA -->
              <div class="contact__text"><a href="<?php the_field('contact_adress')?>"
                  target="_blank"><?php the_field('contact_adress_text');?></a></div>
            </div>
            <div class="contact__item">
              <i class="icon-header"></i>
              <div class="contact__text"><a href="mailto:somemail@hotmail.com"><?php the_field('contact_email');?></a>
              </div>
            </div>
          </div>
          <form action="" class="contact__form">
            <input class="contact__name" type="text" placeholder="Full Name">
            <input class="contact__email" type="email" placeholder="Email">
            <input class="contact__number" type="number" placeholder="Number">
            <textarea class="contact__textarea" placeholder="Write your Message here..."></textarea>
            <input type="submit" class="contact__button" value="Submit">
          </form>
        </div>
      </div>
    </div>
    <?php get_footer(); ?>