<?php
register_nav_menus(array(
    "menu-header" => "Menú Header",
    "menu-footer-1" => "Menú Footer 1",
    "menu-footer-2" => "Menú Footer 2",
));
add_theme_support('post-thumbnails');

register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));

register_sidebar(array(
    'name' => 'after-posts',
    'before_widget' => '<div class="anuncios">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
));