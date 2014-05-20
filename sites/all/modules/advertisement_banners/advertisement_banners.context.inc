<?php
/**
 * @file
 * advertisement_banners.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function advertisement_banners_context_default_contexts() {
  $export = array();

  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'banner_blocks';
  $context->description = 'Places sidebar banner blocks';
  $context->tag = 'default layout';
  $context->conditions = array();
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-banners-banner_sidebar_btm' => array(
          'module' => 'views',
          'delta' => 'banners-banner_sidebar_btm',
          'region' => 'sidebar_first',
          'weight' => '-8',
        ),
        'views-banners-banner_sidebar_top' => array(
          'module' => 'views',
          'delta' => 'banners-banner_sidebar_top',
          'region' => 'sidebar_first',
          'weight' => '-12',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Places sidebar banner blocks');
  t('default layout');
  $export['banner_blocks'] = $context;

  return $export;
}
