<?php
/**
 * @file
 * base_feature.features.user_role.inc
 */

/**
 * Implements hook_user_default_roles().
 */
function base_feature_user_default_roles() {
  $roles = array();

  // Exported role: account manager
  $roles['account manager'] = array(
    'name' => 'account manager',
    'weight' => '3',
  );

  // Exported role: administrator
  $roles['administrator'] = array(
    'name' => 'administrator',
    'weight' => '5',
  );

  // Exported role: client
  $roles['client'] = array(
    'name' => 'client',
    'weight' => '2',
  );

  // Exported role: developer
  $roles['developer'] = array(
    'name' => 'developer',
    'weight' => '4',
  );

  return $roles;
}
