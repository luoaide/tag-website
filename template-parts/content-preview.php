<?php if($args["counter"] == 0){ ?>
    <div class="carousel-item active" data-bs-interval="1000000000">
<?php } else { ?>
    <div class="carousel-item" data-bs-interval="10000">
<?php } ?>

  <img src="wp-content/themes/tag-wordpress-template/assets/images/test-cover.jpg" class="carousel-photo d-block" alt="...">
  <div class="carousel-caption d-none d-md-block">
    <h5>First slide label</h5>
    <p>
      <?php
      the_title();
      ?>
    </p>
  </div>
</div>
