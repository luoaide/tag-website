<?php
  $postID = $args["postID"];
?>

<!-- this is the most recent post... make it big and give it a photo -->
<div class="card premium-preview-card-main">
  <?php
  if(has_post_thumbnail($postID)) {
    echo get_the_post_thumbnail($postID, "full", ['class' => 'card-img-top premium-image']);
  }
  ?>
  <div class="card-body">
    <span class="premiumpreview-post-date"> <i class="far fa-calendar"></i> <?php echo get_the_date("F"); ?> </span>

    <a href="<?php echo get_permalink($postID) ?>">
      <h1 class="card-title premium-card-title display-6">
        <?php
        echo get_the_title($postID);
        ?>
      </h1>
    </a>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo get_post_meta($postID, 'author-byline', true); ?></h6>
  </div>
</div>
