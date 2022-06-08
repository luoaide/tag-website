<?php

function tag_theme_support() {
  // adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}
add_action("after_theme_setup", "tag_theme_support");


/* REGISTER MENUS AND SIDEBARS */
function tag_menus() {
  $locations = array(
    "primary" => "Primary Top",
    "footer" => "Footer Menu Items"
  );
  register_nav_menus($locations);
}
add_action("init", "tag_menus");

function tag_sidebars() {
	register_sidebar(
    array(
  		'name'          => 'Sidebar-Categories',
  		'id'            => 'sidebar-1',
  		'description'   => '',
  		'before_widget' => '<div class="sidebar">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h1 class="sidebar-title">',
  		'after_title'   => '</h1>',
	   )
  );
  register_sidebar(
    array(
  		'name'          => 'Sidebar-Search',
  		'id'            => 'sidebar-2',
  		'description'   => '',
  		'before_widget' => '<div class="sidebar">',
  		'after_widget'  => '</div>',
  		'before_title'  => '<h1 class="sidebar-title">',
  		'after_title'   => '</h1>',
	   )
  );
}
add_action('widgets_init', 'tag_sidebars');




/* ENQUEUE ALL THE SYTLES AND SCRIPTS */
function tag_register_styles() {
  $version = wp_get_theme()->get("Version");
  wp_enqueue_style("tag_style", get_template_directory_uri() . "/style.css", array("tag_bootstrap"), $version, "all");
  wp_enqueue_style("tag_fontawesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), "5.13.0", "all");
  wp_enqueue_style("tag_bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", array(), "5.0.2", "all");

}
add_action("wp_enqueue_scripts", "tag_register_styles");

function tag_register_scripts() {
  wp_enqueue_script("tag_jquery", "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
  wp_enqueue_script("tag_bootrap_js", "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), "5.0.2", true);
  wp_enqueue_script("tag_main", get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);
}
add_action("wp_enqueue_scripts", "tag_register_scripts");

?>
