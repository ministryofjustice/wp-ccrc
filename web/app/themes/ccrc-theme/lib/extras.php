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


function get_attachment_id_from_src ($src) {
  global $wpdb;
  $reg = "/-[0-9]+x[0-9]+?.(jpg|jpeg|png|gif)$/i";
  $src1 = preg_replace($reg,'',$src);
  if($src1 != $src){
      $ext = pathinfo($src, PATHINFO_EXTENSION);
      $src = $src1 . '.' .$ext;
  }
  $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$src'";
  $id = $wpdb->get_var($query);
  return $id;
}

/* Make embedded videos reponsive */

function wrap_embed_with_div($html, $url, $attr) {
     return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
}
add_filter('embed_oembed_html', __NAMESPACE__ . '\\wrap_embed_with_div', 10, 3);

