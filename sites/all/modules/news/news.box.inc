<?php
/**
 * @file
 * news.box.inc
 */

/**
 * Implements hook_default_box().
 */
function news_default_box() {
  $export = array();

  $box = new stdClass;
  $box->disabled = FALSE; /* Edit this to true to make a default box disabled initially */
  $box->api_version = 1;
  $box->delta = 'news_block';
  $box->plugin_key = 'view';
  $box->title = '';
  $box->description = 'News Sidebar Box';
  $box->options = array(
    'view' => 'news--block',
    'settings' => array(),
    'view_object' => NULL,
    'view_more_text' => '',
    'view_more_link' => '',
    'expose_filters' => 0,
  );
  $export['news_block'] = $box;

  return $export;
}
