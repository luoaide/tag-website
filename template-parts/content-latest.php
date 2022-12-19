<?php
  $recent_posts = wp_get_recent_posts(array(
		'numberposts' => 1, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
  $recentPost = $recent_posts[0];
?>

<div class="container-lg edge-to-edge">
  <div class="row">
    <div class="col-sm-6">
      <div class="recent-post-image-holder">
      <?php
      if(has_post_thumbnail($recentPost['ID'])) {
        echo get_the_post_thumbnail($recentPost['ID'], "full", ['class' => 'recent-post-image']);
      }
      ?>
      </div>
    </div>

    <div class="col-sm-6">
      <div class="preview-padded-col">
        <?php
          $category = get_the_category($recentPost['ID'])[0];
          $output = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"><div class="metadata recent-post-category"> <i class="far fa-folder"></i> ' . esc_html( $category->name ) . '</div></a>';
          echo $output;
        ?>
        <div class="metadata recent-post-date"> <i class="far fa-calendar"></i> <?php echo get_the_date(); ?> </div>

        <a href="<?php echo get_permalink($recentPost['ID']) ?>">
          <h1 class="recent-post-title display-5">
            <?php
            echo get_the_title($recentPost['ID']);
            ?>
          </h1>
        </a>
        <h1 class="recent-post-author display-3"> <?php echo get_post_meta($recentPost["ID"], 'author-byline', true); ?></h1>
        <p class="recetn-post-excerpt lead"> <?php //the_excerpt(); ?> </p>
      </div>
    </div>

  </div>
</div>
