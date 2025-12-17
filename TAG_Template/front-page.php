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

    <!--SPOTLIGHT NSS 25 Section-->
    <div class="section-banner"><h5>Spotlight</h5> </div>
    <div class="section-separator"></div>
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <div class="row row-eq-height g-2">
          <h1 class="display-5 premium-section-title">HIGHLIGHT: U.S. NSS 2025</h1>
          <h3 class="premium-section-title">Collection of contributions on the U.S. National Security Strategy for 2025.</h3>
          <?php
          $NSS25_query = new WP_Query( array(
            "tag" => "TAG_NSS25",
            "posts_per_page" => 8
            ));
          if($NSS25_query->have_posts()) {
            while ($NSS25_query->have_posts()) {
                $NSS25_query->the_post();
                get_template_part( "template-parts/content", "smallpreview", array("postID" => $post->ID));
            }
          }
          ?>
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

    <!--SPOTLIGHT-->
    <div class="section-banner"><h5>Spotlight</h5> </div>
    <div class="section-separator"></div>
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <?php
        $category3 = "TAG Talks";
        $category_id3 = get_cat_ID($category3);
        $category_link3 = get_category_link( $category_id3 );
        ?>
        <h1 class="display-5 premium-section-title">TAG Talks</h1>
        <h3 class="premium-section-title">Julian Lindley French Interviews TAG Members</h3>
        <a href="<?php echo esc_url( $category_link3 ); ?>"><h3 class="lead center premium-section-title"> View all TAG Talks here</h3></a>
        <div class="row row-eq-height g-2">
          <?php
          $TAGTALKS_query = new WP_Query( array(
            "tag" => "TAGTALK",
            "posts_per_page" => 2
            ));
          if($TAGTALKS_query->have_posts()) {
            while ($TAGTALKS_query->have_posts()) {
                $TAGTALKS_query->the_post();
                get_template_part( "template-parts/content", "smallpreview", array("postID" => $post->ID));
            }
          }
          ?>
        </div>
      </div>
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

    <!--SPOTLIGHT-->
    <div class="section-banner"><h5>Spotlight</h5> </div>
    <div class="section-separator"></div>
    <!-- TAG Atlantic Charter Strategy -->
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <h1 class="display-5 premium-section-title">ATLANTIC CHARTER 2025</h1>
        <h3 class="premium-section-title">A NEW NATO DEAL FOR AMERICA</h3>
        <p class="lead center premium-section-title"> Atlantic Charter 2025 builds on TAG Transatlantic Compact 2024 by looking beyond the debate over spending 2%, 3% or even 4% of GDP on defense by the European Allies. To that end, the Charter focuses on the <strong> minimum military capabilities, capacities and structures NATO will need to do the job both implicit and explicit in SACEUR’s Family of Plans adopted at the 2023 Vilnius Summit</strong>. The Charter is based on a worst-case analysis of the contingencies and assumptions with which NATO’s defense and deterrence posture could have to contend.
          <div class="row row-eq-height g-2">
          <?php
          $ATLANTICCHARTER2025_query = new WP_Query( array(
            "tag" => "AtlanticCharter2025",
            "posts_per_page" => 1
            ));
          if($ATLANTICCHARTER2025_query->have_posts()) {
            while ($ATLANTICCHARTER2025_query->have_posts()) {
                $ATLANTICCHARTER2025_query->the_post();
                get_template_part( "template-parts/content", "widepreview", array("postID" => $post->ID));
            }
          }
          ?>
        </div>
      </div>
    </section> 

    <div class="section-banner"><h5>Spotlight</h5> </div>
    <div class="section-separator"></div>

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

    <div class="section-separator"></div>

  </div>
<?php
  get_footer();
?>
