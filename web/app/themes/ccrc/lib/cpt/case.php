<?php

function case_post_init() {
    $args = array(
      'public' => true,
      'label'  => 'Cases',
      'supports'      => array( 'title' ),
      'has_archive'   => true
    );
    register_post_type( 'case', $args );
}
add_action( 'init', 'case_post_init' );

function create_offence() {
	register_taxonomy(
		'offence',
		'case',
		array(
			'label' => __( 'Offence' ),
			'rewrite' => array( 'slug' => 'offence' ),
			'hierarchical' => false,
		)
	);
}
add_action( 'init', 'create_offence' );
