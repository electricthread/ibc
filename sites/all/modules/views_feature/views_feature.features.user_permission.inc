<?php
/**
 * @file
 * views_feature.features.user_permission.inc
 */

/**
 * Implements hook_user_default_permissions().
 */
function views_feature_user_default_permissions() {
  $permissions = array();

  // Exported permission: access all views
  $permissions['access all views'] = array(
    'name' => 'access all views',
    'roles' => array(
      0 => 'administrator',
    ),
    'module' => 'views',
  );

  // Exported permission: administer views
  $permissions['administer views'] = array(
    'name' => 'administer views',
    'roles' => array(
      0 => 'account manager',
      1 => 'administrator',
      2 => 'developer',
    ),
    'module' => 'views',
  );

  return $permissions;
}
