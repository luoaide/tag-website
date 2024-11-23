<?php
  get_header();
?>

  <div id="main-content">

    <!-- INTRO AREA -->
    <section class="">
      <?php
        get_template_part( "template-parts/content", "intro");
      ?>
    </section>

    <!--SPOTLIGHT-->
    <div class="section-banner"><h5>Spotlight</h5></div>
    <div class="section-separator"></div>
    <section class="front-page-section row-theme-dark">
      <div class="container spotlight-section">
        <div class="row">
          <h1 class="centered"> Report: The Future Defence, Deterrence and Resilience Conference <h1>
        </div>
        <div class="row">
            <p class="lead centered">
            The Future Defence, Deterrence and Resilience Conference was the third in a trilogy of policy-focussed future war/defence conferences. The 2022 Future War and Deterrence Conference considered defence strategy going forward in an uncertain and strategically competitive world for the Alliance and Partners. The 2023 Future War, Strategy and Technology Conference examined the impact of Emerging and Disruptive Technologies (EDT) on Allied and Partner defence strategy. The Future Defence, Deterrence and Resilience Conference focuses on the balance to be struck between people protection and power projection, civil defence and military defence in the face of the hybrid war in which autocratic powers are already engaged against open, democratic societies. As such, the Conference explored the civil military partnerships that will be vital to affecting such resilience.
            </p>
        </div>
        <div class="row centered">
          <a href="https://thealphengroup.com/wp-content/uploads/2024/11/WP3395-FDDR-Report.pdf">
            <button type="button" class="btn btn-outline-primary">Download the report</button>
          </a>
        </div>
      </div>
    </section>


    <!-- LATEST POST AREA -->
    <div class="section-banner"><h5>Latest Post</h5></div>
    <div class="section-separator"></div>
    <section class="latest-section row-theme-light">
      <?php
        get_template_part( "template-parts/content", "latest");
      ?>
    </section>

     <!-- NEXT RECENT POSTS AREA -->
     <section class="front-page-section row-theme-dark">
      <div class="container-lg">
        <h2 class="centered">Recent Posts</h2>
        <div class="row row-eq-height g-2">
          <?php
            $displayNumber = 4;
            $recent_posts = wp_get_recent_posts(array(
              'numberposts' => $displayNumber + 1, // Number of recent posts thumbnails to display
              'post_status' => 'publish' // Show only the published posts
            ));
            $counter = 0;
            while($counter < $displayNumber) {
              get_template_part( "template-parts/content", "smallpreview", array("postID" => $recent_posts[$counter + 1]["ID"]));
              $counter = $counter + 1;
            }
          ?>
        </div>
      </div>
    </section>

    <!-- <div class="section-banner"><h5> Category Highlight </h5></div>
    <div class="section-separator"></div> -->
  
    <!-- TAG Russia Strategy -->
    <section class="front-page-section row-theme-light">
      <div class="container-lg premium-section">
        <h1 class="display-5 premium-section-title"> TAG Russia Strategy</h1>
        <p class="lead center"> We are determined to constrain and contest Russia’s aggressive actions and to counter its ability to conduct destabilising activities towards NATO and Allies. For our next Summit, we will develop recommendations on NATO’s strategic approach to Russia, taking into account the changing security environment.
        <div class="row row-eq-height g-2">
          <?php
          $RUSSIA_query = new WP_Query( array(
            "tag" => "RussiaStrategy",
            "posts_per_page" => 1
            ));
          if($RUSSIA_query->have_posts()) {
                    while ($RUSSIA_query->have_posts()) {
                        $RUSSIA_query->the_post();
                get_template_part( "template-parts/content", "widepreview", array("postID" => $post->ID));
            }
          }
          ?>
        </div>
      </div>
    </section> 

  </div>
<?php
  get_footer();
?>
