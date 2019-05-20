<!-- Display component for single page template -->
<style>
    
</style>
<div class="blog-post" style="background-color:white;border:1px solid;">
    <h1><?php the_title(); ?></h1>
    <?php the_date() ?>; by <a href="#"><?php the_author(); ?> </a> 
    


    <p> <?php the_content(); ?> </p>



</div>