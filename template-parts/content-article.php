<article id="post-<?php the_ID(); ?>">

  <a href=" <?php echo get_permalink(); ?> ">
    <h2 class="article-title">
      <?php
        the_title();
      ?>
    </h2>
  </a>

  <div class="article-header">
    <span class="meta-data"> <i class="far fa-calendar"></i> <?php echo get_the_date(); ?> </span>
    <span class="meta-data"> <i class="far fa-folder"></i> <?php the_category("</span> <span class='meta-data'>"); ?> </span>
  </div>

	<div class="article-content lead">
		<?php
      the_content();
		?>
	</div>

</article>
