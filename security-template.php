<!-- 
Template Name: Security
Template Type: page -->

<?php
get_header();
?>

<main>
  <div class="container">
    <div class="security-hero">
      <div class="security-hero__content">
        <h1 class="security-hero__title"><?php the_field('title'); ?></h1>
      </div>
      <div class="security-hero__img">
        <img src="<?php the_field('image'); ?>" alt="security" />
      </div>
    </div>
    <div class="security">
      <div class="security__header">
        <h2 class="security__title">
          <?php if ( !empty(get_field('title_number')) ) { ?>
            <span class="security__number"><?php the_field('title_number'); ?></span>
          <?php } ?>
          <?php the_field('title_with_number'); ?>
        </h2>
        <p class="security__text">
          <?php the_field('content'); ?>
        </p>
      </div>
      <div class="security__list">
        <?php $contents = get_field('repeater'); 
        foreach ( $contents as $key => $content ) { 
          if ( $key % 2 ) { ?>
            <div class="security__item">
              <div class="security__content">
                <h4 class="security__subtitle"><?php echo $content['title']; ?></h4>
                <p>
                  <?php echo $content['content'] ?>
                </p>
              </div>
              <div class="security__img security__img--right">
                <img src="<?php echo $content['image']; ?>" width="310px" />
              </div>
            </div>
          <?php } else { ?>
            <div class="security__item">
              <div class="security__img">
                <img src="<?php echo $content['image']; ?>" width="330px" />
              </div>
              <div class="security__content">
                <h4 class="security__subtitle"><?php echo $content['title']; ?></h4>
                <p>
                  <?php echo $content['content']; ?>
                </p>
              </div>
            </div>
          <?php } ?>
        <?php } ?>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
?>