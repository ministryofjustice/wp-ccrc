<?php
/*include($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

$json = file_get_contents('press_releases.json');

$press = json_decode($json, true);

foreach($press as $p) {
  $date = DateTime::createFromFormat('l, d F Y', $p['post_date']);

  $post = array(
    'post_title' => $p['post_title'],
    'post_content' => $p['post_content'],
    'post_status' => 'publish',
    'post_type' => 'post',
    'post_date' => $date->format('Y-m-d H:i:s'),
    'post_category' => array(4)
  );

  $post_id = wp_insert_post($post);
}
