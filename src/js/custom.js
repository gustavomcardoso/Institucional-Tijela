"use strict";

var $ = jQuery;
var imgarray = $('.arch-card').each(function () {});
var imgarray2 = $('.vitrine-box').each(function () {});
var imgarray3 = $('.vitrine-content').each(function () {});
var i = 0;
var a = 0;
$('document').ready(function () {
  $('.arch-card').each(function () {
    var img = imgarray[i].getAttribute('img');
    $(this).css("background-image", "url(" + img + ")");
    i++;
  });
});
$('document').ready(function () {
  $('.vitrine-box').each(function () {
    var img2 = imgarray2[i].getAttribute('img');
    $(this).css("background-image", "url(" + img2 + ")");
    i++;
  });
});
$('document').ready(function () {
  $('.vitrine-content').each(function () {
    var img3 = imgarray3[a].getAttribute('img');
    $(this).css("background-image", "url(" + img3 + ")");
    a++;
  });
});
document.getElementById("btn-nav").addEventListener("click", changeONOf);

function changeONOf() {
  var btn = document.getElementById("btn-nav");
  var menu = document.getElementById("navtigela");
  var on = btn.classList.contains("on");
  menu.classList.add("open");
  btn.classList.add("on");

  if (on) {
    menu.classList.remove("open");
    btn.classList.remove("on");
  }
}

var headerhome = document.getElementById('scene-header-box');

if (headerhome) {
  headerhome.addEventListener('click', modifyTo);
}

function modifyTo() {
  var palco = document.getElementById('scene-header-box');
  var assistir = palco.classList.contains('assistir');
  palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(-22.2px, -1.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?h=82e82628b8&autoplay=1&title=0&byline=0&portrait=0&background=1&muted=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div> <div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>';
  palco.classList.add('assistir');
  $('.arrow-down').hide();

  if (assistir) {
    palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(-22.2px, -1.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?autoplay=1&loop=1&autopause=0&title=0&byline=0&background=1&muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"></iframe></div><div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><a class="button-play"> Assista o Vídeo</a></div>';
    palco.classList.remove('assistir');
    $('.arrow-down').show();
  }
}

;
$('#modal-0').on('show.bs.modal', function (e) {
  var link = $('#btn-play').attr('link');
  $('#modal-0 iframe').attr('src', link);
});
$('#modal-0').on('hide.bs.modal', function (e) {
  $('#modal-0 iframe').attr('src', '');
});
$('#modal-1').on('show.bs.modal', function (e) {
  var link = $('#btn-play2').attr('link');
  $('#modal-1 iframe').attr('src', link);
});
$('#modal-1').on('hide.bs.modal', function (e) {
  $('#modal-1 iframe').attr('src', '');
});
var containerWidth = $(window).width();
var mobile = containerWidth <= 992;

if (!mobile) {
  var sceneBox = document.getElementById("scene-header-box");

  if (sceneBox) {
    var firstScene = document.getElementById("first-vitrine");
    var secondScene = document.getElementById("second-vitrine");
    var aboutScene = document.getElementById('first-section');
    var verScene = document.getElementById('vermais');
    var parallaxInstanceBox = new Parallax(sceneBox);
    var firstParallax = new Parallax(firstScene, {
      pointerEvents: true
    });
    var aboutParallax = new Parallax(aboutScene, {
      pointerEvents: true,
      invertX: false,
      calibrateX: true
    });
    var VerParallax = new Parallax(verScene, {
      pointerEvents: true,
      invertX: false,
      calibrateX: true
    });
    var secondParallax = new Parallax(secondScene, {
      pointerEvents: true,
      invertX: false,
      invertY: false
    });
  }

  var sobreScene = document.getElementById("palco-about");

  if (sobreScene) {
    var sobreParallax = new Parallax(sobreScene, {
      pointerEvents: true
    });
  }

  var archScene = document.getElementById("arch-palco");

  if (archScene) {
    var archParallax = new Parallax(archScene, {
      pointerEvents: true
    });
  }
}