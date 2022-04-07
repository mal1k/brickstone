<!-- 
Template Name: FAQ
Template Type: page -->

<?php
get_header();
?>

<main>
  <div class="container">
    <div class="faq-header">
      <div class="faq-header__img">
        <img src="<?php the_field('image'); ?>" alt="img" />
      </div>
      <div class="faq-header__content">
        <div class="faq-section__title">
          <h2 class="main-title"><?php the_title(); ?></h2>
          <h3 class="main-subtitle"><?php the_field('subtitle'); ?></h3>
        </div>
      </div>
    </div>
  </div>

  <?php $qnas = get_field('qna'); 
  foreach ( $qnas as $key => $qna ) {
  ?>
    <div class="faq-block <?php if ($key % 2) echo 'faq-block--dark'; ?>">
      <div class="container">
        <h3 class="faq-block__title"><?php echo $qna['title']; ?></h3>
        <div class="faq-block__list accordion">
        <?php foreach ( $qna['questions'] as $faq ) { ?>
          <div class="faq-block__item">
            <h5 class="faq-block__trigger trigger"><?php echo $faq['question']; ?></h5>
            <div class="faq-block__inner inner">
              <?php echo $faq['answer']; ?>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  <?php } ?>

  <!-- <div class="faq-block faq-block--dark"> -->
</main>

<?php
get_footer();
?>