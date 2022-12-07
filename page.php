<?php
  get_header();
?>

<br>
<br>
<div class="container-lg">
  <div class="row">
      <h1 class="page-heading display-1"><?php the_title(); ?></h1>
        <?php
          if(has_excerpt()) {
            the_excerpt();
          }
        ?>
  </div>

  <!-- MAIN AREA -->
  <div class="row">
      <!-- LOOP CODE -->
      <?php
        if(is_page("TAG Members")) {
          ?>
          <hr>
          <div class="row">
            <?php get_template_part("template-parts/content", "members"); ?>
          </div>
          <?php
        }
        else if(have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part( "template-parts/content", "page" );
          }
  			}
      ?>
  </div> <!-- Row Wrapper -->
</div>

<?php
  get_footer();
?>
