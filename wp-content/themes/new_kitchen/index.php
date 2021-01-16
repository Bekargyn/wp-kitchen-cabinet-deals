<?php get_header(); ?>

  <div class="container">
		<?php
		if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				?>
        <div class="row">
          <div class="col">
            <h2>
              <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </h2>
            <article>
							<?php the_content(); ?>
            </article>
          </div>
        </div>
				<?php
			}
		} else {
			?>
      <h1 class="text-center">No Post Found</h1>
			<?php
		}
		?>
  </div>

<?php get_footer(); ?>