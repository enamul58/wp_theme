<!DOCTYPE html>
<html<?php language_attributes();?>>

<head>

  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
      <?php bloginfo('name');?> 
      <?php is_front_page() ? bloginfo('description'): wp_title();?>
        
  </title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri()?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri()?>/css/modern-business.css" rel="stylesheet">


  <?php wp_head();?>

</head>
<?php
   if(is_front_page()):
    $awesome_class = array('awesome-class','my-class');
    else:
    $awesome_class = array('no-awesome-class');
    endif;
?>

<body <?php body_class($awesome_class);?>>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="margin-top: 30px;">
    
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
      wp_nav_menu( array(
        'theme_location'  => 'primery',
        'depth'           => 2,
        'container'       => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'navbarResponsive',
        'menu_class'      => 'navbar-nav ml-auto',
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker()
      ) );
      ?>
  </nav>

  