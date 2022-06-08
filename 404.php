<?php
  get_header();
?>

  <br>
  <div id="main-content" class="container">
    <header>
      <h3 class="page-heading">Page Not Found</h1>
      <p class="page-heading">The page you requested may have moved or no longer exists</p>
      <hr>
    </header>

    <!-- MAIN AREA -->
    <div class="row gx-2">
      <div class="col-md-9">
        <!-- LOOP CODE -->
        <p class="lead">Sorry, the page you are looking for does not exist.</p>
        <h5>
          <a href="https://thealphengroup.com">
            Return to the blog
          </a>
        </h5>
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
