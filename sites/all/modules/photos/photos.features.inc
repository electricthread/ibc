<?php
/**
 * @file
 * photos.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function photos_ctools_plugin_api() {
  list($module, $api) = func_get_args();
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function photos_views_api() {
  list($module, $api) = func_get_args();
  if ($module == "views" && $api == "views_default") {
    return array("version" => "3.0");
  }
}

/**
 * Implements hook_node_info().
 */
function photos_node_info() {
  $items = array(
    'photo' => array(
      'name' => t('Photo'),
      'base' => 'node_content',
      'description' => t('Add photos to your site, which can be sorted by Galleries.'),
      'has_title' => '1',
      'title_label' => t('Photo Title'),
      'help' => '',
    ),
  );
  return $items;
}
