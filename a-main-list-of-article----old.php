<?php
  get_header();
?>

  <br>
  <div id="main-content" class="container">
    <header>
      <h3 class="page-heading">Welcome to the Blog </h1>
      <p class="page-heading">Explore our recent posts below</p>
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
