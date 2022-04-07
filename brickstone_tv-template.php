<!-- 
Template Name: Brickstone TV
Template Type: page -->

<?php
get_header();
?>

<main>
  <div class="video-gallery pt-3">
    <div class="container">
      <div class="video-gallery__header">
        <h2 class="main-title"><?php the_title(); ?></h2>
        <h3 class="main-subtitle"><?php echo get_the_content(); ?></h3>
      </div>
      <?php if ( !empty( get_field('main_video') ) ) { ?>
        <div class="video-gallery__top">
          <div class="video-container">
            <iframe width="100%" height="100%" src="<?php the_field('main_video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      <?php } ?>
      <div class="video-gallery__body">

        <?php
          $videos = get_field('videos');

          foreach ( $videos as $video ) {
        ?>

        <div class="video-gallery__item">
          <div class="video-container">
            <iframe width="100%" height="100%" src="<?php echo $video['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>

        <?php } ?>
      </div>
    </div>
  </div>
</main>

<?php
get_footer();
?>