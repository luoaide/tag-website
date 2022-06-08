<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TAG Home">
  <meta name="author" content="Aiden Roberts">
  <title>The Alphen Group</title>

	<?php
    wp_head();
  ?>

</head>

<body>

  <header class="header">

    <div class="container-fluid">
      <h1 class="heading">
        <a href="https://thealphengroup.com">
          <span class="head-text">
            <?php
              echo get_bloginfo("name");
            ?>
          </span>
        </a>
        <small class="text-muted subheading display-6"> <?php echo get_bloginfo("description"); ?> </small>
      </h1>
	  </div>

    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <?php
            // wp_nav_menu(
            //   array(
            //     "menu" => "primary",
            //     "container" => "",
            //     "theme_location" => "primary",
            //     "items_wrap" => '<ul id="" class="navbar-nav">%3$s</ul>'
            //   )
            // );
            /* in wordpress... in menu settings, go in and modify the css classes for each option in the menu" */
            /* to add icon... paste html directly into the Worpress menu html */
          ?>
        </div>
      </div>
    </nav> -->
    <div class="container-fluid">
      <div class="row">
        <?php
          wp_nav_menu(
            array(
              "menu" => "primary",
              "container" => "",
              "theme_location" => "primary",
              "items_wrap" => '<ul id="" class="menu-holder">%3$s</ul>'
            )
          );
          /* in wordpress... in menu settings, go in and modify the css classes for each option in the menu" */
          /* to add icon... paste html directly into the Worpress menu html */
        ?>
      </div>
    </div>

  </header>
