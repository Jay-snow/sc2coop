<!-- Header call -->
<?php get_header(); ?>

<div class="container" style="padding-top:2em;">

<!-- Page background -->
<div class="page-inner" >


<div class="columns" >

    <div class="column ">
    Latest comments

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>
    
    </div>
    <div class="column">
        Guides
    </div>
    <div class="column">
        Commanders
    </div>
</div>

<div class="columns" >

  <div class="column">

  <!-- News -->
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>

  </div>
</div>
<div class="columns">

    <div class="column">


        <h2> Latest comments </h2>
        <?php if (have_comments() ) :
            echo "There are comments.";
        endif;
            ?>

      
        
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


