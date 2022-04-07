<!-- 
Template Name: Home page
Template Type: page -->

<?php
get_header();
?>

<section class="hero" style="background-image: url(<?php the_field('background_image'); ?>)">
  <div class="hero__content">
    <h1 class="hero__title"><?php the_field('title'); ?></h1>
    <h2 class="hero__subtitle"><?php the_field('subtitle'); ?></h2>
  </div>
</section>
<section class="about">
  <div class="about__decor" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/design1.png)"></div>
  <div class="container">
    <div class="about__columns">
      <div class="about__column">
        <?php $about_post = get_field('about_choose_post'); ?>
        <h2 class="main-title"><?php echo get_the_title($about_post->ID); ?></h2>
        <h3 class="main-subtitle"><?php echo get_field('subtitle', $about_post->ID); ?></h3>
      </div>
      <div class="about__column">
        <div class="about__content">
          <p>
          <?php
            echo get_field('content', $about_post->ID);
          ?>
          </p>
        </div>
        <a href="<?php echo get_permalink($about_post->ID); ?>" class="btn">KEEP READING</a>
      </div>
    </div>
  </div>
</section>
<div class="contact-banner">
  <div class="container">
    <h2 class="contact-banner__title">
      <?php the_field('contact_title'); ?>
    </h2>
    <div class="contact-banner__buttons">
      <a href="tel:<?php echo get_field('contact_left_button')['phone']; ?>" class="btn btn--outline">
        <span class="icon-call"></span>
          <?php echo get_field('contact_left_button')['text']; ?>
      </a>
      <a href="mailto:<?php echo get_field('contact_right_button')['email']; ?>" class="btn">
          <?php echo get_field('contact_right_button')['text']; ?>
      </a>
    </div>
  </div>
</div>

<section class="large-banner">
  <div class="large-banner__img">
    <picture>
      <source srcset="<?php the_field('large_banner_background_image'); ?>" media="(min-width: 600px)" />
      <img src="<?php the_field('large_banner_background_image'); ?>" alt="MDN" />
    </picture>
  </div>
  <div class="large-banner__content">
    <h2 class="large-banner__title">
      <?php the_field('large_banner_title'); ?>
    </h2>
    <a href="<?php echo get_field('large_banner_button')['link']; ?>" class="btn btn--outline"><?php echo get_field('large_banner_button')['text']; ?></a>
  </div>
</section>
<section class="services">
  <div class="services__decor" style="background-image: url('<?php the_field('services_image'); ?>')"></div>
  <div class="container">
    <div class="services__content">
      <div class="services__top">
        <h2 class="main-title"><?php the_field('services_title'); ?></h2>
        <h3 class="main-subtitle"><?php the_field('services_subtitle'); ?></h3>
      </div>
      <div class="services__text">
        <p>
          <?php the_field('services_content'); ?>
        </p>
      </div>
    </div>
    <ul class="services__list service-list">
      <li class="service-list__item">
        <div class="service-list__number">1</div>
        <div class="service-list__title"><?php the_field('services_block1_name'); ?></div>
      </li>
      <li class="service-list__item">
        <div class="service-list__number">2</div>
        <div class="service-list__title"><?php the_field('services_block2_name'); ?></div>
      </li>
      <li class="service-list__item">
        <div class="service-list__number">3</div>
        <div class="service-list__title"><?php the_field('services_block3_name'); ?></div>
      </li>
    </ul>
  </div>
</section>
<section class="location">
  <div class="container">
    <div class="location__header">
      <h2 class="main-title main-title--white"><?php the_field('offices_title'); ?></h2>
      <h3 class="main-subtitle main-subtitle--white"><?php the_field('offices_subtitle'); ?></h3>
    </div>
  </div>
  <div class="location__map"></div>
</section>
<section class="features">
  <div class="container">
    <h3 class="features__title">
      <?php if ( !empty( get_field('features_number') ) ) { ?>
        <span class="features__number"><?php the_field('features_number'); ?></span>
      <?php } ?>
      <?php the_field('features_title'); ?>
    </h3>
    <span class="features__text"><?php the_field('features_subtitle'); ?></span>
    <ul class="features__list">
      <li class="features__item">
        <div class="features__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/eye.png" alt="eye" />
        </div>
        <?php the_field('features_text'); ?>
      </li>
      <li class="features__item">
        <div class="features__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/safe.png" alt="eye" />
        </div>
        <?php the_field('features_text2'); ?>
      </li>
      <li class="features__item">
        <div class="features__icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/finger.png" alt="eye" />
        </div>
        <?php the_field('features_text3'); ?>
      </li>
    </ul>
    <div class="features__btn">
      <a href="<?php print_r( get_field('features_button')['route_to_post'] ); ?>" class="btn"><?php echo get_field('features_button')['text']; ?></a>
    </div>
  </div>

  <div class="features__img">
    <img src="<?php the_field('features_image'); ?>" alt="img" />
  </div>
</section>
<section class="gallery">
  <div class="container">
    <div class="gallery__top">
      <h2 class="main-title"><?php the_field('posts_title'); ?></h2>
      <div class="gallery__nav">
        <div class="prev_card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-left.svg" alt="prev" />
        </div>
        <div class="next_card">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-right.svg" alt="next" />
        </div>
      </div>
    </div>
    <div class="gallery__list variable-width">

    <?php
      $lastposts = get_posts( array(
          'numberposts' => 6
      ) );
      
      if ( $lastposts ) {
          foreach ( $lastposts as $post ) :
              setup_postdata( $post ); ?>
              <div class="gallery__item">
                <div class="gallery-card">
                  <div class="gallery-card__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                  <div class="gallery-card__body">
                    <h4 class="gallery-card__title"><?php the_title(); ?></h4>
                    <p class="gallery-card__text">
                      <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="link-more">KEEP READING</a>
                  </div>
                </div>
              </div>
          <?php
          endforeach; 
          wp_reset_postdata();
      }
    ?>
    </div>
  </div>
</section>
<div class="contact-banner">
  <div class="container">
    <h2 class="contact-banner__title">
      <?php the_field('contact_title'); ?>
    </h2>
    <div class="contact-banner__buttons">
      <a href="tel:<?php echo get_field('contact_left_button')['phone']; ?>" class="btn btn--outline">
        <span class="icon-call"></span>
          <?php echo get_field('contact_left_button')['text']; ?>
      </a>
      <a href="mailto:<?php echo get_field('contact_right_button')['email']; ?>" class="btn">
          <?php echo get_field('contact_right_button')['text']; ?>
      </a>
    </div>
  </div>
</div>

<?php
get_footer();
?>