<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 */

  get_header();
?>
  <!-- Main Content -->
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          <?php 
            if ( have_posts() ) {
              while ( have_posts() ) {
                the_post();
                the_content();
              }
            }
          ?>
        </div>

        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr> -->


  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
		<?php if ( have_posts() ) : ?>

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
		</div>
	</div>



  <?php
  get_footer();
?>
