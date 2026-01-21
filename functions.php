<?php
add_action('wp_enqueue_scripts', function() {
  // Charge le style du thème parent
  wp_enqueue_style(
    'variations-style',
    get_template_directory_uri() . '/style.css'
  );

  // Charge le style du thème enfant (après le parent)
  wp_enqueue_style(
    'les-rh-onaturel-child-style',
    get_stylesheet_uri(),
    array('variations-style'),
    wp_get_theme()->get('Version')
  );
});
