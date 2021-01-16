<?php $terms = get_terms( array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
    'exclude'   => array(22, 15)
) );
?>

<div class="container productLine">
  <div class="row">
    <div class="col">
      <h2>
        Our <br>
        Product Line
      </h2>

      <div class="row catList align-items-end">
				<?php foreach ( $terms as $term ): ?>
          <div class="col-xs-12 col-md-6 col-lg-4 item">
						<?php $pdf = get_field( "catalog", $term );
						if ( $pdf ):
							?>
              <a target="_blank" download class=" pdf" href="<?php echo $pdf["url"] ?>">
                <span>Download catalog</span>
                <img src="<?php echo get_template_directory_uri() ?>/img/pdf.png" alt="">
              </a>
						<?php endif; ?>
            <div class="boxItem">
              <div class="name">
								<?php echo $term->name ?>
              </div>
              <!--#####################-->
              <div class="productsSlider">
								<?php $args = [
										'post_type'      => 'product',
										'posts_per_page' => 5,
										'tax_query'      => [
												[
														'taxonomy' => 'product_cat',
														'terms'    => $term->term_id,
												],
										],
									// Rest of your arguments
								];
								$posts      = get_posts( $args );
								foreach ( $posts as $p ):
									?>
                  <div class="product">
                    <a href="<?php echo get_permalink( $p->ID ) ?>">
                      <div class="param">
                        <span>Name:</span> <?php echo $p->post_title ?>
                        <?php $list = get_field("parameters_list", $p->ID);
                        if($list):
                          foreach ($list as $l):?>
                        <br>
                            <span><?php echo $l["name"]?>:</span>
                            <?php echo $l["value"]?>
                        <?php endforeach;
                          endif;
                        ?>
                      </div>
                      <div class="imgBox text-center w-75 m-auto py-3">
                        <img
                            src="<?php echo get_the_post_thumbnail_url( $p, "full" ); ?>"
                            alt="<?php echo $p->post_title ?>"
                            class="img-fluid d-inline-block"
                        >
                      </div>
                    </a>
                  </div>
								<?php endforeach; ?>
              </div>
              <!--#####################-->
            </div>
            <div class="buttonBox text-center">
              <a href="/product-category/<?php echo $term->slug ?>"
                 class="button"><?php echo get_field( "button_text", $term ) ?: "View all" ?></a>
            </div>
          </div>
				<?php endforeach; ?>
      </div>
    </div>
  </div>
</div>
