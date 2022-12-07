<?php
  $postID = $args["postID"];
?>

<div class="row g-0">

  <div class="card premiumpreview-card">
    <div class="card-body">

      <span class="premiumpreview-post-date"> <i class="far fa-calendar"></i> <?php echo get_the_date("F"); ?> </span>

      <a href="<?php echo get_permalink($postID) ?>">
        <h4 class="card-title nextrecent-post-title">
          <?php
          echo get_the_title($postID);
          ?>
        </h1>
      </a>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo get_post_meta($postID, 'author-byline', true); ?></h6>
    </div>
  </div>

</div>
