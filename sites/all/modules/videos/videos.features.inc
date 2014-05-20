<?php
/**
 * @file
 * videos.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function videos_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function videos_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function videos_node_info() {
  $items = array(
    'video' => array(
      'name' => t('Video'),
      'base' => 'node_content',
      'description' => t('Add embedded videos to your website.'),
      'has_title' => '1',
      'title_label' => t('Video Title'),
      'help' => '',
    ),
  );
  return $items;
}
