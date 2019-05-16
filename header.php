<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">

    

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/bulma.css">

    <style>

      html {
        background-color:#0F1126;
       


      }

      .container {
        background-position: middle;
        background-image: url(<?php echo get_bloginfo('template_directory'); ?>/stars3.jpg);
        background-repeat: no-repeat;
        background-position: middle;
        height: 1000px;
      }
      body {
       
      }
    </style>
    <?php wp_head();?>
  </head>

  <body>

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="https://bulma.io">
            <p>SC2COOPSTRATS</p>
          </a>
 
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

