<!-- Page template for content-single.php -->
<?php get_header(); ?>

<div class="container" style="padding-top:2em;">
<div class="page-inner" >

    <?php

    
    if (have_posts() ) : while (have_posts() ) : the_post();
    get_template_part('content-single', get_post_format() );

    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;

endwhile; endif;
    ?>

</div>
<div>

<?php get_footer(); ?>