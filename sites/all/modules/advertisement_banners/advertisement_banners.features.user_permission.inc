<?php
/**
 * @file
 * advertisement_banners.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function advertisement_banners_user_default_permissions() {
  $permissions = array();

  // Exported permission: create banner content
  $permissions['create banner content'] = array(
    'name' => 'create banner content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any banner content
  $permissions['delete any banner content'] = array(
    'name' => 'delete any banner content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own banner content
  $permissions['delete own banner content'] = array(
    'name' => 'delete own banner content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete terms in 3
  $permissions['delete terms in 3'] = array(
    'name' => 'delete terms in 3',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'taxonomy',
  );

  // Exported permission: edit any banner content
  $permissions['edit any banner content'] = array(
    'name' => 'edit any banner content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own banner content
  $permissions['edit own banner content'] = array(
    'name' => 'edit own banner content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit terms in 3
  $permissions['edit terms in 3'] = array(
    'name' => 'edit terms in 3',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'taxonomy',
  );

  return $permissions;
}
