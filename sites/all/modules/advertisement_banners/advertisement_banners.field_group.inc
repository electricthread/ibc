<?php
/**
 * @file
 * advertisement_banners.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function advertisement_banners_field_group_info() {
  $export = array();

  $field_group = new stdClass;
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_banner_link|node|banner|form';
  $field_group->group_name = 'group_banner_link';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'banner';
  $field_group->mode = 'form';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Banner Link',
    'weight' => '2',
    'children' => array(
      0 => 'field_banner_link',
      1 => 'field_target',
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
  $export['group_banner_link|node|banner|form'] = $field_group;

  return $export;
}
