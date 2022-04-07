<!-- 
Template Name: Contact us
Template Type: page -->

<?php
get_header();
?>

<main>
  <section class="contact-us pt-3">
    <div class="container">
      <h2 class="contact-us__title"><?php the_title(); ?></h2>
      <div class="contact-us__list">
        <div class="contact-us__item">
          <div class="contact-block">
            <h5 class="contact-block__subtitle"><?php echo get_field('left_contact')['city']; ?></h5>
            <p><?php echo get_field('left_contact')['address']; ?></p>
          </div>
          <div class="contact-block">
            <h4 class="contact-block__title"><?php echo get_field('left_contact')['activity_hours_title']; ?></h4>
            <?php $activity_hours_content = get_field('left_contact')['activity_hours_content']; 
            foreach ( $activity_hours_content as $content ) { ?>
              <div class="contact-block__row">
                <h5 class="contact-block__subtitle"><?php echo $content['title']; ?></h5>
                <p><?php echo $content['content']; ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="contact-block">
            <?php $contacts_content = get_field('left_contact')['contacts_content']; 
            foreach ( $contacts_content as $content ) { ?>
              <div class="contact-block__row">
                <h5 class="contact-block__subtitle"><?php echo $content['title']; ?></h5>
                <p><?php echo $content['content']; ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="contact-block__btn">
            <a href="tel:<?php echo get_field('left_contact')['button_phone']; ?>" class="btn"><span class="icon-call"></span><?php echo get_field('left_contact')['button_text']; ?></a>
          </div>
          <div class="contact-block__map">
            <?php echo get_field('left_contact')['map']; ?>
          </div>
        </div>
        <div class="contact-us__item">
          <div class="contact-block">
            <h5 class="contact-block__subtitle"><?php echo get_field('right_contact')['city']; ?></h5>
            <p><?php echo get_field('right_contact')['address']; ?></p>
          </div>
          <div class="contact-block">
            <h4 class="contact-block__title"><?php echo get_field('right_contact')['activity_hours_title']; ?></h4>
            <?php $activity_hours_content = get_field('right_contact')['activity_hours_content']; 
            foreach ( $activity_hours_content as $content ) { ?>
              <div class="contact-block__row">
                <h5 class="contact-block__subtitle"><?php echo $content['title']; ?></h5>
                <p><?php echo $content['content']; ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="contact-block">
            <?php $contacts_content = get_field('right_contact')['contacts_content']; 
            foreach ( $contacts_content as $content ) { ?>
              <div class="contact-block__row">
                <h5 class="contact-block__subtitle"><?php echo $content['title']; ?></h5>
                <p><?php echo $content['content']; ?></p>
              </div>
            <?php } ?>
          </div>
          <div class="contact-block__btn">
            <a href="tel:<?php echo get_field('right_contact')['button_phone']; ?>" class="btn"><span class="icon-call"></span><?php echo get_field('right_contact')['button_text']; ?></a>
          </div>
          <div class="contact-block__map">
            <?php echo get_field('right_contact')['map']; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="contact-us-form">
    <div class="contact-us-form__container">
      <h3 class="contact-us-form__title">
        LEAVE US YOUR DETAILS AND WE WILL CONTACT YOU
      </h3>
      <form method="POST" id="contact-us-form">
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
        <button type="submit" class="btn btn--lg">CONTACT ME</button>
      </form>
    </div>
  </div>
</main>

<?php
get_footer();
?>