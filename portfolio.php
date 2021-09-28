<?php

/*
Template Name: Portfolio
*/

?>



<?php
get_header();
include get_template_directory() . ('/templates/nav.php');

?>

<section>
    <div class="container" id="arch-palco">
        <div data-depth="0.2">
            <div class="row">
                
                <?php 
                    $portfolio = new WP_Query( array('post_type' => 'post') ); 
                    if ( $portfolio->  have_posts() ) : while ( $portfolio->  have_posts() ) : $portfolio->  the_post(); 
                    $src = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $custom_field2 = get_field('legenda');
                ?>

                <div class="col-12 col-lg-6 mx-auto my-3">
                    <a img="<?php echo $src ?>" href="" class="arch-card vitrine-box">
                        <div class="arch-text desc">
                            <h2><?php the_title(); ?></h2>
                            <p> <?php echo $custom_field2 ?> </p>
                        </div>
                    </a>
                </div>

            <?php endwhile; else : ?>
	            <p><?php esc_html_e( 'Desculpe não encontramos nada.' ); ?></p>
            <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>