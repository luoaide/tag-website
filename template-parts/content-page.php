<article id="post-<?php the_ID(); ?>">

  <a href=" <?php echo get_permalink(); ?> ">
    <h2 class="article-title">
      <?php
        the_title();
      ?>
    </h2>
  </a>

	<div class="article-content lead">
		<?php
      the_content();
		?>
	</div>


</article>
