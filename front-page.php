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

    <!-- TAG Ukraine Strategy -->
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <h1 class="display-5 premium-section-title">[Updated] TAG Ukraine Strategy</h1>
        <p class="lead"> As Russia's war of aggression enters its second year, this critical TAG update addresses the scope of Western support required to reinforce the goal of the re-estabishment of Ukraine as a secure and sovereign European democracy.</p>
            <hr>
            <p class="lead"> Version 2: Released June, 2023 </p>
            <p class="lead"> Version 1: Released February, 2023 </p>
              <hr>
        <div class="row row-eq-height g-2">
          <?php
          $UKR_query = new WP_Query( array(
            "tag" => "UkraineTAG",
            "posts_per_page" => 2
            ));
          if($UKR_query->have_posts()) {
                    while ($UKR_query->have_posts()) {
                        $UKR_query->the_post();
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

    <div class="section-banner"><h5> Category Highlight </h5></div>
    <div class="section-separator"></div>

    <!-- TAG PREMIUM BLOG -->
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <h1 class="display-5 premium-section-title"> TAG Premium Blog </h1>
        <p class="lead"> Each month, a member of TAG publishes a concise piece on a topic of their choosing. The Premium Blog is editted by Judy Dempsey.</p>
        <hr>

          <div class="row g-2">
            <?php
              $prem_query = new WP_Query( array(
                "category_name" => "TAG Premium",
                "posts_per_page" => 4
              ));
              $prem_counter = 0;
              if($prem_query->have_posts()) {
                while ($prem_query->have_posts()) {
                  $prem_query->the_post();
                  if($prem_counter == 0) {
                    ?> <div class="col"> <?php
                    get_template_part( "template-parts/content", "premium", array("postID"=> $post->ID));
                    ?> </div> <?php
                  } else if($prem_counter == 1) {
                    ?> <div class="col"> <?php
                    get_template_part( "template-parts/content", "premiumpreview", array("postID"=> $post->ID));
                  } else if($prem_counter == 3){
                    get_template_part( "template-parts/content", "premiumpreview", array("postID"=> $post->ID));
                    ?> </div> <?php
                  } else {
                    get_template_part( "template-parts/content", "premiumpreview", array("postID"=> $post->ID));
                  }
                  $prem_counter = $prem_counter + 1;
                }
              }
            ?>
          </div>
      </div>
    </section>

    <!-- SPOTLIGHT-->
    <div class="section-banner"><h5>Spotlight</h5></div>
    <div class="section-separator"></div>
    <section class="front-page-section row-theme-dark">
      <div class="container spotlight-section">
        <div class="row">
          <h1 class="centered">Wilton Park Conference on Future War and Deterrence<h1>
        </div>
        <div class="row">
            <p class="lead centered">
              Wilton Park and The Alphen Group jointly organised a three day, invitation only conference on future war and deterrence, bringing together over 60 leaders, experts, analysts and commentators from public policy and politics, the armed forces, the private sector, and from technology and innovation. Participants came from the democratic world across North America, Europe and Asia.
            </p>
        </div>
        <div class="row centered">
          <a href="https://thealphengroup.com/2022/10/31/the-future-war-and-deterrence-conference-report/">
            <button type="button" class="btn btn-outline-primary">READ MORE</button>
          </a>
        </div>
      </div>
    </section>

  </div>
<?php
  get_footer();
?>
