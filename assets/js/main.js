const containerWidth = $(window).width();
const sceneBox = $("#scene-header-box").get(0);
const parallaxInstanceBox = new Parallax(sceneBox);

const mobile = containerWidth <= 992;
console.log(mobile);

const firstScene = $("#first-vitrine").get(0);
const secondScene = $("#second-vitrine").get(0);
const aboutScene = $('#first-section').get(0);

const firstParallax = new Parallax(firstScene, {
  pointerEvents: true
});

const aboutParallax = new Parallax(aboutScene, {
  pointerEvents: true,
  invertX: false,
  calibrateX: true,
});

const secondParallax = new Parallax(secondScene, {
  pointerEvents: true,
  invertX: false,
  invertY: false,
});

document.getElementById("btn-nav").addEventListener("click", changeONOf);
function changeONOf() {
  const btn = document.getElementById("btn-nav");
  const menu = document.getElementById("navtigela");
  const on = btn.classList.contains("on");

  menu.classList.add("open");
  btn.classList.add("on");
  if(on) {
    menu.classList.remove("open");
    btn.classList.remove("on");
  }
}



// const bgAgronegocioVG = document.querySelector('#geral-agronegocio > #bg');
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

