<?php
$args = array(
		'posts_per_page'   => 1,
		'post_type'        => 'testimonials',
);
$posts_array = get_posts( $args );
if($posts_array) : $post = $posts_array[0];
	setup_postdata( $post );
?>

<div class="container testimonialsHome mb-5">
  <div class="row">
    <div class="col">
      <h2 class="mb-5">
        What People Say <br> About Us?
      </h2>
			
			<?php do_action( 'wprev_pro_plugin_action', 2 ); ?>
			<div class="row">
				<div class="col-lg-4 col-xl-3 text-center text-lg-right align-self-end just my-2 ml-auto my-lg-0">
          <a href="/reviews" class="button ">view All Reviews</a>
        </div>
			</div>

      <?php /*?><div class="row justify-content-between mb-5">
        <div class="col-lg-4 col-xl-auto  text-center my-2 my-lg-0">
	        <?php the_post_thumbnail("medium","class=img-fluid");?>
        </div>
        <div class="col text-center text-lg-left align-self-center tContent my-2 my-lg-0 ">
          <div class="tContent">
	          <?php the_content();?>
          </div>
          <p class="tTitle">
	          <?php the_title();?>
          </p>
          <p class="stars">
            <img class="img-fluid" src="<?php echo get_template_directory_uri()?>/img/stars.png" alt="star">
          </p>
        </div>
        <div class="col-lg-4 col-xl-3 text-center text-lg-right align-self-end my-2 my-lg-0">
          <a href="/testimonials" class="button ">view All Reviews</a>
        </div>
      </div><?php */?>

    </div>
  </div>
</div>

<?php endif; ?>