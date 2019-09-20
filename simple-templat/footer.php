<!-- Footer -->
  <footer class="py-5 bg-dark">
  	<div class="row">
	     <div class="col-md-4">		
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive2" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					  <span class="navbar-toggler-icon"></span>
					</button>
					<?php
						wp_nav_menu( array(
						  'theme_location'  => 'footer',
						  'depth'           => 2,
						  'container'       => 'div',
						  'container_class' => 'collapse navbar-collapse',
						  'container_id'    => 'navbarResponsive2',
						  'menu_class'      => 'navbar-nav ml-auto',
						  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						  'walker'          => new WP_Bootstrap_Navwalker()
						) );
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		
		</div>
		<div class="col-md-4">
		      <p class="m-0 text-center text-white">
		      	Copyright &copy;<?php echo Date('Y');?> -
		      	<?php if(is_active_sidebar('custom-footer'))
		    	{
		        	dynamic_sidebar('custom-footer');
		    	} ?>	
		      </p>
		</div> 
		<div class="col-md-4">   
		    <?php 
		    	
		    ?>
		</div>
	</div>

  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo get_template_directory_uri()?>/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri()?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php wp_footer();?>
</body>

</html>
