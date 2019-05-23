<!-- Content snippets for index. Used for news posts. Only has an excerpt -->

<style>

a {
  color:black;
}


.card {
  height:100%;
  display: flex;
  flex-direction:column;
  margin-bottom:5px;
}

.card-content {
  flex: auto;
}

.card-footer {
  margin-top: auto;
}
</style>


<!-- Blog post excerpt -->
<div class="card">
  <div class="columns is-gapless">
  <div class="column is-one-fifth " style="background-color:black;">
     <div class="card-image">
      <figure class="image is-square">
      <a href="https://placeholder.com"><img src="https://via.placeholder.com/184"></a>
       
      </figure>
    </div>
  </div>

  <div class="column">
    
      <div class="card-content " style="height:146px;">     
        <!-- Blog post title -->
         <h1 class="title"> <a href="<?php the_permalink(); ?> "> <?php the_title(); ?> </a> </h1>
          
        <!-- Blog post excerpt -->
        <p> <?php the_excerpt(); ?> </p>
      

      </div>

    

          <!-- Blog post author -->
          <footer class="card-footer  ">
       <p class="card-footer-item is-pulled-left">  By <?php the_author(); ?>  </p>
        </footer>


  </div> <!-- end of column -->
  </div> <!-- end of columns -->
</div> <!-- end of card -->