<?php
/**
 * @file
 * discography.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function discography_context_default_contexts() {
  $export = array();

  $context = new stdClass;
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'album_block';
  $context->description = 'Places sidebar discography block.';
  $context->tag = 'default layout';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'music' => 'music',
        'music/*' => 'music/*',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-albums_tracks-disc_block' => array(
          'module' => 'views',
          'delta' => 'albums_tracks-disc_block',
          'region' => 'aside',
          'weight' => '-10',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Places sidebar discography block.');
  t('default layout');
  $export['album_block'] = $context;

  return $export;
}
