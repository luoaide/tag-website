<?php
  get_header();
?>

  <br>
  <div id="main-content" class="container">

    <!-- MAIN AREA -->
    <div class="row gx-2">
      <div class="col-lg-12">
        <!-- LOOP CODE -->
        <?php
          if(have_posts()) {
            while (have_posts()) {
              the_post();
              get_template_part( "template-parts/content", "article" );
            }
  				}
        ?>
      </div>
    </div>

    <div class="row gx-2">
      <div class="col-sm-6 left-arrow-holder arrow-buttons">
        <?php
          if(get_previous_post_link()) {
        ?>
            <i class='fas fa-chevron-circle-left'></i> Previous Article:
            <?php
              previous_post_link("<span class=''> %link </span>");
            ?>
        <?php
          }
        ?>
      </div>
      <div class="col-sm-6 right-arrow-holder arrow-buttons">
        <?php
          if(get_next_post_link()) {
        ?>
            Next Article:
            <?php
              next_post_link("<span class=''> %link </span>");
            ?>
            <i class="fas fa-chevron-circle-right"></i>
        <?php
          }
        ?>
      </div>
    </div>

  </div>
<?php
  get_footer();
?>
