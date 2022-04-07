<!-- 
Template Name: About
Template Type: post -->

<?php
get_header();
?>

<main>
  <div class="about pt-3">
    <div class="container">
      <div class="about__columns">
        <div class="about__column">
          <div class="about__header">
            <h2 class="main-title"><?php the_field('title'); ?></h2>
            <h3 class="main-subtitle"><?php the_field('subtitle'); ?></h3>
          </div>
          <div class="about__content">
            <p>
              <?php the_field('content'); ?>
            </p>
          </div>
        </div>
        <div class="about__column">
          <div class="about__img img-card">
            <img src="<?php the_field('photo'); ?>" alt="photo">
          </div>
          <div class="img-card__title">
            <h5 class="img-card__name"><?php the_field('name'); ?></h5>
            <p class="img-card__possition"><?php the_field('job'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about">
    <div class="container">
      <div class="about__columns">
        <div class="about__column">
          <h2 class="main-title"><?php the_field('hiw_title'); ?></h2>
        </div>
        <div class="about__column">
          <div class="about__content">
            <p>
              <?php the_field('hiw_content'); ?>
            </p>
          </div>
          <a href="<?php the_field('hiw_post'); ?>" class="btn"><?php the_field('hiw_text'); ?></a>
        </div>
      </div>
    </div>
  </div>
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

  <div class="about about--center pt-3">
    <div class="container">
      <div class="about__columns">
        <div class="about__column">
          <div class="about__header">
            <h2 class="main-title"><?php the_field('branches_title'); ?></h2>
          </div>
          <div class="about__content">
            <p>
              <?php the_field('branches_content'); ?>
            </p>
          </div>
        </div>
        <div class="about__column">
          <div class="about__img">
            <img src="<?php the_field('branches_image'); ?>" alt="photo" />
            <span class="about__note"><?php the_field('branches_text_under_photo'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="about about--decor pt-2">
    <div class="container">
      <div class="about__columns">
        <div class="about__column">
          <div class="about__header">
            <h2 class="main-title"><?php the_field('confidentiality_title'); ?></h2>
          </div>
        </div>
        <div class="about__column">
          <div class="about__content">
            <p>
              <?php the_field('confidentiality_content'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
?>