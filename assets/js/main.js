var $ = jQuery;

const containerWidth = $(window).width();

const mobile = containerWidth <= 992;

if (!mobile){

  const sceneBox = document.getElementById("scene-header-box");
  const firstScene = document.getElementById("first-vitrine");
  const secondScene = document.getElementById("second-vitrine");
  const aboutScene = document.getElementById('first-section');
  const verScene = document.getElementById('vermais');
  const sobreScene = document.getElementById('palco-about');
  const parallaxInstanceBox = new Parallax(sceneBox);

  const firstParallax = new Parallax(firstScene, {
    pointerEvents: true
  });

  const sobreParallax = new Parallax(sobreScene, {
    pointerEvents: true
  });

  const aboutParallax = new Parallax(aboutScene, {
    pointerEvents: true,
    invertX: false,
    calibrateX: true,
  });

  const VerParallax = new Parallax(verScene, {
    pointerEvents: true,
    invertX: false,
    calibrateX: true,
  });

  const secondParallax = new Parallax(secondScene, {
    pointerEvents: true,
    invertX: false,
    invertY: false,
  });

}


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

document.getElementById('scene-header-box').addEventListener( 'click', modifyTo);
function modifyTo(){
  const palco = document.getElementById('scene-header-box')
  const assistir = palco.classList.contains('assistir')
  palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(-22.2px, -1.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?h=82e82628b8&autoplay=1&title=0&byline=0&portrait=0&background=1&muted=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div> <div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>';
  palco.classList.add('assistir')
  $('.arrow-down').hide();

  if(assistir) {
    palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(-22.2px, -1.5px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?autoplay=1&loop=1&autopause=0&title=0&byline=0&background=1&muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"></iframe></div><div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><a class="button-play"> Assista o Vídeo</a></div>'
    palco.classList.remove('assistir')
    $('.arrow-down').show();
  }
};


$('#modal-0').on('show.bs.modal', function (e) {
  const link = $('#btn-play').attr('link');
  $('#modal-0 iframe').attr('src', link);
})
$('#modal-0').on('hide.bs.modal', function (e) {
  $('#modal-0 iframe').attr('src', '');
})
$('#modal-1').on('show.bs.modal', function (e) {
  const link = $('#btn-play2').attr('link')
  $('#modal-1 iframe').attr('src', link);
})
$('#modal-1').on('hide.bs.modal', function (e) {
  $('#modal-1 iframe').attr('src', '');

})


