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
    <nav class="navbar navbar-light navbar-expand-lg">
      <div class="container-lg">

        <a class="navbar-brand" href="https://thealphengroup.com">
          <span class="head-text">
            <?php echo get_bloginfo("name"); ?>
          </span>
          <br>
          <span class="subhead-text">
            <?php echo get_bloginfo("description"); ?>
          </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
            wp_nav_menu(
              array(
                "menu" => "primary",
                "container" => "",
                "theme_location" => "primary",
                "items_wrap" => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0">%3$s</ul>'
              )
            );
            /* in wordpress... in menu settings, go in and modify the css classes for each option in the menu" */
            /* to add icon... paste html directly into the Worpress menu html */
          ?>

        </div>
      </div>
    </nav>

  </header>
