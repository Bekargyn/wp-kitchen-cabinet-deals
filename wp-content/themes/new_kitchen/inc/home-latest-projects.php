<?php
$frontpage_id = get_option( 'page_on_front' );
$projects = get_field( "latest_projects", $frontpage_id );
$projects = array_reverse( $projects );

$total = count( $projects );
?>

<!--Title-->
<div class="container our-latest">
  <div class="row">
    <div class="col">
      <h2>
        Our Latest <br>
        projects
      </h2>
    </div>
  </div>
</div>
<!--Our Latest-->
<div class="our-latest mb-100">
  <div class="slideLatestProjects">
		<?php foreach ( $projects as $k => $pr ): ?>
      <div class="slide"
           style="padding-left: <?php echo( ( $k + 1 ) * 80 ) ?>px; padding-right: <?php echo( ( $total - ( $k + 1 ) ) * 80 ) ?>px;">
        <!--margin-left: -<?php echo( ( $total - ( $k + 1 ) ) * 80 ) ?>px-->
        <div class="position-relative slideBox">
          <div
              class="title"
              style="background-color: <?php echo $pr["color"] ?>"
          >
            <div class="arrow" style="border-top-color: <?php echo $pr["color"] ?>"></div>
						<?php echo $pr["title"] ?>
          </div>
          <div class="imgSlide variable-width">
						<?php foreach ( $pr["images"] as $img ): ?>
              <img
                  src="<?php echo $img["url"] ?>"
                  alt="<?php echo $img["description"] ?>"
              >
						<?php endforeach; ?>
          </div>
        </div>
      </div>
		<?php endforeach; ?>
  </div>
</div>

