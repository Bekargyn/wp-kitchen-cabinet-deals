<?php $args = [
		'post_type'      => 'product',
		'posts_per_page' => 4,
		'tax_query'      => [
				[
						'taxonomy' => 'product_cat',
						'terms'    => 22,
				],
		],
	// Rest of your arguments
];
$posts      = get_posts( $args );

if($posts):
  ?>
<div class="container accessoriesBlock mb-5">
  <div class="row">
    <div class="col">
      <h2 class="mb-5">need <br>  accessories?</h2>
      <div class="row justify-content-between">
      <?php foreach ( $posts as $p ):?>
        <div class="col-xs-12 col-sm-6 col-lg-auto d-flex flex-column align-items-center pb-5 justify-content-between">
          <div class="param align-self-sm-start">
            <span>Name:</span> <?php echo $p->post_title ?>
		        <?php $list = get_field("parameters_list", $p->ID);
		        if($list)
			        foreach ($list as $l):?>
                <br>
                <span><?php echo $l["name"]?>:</span>
				        <?php echo $l["value"]?>
			        <?php endforeach; ?>
          </div>
          <div class="imgBox text-center  py-3">
            <img
                src="<?php echo get_the_post_thumbnail_url( $p, "medium" ); ?>"
                alt="<?php echo $p->post_title ?>"
                class="img-fluid d-inline-block"
            >
          </div>
          <a href="<?php echo get_permalink($p->ID) ?>" class="button">View</a>
        </div>
      <?php endforeach;?>
      </div>
      <div class="text-center my-3">
        <a href="/product-category/accessories/" class="button">View ALL ACCESSORIES</a>
      </div>
    </div>
  </div>
</div>

<?php endif; ?>