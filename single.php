<?php get_header(); ?>

<main>
  <div class="container-md">
    <section class="article">
      <?php if ( !empty( get_the_post_thumbnail_url() ) ) { ?>
        <div class="article__img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="aricle img" />
        </div>
      <?php } ?>
      <div class="article__title">
        <h2 class="article__name"><?php the_title(); ?></h2>
        <div class="article__author">
          <p>By: 
            <?php 
                $author_id = get_post_field ( 'post_author', get_the_ID() );
                $display_name = get_the_author_meta( 'display_name' , $author_id ); 
                echo $display_name;
            ?>
          </p>
          <!-- <p>CEO Of Brixton</p> -->
        </div>
      </div>
      <div class="article__body">
        <div class="article__content main-text">
          <p>
            <?php echo get_the_content(); ?>
          </p>
          <div class="line-block">
            <span>Share To:</span>
            <div class="socials">
              <ul class="socials__list">
                <li>
                  <a href="#" class="socials__link facebook">
                    <span class="icon-fb"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="socials__link facebook">
                    <span class="icon-in"></span>
                  </a>
                </li>
                <li>
                  <a href="#" class="socials__link facebook">
                    <span class="icon-youtube"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="article__navigation">
          <?php
            $prev_post = get_adjacent_post(false, '', true);
            if (!empty($prev_post)) { ?>
                <a href="<?php echo get_permalink($prev_post->ID); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-left.svg" alt="prev" />
                </a>
            <?php }

            $next_post = get_adjacent_post(false, '', false);
            if (!empty($next_post)) { ?>
                <a href="<?php echo get_permalink($next_post->ID); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/slide-arrow-right.svg" alt="next" />
                </a>
            <?php } ?>
          </div>
        </div>
        <div class="sidebar-form">
          <h3 class="sidebar-form__title">
            LEAVE US YOUR DETAILS AND WE WILL CONTACT YOU
          </h3>
          <form method="POST" id="sidebar-form">
            <p class="text-group">
              <input type="text" class="input-light" placeholder="First Name" />
            </p>
            <p class="text-group">
              <input type="text" class="input-light" placeholder="Last Name" />
            </p>
            <p class="text-group">
              <input type="mail" class="input-light" placeholder="Email" />
            </p>
            <p class="text-group">
              <input type="tel" class="input-light" placeholder="Phone" />
            </p>
            <button type="submit" class="btn btn--full">CONTACT ME</button>
          </form>
        </div>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>