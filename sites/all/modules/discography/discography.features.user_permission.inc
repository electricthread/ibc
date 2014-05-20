<?php
/**
 * @file
 * discography.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function discography_user_default_permissions() {
  $permissions = array();

  // Exported permission: create album content
  $permissions['create album content'] = array(
    'name' => 'create album content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: create mp3_track content
  $permissions['create mp3_track content'] = array(
    'name' => 'create mp3_track content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any album content
  $permissions['delete any album content'] = array(
    'name' => 'delete any album content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete any mp3_track content
  $permissions['delete any mp3_track content'] = array(
    'name' => 'delete any mp3_track content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own album content
  $permissions['delete own album content'] = array(
    'name' => 'delete own album content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: delete own mp3_track content
  $permissions['delete own mp3_track content'] = array(
    'name' => 'delete own mp3_track content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any album content
  $permissions['edit any album content'] = array(
    'name' => 'edit any album content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit any mp3_track content
  $permissions['edit any mp3_track content'] = array(
    'name' => 'edit any mp3_track content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own album content
  $permissions['edit own album content'] = array(
    'name' => 'edit own album content',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'client',
      3 => 'developer',
    ),
    'module' => 'node',
  );

  // Exported permission: edit own mp3_track content
  $permissions['edit own mp3_track content'] = array(
    'name' => 'edit own mp3_track content',
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
