<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jndlh
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

		
  <!-- Favicons -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/img/File22023_1_3_125367_c861ec.jpeg" rel="icon">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/img/File12023_1_3_125351_d4bf76.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200;300;400&family=Cairo:wght@600;800&family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_directory'); ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/css/variables.css" rel="stylesheet">
  <!-- <link href="css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  

  <!-- =======================================================
  * Template Name: HeroBiz - v2.4.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body dir="rtl">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="home" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo 
         <h1>HeroBiz<span>.</span></h1>-->
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/File12023_1_3_125351_d4bf76.png" alt=""> 
       
      </a>

      <nav id="navbar" class="navbar">
        <ul>

       
          <li><a class="nav-link scrollto" href="home"><span>????????????????</span> </a></li>

          <li><a class="nav-link scrollto" href="home#about">???? ??????</a></li>
          <li><a class="nav-link scrollto" href="home#features">??????????????</a></li>
          <li><a class="nav-link scrollto" href="home#services">???????????????? </a></li>
          <li><a class="nav-link scrollto" href="group">????????????????</a></li>
          <li><a class="nav-link scrollto"  href="suppliers">????????????????</a></li>
          <li><a class="nav-link scrollto"  href="blog-details.html">??????????????</a></li>
          <!--   
                      <li><a class="nav-link scrollto" href="index.html#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="index.html#team">????????????</a></li>

               <li class="dropdown"><a href="#"><span>????????????????</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="index.html">Home 1 - index.html</a></li>
              <li><a href="index-2.html">Home 2 - index-2.html</a></li>
              <li><a href="index-3.html">Home 3 - index-3.html</a></li>
              <li><a href="index-4.html" class="active">Home 4 - index-4.html</a></li>
            </ul>
          </li>
            <li class="dropdown megamenu"><a href="#"><span>Mega Menu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li>
                <a href="#">Column 1 link 1</a>
                <a href="#">Column 1 link 2</a>
                <a href="#">Column 1 link 3</a>
              </li>
              <li>
                <a href="#">Column 2 link 1</a>
                <a href="#">Column 2 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 3 link 1</a>
                <a href="#">Column 3 link 2</a>
                <a href="#">Column 3 link 3</a>
              </li>
              <li>
                <a href="#">Column 4 link 1</a>
                <a href="#">Column 4 link 2</a>
                <a href="#">Column 4 link 3</a>
              </li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
        
          <li><a class="nav-link scrollto" href="home#contact">?????????? ???????? </a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="home#about">?????????? ???????? </a>

    </div>
  </header><!-- End Header --> 	
