const containerWidth = $(window).width();
const sceneBox = $("#scene-header-box").get(0);
const parallaxInstanceBox = new Parallax(sceneBox);

const mobile = containerWidth <= 992;
console.log(mobile);

const firstScene = $("#first-vitrine").get(0);
const secondScene = $("#second-vitrine").get(0);

const firstParallax = new Parallax(firstScene, {
  pointerEvents: true
});

const secondParallax = new Parallax(secondScene, {
  pointerEvents: true
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