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
      <a href="https://thealphengroup.com">
        <img class="header-logo" src="wp-content/themes/tag-wordpress-template/assets/images/TAG_Logo.png" alt="">
      </a>
	  </div>
  </header>

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
