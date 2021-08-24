<?php

$home = get_template_directory_uri();
get_header();

include(TEMPLATEPATH . "/model-layout/menu.php");


while (have_posts()) : the_post();
$post_date = get_the_date( 'd/m/Y' );
$src = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>


<header id="blog-head" style="background-image: url(<?php echo $src; ?>;">
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="c-blue pt-5 pb-4"><?php echo the_title() ?></h1>
            </div>
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>

<?php get_footer() ?>