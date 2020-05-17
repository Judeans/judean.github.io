new WOW().init();

$(document).ready(function () {
  $(".project_slider").slick({
    autoplay: true,
    autoplaySpeed: 3000,
    arrows: true,
    dots: true,
    appendDots: $(".project_dots"),
    appendArrows: $(".slider__btn"),
    prevArrow: $(".prev_btn"),
    nextArrow: $(".next_btn"),
    infinite: true,
  });
  var $CurrentSlide = $(".currentSlide");
  var $AllSlide = $(".count");
  var $slickElement = $(".project_slider");

  $slickElement.on("init reInit afterChange", function (
    event,
    slick,
    currentSlide,
    nextSlide
  ) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    if (i < 10) {
      $CurrentSlide.text("0" + i);
    } else $CurrentSlide.text(i);
    if (slick.slideCount < 10) $AllSlide.text("/0" + slick.slideCount);
    else $AllSlide.text("/" + slick.slideCount);
  });

  $("a").on("click", function () {
    let href = $(this).attr("href"),
      scroll = 0;
    if (href != "#header") {
      scroll = $(href).offset().top;
    } else {
      scroll = 0;
    }
    $("html, body").animate(
      {
        scrollTop: scroll,
      },
      {
        duration: 370,
        easing: "linear",
      }
    );
    return false;
  });

  $("#up").hide();

  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      $("header").addClass("scroll");
    } else {
      $("header").removeClass("scroll");
    }
    if ($(this).scrollTop() > $(document).height() / 4) {
      $("#up").fadeIn(1000);
    } else {
      $("#up").fadeOut();
    }
  });

  var rev = $(".rev_slider");
  rev
    .on("init", function (event, slick, currentSlide) {
      var cur = $(slick.$slides[slick.currentSlide]),
        next = cur.next(),
        prev = cur.prev();
      prev.addClass("slick-sprev");
      next.addClass("slick-snext");
      cur.removeClass("slick-snext").removeClass("slick-sprev");
      slick.$prev = prev;
      slick.$next = next;
    })
    .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      console.log("beforeChange");
      var cur = $(slick.$slides[nextSlide]);
      console.log(slick.$prev, slick.$next);
      slick.$prev.removeClass("slick-sprev");
      slick.$next.removeClass("slick-snext");
      (next = cur.next()), (prev = cur.prev());
      prev.prev();
      prev.next();
      prev.addClass("slick-sprev");
      next.addClass("slick-snext");
      slick.$prev = prev;
      slick.$next = next;
      cur.removeClass("slick-next").removeClass("slick-sprev");
    });

  rev.slick({
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    slidesToShow: 3,
    prevArrow: $(".ArPrev"),
    nextArrow: $(".ArNext"),
    dots: true,
    appendDots: $(".prof_dots"),
    infinite: true,
  });
  let cl = false;
  $(".burger").click(function () {
    let Height = $(window).height() - 70;
    $(".lines").toggleClass("lines_active");
    if (!cl) {
      $("nav").animate(
        {
          height: Height,
        },
        200
      );
      cl = true;
    } else {
      $("nav").animate(
        {
          height: 0,
        },
        200
      );
      cl = false;
    }
  });

  $("header a").click(function (e) {
    $(".lines").toggleClass("lines_active");
    $("nav").animate(
      {
        height: 0,
      },
      200
    );
    cl = false;
  });
  $("#up").click(function (e) {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      {
        duration: 370,
        easing: "linear",
      }
    );
  });
});
