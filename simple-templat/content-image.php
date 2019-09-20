<h3>Image Post:<?php the_title();?></h3>

<small>Posted on: <?php the_time('F j,Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?> </small>
<div class="thumbnail-img"><?php the_post_thumbnail('medium');?></div>
<br/>
<a href="<?php the_permalink()?>" class="btn btn-primary">Learn More</a>

<br/>