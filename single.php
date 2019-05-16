<?php get_header(); ?>

<div class="container" style="padding-top:2em;">
<div class="page-inner" >

    <?php

    if (have_posts() ) : while (have_posts() ) : the_post();

    get_template_part('content-single', get_post_format() );

endwhile; endif;
    ?>

</div>
<div>

<?php get_footer(); ?>