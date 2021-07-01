<?php

get_header();
include(TEMPLATEPATH . '/nav.php');

?>

<header class="position-relative mt-lg-3" id="scene-header-box">
  <div class="container" data-depth="0.2">
    <iframe src="https://player.vimeo.com/video/563034387?autoplay=1&loop=1&autopause=0&title=0&byline=0&background=1&muted=1" frameborder="0" allow="autoplay" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"> </iframe>
  </div>
  <a href="#" class="box-play" data-depth="0.4">
    <legend class="button-play"> Assista o Vídeo</legend>
    </div>
</header>



<div class="text-center w-100" style="margin-top: -100px;">
  <a href="#first-section" class="arrow-down">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="38" viewBox="0 0 38 28" fill="none">
      <path d="M14 14.722L12.5858 16.1363L14 17.5505L15.4142 16.1363L14 14.722ZM27.2935 4.25699C28.0745 3.47594 28.0745 2.20961 27.2935 1.42856C26.5124 0.647511 25.2461 0.647511 24.4651 1.42856L27.2935 4.25699ZM0.706514 4.25699L12.5858 16.1363L15.4142 13.3078L3.53494 1.42856L0.706514 4.25699ZM15.4142 16.1363L27.2935 4.25699L24.4651 1.42856L12.5858 13.3078L15.4142 16.1363Z" fill="#A4F7EA" />
    </svg>
  </a>
</div>


<section id="first-section" class="py-5">
  <div class="container py-5">
    <div class="row py-5" id="scene-about">
      <div class="col-12 text-center py-5">
        <h2 class="c-teal triade">
          a tigela é um estúdio<br class="d-none d-lg-block" />
          multidisciplinar independente
        </h2>
        <p class="c-white py-5">
          Nascemos da crença de que grandes trabalhos criativos só podem ser<br class="d-none d-lg-block" />
          resolvidos com a mistura da paixão de profissionais com talentos<br class="d-none d-lg-block" />
          diversos e diferentes referências, vivências e experiências.
        </p>
      </div>
      <div class="col-12 text-center">
        <a href="" class="btn-default triade c-purple" data-toggle="modal" data-target="#about"> saiba mais</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row mb-lg-5">
      <a href="#" class="vitrine col-12 col-lg-7" id="first-vitrine">
        <div class="vitrine-img" data-depth="0.4">
          <img src="<?= $home ?>/assets/img/GIF_OBIGO.gif">
        </div>
        <div class="vitrine-content" data-depth="0.8">
          <div>
            <h3 class="c-white bold">OBigo</h3>
            <legend class="c-white">legenda</legend>
          </div>
        </div>
      </a>
      <a href="#" class="vitrine col-12 offset-lg-5 col-lg-7" id="second-vitrine">
        <div class="vitrine-img" data-depth="0.4">
          <img src="<?= $home ?>/assets/img/GIF_NILL.gif">
        </div>
        <div class="vitrine-content" data-depth="0.8">
          <div>
            <h3 class="c-white bold">Nill</h3>
            <legend class="c-white">legenda</legend>
          </div>
        </div>
      </a>
    </div>
</section>

<section class="mt-5 py-5">
  <div class="container pt-5">
    <div class="row">
      <div class="col-12 col-lg-4">
        <a href="" class="vitrine-box">
          <div class="desc">
            <h3 class="c-white">cliente aqui lorem</h3>
            <legend class="c-white">nome do projeto</legend>
          </div>
        </a>
      </div>
      <div class="col-12 col-lg-4">
        <a href="" class="vitrine-box">
          <div class="desc">
            <h3 class="c-white">cliente aqui lorem</h3>
            <legend class="c-white">nome do projeto</legend>
          </div>
        </a>
      </div>
      <div class="col-12 col-lg-4">
        <a href="" class="vitrine-box">
          <div class="desc">
            <h3 class="c-white">cliente aqui lorem</h3>
            <legend class="c-white">nome do projeto</legend>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>