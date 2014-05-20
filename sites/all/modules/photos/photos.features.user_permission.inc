<?php
/**
 * @file
 * photos.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function photos_user_default_permissions() {
  $permissions = array();

  // Exported permission: create photo content
  $permissions['create photo content'] = array(
    'name' => 'create photo content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any photo content
  $permissions['delete any photo content'] = array(
    'name' => 'delete any photo content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own photo content
  $permissions['delete own photo content'] = array(
    'name' => 'delete own photo content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any photo content
  $permissions['edit any photo content'] = array(
    'name' => 'edit any photo content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own photo content
  $permissions['edit own photo content'] = array(
    'name' => 'edit own photo content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  return $permissions;
}
