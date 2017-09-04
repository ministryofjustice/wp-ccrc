<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('<span class="more-link">Read more ></span>', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);

/**
 * add_query_vars_filter function.
 * 
 * @access public
 * @param mixed $vars
 * @return void
 */
function add_query_vars_filter($vars){
  $vars[] = "case_name";
  $vars[] = "reference";
  $vars[] = "appeal_outcome";
  $vars[] = "offences";
  $vars[] = "judgement";
  $vars[] = "sort_case";
  return $vars;
}
add_filter('query_vars', 'add_query_vars_filter');

/**
 * modify_date_picker_date_format function.
 * 
 * @access public
 * @param mixed $format
 * @param mixed $field_id
 * @return void
 */
function modify_date_picker_date_format($format, $field_id) {
  return 'yy-mm-dd';
}
add_filter('ot_type_date_picker_date_format', 'modify_date_picker_date_format', 10, 2);

/**
 * Get attachment ID from its URL
 *
 * @param string $url
 * @return bool|int The Attachment ID or FALSE if not found
 */
function get_attachment_id_from_src( $url ) {
	global $wpdb;

	// First: try to find an exact match for the attachment GUID
	$query = $wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid = %s LIMIT 1", $url);
	$id = $wpdb->get_var($query);
	if (!is_null($id)) {
		return (int) $id;
	}

	// Fallback: try and do a fuzzier (but slower) LIKE match
	// Drop everything before /uploads/ in the image src so we can match against different hostnames
	$url_part = substr($url, strpos($url, '/uploads/'));
	$like = '%' . $wpdb->esc_like($url_part);
	$query = $wpdb->prepare("SELECT ID FROM {$wpdb->posts} WHERE guid LIKE %s LIMIT 1", $like);
	$id = $wpdb->get_var($query);
	if (!is_null($id)) {
		return (int) $id;
	}

	// Else: attachment not found, return false
	return false;
}

/* Make embedded videos reponsive */

function wrap_embed_with_div($html, $url, $attr) {
     return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter('embed_oembed_html', __NAMESPACE__ . '\\wrap_embed_with_div', 10, 3);

