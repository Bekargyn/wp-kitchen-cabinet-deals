<?php get_header();
global $product;
?>

  <div class="container">
    <div class="row">
      <div class="col">
        <button class="button yellow" onclick="history.back()">back to products list</button>
		<?php
		if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				$images = get_all_products_images_urls($product);
				?>
          <div class="row align-items-center my-5">
            <div class="col-xs-12 col-lg-6 col-xl-7">
              <div class="boxItem">
                <div class="productsSlider">
                  <?php foreach ($images as $img) {?>
                    <div class="product text-center">
                      <a data-fancybox="gallery"  href="<?php echo $img ?>">
                        <img
                            src="<?php echo $img?>"
                            alt="<?php echo $product->get_title()?>"
                            class="img-fluid d-inline-block mainImg"
                        >
                        <div class="text-right m-3">
                          <img
                              src="<?php echo get_template_directory_uri()?>/img/loop.png"
                              class="loop"
                          >
                        </div>
                      </a>
                    </div>
                  <?php } ?>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-lg-6 col-xl-5">
              <h1>
                <?php the_title(); ?>
              </h1>
              <h2><?php echo $product->get_price_html()?:"Call for price";?></h2>
              <article>
		            <?php the_content(); ?>
              </article>
            </div>
          </div>
				<?php if($img):?>
          <div class="row my-5 allImages">
           <?php foreach ($images as $img) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
              <a data-fancybox="gallery1" href="<?php echo $img?>" class="galleryBox">
                <img
                    src="<?php echo $img?>"
                    alt="<?php echo $product->get_title()?>"
                >
              </a>
            </div>
          <?php }?>
        </div>
        <?php endif;
			}
		} else {
			?>
      <h1 class="text-center">No Post Found</h1>
			<?php
		}
		?>
      </div>
    </div>
  </div>


<?php get_template_part( "inc/home-latest-projects" ) ?>

<?php get_footer(); ?>