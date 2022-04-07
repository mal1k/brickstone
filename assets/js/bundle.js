(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
"use strict";

(function () {
  if (!$(".accordion-lg").length) {
    return;
  }

  $(window).on("load resize", function () {
    $(window).width() > 991 ? $(".accordion-lg .inner").show() : $(".accordion-lg .inner").hide();
  });
  $(".accordion-lg .trigger").on("click", function () {
    if ($(window).width() > 991) {
      return;
    }

    var $this = $(this);
    $this.hasClass("active") ? $this.removeClass("active").next().stop().slideUp(200) : $this.addClass("active").next().stop().slideDown(200);
  });
})();

},{}],2:[function(require,module,exports){
"use strict";

(function () {
  if (!$(".accordion").length) {
    return;
  }

  $(".accordion .inner").hide();
  $(".accordion .trigger").on("click", function () {
    var $this = $(this);
    $this.hasClass("active") ? $this.removeClass("active").next().stop().slideUp(200) : $this.addClass("active").next().stop().slideDown(200);
  });
})();

},{}],3:[function(require,module,exports){
"use strict";

$(document).ready(function () {
  // Don't touch
  objectFitImages();
  svg4everybody(); // End don't touch

  require('./target-blank.js');

  require('./menu.js');

  require('./select.js');

  require('./accordion.js');

  require('./accordion-mobile.js');

  require('./slider.js');
}); // remove preloader

$(window).on('load', function () {
  $('.preloader').fadeOut();
});

},{"./accordion-mobile.js":1,"./accordion.js":2,"./menu.js":4,"./select.js":5,"./slider.js":6,"./target-blank.js":7}],4:[function(require,module,exports){
"use strict";

(function () {
  $('.burger-menu').on('click', function () {
    $('.main-nav').addClass('active');
    $('.main-header__logo').addClass('active-menu');
    $('body').addClass('lock');
  });
  $('.main-nav__close').on('click', function () {
    $('.main-nav').removeClass('active');
    $('.main-header__logo').removeClass('active-menu');
    $('body').removeClass('lock');
  });
})();

},{}],5:[function(require,module,exports){
"use strict";

(function () {
  $(".light-select").each(function () {
    var $this = $(this);
    var dropdownParentEl = $(this).closest(".group-select");
    $this.select2({
      // closeOnSelect : false,
      minimumResultsForSearch: -1,
      dropdownParent: dropdownParentEl,
      containerCssClass: "select-light",
      dropdownCssClass: "select-light-dropdown"
    });
  });
  $(".main-select").each(function () {
    var $this = $(this);
    var placeholder = $(this).attr("data-placeholder");
    var dropdownParentEl = $(this).closest(".group-select");
    $this.select2({
      // closeOnSelect : false,
      minimumResultsForSearch: -1,
      dropdownParent: dropdownParentEl,
      placeholder: placeholder,
      containerCssClass: "select-main",
      dropdownCssClass: "select-main-dropdown"
    });
  });
})();

},{}],6:[function(require,module,exports){
"use strict";

(function () {
  $(".variable-width").each(function () {
    var $this = $(this);
    var $prev = $(this).parent().find(".prev_card");
    var $next = $(this).parent().find(".next_card");
    $this.slick({
      dots: false,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      centerMode: false,
      variableWidth: true,
      nextArrow: $next,
      prevArrow: $prev
    });
  });
})();

},{}],7:[function(require,module,exports){
"use strict";

// add target blank to external links
var siteUrl = window.location.hostname;
$('a[href*="//"]:not([href*="' + siteUrl + '"])').attr({
  target: '_blank',
  rel: 'noopener noreferrer'
});

},{}]},{},[3])

//# sourceMappingURL=bundle.js.map
