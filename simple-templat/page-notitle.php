<?php 
/*Template Name: page no title*/

get_header();?>


  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <?php if(have_posts()):
            while(have_posts()): the_post();
            ?>
          <h4 class="card-header"><h3><?php the_title();?></h3></h4>
          <div class="card-body">
            <small>Posted on:<?php the_time('F j,Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?> </small>
            <p class="card-text"><?php the_content();?></p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Learn More</a>
          </div>
        </div>
      <?php endwhile;
            endif;
      ?>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?php get_footer();?>