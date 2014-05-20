<?php
/**
 * @file
 * discography.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function discography_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_website_audio_player|node|mp3_track|form';
  $field_group->group_name = 'group_website_audio_player';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'mp3_track';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Website Audio Player',
    'weight' => '5',
    'children' => array(
      0 => 'field_audio_checkbox',
      1 => 'field_site_audio_sort',
    ),
    'format_type' => 'fieldset',
    'format_settings' => array(
      'formatter' => 'collapsible',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'required_fields' => 1,
      ),
    ),
  );
  $export['group_website_audio_player|node|mp3_track|form'] = $field_group;

  return $export;
}
