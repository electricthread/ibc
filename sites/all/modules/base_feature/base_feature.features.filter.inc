<?php
/**
 * @file
 * base_feature.features.filter.inc
 */

/**
 * Implements hook_filter_default_formats().
 */
function base_feature_filter_default_formats() {
  $formats = array();

  // Exported format: Full HTML
  $formats['full_html'] = array(
    'format' => 'full_html',
    'name' => 'Full HTML',
    'cache' => '1',
    'status' => '1',
    'weight' => '-10',
    'filters' => array(
      'ckeditor_link_filter' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_url' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(
          'filter_url_length' => '72',
        ),
      ),
      'image_resize_filter' => array(
        'weight' => '0',
        'status' => '1',
        'settings' => array(
          'link' => 1,
          'link_class' => 'colorbox-load',
          'link_rel' => '',
          'image_locations' => array(
            'local' => 'local',
            'remote' => 0,
          ),
        ),
      ),
      'filter_autop' => array(
        'weight' => '1',
        'status' => '1',
        'settings' => array(),
      ),
      'filter_htmlcorrector' => array(
        'weight' => '10',
        'status' => '1',
        'settings' => array(),
      ),
      'media_filter' => array(
        'weight' => '10',
        'status' => '1',
        'settings' => array(),
      ),
    ),
  );

  return $formats;
}
