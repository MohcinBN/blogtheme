<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <?php wp_head() ?>


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      

      <?php
            if(function_exists('the_custom_logo')){
              the_custom_logo();
            }
      ?>

      <a class="navbar-brand" href="index.html">
        <?php 
          echo get_bloginfo( 'name');
        ?>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">

        <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="navbar-nav ml-auto" id="">%3$s</ul>'
                )
            );
        ?>
    
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>
            <?php 
              if ( is_front_page() ) : 
                echo "Blog Home";
              else : 
                the_title();
              endif 
            ?>
            </h1>
            <span class="subheading">-----------------------</span>
          </div>
        </div>
      </div>
    </div>
  </header>