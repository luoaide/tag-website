<?php
  $postID = $args["postID"];
?>

<div class="col-md-6">
  <div class="card">
    <div class="card-body nextrecent-card-body">
        <?php
          $category = get_the_category($postID)[0];
          $output = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"><div class="metadata nextrecent-post-category"> <i class="far fa-folder"></i> ' . esc_html( $category->name ) . '</div></a>';
          echo $output;
        ?>
        <div class="metadata nextrecent-post-date"> <i class="far fa-calendar"></i> <?php echo get_the_date('', $postID); ?> </div>

      <a href="<?php echo get_permalink($postID) ?>">
        <h4 class="card-title nextrecent-post-title">
          <?php
          echo get_the_title($postID);
          ?>
        </h4>
      </a>
      <p class="card-subtitle mb-2 text-muted"><?php echo get_post_meta($postID, 'author-byline', true); ?></p>
    </div>
  </div>
</div>
