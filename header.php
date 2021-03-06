<!-- Header template -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/bulma.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/sc2main.css">

    <style>


    </style>
    <?php wp_head();?>
  </head>

  <body>
    <!-- Main navigation -->
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="<?php echo get_bloginfo('wpurl'); ?>">
            <p>SC2COOPSTRATS</p>
          </a>

          <!-- Navigation items -->
          <?php wp_list_pages( '&title_li='); ?>
 
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">  
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
                <a class="button is-primary">
                  <strong>Sign up</strong>
                </a>
                <a class="button is-light">
                  Log in
                </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

