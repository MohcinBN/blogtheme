
<?php
  get_header();
?>
  <!-- Main Content -->
  <div class="container">
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
        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>



  <?php
  get_footer();
?>
