<?php get_header();?>


  <!-- Page Content -->
  <div class="container">

    <h1 class="my-4">Welcome to Modern Business</h1>

    <!-- Marketing Icons Section -->
    <div class="row">
      <div class="col-lg-8 mb-4">
       
          <?php if(have_posts()):
            while(have_posts()): the_post(); echo 'this is the post formate: '.get_post_format();?>
              <div class="blog-post">
                <h2 class="blog-post-title">
                  <a href="<?php the_permalink();?>">
                    <?php the_title();?>
                  </a>
                </h2>
                <p class="blog-meta-post">
                  <?php the_time('F j, Y g:i a');?> by
                    <a href="<?php get_the_author_url(get_the_author_meta('ID'));?>">
                      <?php the_author();?>
                    </a>
                </p>
                <?php if(has_post_thumbnail()):?>
                  <div class="post-thum">
                    <?php the_post_thumbnail();?>
                  </div>
                <?php endif;?>
                <?php the_excerpt();?>
              </div>
          <?php endwhile;
            endif;?>
      </div>
  
    <!-- /.row -->
  <div class="col-lg-4 mb-4">
    <?php 
      get_sidebar();
    ?>
  </div> 
  </div> 
  </div>

  <!-- /.container -->
  <?php get_footer();?>