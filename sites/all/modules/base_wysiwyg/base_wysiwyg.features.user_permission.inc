<?php
/**
 * @file
 * base_wysiwyg.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function base_wysiwyg_user_default_permissions() {
  $permissions = array();

  // Exported permission: access ckeditor link
  $permissions['access ckeditor link'] = array(
    'name' => 'access ckeditor link',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'ckeditor_link',
  );

  // Exported permission: administer ckeditor link
  $permissions['administer ckeditor link'] = array(
    'name' => 'administer ckeditor link',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'developer',
    ),
    'module' => 'ckeditor_link',
  );

  return $permissions;
}
