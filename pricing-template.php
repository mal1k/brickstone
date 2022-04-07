<!-- 
Template Name: Pricing
Template Type: page -->

<?php
get_header();
?>

<main>
  <div class="pricing pt-1">
    <div class="container pb-1">
      <div class="pricing-header">
        <div class="pricing-header__title">
          <h2 class="main-title"><?php the_field('title'); ?></h2>
          <h3 class="main-subtitle"><?php the_field('subtitle'); ?></h3>
        </div>
        <div class="pricing-header__text main-text">
          <p>
            <?php the_field('content'); ?>
          </p>
          <h3 class="main-subtitle">
            <strong><?php the_field('second_title'); ?></strong>
          </h3>
          <p>
            <?php the_field('second_content'); ?>
          </p>
        </div>
      </div>

      <div class="line-block">
        <p class="tac"><?php the_field('line_block'); ?></p>
      </div>
      <div class="pricing__list">
        <h2 class="main-subtitle">
          <strong><?php the_field('price_title'); ?></strong>
        </h2>
        <div class="pricing-list">
          <?php $typeA = get_field('type_a'); ?>
          <?php $typeB = get_field('type_b'); ?>
          <?php $typeC = get_field('type_c'); ?>
        
          <div class="pricing-list__item pricing-card">
            <div class="pricing-card__title" style="background-color: #917da5">
              <span><?php echo $typeA['title']; ?></span>
            </div>
            <div class="pricing-card__list">
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeA['height_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeA['height_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeA['width_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeA['width_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeA['depth_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeA['depth_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeA['rent_text']; ?></p>
                </div>
              </div>
            </div>
            <div class="pricing-card__list">
            <?php 
            $pricing = $typeA['pricing']; ?>

            <?php foreach ( $pricing as $price ) { ?>
              <div class="pricing-card__subitem">
                <div class="pricing-card__option">
                  <p><?php echo $price['text']; ?></p>
                  <?php if ( !empty ($price['saving']) ) { ?>
                    <span><?php echo $price['saving']; ?></span>
                  <?php } ?>
                </div>
                <span class="pricing-card__value"><?php echo $price['value']; ?></span>
              </div>
            <?php } ?>

            </div>
            <div class="pricing-card__btn">
              <a href="mailto:<?php echo $typeA['contact_me_button']; ?>" class="btn btn--full"><?php echo $typeA['contact_me_text']; ?></a>
            </div>
          </div>

          <div class="pricing-list__item pricing-card">
            <div class="pricing-card__title" style="background-color: #917da5">
              <span><?php echo $typeB['title']; ?></span>
            </div>
            <div class="pricing-card__list">
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeB['height_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeB['height_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeB['width_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeB['width_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeB['depth_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeB['depth_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeB['rent_text']; ?></p>
                </div>
              </div>
            </div>
            <div class="pricing-card__list">
            <?php 
            $pricing = $typeB['pricing']; ?>

            <?php foreach ( $pricing as $price ) { ?>
              <div class="pricing-card__subitem">
                <div class="pricing-card__option">
                  <p><?php echo $price['text']; ?></p>
                  <?php if ( !empty ($price['saving']) ) { ?>
                    <span><?php echo $price['saving']; ?></span>
                  <?php } ?>
                </div>
                <span class="pricing-card__value"><?php echo $price['value']; ?></span>
              </div>
            <?php } ?>

            </div>
            <div class="pricing-card__btn">
              <a href="mailto:<?php echo $typeB['contact_me_button']; ?>" class="btn btn--full"><?php echo $typeB['contact_me_text']; ?></a>
            </div>
          </div>

          <div class="pricing-list__item pricing-card">
            <div class="pricing-card__title" style="background-color: #917da5">
              <span><?php echo $typeC['title']; ?></span>
            </div>
            <div class="pricing-card__list">
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeC['height_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeC['height_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeC['width_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeC['width_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeC['depth_text']; ?></p>
                </div>
                <span class="pricing-card__value"><?php echo $typeC['depth_value']; ?></span>
              </div>
              <div class="pricing-card__item">
                <div class="pricing-card__option">
                  <p><?php echo $typeC['rent_text']; ?></p>
                </div>
              </div>
            </div>
            <div class="pricing-card__list">
            <?php 
            $pricing = $typeC['pricing']; ?>

            <?php foreach ( $pricing as $price ) { ?>
              <div class="pricing-card__subitem">
                <div class="pricing-card__option">
                  <p><?php echo $price['text']; ?></p>
                  <?php if ( !empty ($price['saving']) ) { ?>
                    <span><?php echo $price['saving']; ?></span>
                  <?php } ?>
                </div>
                <span class="pricing-card__value"><?php echo $price['value']; ?></span>
              </div>
            <?php } ?>

            </div>
            <div class="pricing-card__btn">
              <a href="mailto:<?php echo $typeC['contact_me_button']; ?>" class="btn btn--full"><?php echo $typeC['contact_me_text']; ?></a>
            </div>
          </div>
          
        </div>
      </div>
      <div class="pricing__text main-text">
        <p>
          <?php the_field('content_after_pricing'); ?>
        </p>
      </div>
      <div class="pricing-dropdown accordion">
        <div class="pricing-dropdown__item">
          <h5 class="pricing-dropdown__trigger trigger"><?php the_field('example_text'); ?></h5>
          <div class="pricing-dropdown__inner inner">
            <?php $examples = get_field('example_content'); ?>
            <ol>
              <?php foreach ( $examples as $example ) { ?>
              <li><?php echo $example['content']; ?></li>
              <?php } ?>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="dark-section">
      <div class="container">
        <div class="dark-section__header">
          <h3 class="main-subtitle text-white">
            <strong><?php the_field('ps_title'); ?></strong>
          </h3>
        </div>
        <div class="dark-section__block">
          <h4 class="main-subtitle text-primary">
            <strong><?php the_field('ps_second_title'); ?></strong>
          </h4>
          <p class="main-text text-white">
            <?php the_field('ps_content'); ?>
          </p>
        </div>
        <div class="dark-section__block">
          <h4 class="main-subtitle text-primary">
            <strong><?php the_field('ps_third_title'); ?></strong>
          </h4>
          <p class="main-text text-white">
            <?php the_field('ps_third_content'); ?>
          </p>
        </div>
        <div class="dark-section__btn">
          <a href="mailto:<?php the_field('ps_button_content'); ?>" class="btn btn--lg"><?php the_field('ps_button_text'); ?></a>
        </div>
      </div>
    </div>
    <div class="premium-services">
      <div class="container">
        <div class="premium-services__grid">
          <div class="premium-services__top">
            <h3 class="main-subtitle"><strong><?php the_field('prs_title'); ?></strong></h3>
            <div class="premium-services__btn">
              <a href="mailto:<?php the_field('prs_button_content'); ?>" class="btn btn--lg"><?php the_field('prs_button_text'); ?></a>
            </div>
          </div>
          <div class="premium-services__list">
            
            <?php $blocks = get_field('prs_repeater'); 
            foreach ( $blocks as $block ) {
            ?>
          
            <div class="premium-service">
              <div class="premium-service__icon">
                <img src="<?php echo $block['image']; ?>" alt="star" />
              </div>
              <div class="premium-service__text main-text">
                <h5 class="premium-service__title"><?php echo $block['title']; ?></h5>
                <p>
                  <?php echo $block['content']; ?>
                </p>
              </div>
            </div>
            
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
?>