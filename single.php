<?php
  get_header();
?>

<?php
if(have_posts()) {
  while (have_posts()) {
    the_post();
  }
}
?>
<div class="article-background">
  <?php
  if(has_post_thumbnail()) {
    the_post_thumbnail("full", ['class' => 'article-background-image']);
  } else {
  ?>
    <div class="article-background-noimage"></div>
  <?php
  }
  ?>
  <div class="container-sm">

    <div class="row">
      <div class="col article-lead">
        <div class="article-header">
          <?php
            $category = get_the_category()[0];
            $output = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '"><div class="metadata recent-post-category"> <i class="far fa-folder"></i> ' . esc_html( $category->name ) . '</div></a>';
            echo $output;
          ?>
          <div class="metadata recent-post-date"> <i class="far fa-calendar"></i> <?php echo get_the_date(); ?> </div>

        </div>

        <?php
          $background = get_post_meta($post->ID, 'background-contrast', true);
          if($background == "light") {
            echo '<h2 class="article-title-dark">';
            the_title();
            echo '</h2>';
            echo '<h1 class="article-author-dark display-6">';
            echo get_post_meta($post->ID, 'author-byline', true);
            echo '</h1>';
          } else {
            echo '<h2 class="article-title-light">';
            the_title();
            echo '</h2>';
            echo '<h1 class="article-author-light display-6">';
            echo get_post_meta($post->ID, 'author-byline', true);
            echo '</h1>';
          }
        ?>
      </div>
    </div>

    <!-- MAIN AREA -->
    <div class="row">
      <div class="col">
        <!-- LOOP CODE -->
        <?php
              get_template_part( "template-parts/content", "article" );
        ?>
      </div>
    </div>

    <div class="row gx-2">
      <div class="col-sm-6 left-arrow-holder arrow-buttons">
        <?php
          if(get_previous_post_link()) {
        ?>
            <i class='fas fa-chevron-circle-left'></i> Previous Article:
            <?php
              previous_post_link("<span class=''> %link </span>");
            ?>
        <?php
          }
        ?>
      </div>
      <div class="col-sm-6 right-arrow-holder arrow-buttons">
        <?php
          if(get_next_post_link()) {
        ?>
            Next Article:
            <?php
              next_post_link("<span class=''> %link </span>");
            ?>
            <i class="fas fa-chevron-circle-right"></i>
        <?php
          }
        ?>
      </div>
    </div>

  </div>
</div>
<?php
  get_footer();
?>
