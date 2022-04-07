<!-- 
Template Name: Blog
Template Type: page -->

<?php get_header(); 

$args = array(
    'post_type'=> 'post',
    'orderby'    => 'ID',
    'post_status' => 'publish',
    'order'    => 'DESC',
    'posts_per_page' => -1 // this will retrive all the post that is published 
    );
$result = new WP_Query( $args );
?>

<main>
  <section class="blog pt-3">
    <div class="container">
      <h2 class="main-title"><?php the_title(); ?></h2>
      <h3 class="main-subtitle"><?php echo get_the_content(); ?></h3>
    </div>
    <div class="container-md">
      <div class="blog__grid">
        
      <?php
      
        if ( $result->have_posts() ) :
            while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="blog__item">
                    <div class="blog-card">
                        <div class="blog-card__img" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                        <div class="blog-card__body">
                        <h4 class="blog-card__title"><?php the_title(); ?></h4>
                        <p class="blog-card__text">
                            <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="link-more">KEEP READING</a>
                        </div>
                    </div>
                </div>  
      <?php endwhile;
        endif; 
        wp_reset_postdata(); 
      ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>