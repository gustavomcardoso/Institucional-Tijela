"use strict";

var $ = jQuery;
var containerWidth = $(window).width();
var sceneBox = document.getElementById("scene-header-box");
var parallaxInstanceBox = new Parallax(sceneBox);
var mobile = containerWidth <= 992;
var firstScene = document.getElementById("first-vitrine");
var secondScene = document.getElementById("second-vitrine");
var aboutScene = document.getElementById('first-section');
var firstParallax = new Parallax(firstScene, {
  pointerEvents: true
});
var aboutParallax = new Parallax(aboutScene, {
  pointerEvents: true,
  invertX: false,
  calibrateX: true
});
var secondParallax = new Parallax(secondScene, {
  pointerEvents: true,
  invertX: false,
  invertY: false
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
} // const bgAgronegocioVG = document.querySelector('#geral-agronegocio > #bg');
// const estabilidadeAgronegocioVG = document.querySelector('#geral-agronegocio > #estabilidade');
// const economiaAgronegocioVG = document.querySelector('#geral-agronegocio > #economia');
// const yellowestabilidadeAgronegocioVG = document.querySelector('#geral-agronegocio > #yellowestabilidadeAgronegocioSVG');
// const yelloweconomiaAgronegocioVG = document.querySelector('#geral-agronegocio > #yelloweconomiaAgronegocioSVG');
// const tlestabilidadeAgronegocio = new TimelineLite();
// tlestabilidadeAgronegocio
//     .to(yellowestabilidadeAgronegocioVG, .35, {
//         opacity: .8,
//     })
//     .to(estabilidadeAgronegocioVG, .35, {
//         opacity: 1,
//         yoyo: true
//     }, "-=0.75")
// tlestabilidadeAgronegocio.pause();
// $(estabilidadeAgronegocioVG).hover(function () {
//     tlestabilidadeAgronegocio.play();
//     $('#infoAgronegocio h2').html('Economia');
//     $('#infoAgronegocio p').html('');
// }, function () {
//     tlestabilidadeAgronegocio.reverse();
// }
// );