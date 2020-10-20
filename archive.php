<?php

/**
      Template Name: Blog Home*/

$home = get_template_directory_uri();
get_header();


    include(TEMPLATEPATH . "/model-layout/menu.php");

?>

<header class="header-base blog">
    <div class="container-fluid p-0">
        <div class="box-img-two">
            <img src="<?php echo $home ?>/assets/img/blog/bg.jpg" alt="" class="img-fluid">
        </div>
        <div class="container">
            <div class="row d-flex align-items-center pt-lg-4">
                <div class="col-12 col-lg-5">

                    <h1 class="c-white pl-3 pt-5 d-none d-lg-block">BLOG</h1>

                </div>
                <div class="box-header col-12 col-lg-7 px-5 py-5">
                    <div class="box-content">
                        <h1 class="c-white pl-3 d-lg-none">BLOG</h1>
                        <p class="c-white">AS PRINCIPAIS NOTÍCIAS SOBRE TECNOLOGIA RENOVÁVEL E A CBES.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="base-thumb">
    <div class="container">
        <div class="row py-5">

        <?php
            $blog_query_single = array(
              'post_type' => 'post',
            );
            $blog_items = new WP_Query($blog_query_single);
            if ($blog_items->have_posts()) :
              while ($blog_items->have_posts()) :
                $blog_items->the_post();
      
                $src = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      
                ?>


            <a href="<?php the_permalink() ?>" class="col-12 col-lg-4">
                <div class="box-thumb"  style="background-image: url(<?= $src ?>)">
                    <!-- <div class="category-box">
                        <p>A</p>
                        <p>B</p>
                    </div> -->

                    <div class="title-box">
                        <h3 class="c-white"><?php echo the_title() ?></h3>
                        <hr>
                        <p class="c-white"><?php echo the_excerpt() ?></p>
                    </div>
                </div>
            </a>

            <?php 

endwhile;  
wp_reset_postdata(); 
endif; ?>




        </div>
    </div>
</section>

<?php get_footer(); ?>