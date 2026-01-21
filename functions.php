<?php
add_action('wp_enqueue_scripts', function () {
    // Charge d'abord le CSS du parent
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Puis le CSS du thème enfant (même si vide, c'est la base)
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        ['parent-style'],
        wp_get_theme()->get('Version')
    );
});
