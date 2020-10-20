<?php

get_header(); 
include(TEMPLATEPATH . '/nav.php'); 

?>

<header>
  <div class="container">
    <div class="row align-items-center" id="scene-header">
      <div class="col-12 col-lg-5" data-depth="0.2">
        <h1 class="c-purple">juntos, criamos misturas improváveis</h1>
      </div>
      <div class="col-12 col-lg-7 position-relative" data-depth="0.2" id="scene-header-box">
        <a href="#" class="image-headbox first" data-depth="0.4"></a>
        <a href="#" class="image-headbox second" data-depth="0.2"></a>
      </div>
    </div>
    <div class="text-center w-100">
      <a href="#" class="arrow-down">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="48"
          height="38"
          viewBox="0 0 38 28"
          fill="none"
        >
          <path
            d="M14 14.722L12.5858 16.1363L14 17.5505L15.4142 16.1363L14 14.722ZM27.2935 4.25699C28.0745 3.47594 28.0745 2.20961 27.2935 1.42856C26.5124 0.647511 25.2461 0.647511 24.4651 1.42856L27.2935 4.25699ZM0.706514 4.25699L12.5858 16.1363L15.4142 13.3078L3.53494 1.42856L0.706514 4.25699ZM15.4142 16.1363L27.2935 4.25699L24.4651 1.42856L12.5858 13.3078L15.4142 16.1363Z"
            fill="#A4F7EA"
          />
        </svg>
      </a>
    </div>
  </div>
</header>

<section class="py-5">
  <div class="container py-5">
    <div class="row py-5" id="scene-about">
      <div class="col-12 text-center py-5">
        <h2 class="c-teal triade">
          a tigela é um estúdio<br class="d-none d-lg-block" />
          multidisciplinar independente
        </h2>
        <p class="c-white py-5">
          Nascemos da crença de que grandes trabalhos criativos só podem ser<br
            class="d-none d-lg-block"
          />
          resolvidos com a mistura da paixão de profissionais com talentos<br
            class="d-none d-lg-block"
          />
          diversos e diferentes referências, vivências e experiências.
        </p>
      </div>
      <div class="col-12 text-center">
        <a href="" class="btn-default triade c-purple" > saiba mais</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="row mb-lg-5">
      <div class="col-12 col-lg-7">
        <a href="" class="vitrine-head-box">
          <div class="desc-right" >
            <h3 class="c-white bold">puma</h3>
            <legend class="c-white">hermeto pascoal</legend>
          </div>
        </a>
      </div>
    </div>

    <div class="row justify-content-lg-end mt-lg-5">
      <div class="col-12 col-lg-7">
        <a href="" class="vitrine-head-box">
          <div class="desc-left">
            <h3 class="c-white bold">puma</h3>
            <legend class="c-white">hermeto pascoal</legend>
          </div>
        </a>
      </div>
    </div>
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

<section class="py-5">
  <div class="container py-5">
    <div class="row py-5">
      <div class="col-12 text-center">
        <a href="#">
          <h2 class="c-purple triade">
            clique aqui para<br />
            ver mais projetos
          </h2>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer();?>
