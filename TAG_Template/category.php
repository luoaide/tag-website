<?php
  get_header();
?>
  <br>
  <br>
  <div class="container-lg">
    <div class="row">
      <div class="col">
        <h1 class="page-heading display-1">Category: <strong><?php single_cat_title(); ?></strong></h1>
        <?php echo the_archive_description('<div class="page-heading lead">', '</div>'); ?>
      </div>
    </div>
  </div>

<div class="archive-background">

  <div class="container-lg">
    <div class="row g-2">
      <br>
      <h1 class="display-6 archive-section-title"> Recent Posts </h1>
      <br>
      <?php
        if(have_posts()) {
          while (have_posts()) {
            the_post();
            get_template_part( "template-parts/content", "smallpreview", array("postID"=> $post->ID));
          }
				}
      ?>
    </div> <!-- Row Wrapper -->
  </div>

  <br>

</div>

<?php
  get_footer();
?>
