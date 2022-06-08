<?php
  get_header();
?>

  <br>
  <div id="main-content" class="container">
    <header>
      <h3 class="page-heading">Search Results</h1>
      <p class="page-heading">These articles most closely match your search terms</p>
      <hr>
    </header>

    <!-- MAIN AREA -->
    <div class="row gx-2">
      <div class="col-md-9">
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

      <!-- SIDEBAR AREA -->
      <div class="col-md-3">
        <?php
          get_sidebar();
        ?>

      </div>
    </div> <!-- Row Wrapper -->

  </div>
<?php
  get_footer();
?>
