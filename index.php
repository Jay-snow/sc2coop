<?php get_header(); ?>




<div class="container" style="padding-top:2em;">
<div class="page-inner" style="background-color:rgba(7,8,17,0.6);">

<div class="columns" >
  <div class="column">

  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>


 
        
  </div>
</div>
<div class="columns">
  
    <div class="column">


        <h2> Best strategy </h2>

      
        
    </div>
    <div class="column">
      <h2> Area </h2>
    </div>    

</div>

</div>
</div>



    


      <!-- ... other HTML ... -->

  <!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

  <!-- Load our React component. -->
  <script src="reactInsert.js"></script>

  <?php get_footer(); ?>


