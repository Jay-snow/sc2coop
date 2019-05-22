<!-- Content snippets for index. Used for news posts. Only has an excerpt -->

<style>

a {
  color:black;
}
</style>


<!-- Blog post excerpt -->
<div class="card">
  <div class="columns is-gapless">
  <div class="column is-one-quarter">
     <div class="card-image">
      <figure class="image is-184x184">
        <img src="https://bulma.io/images/placeholders/128x128.png">
      </figure>
    </div>
  </div>

  <div class="column">
    <div class="blog-post" style="background-color:white;border:1px solid;">
      <div class="content">     
        <!-- Blog post title -->
         <h1> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h1>
          
        <!-- Blog post excerpt -->
        <p> <?php the_excerpt(); ?> </p>
        
        <!-- Blog post author -->
        <footer class="card-footer">
        <p> By <?php the_author(); ?> </p>
        </footer>

      </div>
    </div>
  </div> <!-- end of column -->
  </div> <!-- end of columns -->
</div> <!-- end of card -->