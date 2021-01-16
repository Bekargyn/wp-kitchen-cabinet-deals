<?php get_header();
$banner= get_field("banner");
if(isset($banner["image"])):
?>
<div class="mainBanner mb-5" style="background-image: url('<?php echo $banner["image"]["url"]?>')">
  <div class="titleBox container">
    <div class="row">
      <div class="col">
        <h1><?php the_title();?></h1>
        <a
            href="<?php echo $banner["button_url"]?>"
            class="button"
        ><?php echo $banner["button_text"]?></a>
      </div>
    </div>
  </div>
</div>
<?php else:?>
<h1><?php the_title();?></h1>
<?php endif; ?>

<!--Main Content-->
  <div class="container mb-5">
		<?php
		if ( have_posts() ) {
			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				?>
        <div class="row">
          <div class="col">
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
<!--End Main Content-->
<!--Sections-->
<?php if(get_field("sections")) $sections = array_flip(get_field("sections")); ?>
<?php if(isset($sections["latest"])) get_template_part("inc/home-latest-projects");?>
<?php if(isset($sections["project_form"])) get_template_part("inc/home-contact-form");?>
<?php if(isset($sections["testimonials"])) get_template_part("inc/home-testimonials");?>
<?php if(isset($sections["accessories"])) get_template_part("inc/home-accessories");?>
<!--End Sections-->
<?php get_footer(); ?>
