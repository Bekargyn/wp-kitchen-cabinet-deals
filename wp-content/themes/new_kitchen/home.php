<?php
/**
 * Template Name: Home
 */
get_header();

$slider = get_field( "slider" );
$total  = count( $slider );
?>
<!--#################################-->
<div class="bannerSlider">
	<?php foreach ( $slider as $k => $slide ): ?>
    <div class="slide" style="background-image: url('<?php echo $slide["image"]["url"] ?>')">
      <img
          class="img-fluid w-100 mainImg"
          src="<?php echo $slide["image"]["url"] ?>"
          alt="<?php echo $slide["image"]["description"] ?>"
      >
      <div class="textBox container">
        <div class="row">
          <div class="col">
            <!--##############-->
            <div class="arrows">
              <img class="slick-prev" src="<?php echo get_template_directory_uri() ?>/img/arrow_banner.png">
              <span class="current">
				    	  <?php echo( $k + 1 ) ?> / <?php echo $total ?>
			        </span>
              <img class="slick-next" src="<?php echo get_template_directory_uri() ?>/img/arrow_banner.png">
            </div>
            <!--##############-->
            <h1 class="text">
							<?php echo $slide["text"] ?>
            </h1>
						<?php if ( $slide["url"] ): ?>
              <a class="button" href="<?php echo $slide["url"] ?>">
								<?php echo $slide["button_text"] ?>
              </a>
						<?php endif; ?>
            <!--##############-->
          </div>
        </div>
      </div>
    </div>
	<?php endforeach; ?>
</div>
<!--#################################-->
<!--#################################-->

<?php get_template_part("inc/home-product-line")?>
<?php get_template_part("inc/home-latest-projects")?>
<?php get_template_part("inc/home-contact-form")?>
<?php get_template_part("inc/home-testimonials")?>
<?php get_template_part("inc/home-accessories")?>

<?php get_footer(); ?>
