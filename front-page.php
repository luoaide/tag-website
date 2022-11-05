<?php
  get_header();
?>

  <br>

  <div id="main-content">

    <!-- RECENT POSTS AREA -->
    <section class="front-page-section row-theme-light">
      <div class="container ">
        <h2> Recent Posts </h2>
        <!-- LOOP CODE -->
        <div id="recentPostsCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#recentPostsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Post 1"></button>
            <button type="button" data-bs-target="#recentPostsCarousel" data-bs-slide-to="1" aria-label="Post 2"></button>
            <button type="button" data-bs-target="#recentPostsCarousel" data-bs-slide-to="2" aria-label="Post 3"></button>
          </div>

          <div class="carousel-inner">
        <?php
          $counter  = 0;
          if(have_posts()) {
            while (have_posts()) {
              the_post();
              if($counter < 3) {
                // pass the value of $counter in through the $args array.... $args["counter"]
                get_template_part( "template-parts/content", "preview", array("counter"=> $counter));
              }
              $counter = $counter + 1;
            }
  				}
        ?>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#recentPostsCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#recentPostsCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>

        </div>
      </div>
    </section>

    <section class="front-page-section row-theme-dark">
      <!-- TAG FLAGSHIP PROJECTS 2023 -->
      <div class="container">
        <h2> TAG FLAGSHIP PROJECTS 2023 </h2>
        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ukraine Strategy Project</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>

        <div class="card" style="width: 18rem;">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">China and the Future War, Strategy and Technology Conference at Wilton Park</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="front-page-section row-theme-light">
      <!-- TAG MEMBERS CAROUSEL -->
      <div class="container">
        <h2>TAG Members</h2>
      </div>
    </section>

      <!-- SIDEBAR AREA -->
      <!-- <div class="col-md-3">
        <?php
          // get_sidebar();
        ?>

      </div> -->

  </div>
<?php
  get_footer();
?>
