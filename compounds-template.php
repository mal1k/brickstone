<!-- 
Template Name: Compounds
Template Type: page -->

<?php
get_header();
?>

<main>
  <div class="pt-3"></div>
  <?php $compounds = get_field('compounds'); 
  foreach ( $compounds as $compound ) { ?>
    <div class="compounds">
      <div class="container">
        <div class="compounds__block">
          <div class="compounds__content main-text">
            <?php if ( !empty( $compound['title'] ) ): ?>
              <h2 class="main-title"><?php echo $compound['title']; ?></h2>
            <?php endif; ?>

            <?php if ( !empty( $compound['subtitle'] ) ): ?>
              <h3 class="main-subtitle"><?php echo $compound['subtitle']; ?></h3>
            <?php endif; ?>

            <?php if ( !empty( $compound['content'] ) ): ?>
              <div class="compounds__text main-text">
                <p>
                  <?php echo $compound['content']; ?>
                </p>
              </div>
            <?php endif; ?>
          </div>
          <div class="compounds__img">
            <div class="compound-gallery variable-width">
              <?php $images = $compound['images']; 
              foreach ( $images as $image ) { ?>  
                <div class="compound-gallery__item">
                    <div class="compound-gallery__img" style="background-image: url(<?php echo $image['image']; ?>)"></div>
                </div>
              <?php } ?>            
            </div>
            <div class="compound-gallery__nav">
              <div class="prev_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-left.svg" alt="prev" />
              </div>
              <div class="next_card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-right.svg" alt="next" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
</main>

<?php
get_footer();
?>