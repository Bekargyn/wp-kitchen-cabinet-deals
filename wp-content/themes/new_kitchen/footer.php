<?php if ( isset( $sections["footer_button"] ) ): ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <h2 class="mb-5">
          Dont See <br> What You Need?
        </h2>

        <a href="#footerForm" class="button mb-5 px-5">click here make place your order</a>
      </div>
    </div>
  </div>
<?php endif; ?>
<footer>

  <div class="container">
    <div class="row">
      <div class="col">

          <!--<div class="row">
            <div class="col-md-12 col-lg-4 col-xl-3"></div>
            <div class="col-md-12 col-lg-8 col-xl-9"></div>
          </div>-->

        <div class="row">
          <div class="yellow"></div>
          <div class="col-md-12 col-lg-4 col-xl-3">
						<h2 class="my-5">CONTACT <br> US</h2>
						<div class="address">
							<?php echo get_field( "address", "options" ); ?>
							<br>
							<a class="" href="mailto:<?php echo get_field( "email", "options" ); ?>"><u>Email Us</u></a>
							<br>
							Call:
							<a href="tel:<?php echo get_field( "phone", "options" ); ?>">
								<?php echo get_field( "phone", "options" ); ?>
							</a>
						</div>
            <div class="socials my-3">
							<?php $socials = get_field( "socials", "options" );
							if ( $socials ) {
								foreach ( $socials as $social ):
									?>
                  <a href="<?php echo $social["url"] ?>">
                    <img src="<?php echo $social["image"]["url"] ?>"
                         alt="<?php echo $social["image"]["description"] ?>">
                  </a>
								<?php endforeach;
							} ?>
            </div>
            <a target="_blank" href="https://www.google.com/maps/dir//41.9381561,-87.7355759/@41.938156,-87.735576,17z?hl=en-US" class="button mb-5">Get Directions</a>
          </div>
          <div id="footerForm" class="col-md-12 col-lg-8 col-xl-9 ">
						<h2 class="my-5 ml-lg-4">Make an appointment <br> or send a message</h2>
						<?php echo do_shortcode( '[contact-form-7 id="87" title="Contact form Footer"]' ); ?>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-lg-4 col-xl-3 text-uppercase py-5">
            KCD. Copyright. All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div><!--#mainWrapper-->
<?php wp_footer(); ?>
</body>
</html>
