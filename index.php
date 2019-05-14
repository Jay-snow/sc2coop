<?php get_header(); ?>

<?php get_template_part('content', get_post_format() ); ?>


<p> Hello </p>



    


      <!-- ... other HTML ... -->

  <!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

  <!-- Load our React component. -->
  <script src="reactInsert.js"></script>

  <?php get_footer(); ?>


