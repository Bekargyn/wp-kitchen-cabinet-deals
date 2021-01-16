<?php $banner= get_field("banner");?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title><?php wp_title( " " ); ?></title>

	<?php wp_head(); ?>
</head>
<body <?php body_class(isset($banner["image"])?"absolute-header":"")?>>

<div class="preloader">
  <div class="circle">
    <div class="inner"></div>
  </div>
</div>

<div class="mainWrapper">
  <header>
    <div class="container">
      <div class="row justify-content-between py-3 py-lg-5">
        <div class="col-6">
          <a class="logo" href="<?php bloginfo("url")?>">
            <img
                class="img-fluid mr-3"
                src="<?php echo get_template_directory_uri()?>/img/logo.png"
                alt="<?php bloginfo("title")?>"
            >
            <span class="d-none d-lg-inline-block">
              <?php bloginfo("title")?>
            </span>
          </a>
        </div>
        <div class="col-6 text-right text-nowrap">
           <a  class="phone mr-3" href="tel:<?php the_field("phone","options")?>">
            <img class="img-fluid mr-3"
                 src="<?php echo get_template_directory_uri()?>/img/phone.png"
                 alt="<?php the_field("phone","options")?>"
            >
            <span class="d-none d-sm-inline-block">
              <?php the_field("phone","options")?>
            </span>
          </a>
          <button class="hamburger hamburger--emphatic" id="mainMenuButton" type="button">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
            </span>
          </button>
          <!--Menu-->
	        <?php
	        wp_nav_menu( array(
			        'menu' => 'Header Menu',
	        ) );
	        ?>
          <!--End Menu-->
        </div>
      </div>
    </div>
  </header>
