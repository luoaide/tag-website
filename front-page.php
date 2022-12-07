<?php
  get_header();
?>

  <div id="main-content">

    <!-- RECENT POSTS AREA -->
    <section class="first-section row-theme-light">
      <?php
        get_template_part( "template-parts/content", "recentleft");
      ?>
    </section>

    <!-- TAG PREMIUM BLOG -->
    <section class="front-page-section row-theme-dark">
      <div class="container-lg premium-section">
        <h1 class="display-5 premium-section-title"> TAG Premium Blog </h1>
          <div>
            <hr>
            <p class="lead"> Each month, a member of TAG publishes a concise piece on a salient topic of their choosing. The Premium Blog is editted by Judy Dempsey.</p>
            <hr>
          </div>

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

    <!-- NEXT RECENT POSTS AREA -->
    <section class="front-page-section row-theme-light">
      <div class="container-sm">
        <h2>Recent Posts</h2>
        <div class="row g-2">
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

    <!-- SPOTLIGHT-->
    <section class="front-page-section row-theme-dark">
      <div class="container spotlight-section">
        <h2>Spotlight</h2>
        <div class="row">
          <h1 class="">Wilton Park Conference on Future War and Deterrence<h1>
        </div>
        <div class="row">
            <p class="lead">
              Wilton Park and The Alphen Group jointly organised a three day, invitation only conference on future war and deterrence, bringing together over 60 leaders, experts, analysts and commentators from public policy and politics, the armed forces, the private sector, and from technology and innovation. Participants came from the democratic world across North America, Europe and Asia.
            </p>
        </div>
        <div class="row">
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
