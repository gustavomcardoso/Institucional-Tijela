<?php

get_header();
include get_template_directory() . ('/templates/nav.php');

?>


<header class="position-relative mt-lg-3" id="scene-header-box">
  <div class="container" data-depth="0.2">
    <iframe src="https://player.vimeo.com/video/563034387?autoplay=1&loop=1&autopause=0&title=0&byline=0&background=1&muted=1" frameborder="0" allow="autoplay" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"> </iframe>
  </div>
  <div class="box-play" data-depth="0.4" id="watch">
    <a class="button-play"> Assista ao Vídeo</a>
  </div>
</header>


<div class="text-center w-100" style="margin-top: -100px;">
  <a href="#first-section" class="arrow-down">
    <svg width="48" height="38" viewBox="0 0 38 28" fill="none">
      <path d="M14 14.722L12.5858 16.1363L14 17.5505L15.4142 16.1363L14 14.722ZM27.2935 4.25699C28.0745 3.47594 28.0745 2.20961 27.2935 1.42856C26.5124 0.647511 25.2461 0.647511 24.4651 1.42856L27.2935 4.25699ZM0.706514 4.25699L12.5858 16.1363L15.4142 13.3078L3.53494 1.42856L0.706514 4.25699ZM15.4142 16.1363L27.2935 4.25699L24.4651 1.42856L12.5858 13.3078L15.4142 16.1363Z" fill="#A4F7EA" />
    </svg>
  </a>
</div>


<section id="first-section" class="py-5">
  <div class="about-pattern d-none d-lg-block" data-depth="0.4">
    <svg width="300" height="408" viewBox="0 0 300 408" fill="none" style="
    left: 100px;
    top: -100px;
    position:absolute;
    z-index:-1;
">
      <g clip-path="url(#clip2)" class="rotate-to-right">
        <path d="M169.975 62.3429C172.336 59.373 175.164 57.021 178.265 55.2951C182.915 52.7105 188.188 51.5424 193.374 51.8884C198.563 52.2367 203.659 54.0837 208.009 57.5415C210.91 59.8476 213.185 62.6375 214.831 65.7162C217.296 70.3333 218.337 75.6085 217.874 80.8316C217.406 86.0607 215.449 91.225 211.912 95.6807L215.884 98.8383C218.682 95.3185 220.661 91.3992 221.826 87.3406C223.577 81.2483 223.513 74.8414 221.723 68.9267C219.933 63.0121 216.403 57.5779 211.245 53.4773C207.807 50.7443 203.95 48.847 199.941 47.7653C193.919 46.1439 187.543 46.3558 181.617 48.2913C175.691 50.2269 170.204 53.9012 166.005 59.1823L169.977 62.3399L169.975 62.3429Z" fill="#CBB0F6"></path>
      </g>
      <g clip-path="url(#clip3)" class="rotate-to-left">
        <path d="M106.896 270.491C107.998 272.813 108.585 275.235 108.71 277.637C108.895 281.237 108.032 284.792 106.275 287.844C104.515 290.896 101.871 293.445 98.4696 295.059C96.2015 296.136 93.8255 296.687 91.4617 296.77C87.9178 296.892 84.3983 295.952 81.3593 294.112C78.3181 292.267 75.7608 289.536 74.1058 286.055L71 287.529C72.3062 290.281 74.0999 292.654 76.221 294.574C79.4044 297.457 83.3209 299.329 87.4527 300.005C91.5845 300.68 95.9432 300.154 99.9765 298.24C102.665 296.964 104.969 295.184 106.823 293.068C109.606 289.889 111.38 285.947 111.97 281.765C112.561 277.583 111.963 273.149 110.003 269.02L106.897 270.494L106.896 270.491Z" fill="#A4F7EA"></path>
      </g>
      <g clip-path="url(#clip4)" class="rotate-to-right">
        <path d="M78.7898 146.795C76.8256 150.736 74.1821 154.087 71.0781 156.794C66.422 160.849 60.7184 163.446 54.7478 164.303C48.7733 165.158 42.5435 164.29 36.7723 161.413C32.9236 159.495 29.6682 156.876 27.0575 153.778C23.1464 149.131 20.6928 143.394 19.9596 137.353C19.2304 131.304 20.2077 124.97 23.1491 119.059L17.8791 116.432C15.5512 121.102 14.2493 126.029 13.9049 130.917C13.3853 138.255 15.0029 145.512 18.4604 151.795C21.9179 158.077 27.2349 163.395 34.0789 166.807C38.6402 169.08 43.4755 170.305 48.2871 170.566C55.5134 170.955 62.7003 169.178 68.9607 165.552C75.2211 161.927 80.565 156.433 84.0578 149.426L78.7878 146.799L78.7898 146.795Z" fill="white"></path>
      </g>

    </svg>
    <svg width="300" height="408" viewBox="0 0 300 408" fill="none" style="
    right: 100px;
    top: 255px;
    position:absolute;
    z-index:-1;
">
      <g clip-path="url(#clip2)" class="rotate-to-right">
        <path d="M169.975 62.3429C172.336 59.373 175.164 57.021 178.265 55.2951C182.915 52.7105 188.188 51.5424 193.374 51.8884C198.563 52.2367 203.659 54.0837 208.009 57.5415C210.91 59.8476 213.185 62.6375 214.831 65.7162C217.296 70.3333 218.337 75.6085 217.874 80.8316C217.406 86.0607 215.449 91.225 211.912 95.6807L215.884 98.8383C218.682 95.3185 220.661 91.3992 221.826 87.3406C223.577 81.2483 223.513 74.8414 221.723 68.9267C219.933 63.0121 216.403 57.5779 211.245 53.4773C207.807 50.7443 203.95 48.847 199.941 47.7653C193.919 46.1439 187.543 46.3558 181.617 48.2913C175.691 50.2269 170.204 53.9012 166.005 59.1823L169.977 62.3399L169.975 62.3429Z" fill="#CBB0F6"></path>
      </g>
      <g clip-path="url(#clip3)" class="rotate-to-left">
        <path d="M106.896 270.491C107.998 272.813 108.585 275.235 108.71 277.637C108.895 281.237 108.032 284.792 106.275 287.844C104.515 290.896 101.871 293.445 98.4696 295.059C96.2015 296.136 93.8255 296.687 91.4617 296.77C87.9178 296.892 84.3983 295.952 81.3593 294.112C78.3181 292.267 75.7608 289.536 74.1058 286.055L71 287.529C72.3062 290.281 74.0999 292.654 76.221 294.574C79.4044 297.457 83.3209 299.329 87.4527 300.005C91.5845 300.68 95.9432 300.154 99.9765 298.24C102.665 296.964 104.969 295.184 106.823 293.068C109.606 289.889 111.38 285.947 111.97 281.765C112.561 277.583 111.963 273.149 110.003 269.02L106.897 270.494L106.896 270.491Z" fill="#A4F7EA"></path>
      </g>
      <g clip-path="url(#clip4)" class="rotate-to-right">
        <path d="M78.7898 146.795C76.8256 150.736 74.1821 154.087 71.0781 156.794C66.422 160.849 60.7184 163.446 54.7478 164.303C48.7733 165.158 42.5435 164.29 36.7723 161.413C32.9236 159.495 29.6682 156.876 27.0575 153.778C23.1464 149.131 20.6928 143.394 19.9596 137.353C19.2304 131.304 20.2077 124.97 23.1491 119.059L17.8791 116.432C15.5512 121.102 14.2493 126.029 13.9049 130.917C13.3853 138.255 15.0029 145.512 18.4604 151.795C21.9179 158.077 27.2349 163.395 34.0789 166.807C38.6402 169.08 43.4755 170.305 48.2871 170.566C55.5134 170.955 62.7003 169.178 68.9607 165.552C75.2211 161.927 80.565 156.433 84.0578 149.426L78.7878 146.799L78.7898 146.795Z" fill="white"></path>
      </g>

    </svg>

  </div>

  <div data-depth="0.2" class="container-fluid">
    <div class="row py-5" id="scene-about">
      <div class="col-12 pl-lg-5 text-center py-5">
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
        <a href="<?php echo site_url('/sobre'); ?>" class="btn-default triade c-purple"> saiba mais</a>
      </div>
    </div>
  </div>

</section>




<section class="portfolio">
  <div class="container">
    <div class="row mb-lg-5">

      <?php
        $maxpost2 = new WP_Query( array( 'posts_per_page' => 2, 'post_type' => 'post' ) ); 
        $i = 0;
        if ( $maxpost2-> have_posts() ) : while ( $maxpost2-> have_posts() ) : $maxpost2-> the_post();
        $do_not_duplicate[] = $post->ID;
        $custom_field = get_field('link');
        $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
        $custom_field2 = get_field('legenda');
      ?>

      <?php if ($i == 1) :  ?>


        <div class="vitrine col-12 offset-lg-5 col-lg-7" id="second-vitrine">
          <a img="<?php echo $src ?>" href="<?php the_permalink(); ?>" class="vitrine-content" data-depth="0.8">
            <div>
              <h3 class="c-white bold"><?php the_title(); ?></h3>
              <legend class="c-white"><?php echo $custom_field2 ?></legend>
            </div>
          </a>
          <div class="vitrine-play2" data-depth="0.8">
            <a link="https://player.vimeo.com/video/<?php echo $custom_field ?>?h=82e82628b8&byline=0&portrait=0" data-toggle="modal" data-target="#modal-<?php echo $i ?>" alt="Assistir" class="btn-play-style" id="btn-play"></a>
          </div>
        </div>

        <div class="modal fade" id="modal-<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-video modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                  <iframe src="" frameborder="0" allow="autoplay" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"> </iframe>
                  <button type="button" class="btn-modal" data-dismiss="modal"></button>
              </div>
            </div>
          </div>
        </div>

      <?php else : ?>
        <div class="vitrine col-12 col-lg-7" id="first-vitrine">
          <a img="<?php echo $src ?>" href="<?php the_permalink(); ?>" class="vitrine-content" data-depth="0.8">
            <div>
              <h3 class="c-white bold"><?php the_title(); ?></h3>
              <legend class="c-white"><?php echo $custom_field2 ?></legend>
            </div>
          </a>
          <div class="vitrine-play" data-depth="0.8">
            <a link="https://player.vimeo.com/video/<?php echo $custom_field ?>?h=82e82628b8&byline=0&portrait=0" data-toggle="modal" data-target="#modal-<?php echo $i ?>" alt="Assistir" class="btn-play-style" id="btn-play2"></a>
            </div>
        </div>

        <div class="modal fade" id="modal-<?php echo $i ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-video modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                  <iframe src="" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen data-depth="0.4"> </iframe>
                  <button type="button" class="btn-modal" data-dismiss="modal"></button>
              </div>
            </div>
          </div>
        </div>

      <?php endif; ?>
      
        <?php
        $i++;
        endwhile; else : ?>
          <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
</section>



<section class="mt-5 py-lg-5">
  <div class="container pt-5">
    <div class="row">

    <?php 
      $maxpost3 = new WP_Query( array( 'posts_per_page' => 5, 'post_type' => 'post' ) ); 
      if ( $maxpost3-> have_posts() ) : while ( $maxpost3-> have_posts() ) : $maxpost3-> the_post(); 
      if ( in_array( $post->ID, $do_not_duplicate ) ) continue; 
      $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
      ?>

      <div class="col-12 col-lg-4 my-3 my-lg-0">
        <a img="<?php echo $src ?>" href="<?php the_permalink(); ?>" class="vitrine-box d-flex align-items-center justify-content-center">
          <div class="desc pt-3 pt-lg-0">
            <h3 class="c-white"><?php the_title(); ?> </h3>
            <legend class="c-white"><?php echo $custom_field2 ?></legend>
          </div>
        </a>
      </div>

    <?php endwhile; endif; ?>

    </div>
  </div>
</section>

<section class="mb-5" id="vermais">
  <div class="about-pattern d-none d-lg-block" data-depth="0.4">
      <svg width="300" height="308" viewBox="0 0 300 308" fill="none" style="left: 100px; top: 40px;">
        <g clip-path="url(#clip2)" class="rotate-to-right">
          <path d="M169.975 62.3429C172.336 59.373 175.164 57.021 178.265 55.2951C182.915 52.7105 188.188 51.5424 193.374 51.8884C198.563 52.2367 203.659 54.0837 208.009 57.5415C210.91 59.8476 213.185 62.6375 214.831 65.7162C217.296 70.3333 218.337 75.6085 217.874 80.8316C217.406 86.0607 215.449 91.225 211.912 95.6807L215.884 98.8383C218.682 95.3185 220.661 91.3992 221.826 87.3406C223.577 81.2483 223.513 74.8414 221.723 68.9267C219.933 63.0121 216.403 57.5779 211.245 53.4773C207.807 50.7443 203.95 48.847 199.941 47.7653C193.919 46.1439 187.543 46.3558 181.617 48.2913C175.691 50.2269 170.204 53.9012 166.005 59.1823L169.977 62.3399L169.975 62.3429Z" fill="#CBB0F6"></path>
        </g>
        <g clip-path="url(#clip3)" class="rotate-to-left">
          <path d="M106.896 270.491C107.998 272.813 108.585 275.235 108.71 277.637C108.895 281.237 108.032 284.792 106.275 287.844C104.515 290.896 101.871 293.445 98.4696 295.059C96.2015 296.136 93.8255 296.687 91.4617 296.77C87.9178 296.892 84.3983 295.952 81.3593 294.112C78.3181 292.267 75.7608 289.536 74.1058 286.055L71 287.529C72.3062 290.281 74.0999 292.654 76.221 294.574C79.4044 297.457 83.3209 299.329 87.4527 300.005C91.5845 300.68 95.9432 300.154 99.9765 298.24C102.665 296.964 104.969 295.184 106.823 293.068C109.606 289.889 111.38 285.947 111.97 281.765C112.561 277.583 111.963 273.149 110.003 269.02L106.897 270.494L106.896 270.491Z" fill="#A4F7EA"></path>
        </g>
        <g clip-path="url(#clip4)" class="rotate-to-right">
          <path d="M78.7898 146.795C76.8256 150.736 74.1821 154.087 71.0781 156.794C66.422 160.849 60.7184 163.446 54.7478 164.303C48.7733 165.158 42.5435 164.29 36.7723 161.413C32.9236 159.495 29.6682 156.876 27.0575 153.778C23.1464 149.131 20.6928 143.394 19.9596 137.353C19.2304 131.304 20.2077 124.97 23.1491 119.059L17.8791 116.432C15.5512 121.102 14.2493 126.029 13.9049 130.917C13.3853 138.255 15.0029 145.512 18.4604 151.795C21.9179 158.077 27.2349 163.395 34.0789 166.807C38.6402 169.08 43.4755 170.305 48.2871 170.566C55.5134 170.955 62.7003 169.178 68.9607 165.552C75.2211 161.927 80.565 156.433 84.0578 149.426L78.7878 146.799L78.7898 146.795Z" fill="white"></path>
        </g>

      </svg>
      <svg width="300" height="308" viewBox="0 0 300 308" fill="none" style="right: 100px;">
        <g clip-path="url(#clip2)" class="rotate-to-right">
          <path d="M169.975 62.3429C172.336 59.373 175.164 57.021 178.265 55.2951C182.915 52.7105 188.188 51.5424 193.374 51.8884C198.563 52.2367 203.659 54.0837 208.009 57.5415C210.91 59.8476 213.185 62.6375 214.831 65.7162C217.296 70.3333 218.337 75.6085 217.874 80.8316C217.406 86.0607 215.449 91.225 211.912 95.6807L215.884 98.8383C218.682 95.3185 220.661 91.3992 221.826 87.3406C223.577 81.2483 223.513 74.8414 221.723 68.9267C219.933 63.0121 216.403 57.5779 211.245 53.4773C207.807 50.7443 203.95 48.847 199.941 47.7653C193.919 46.1439 187.543 46.3558 181.617 48.2913C175.691 50.2269 170.204 53.9012 166.005 59.1823L169.977 62.3399L169.975 62.3429Z" fill="#CBB0F6"></path>
        </g>
        <g clip-path="url(#clip3)" class="rotate-to-left">
          <path d="M106.896 270.491C107.998 272.813 108.585 275.235 108.71 277.637C108.895 281.237 108.032 284.792 106.275 287.844C104.515 290.896 101.871 293.445 98.4696 295.059C96.2015 296.136 93.8255 296.687 91.4617 296.77C87.9178 296.892 84.3983 295.952 81.3593 294.112C78.3181 292.267 75.7608 289.536 74.1058 286.055L71 287.529C72.3062 290.281 74.0999 292.654 76.221 294.574C79.4044 297.457 83.3209 299.329 87.4527 300.005C91.5845 300.68 95.9432 300.154 99.9765 298.24C102.665 296.964 104.969 295.184 106.823 293.068C109.606 289.889 111.38 285.947 111.97 281.765C112.561 277.583 111.963 273.149 110.003 269.02L106.897 270.494L106.896 270.491Z" fill="#A4F7EA"></path>
        </g>
        <g clip-path="url(#clip4)" class="rotate-to-right">
          <path d="M78.7898 146.795C76.8256 150.736 74.1821 154.087 71.0781 156.794C66.422 160.849 60.7184 163.446 54.7478 164.303C48.7733 165.158 42.5435 164.29 36.7723 161.413C32.9236 159.495 29.6682 156.876 27.0575 153.778C23.1464 149.131 20.6928 143.394 19.9596 137.353C19.2304 131.304 20.2077 124.97 23.1491 119.059L17.8791 116.432C15.5512 121.102 14.2493 126.029 13.9049 130.917C13.3853 138.255 15.0029 145.512 18.4604 151.795C21.9179 158.077 27.2349 163.395 34.0789 166.807C38.6402 169.08 43.4755 170.305 48.2871 170.566C55.5134 170.955 62.7003 169.178 68.9607 165.552C75.2211 161.927 80.565 156.433 84.0578 149.426L78.7878 146.799L78.7898 146.795Z" fill="white"></path>
        </g>

      </svg>

    </div>
  <div data-depth="0.2" class="container" id="vermais">

    <div class="row">
      <div class="col-12 col-lg-6 offset-lg-3 d-flex justify-content-center ver-mais-footer ">
        <a href="<?php echo site_url('/saibamais'); ?>" class="ver-mais-footer d-flex align-items-center">
          <p class="">
            Clique aqui para ver <br> mais projetos
          </p>
          </a>
      </div>
    </div>

  </div>
</section>

<?php get_footer(); ?>

