<?php

/**
 * Custom functions
 */

//Load CPTs

$cpt_declarations = scandir( get_template_directory() . "/lib/cpt/" );
foreach ( $cpt_declarations as $cpt_declaration ) {
	if ( $cpt_declaration[0] != "." )
		require get_template_directory() . '/lib/cpt/' . $cpt_declaration;
}

// /* Get attachment ID from URL */
// function get_attachment_id_from_src( $image_src ) {
// 	global $wpdb;
// 	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
// 	$id = $wpdb->get_var( $query );
// 	return $id;
// }

/**
 * Meta Boxes
 */
load_template( trailingslashit( get_template_directory() ) . 'lib/meta-boxes.php' );

/* Setup option tree */
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_use_theme_options', '__return_true' );
add_filter( 'ot_header_version_text', '__return_null' );

/* Shortcode for headings with icons */

add_shortcode( 'heading', 'heading_output' );
function heading_output( $atts, $content ) {
    $atts = shortcode_atts( array(
        'icon' => 'no-icon'
    ), $atts );
    return '<h2 class="' . $atts['icon'] . '">' . $content . '</h2>';
}

/**
 * Hide editor on homepage.
 *
 */
add_action('init', 'remove_editor_init');
function remove_editor_init() {
    // if post not set, just return
    // fix when post not set, throws PHP's undefined index warning
    if (isset($_GET['post'])) {
        $post_id = $_GET['post'];
    } else if (isset($_POST['post_ID'])) {
        $post_id = $_POST['post_ID'];
    } else {
        return;
    }
    $template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
    if ($template_file == 'page-home.php') {
        remove_post_type_support('page', 'editor');
    }
}

function get_offences_terms() {
    $offences = get_terms('offence' , ['fields' => 'names']);
    header('Content-Type: application/json');
    echo json_encode($offences);
    exit;
}
add_action('wp_ajax_get_offences_terms', 'get_offences_terms');
add_action('wp_ajax_nopriv_get_offences_terms', 'get_offences_terms');
