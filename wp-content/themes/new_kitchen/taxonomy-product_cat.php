<?php
get_header();

$terms   = get_terms( array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'exclude'    => array( 15 )
) );
$current = get_queried_object()->term_id;
$args    = [
		'post_type'      => 'product',
		'posts_per_page' => - 1,
		'tax_query'      => [
				[
						'taxonomy' => 'product_cat',
						'terms'    => $current,
				],
		],
	// Rest of your arguments
];
$posts   = get_posts( $args );
?>

<div class="container">
  <div class="row">
    <div class="col">
      <h2>Our <br> Product Line</h2>

      <div class="listCategories mb-3">
				<?php foreach ( $terms as $term ): ?>
          <a
              href="/product-category/<?php echo $term->slug ?>"
              class="button mb-3 mr-2 <?php echo ( $current == $term->term_id ) ? "active" : "" ?>"
          >
						<?php echo $term->name ?>
          </a>
				<?php endforeach; ?>
      </div>

      <!--#########################-->
      <div class="row productList">
				<?php foreach ($posts	as $p):
					?>
          <div class="col-xs-12 col-md-6 col-lg-4 item">
            <div class="boxItem ">
              <div class="product">
                <a href="<?php echo get_permalink( $p->ID ) ?>">
                  <div class="param">
                    <span>Name:</span> <?php echo $p->post_title ?>
										<?php $list = get_field( "parameters_list", $p->ID );
										if ( $list ) {
											foreach ( $list as $l ):?>
                        <br>
                        <span><?php echo $l["name"] ?>:</span>
												<?php echo $l["value"] ?>
											<?php endforeach;
										} ?>
                  </div>
                  <div class="imgBox text-center w-75 m-auto py-3">
                    <img
                        src="<?php echo get_the_post_thumbnail_url( $p, "full" ); ?>"
                        alt="<?php echo $p->post_title ?>"
                        class="img-fluid d-inline-block"
                    >
                  </div>
                  <span class="button yellow">See Details</span>
                </a>
              </div>
            </div>
          </div>
				<?php endforeach; ?>
      </div>
      <!--#########################-->
    </div>
  </div>
</div>


<?php get_template_part( "inc/home-latest-projects" ) ?>
<?php get_template_part( "inc/home-accessories" ) ?>

<?php get_footer(); ?>
