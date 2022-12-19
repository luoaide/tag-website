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
  <div class="row row-eq-height g-4">
      <!-- LOOP CODE -->
      <?php
        if(is_page("TAG Members")) {
          ?>
          <hr>
            <?php get_template_part("template-parts/content", "members"); ?>
          <?php
        }
        else if(have_posts()) {
          while (have_posts()) {
            the_post();
            the_content();
          }
  			}
      ?>
  </div> <!-- Row Wrapper -->
</div>

<br>

<?php
  get_footer();
?>
