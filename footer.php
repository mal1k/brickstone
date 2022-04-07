<footer class="main-footer">
  <div class="container">
    <div class="contact-form">
      <h2 class="contact-form__title">
        SIGN UP FOR OUR NEWSLETTER
      </h2>
      <form action="" method="POST">
        <div class="form-row">
          <p class="text-group">
            <input type="email" placeholder="Email Address">
          </p>
          <button type="submit" class="btn btn--white">Send</button>
        </div>
      </form>
    </div>
  </div>
  <div class="footer-navigation accordion-lg">
    <div class="footer-navigation__item">
      <h4 class="footer-navigation__title trigger">FAST NAVIGATION</h4>
      <div class="footer-navigation__list inner">
        <div class="footer-nav">
          <ul class="footer-nav__list">
            <li>
              <a href="#" class="footer-nav__link">Home</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">About</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">Blog</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">Brickstone Tv</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">Pricing</a>
            </li>
          </ul>
          <ul class="footer-nav__list">
            <li>
              <a href="#" class="footer-nav__link">Security</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">FAQ</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">Our Compounds</a>
            </li>
            <li>
              <a href="#" class="footer-nav__link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-navigation__item">
      <h4 class="footer-navigation__title trigger">GENERAL INFORMATION</h4>
      <ul class="footer-navigation__list inner">
        <li>
          <p>Tel Aviv</p>
          <p>37 Menachem Begin Road, Tel Aviv-Yafo</p>
        </li>
        <li>
          <p>Jerusalem</p>
          <p>37 Menachem Begin Road, Tel Aviv-Yafo</p>
        </li>
      </ul>
    </div>
    <div class="footer-navigation__item trigger">
      <h4 class="footer-navigation__title trigger">ACTIVITY TIME</h4>
      <ul class="footer-navigation__list inner">
        <li>
          <p>Sunday - Thursday</p>
          <p>09:00 Am - 18:30 Pm</p>
        </li>
        <li>
          <p>Friday</p>
          <p>08:45 Am - 12:45 Pm</p>
        </li>
      </ul>
      <div class="socials">
        <h2 class="socials__title">CONTACT US</h2>
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
  </div>
  <div class="main-footer__bottom">
    <div class="main-footer__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer-logo.png" alt="logo">
    </div>
    <p>Members Of The World Safe Rooms Organization</p>
  </div>
  <div class="main-footer__rights">
    <p>All Rights Reserved To Brickstone | Web Development By THM</p>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
    $('.menu-item-object-page > a').addClass('main-nav__link');

    $("#main-language").change(function(){
        lang = $("#main-language").val();
        localStorage.setItem('lang', lang);
        window.location.href = '/' + lang;
    });

    if ( $('html').attr('lang') !== 'en-US' ) {
      localLang = localStorage.getItem('lang');
      $("#main-language").val(localLang);
    }

</script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/vendors.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.js"></script>
</body>

</html>