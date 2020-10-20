function restartGif(ImageSelector) {
  var imgSrc = document.querySelector(ImageSelector).src;
  document.querySelector(ImageSelector).src = imgSrc;
}

const letter_t = document.querySelector("#logo > #letter_t");
const letter_i = document.querySelector("#logo > #letter_i");
const letter_g = document.querySelector("#logo > #letter_g");
const letter_e = document.querySelector("#logo > #letter_e");
const letter_l = document.querySelector("#logo > #letter_l");
const letter_a = document.querySelector("#logo > #letter_a");
const pote = document.querySelector("#logo > #pote");

const timeLineLogo = new TimelineLite();

timeLineLogo
  .from(pote, {
    x: -400,
    ease: "elastic.out(1, 0.7)",
    duration: 2,
  })
  .from(letter_t, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  })
  .from(letter_i, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  })
  .from(letter_g, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  })
  .from(letter_e, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  })
  .from(letter_l, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  })
  .from(letter_a, {
    y: -400,
    ease: "elastic.out(1, 0.2)",
    duration: 0.4,
  });

timeLineLogo.play();

var scene = $("#scene-header").get(0);
var sceneBox = $("#scene-header-box").get(0);
var parallaxInstance = new Parallax(scene);
var parallaxInstanceBox = new Parallax(sceneBox);

var $containerWidth = $(window).width();

if ($containerWidth <= 992) {
  $(document).on("click", ".effect-menu .off", function (e) {
    e.preventDefault();

    $("nav").addClass("nav-shadow");
    restartGif(".img-one");
    $("nav").css({ "border-bottom-left-radius": "30px" });
    $(this).removeClass("off");
    $(this).addClass("on");
  });

  $(document).on("click", ".effect-menu .on", function (e) {
    e.preventDefault();

    $("nav").removeClass("nav-shadow");
    restartGif(".img-two");
    $("#cbeMenu").collapse("hide");

    $(this).addClass("off");
    $(this).removeClass("on");
  });
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
      $("nav").addClass("nav-shadow");

      restartGif(".img-one");
    } else {
      $("nav").removeClass("nav-shadow");
      $("nav").css({ "border-bottom-left-radius": "30px" });
      restartGif(".img-two");
    }
  });
} else {
  $(window).scroll(function () {
    var scroll = $(window).scrollTop();
    if (scroll >= 150) {
      $("nav").addClass("nav-shadow");

      restartGif(".img-one");
    } else {
      $("nav").removeClass("nav-shadow");
      $("nav").css({ "border-bottom-left-radius": "50%" });
      restartGif(".img-two");
    }
  });
}
