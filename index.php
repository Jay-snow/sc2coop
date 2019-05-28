<!-- Header call -->
<?php get_header(); ?>

<div class="container" style="padding-top:2em;">

<!-- Page background -->
<div class="page-inner" >


<div class="columns" >


    <div class="column " >

    <div class="tabs is-toggle is-fullwidth is-large">
  <ul>
    <li >
      <a>
        <span class="icon"><i class="fas fa-database" aria-hidden="true"></i></span>
        <span>Data</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon"><i class="fas fa-book-dead" aria-hidden="true"></i></span>
        <span>Strategies</span>
      </a>
    </li>
    <li>
      <a>
        <span class="icon"><i class="fas fa-atom" aria-hidden="true"></i></span>
        <span>Make a Guide</span>
      </a>
    </li>
  </ul>
</div>


    
    </div>

</div>

<div class="columns" >

  <div class="column is-8">
        <div class="news-container">

  <!-- News / Content.php -->
  <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      

        get_template_part( 'content', get_post_format() );
	endwhile; endif;
	?>

    </div>
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


