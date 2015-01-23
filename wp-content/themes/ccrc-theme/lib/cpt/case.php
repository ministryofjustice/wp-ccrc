<?php

function case_post_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cases',
      'supports'      => array( 'title', 'excerpt', 'thumbnail' ),
      'has_archive'   => true
    );
    register_post_type( 'case', $args );
}

add_action( 'init', 'case_post_init' );

function case_taxonomy() {
  	$args = array(
    	'hierarchical' => true
  	);
  register_taxonomy( 'case_year', 'case', $args );
}

add_action( 'init', 'case_taxonomy', 0 );
