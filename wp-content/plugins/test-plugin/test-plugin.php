<?php

/*
Plugin Name: Test plugin
Description: Test technique
Version: 0.1
Author: Jérémy Dutheil
*/

function create_voitures()
{
  register_post_type(
    'voitures',
    [
      'labels' => [
        'name' => __('Voitures'),
        'singular_name' => __('Voiture')
      ],
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'supports' => array('editor')
    ]
  );
}

add_action('init', 'create_voitures');

function create_marques()
{
  $labels = [
    'name' => _x('Marques', 'marques des voitures'),
    'singular_name' => _x('Marque', 'marque de la voiture'),
  ];

  register_taxonomy(
    'marques',
    'voitures',
    [
      'hierarchical' => false,
      'labels' => $labels,
      'show_ui' => true,
      'has_archive' => true,
      'show_in_rest' => true
    ]
  );
}

add_action('init', 'create_marques');

function init_acf()
{
  if (function_exists('acf_register_block')) {
    acf_register_block(
      [
        'name' => 'voitures',
        'title' => __('Voitures'),
        'description' => __('Liste des voitures'),
        'render_callback' => 'voitures_callback',
        'category' => 'common',
        'keywords' => ['voitures']
      ]
    );

    acf_register_block(
      [
        'name' => 'marques',
        'title' => __('Marques'),
        'description' => __('Liste des marques'),
        'render_callback' => 'marques_callback',
        'category' => 'common',
        'keywords' => ['marques']
      ]
    );
  }
}

add_action('acf/init', 'init_acf');

function voitures_callback()
{
  $args = [
    'post_type' => 'voitures',
    'post_status' => 'publish',
    'post_per_page' => '20',
  ];

  $loop = new WP_Query($args);

  while ($loop->have_posts()) {
    $loop->the_post();

    echo the_title() . '<br />';
  }

  wp_reset_postdata();
}

function marques_callback()
{
  $args = [
    'taxonomy' => 'marques',
    'hide_empty' => false
  ];

  $terms = get_terms($args);

  foreach ($terms as $term) {
    echo $term->name . '<br />';
  }
}
