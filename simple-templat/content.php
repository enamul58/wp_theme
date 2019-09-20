<h3><?php the_title();?></h3>

<small>Posted on:<?php the_time('F j,Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?> </small>
<p class="card-text"><?php the_content();?></p>


<a href="<?php the_permalink()?>" class="btn btn-primary">Learn More</a>
<br/>


Lorem ipsum dolor sit amet.