<?php
/**
 * Template Name: Contact Us
 */
get_header();
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
<style>.embed-container { position: relative; margin-top: -3em; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2967.892742790698!2d-87.73776458455701!3d41.93815607921745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fcdaa9682ab05%3A0x4e3daa322c57d3f5!2s4311+W+Belmont+Ave%2C+Chicago%2C+IL+60641!5e0!3m2!1sen!2sus!4v1550102378180' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></div>

<!--Sections-->
<?php if(get_field("sections")) $sections = array_flip(get_field("sections")); ?>
<?php if(isset($sections["latest"])) get_template_part("inc/home-latest-projects");?>
<?php if(isset($sections["project_form"])) get_template_part("inc/home-contact-form");?>
<?php if(isset($sections["testimonials"])) get_template_part("inc/home-testimonials");?>
<?php if(isset($sections["accessories"])) get_template_part("inc/home-accessories");?>
<!--End Sections-->
<?php get_footer(); ?>
