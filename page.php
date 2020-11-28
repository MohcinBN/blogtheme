<?php get_header(); ?>

  <!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();       
        the_content(); 
        endwhile; endif;
        ?>
      </div>
    </div>
</div>

<?php get_footer(); ?>