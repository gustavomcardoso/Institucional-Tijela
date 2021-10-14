var $ = jQuery;

const containerWidth = $(window).width(); 
const mobile = containerWidth <= 992;

if (!mobile) {

  const sceneBox = document.getElementById("scene-header-box");

  if(sceneBox) {
    const firstScene = document.getElementById("first-vitrine");
    const secondScene = document.getElementById("second-vitrine");
    const aboutScene = document.getElementById('first-section');
    const verScene = document.getElementById('vermais');
    const parallaxInstanceBox = new Parallax(sceneBox);

    const firstParallax = new Parallax(firstScene, {
      pointerEvents: true,
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
  
  const sobreScene = document.getElementById("palco-about")
  if (sobreScene) {
    const sobreParallax = new Parallax(sobreScene, {
      pointerEvents: true,
    });
  }

  const archScene = document.getElementById("arch-palco")
  if (archScene) {
    const archParallax = new Parallax(archScene, {
      pointerEvents: true,
    });
  }

  const singleScene = document.getElementById("single-palco")
  if (singleScene) {
    const singleParallax = new Parallax(singleScene, {
      pointerEvents: true,
    });
  } 

  
}



const imgarray = $('.arch-card').each(function(){});
const imgarray2 = $('.vitrine-box').each(function(){});
const imgarray3 = $('.vitrine-content').each(function(){});
let i = 0
let a = 0

$('document').ready(function(){
  $('.arch-card').each(function(){
    const img = imgarray[i].getAttribute('img');
    $(this).css("background-image", "url("+img+")");
    i++;
  });
  
});

$('document').ready(function(){
  $('.vitrine-box').each(function(){
    const img2 = imgarray2[i].getAttribute('img');
    $(this).css("background-image", "url("+img2+")");
    i++;
  });
});
    
$('document').ready(function(){
  $('.vitrine-content').each(function(){
    const img3 = imgarray3[a].getAttribute('img');
    $(this).css("background-image", "url("+img3+")");
    a++;
  });
  
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


const headerhome = document.getElementById('scene-header-box')
if (headerhome && mobile !== true){
  headerhome.addEventListener( 'click', modifyTo);
}
if (headerhome && mobile == true){
  headerhome.addEventListener( 'click', modifyToMobile);
}

function modifyTo(){
  const palco = document.getElementById('scene-header-box')
  const assistir = palco.classList.contains('assistir')
    palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?h=82e82628b8&autoplay=1&title=0&byline=0&portrait=0&background=1&muted=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div> <div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>';
    palco.classList.add('assistir')
    $('.arrow-down').hide();

    if(assistir) {
      palco.innerHTML = '<div class="container" data-depth="0.2" style="transform: translate3d(0px, 0px, 0px); transform-style: preserve-3d; backface-visibility: hidden; position: relative; display: block; left: 0px; top: 0px;"><iframe src="https://player.vimeo.com/video/563034387?autoplay=1&loop=1&autopause=0&title=0&byline=0&background=1&muted=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"></iframe></div><div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"><a class="button-play"> Assista o Vídeo</a></div>'
      palco.classList.remove('assistir')
      $('.arrow-down').show();
    }
} 

function modifyToMobile(){
  const palco = document.getElementById('scene-header-box')
  palco.innerHTML = '<div class="container"><iframe id="iframemobile" src="https://player.vimeo.com/video/563034387?h=82e82628b8&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div> <div class="box-play" data-depth="0.4" style="transform: translate3d(0px, 0px, 0px) rotate(0.0001deg); transform-style: preserve-3d; backface-visibility: hidden; position: absolute; display: block; left: 0px; top: 0px;"></div>';
  palco.classList.add('assistir')
  $('.box-play').hide();
  headerhome.removeAttribute('id');
}
  

$('#modal-0').on('show.bs.modal', function (e) {
  const link = $('#btn-play2').attr('link');
  $('#modal-0 iframe').attr('src', link);
})
$('#modal-0').on('hide.bs.modal', function (e) {
  $('#modal-0 iframe').attr('src', '');
})
$('#modal-1').on('show.bs.modal', function (e) {
  const link = $('#btn-play').attr('link')
  $('#modal-1 iframe').attr('src', link);
})
$('#modal-1').on('hide.bs.modal', function (e) {
  $('#modal-1 iframe').attr('src', '');
  
})

const link2 = $('#singlepage iframe').attr('link');
$('#singlepage iframe').attr('src', link2);