<?php 


$options['sites'] = array (
  0 => 'evanwillhite.evanwillhite.com',
  1 => 'ruckusfilm.evanwillhite.com',
  2 => '12southdev.evanwillhite.com',
  3 => 'ibcnashville.evanwillhite.com',
);
$options['profiles'] = array (
  0 => 'testing',
  1 => 'minimal',
  2 => 'artist_profile',
  3 => 'standard',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'dashboard' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/dashboard/dashboard.module',
        'basename' => 'dashboard.module',
        'name' => 'dashboard',
        'info' => 
        array (
          'name' => 'Dashboard',
          'description' => 'Provides a dashboard page in the administrative interface for organizing administrative tasks and tracking information within your site.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.14',
          'files' => 
          array (
            0 => 'dashboard.test',
          ),
          'dependencies' => 
          array (
            0 => 'block',
          ),
          'configure' => 'admin/dashboard/customize',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
        'info' => 
        array (
          'name' => 'Color',
          'description' => 'Allows administrators to change the color scheme of compatible themes.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'color.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'aggregator_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/aggregator/tests/aggregator_test.module',
        'basename' => 'aggregator_test.module',
        'name' => 'aggregator_test',
        'info' => 
        array (
          'name' => 'Aggregator module tests',
          'description' => 'Support module for aggregator related testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
        'info' => 
        array (
          'name' => 'Aggregator',
          'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'aggregator.test',
          ),
          'configure' => 'admin/config/services/aggregator/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'aggregator.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'trigger_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/trigger/tests/trigger_test.module',
        'basename' => 'trigger_test.module',
        'name' => 'trigger_test',
        'info' => 
        array (
          'name' => 'Trigger Test',
          'description' => 'Support module for Trigger tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.14',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
        'info' => 
        array (
          'name' => 'Trigger',
          'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'trigger.test',
          ),
          'configure' => 'admin/structure/trigger',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
        'info' => 
        array (
          'name' => 'Comment',
          'description' => 'Allows users to comment on and discuss published content.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'text',
          ),
          'files' => 
          array (
            0 => 'comment.module',
            1 => 'comment.test',
          ),
          'configure' => 'admin/content/comment',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'comment.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7009',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'drupal_system_listing_compatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
        'basename' => 'drupal_system_listing_compatible_test.module',
        'name' => 'drupal_system_listing_compatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing compatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'drupal_system_listing_incompatible_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
        'basename' => 'drupal_system_listing_incompatible_test.module',
        'name' => 'drupal_system_listing_incompatible_test',
        'info' => 
        array (
          'name' => 'Drupal system listing incompatible test',
          'description' => 'Support module for testing the drupal_system_listing function.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'ajax_forms_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/ajax_forms_test.module',
        'basename' => 'ajax_forms_test.module',
        'name' => 'ajax_forms_test',
        'info' => 
        array (
          'name' => 'AJAX form test mock module',
          'description' => 'Test for AJAX form calls.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'filter_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/filter_test.module',
        'basename' => 'filter_test.module',
        'name' => 'filter_test',
        'info' => 
        array (
          'name' => 'Filter test module',
          'description' => 'Tests filter hooks and functions.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'requirements1_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/requirements1_test.module',
        'basename' => 'requirements1_test.module',
        'name' => 'requirements1_test',
        'info' => 
        array (
          'name' => 'Requirements 1 Test',
          'description' => 'Tests that a module is not installed when it fails hook_requirements(\'install\').',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'database_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/database_test.module',
        'basename' => 'database_test.module',
        'name' => 'database_test',
        'info' => 
        array (
          'name' => 'Database Test',
          'description' => 'Support module for Database layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update_test_3' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_3.module',
        'basename' => 'update_test_3.module',
        'name' => 'update_test_3',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'menu_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/menu_test.module',
        'basename' => 'menu_test.module',
        'name' => 'menu_test',
        'info' => 
        array (
          'name' => 'Hook menu tests',
          'description' => 'Support module for menu hook testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'taxonomy_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/taxonomy_test.module',
        'basename' => 'taxonomy_test.module',
        'name' => 'taxonomy_test',
        'info' => 
        array (
          'name' => 'Taxonomy test module',
          'description' => '"Tests functions and hooks not used in core".',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'taxonomy',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_test.module',
        'basename' => 'system_test.module',
        'name' => 'system_test',
        'info' => 
        array (
          'name' => 'System test',
          'description' => 'Support module for system testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'requirements2_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/requirements2_test.module',
        'basename' => 'requirements2_test.module',
        'name' => 'requirements2_test',
        'info' => 
        array (
          'name' => 'Requirements 2 Test',
          'description' => 'Tests that a module is not installed when the one it depends on fails hook_requirements(\'install).',
          'dependencies' => 
          array (
            0 => 'requirements1_test',
            1 => 'comment',
          ),
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'ajax_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/ajax_test.module',
        'basename' => 'ajax_test.module',
        'name' => 'ajax_test',
        'info' => 
        array (
          'name' => 'AJAX Test',
          'description' => 'Support module for AJAX framework tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/module_test.module',
        'basename' => 'module_test.module',
        'name' => 'module_test',
        'info' => 
        array (
          'name' => 'Module test',
          'description' => 'Support module for module system testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'url_alter_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/url_alter_test.module',
        'basename' => 'url_alter_test.module',
        'name' => 'url_alter_test',
        'info' => 
        array (
          'name' => 'Url_alter tests',
          'description' => 'A support modules for url_alter hook testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'form_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/form_test.module',
        'basename' => 'form_test.module',
        'name' => 'form_test',
        'info' => 
        array (
          'name' => 'FormAPI Test',
          'description' => 'Support module for Form API tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'entity_crud_hook_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_crud_hook_test.module',
        'basename' => 'entity_crud_hook_test.module',
        'name' => 'entity_crud_hook_test',
        'info' => 
        array (
          'name' => 'Entity CRUD Hooks Test',
          'description' => 'Support module for CRUD hook tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'xmlrpc_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/xmlrpc_test.module',
        'basename' => 'xmlrpc_test.module',
        'name' => 'xmlrpc_test',
        'info' => 
        array (
          'name' => 'XML-RPC Test',
          'description' => 'Support module for XML-RPC tests according to the validator1 specification.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'common_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/common_test.module',
        'basename' => 'common_test.module',
        'name' => 'common_test',
        'info' => 
        array (
          'name' => 'Common Test',
          'description' => 'Support module for Common tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'common_test.css',
            ),
            'print' => 
            array (
              0 => 'common_test.print.css',
            ),
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update_test_1' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_1.module',
        'basename' => 'update_test_1.module',
        'name' => 'update_test_1',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'common_test_cron_helper' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/common_test_cron_helper.module',
        'basename' => 'common_test_cron_helper.module',
        'name' => 'common_test_cron_helper',
        'info' => 
        array (
          'name' => 'Common Test Cron Helper',
          'description' => 'Helper module for CronRunTestCase::testCronExceptions().',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_incompatible_module_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_module_version_dependencies_test.module',
        'basename' => 'system_incompatible_module_version_dependencies_test.module',
        'name' => 'system_incompatible_module_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible module version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_module_version_test (>2.0)',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'file_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/file_test.module',
        'basename' => 'file_test.module',
        'name' => 'file_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Support module for file handling tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_incompatible_module_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_module_version_test.module',
        'basename' => 'system_incompatible_module_version_test.module',
        'name' => 'system_incompatible_module_version_test',
        'info' => 
        array (
          'name' => 'System incompatible module version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'actions_loop_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/actions_loop_test.module',
        'basename' => 'actions_loop_test.module',
        'name' => 'actions_loop_test',
        'info' => 
        array (
          'name' => 'Actions loop test',
          'description' => 'Support module for action loop testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update_script_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_script_test.module',
        'basename' => 'update_script_test.module',
        'name' => 'update_script_test',
        'info' => 
        array (
          'name' => 'Update script test',
          'description' => 'Support module for update script testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'batch_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/batch_test.module',
        'basename' => 'batch_test.module',
        'name' => 'batch_test',
        'info' => 
        array (
          'name' => 'Batch API test',
          'description' => 'Support module for Batch API tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'error_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/error_test.module',
        'basename' => 'error_test.module',
        'name' => 'error_test',
        'info' => 
        array (
          'name' => 'Error test',
          'description' => 'Support module for error and exception testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'image_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/image_test.module',
        'basename' => 'image_test.module',
        'name' => 'image_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Support module for image toolkit tests.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'path_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/path_test.module',
        'basename' => 'path_test.module',
        'name' => 'path_test',
        'info' => 
        array (
          'name' => 'Hook path tests',
          'description' => 'Support module for path hook testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_dependencies_test.module',
        'basename' => 'system_dependencies_test.module',
        'name' => 'system_dependencies_test',
        'info' => 
        array (
          'name' => 'System dependency test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => '_missing_dependency',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_incompatible_core_version_dependencies_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_core_version_dependencies_test.module',
        'basename' => 'system_incompatible_core_version_dependencies_test.module',
        'name' => 'system_incompatible_core_version_dependencies_test',
        'info' => 
        array (
          'name' => 'System incompatible core version dependencies test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'system_incompatible_core_version_test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'theme_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/theme_test.module',
        'basename' => 'theme_test.module',
        'name' => 'theme_test',
        'info' => 
        array (
          'name' => 'Theme test',
          'description' => 'Support module for theme system testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system_incompatible_core_version_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/system_incompatible_core_version_test.module',
        'basename' => 'system_incompatible_core_version_test.module',
        'name' => 'system_incompatible_core_version_test',
        'info' => 
        array (
          'name' => 'System incompatible core version test',
          'description' => 'Support module for testing system dependencies.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '5.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'entity_cache_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_cache_test.module',
        'basename' => 'entity_cache_test.module',
        'name' => 'entity_cache_test',
        'info' => 
        array (
          'name' => 'Entity cache test',
          'description' => 'Support module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'entity_cache_test_dependency',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update_test_2' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/update_test_2.module',
        'basename' => 'update_test_2.module',
        'name' => 'update_test_2',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'entity_cache_test_dependency' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/entity_cache_test_dependency.module',
        'basename' => 'entity_cache_test_dependency.module',
        'name' => 'entity_cache_test_dependency',
        'info' => 
        array (
          'name' => 'Entity cache test dependency',
          'description' => 'Support dependency module for testing entity cache.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'session_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/tests/session_test.module',
        'basename' => 'session_test.module',
        'name' => 'session_test',
        'info' => 
        array (
          'name' => 'Session test',
          'description' => 'Support module for session data testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'simpletest' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/simpletest/simpletest.module',
        'basename' => 'simpletest.module',
        'name' => 'simpletest',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Provides a framework for unit and functional testing.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'simpletest.test',
            1 => 'drupal_web_test_case.php',
            2 => 'tests/actions.test',
            3 => 'tests/ajax.test',
            4 => 'tests/batch.test',
            5 => 'tests/bootstrap.test',
            6 => 'tests/cache.test',
            7 => 'tests/common.test',
            8 => 'tests/database_test.test',
            9 => 'tests/entity_crud_hook_test.test',
            10 => 'tests/entity_query.test',
            11 => 'tests/error.test',
            12 => 'tests/file.test',
            13 => 'tests/filetransfer.test',
            14 => 'tests/form.test',
            15 => 'tests/graph.test',
            16 => 'tests/image.test',
            17 => 'tests/lock.test',
            18 => 'tests/mail.test',
            19 => 'tests/menu.test',
            20 => 'tests/module.test',
            21 => 'tests/pager.test',
            22 => 'tests/password.test',
            23 => 'tests/path.test',
            24 => 'tests/registry.test',
            25 => 'tests/schema.test',
            26 => 'tests/session.test',
            27 => 'tests/tablesort.test',
            28 => 'tests/theme.test',
            29 => 'tests/unicode.test',
            30 => 'tests/update.test',
            31 => 'tests/xmlrpc.test',
            32 => 'tests/upgrade/upgrade.test',
            33 => 'tests/upgrade/upgrade.comment.test',
            34 => 'tests/upgrade/update.field.test',
            35 => 'tests/upgrade/upgrade.filter.test',
            36 => 'tests/upgrade/upgrade.forum.test',
            37 => 'tests/upgrade/upgrade.locale.test',
            38 => 'tests/upgrade/upgrade.menu.test',
            39 => 'tests/upgrade/upgrade.node.test',
            40 => 'tests/upgrade/upgrade.taxonomy.test',
            41 => 'tests/upgrade/upgrade.trigger.test',
            42 => 'tests/upgrade/upgrade.translatable.test',
            43 => 'tests/upgrade/update.trigger.test',
            44 => 'tests/upgrade/upgrade.upload.test',
            45 => 'tests/upgrade/update.user.test',
            46 => 'tests/upgrade/upgrade.user.test',
          ),
          'configure' => 'admin/config/development/testing/settings',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
        'info' => 
        array (
          'name' => 'Menu',
          'description' => 'Allows administrators to customize the site navigation menu.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'menu.test',
          ),
          'configure' => 'admin/structure/menu',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'field_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field_ui/field_ui.module',
        'basename' => 'field_ui.module',
        'name' => 'field_ui',
        'info' => 
        array (
          'name' => 'Field UI',
          'description' => 'User interface for the Field API.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_ui.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'number' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/number/number.module',
        'basename' => 'number.module',
        'name' => 'number',
        'info' => 
        array (
          'name' => 'Number',
          'description' => 'Defines numeric field types.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'number.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'field_sql_storage' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/field_sql_storage/field_sql_storage.module',
        'basename' => 'field_sql_storage.module',
        'name' => 'field_sql_storage',
        'info' => 
        array (
          'name' => 'Field SQL storage',
          'description' => 'Stores field data in an SQL database.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'field_sql_storage.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'text' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/text/text.module',
        'basename' => 'text.module',
        'name' => 'text',
        'info' => 
        array (
          'name' => 'Text',
          'description' => 'Defines simple text field types.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'text.test',
          ),
          'required' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'options' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/options/options.module',
        'basename' => 'options.module',
        'name' => 'options',
        'info' => 
        array (
          'name' => 'Options',
          'description' => 'Defines selection, check box and radio button widgets for text and numeric fields.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'options.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'list_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/list/tests/list_test.module',
        'basename' => 'list_test.module',
        'name' => 'list_test',
        'info' => 
        array (
          'name' => 'List test',
          'description' => 'Support module for the List module tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'list' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/modules/list/list.module',
        'basename' => 'list.module',
        'name' => 'list',
        'info' => 
        array (
          'name' => 'List',
          'description' => 'Defines list field types. Use with Options to create selection lists.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'tests/list.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'field_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/tests/field_test.module',
        'basename' => 'field_test.module',
        'name' => 'field_test',
        'info' => 
        array (
          'name' => 'Field API Test',
          'description' => 'Support module for the Field API tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'files' => 
          array (
            0 => 'field_test.entity.inc',
          ),
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/field/field.module',
        'basename' => 'field.module',
        'name' => 'field',
        'info' => 
        array (
          'name' => 'Field',
          'description' => 'Field API to add fields to entities like nodes and users.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field.module',
            1 => 'field.attach.inc',
            2 => 'tests/field.test',
          ),
          'dependencies' => 
          array (
            0 => 'field_sql_storage',
          ),
          'required' => true,
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'theme/field.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'user_form_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/user/tests/user_form_test.module',
        'basename' => 'user_form_test.module',
        'name' => 'user_form_test',
        'info' => 
        array (
          'name' => 'User module form tests',
          'description' => 'Support module for user form testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
        'info' => 
        array (
          'name' => 'User',
          'description' => 'Manages the user registration and login system.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'user.module',
            1 => 'user.test',
          ),
          'required' => true,
          'configure' => 'admin/config/people',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'user.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7018',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
        'info' => 
        array (
          'name' => 'Forum',
          'description' => 'Provides discussion forums.',
          'dependencies' => 
          array (
            0 => 'taxonomy',
            1 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'forum.test',
          ),
          'configure' => 'admin/structure/forum',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'forum.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7011',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
        'info' => 
        array (
          'name' => 'Syslog',
          'description' => 'Logs and records system events to syslog.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'syslog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'locale_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/locale/tests/locale_test.module',
        'basename' => 'locale_test.module',
        'name' => 'locale_test',
        'info' => 
        array (
          'name' => 'Locale Test',
          'description' => 'Support module for the locale layer tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
        'info' => 
        array (
          'name' => 'Locale',
          'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'locale.test',
          ),
          'configure' => 'admin/config/regional/language',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
        'info' => 
        array (
          'name' => 'Poll',
          'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'poll.test',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'poll.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'openid_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/openid/tests/openid_test.module',
        'basename' => 'openid_test.module',
        'name' => 'openid_test',
        'info' => 
        array (
          'name' => 'OpenID dummy provider',
          'description' => 'OpenID provider used for testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'openid',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
        'info' => 
        array (
          'name' => 'OpenID',
          'description' => 'Allows users to log into your site using OpenID.',
          'version' => '7.14',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'openid.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
        'info' => 
        array (
          'name' => 'Tracker',
          'description' => 'Enables tracking of recent content for users.',
          'dependencies' => 
          array (
            0 => 'comment',
          ),
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'tracker.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
        'info' => 
        array (
          'name' => 'Blog',
          'description' => 'Enables multi-user blogs.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'blog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
        'info' => 
        array (
          'name' => 'System',
          'description' => 'Handles general site configuration for administrators.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'system.archiver.inc',
            1 => 'system.mail.inc',
            2 => 'system.queue.inc',
            3 => 'system.tar.inc',
            4 => 'system.updater.inc',
            5 => 'system.test',
          ),
          'required' => true,
          'configure' => 'admin/config/system',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7073',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'overlay' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/overlay/overlay.module',
        'basename' => 'overlay.module',
        'name' => 'overlay',
        'info' => 
        array (
          'name' => 'Overlay',
          'description' => 'Displays the Drupal administration interface in an overlay.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
        'info' => 
        array (
          'name' => 'Profile',
          'description' => 'Supports configurable user profiles.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'profile.test',
          ),
          'configure' => 'admin/config/people/profile',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
        'info' => 
        array (
          'name' => 'Help',
          'description' => 'Manages the display of online help.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'help.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
        'info' => 
        array (
          'name' => 'PHP filter',
          'description' => 'Allows embedded PHP code/snippets to be evaluated.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'php.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'block_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/block/tests/block_test.module',
        'basename' => 'block_test.module',
        'name' => 'block_test',
        'info' => 
        array (
          'name' => 'Block test',
          'description' => 'Provides test blocks.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
        'info' => 
        array (
          'name' => 'Block',
          'description' => 'Controls the visual building blocks a page is constructed with. Blocks are boxes of content rendered into an area, or region, of a web page.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'block.test',
          ),
          'configure' => 'admin/structure/block',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7008',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
        'info' => 
        array (
          'name' => 'Path',
          'description' => 'Allows users to rename URLs.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'path.test',
          ),
          'configure' => 'admin/config/search/path',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'search_embedded_form' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/tests/search_embedded_form.module',
        'basename' => 'search_embedded_form.module',
        'name' => 'search_embedded_form',
        'info' => 
        array (
          'name' => 'Search embedded form',
          'description' => 'Support module for search module testing of embedded forms.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'search_extra_type' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/tests/search_extra_type.module',
        'basename' => 'search_extra_type.module',
        'name' => 'search_extra_type',
        'info' => 
        array (
          'name' => 'Test search type',
          'description' => 'Support module for search module testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
        'info' => 
        array (
          'name' => 'Search',
          'description' => 'Enables site-wide keyword searching.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'search.extender.inc',
            1 => 'search.test',
          ),
          'configure' => 'admin/config/search/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'search.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
        'info' => 
        array (
          'name' => 'Statistics',
          'description' => 'Logs access statistics for your site.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'statistics.test',
          ),
          'configure' => 'admin/config/system/statistics',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'translation_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/translation/tests/translation_test.module',
        'basename' => 'translation_test.module',
        'name' => 'translation_test',
        'info' => 
        array (
          'name' => 'Content Translation Test',
          'description' => 'Support module for the content translation tests.',
          'core' => '7.x',
          'package' => 'Testing',
          'version' => '7.14',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
        'info' => 
        array (
          'name' => 'Content translation',
          'description' => 'Allows content to be translated into different languages.',
          'dependencies' => 
          array (
            0 => 'locale',
          ),
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'translation.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
        'info' => 
        array (
          'name' => 'Contact',
          'description' => 'Enables the use of both personal and site-wide contact forms.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contact.test',
          ),
          'configure' => 'admin/structure/contact',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'shortcut' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/shortcut/shortcut.module',
        'basename' => 'shortcut.module',
        'name' => 'shortcut',
        'info' => 
        array (
          'name' => 'Shortcut',
          'description' => 'Allows users to manage customizable lists of shortcut links.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'shortcut.test',
          ),
          'configure' => 'admin/config/user-interface/shortcut',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
        'info' => 
        array (
          'name' => 'Taxonomy',
          'description' => 'Enables the categorization of content.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'options',
          ),
          'files' => 
          array (
            0 => 'taxonomy.module',
            1 => 'taxonomy.test',
          ),
          'configure' => 'admin/structure/taxonomy',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
        'info' => 
        array (
          'name' => 'Database logging',
          'description' => 'Logs and records system events to the database.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'dblog.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'rdf_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/rdf/tests/rdf_test.module',
        'basename' => 'rdf_test.module',
        'name' => 'rdf_test',
        'info' => 
        array (
          'name' => 'RDF module tests',
          'description' => 'Support module for RDF module testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'rdf' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/rdf/rdf.module',
        'basename' => 'rdf.module',
        'name' => 'rdf',
        'info' => 
        array (
          'name' => 'RDF',
          'description' => 'Enriches your content with metadata to let other applications (e.g. search engines, aggregators) better understand its relationships and attributes.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rdf.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'contextual' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/contextual/contextual.module',
        'basename' => 'contextual.module',
        'name' => 'contextual',
        'info' => 
        array (
          'name' => 'Contextual links',
          'description' => 'Provides contextual links to perform actions related to elements on a page.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'contextual.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'bbb_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/bbb_update_test.module',
        'basename' => 'bbb_update_test.module',
        'name' => 'bbb_update_test',
        'info' => 
        array (
          'name' => 'BBB Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.14',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/update_test.module',
        'basename' => 'update_test.module',
        'name' => 'update_test',
        'info' => 
        array (
          'name' => 'Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'ccc_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/ccc_update_test.module',
        'basename' => 'ccc_update_test.module',
        'name' => 'ccc_update_test',
        'info' => 
        array (
          'name' => 'CCC Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.14',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'aaa_update_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/tests/aaa_update_test.module',
        'basename' => 'aaa_update_test.module',
        'name' => 'aaa_update_test',
        'info' => 
        array (
          'name' => 'AAA Update test',
          'description' => 'Support module for update module testing.',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.14',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
        'info' => 
        array (
          'name' => 'Update manager',
          'description' => 'Checks for available updates, and can securely install or update modules and themes via a web interface.',
          'version' => '7.14',
          'package' => 'Core',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'update.test',
          ),
          'configure' => 'admin/reports/updates/settings',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
        'info' => 
        array (
          'name' => 'Filter',
          'description' => 'Filters content in preparation for display.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'filter.test',
          ),
          'required' => true,
          'configure' => 'admin/config/content/formats',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7010',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
        'info' => 
        array (
          'name' => 'Book',
          'description' => 'Allows users to create and organize related content in an outline.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'book.test',
          ),
          'configure' => 'admin/content/book/settings',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'book.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'node_test_exception' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_test_exception.module',
        'basename' => 'node_test_exception.module',
        'name' => 'node_test_exception',
        'info' => 
        array (
          'name' => 'Node module exception tests',
          'description' => 'Support module for node related exception testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'node_access_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_access_test.module',
        'basename' => 'node_access_test.module',
        'name' => 'node_access_test',
        'info' => 
        array (
          'name' => 'Node module access tests',
          'description' => 'Support module for node permission testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'node_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/tests/node_test.module',
        'basename' => 'node_test.module',
        'name' => 'node_test',
        'info' => 
        array (
          'name' => 'Node module tests',
          'description' => 'Support module for node related testing.',
          'package' => 'Testing',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
        'info' => 
        array (
          'name' => 'Node',
          'description' => 'Allows content to be submitted to the site and displayed on pages.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'node.module',
            1 => 'node.test',
          ),
          'required' => true,
          'configure' => 'admin/structure/types',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'node.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7013',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'file_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/file/tests/file_module_test.module',
        'basename' => 'file_module_test.module',
        'name' => 'file_module_test',
        'info' => 
        array (
          'name' => 'File test',
          'description' => 'Provides hooks for testing File module functionality.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'file' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/file/file.module',
        'basename' => 'file.module',
        'name' => 'file',
        'info' => 
        array (
          'name' => 'File',
          'description' => 'Defines a file field type.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'files' => 
          array (
            0 => 'tests/file.test',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'image_module_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/image/tests/image_module_test.module',
        'basename' => 'image_module_test.module',
        'name' => 'image_module_test',
        'info' => 
        array (
          'name' => 'Image test',
          'description' => 'Provides hook implementations for testing Image module functionality.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'image_module_test.module',
          ),
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'image' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/image/image.module',
        'basename' => 'image.module',
        'name' => 'image',
        'info' => 
        array (
          'name' => 'Image',
          'description' => 'Provides image manipulation tools.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'files' => 
          array (
            0 => 'image.test',
          ),
          'configure' => 'admin/config/media/image-styles',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/modules/toolbar/toolbar.module',
        'basename' => 'toolbar.module',
        'name' => 'toolbar',
        'info' => 
        array (
          'name' => 'Toolbar',
          'description' => 'Provides a toolbar that shows the top-level administration menu items and links from other modules.',
          'core' => '7.x',
          'package' => 'Core',
          'version' => '7.14',
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'events' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/events/events.module',
        'basename' => 'events.module',
        'name' => 'events',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'date',
            2 => 'date_api',
            3 => 'date_popup',
            4 => 'date_views',
            5 => 'features',
            6 => 'link',
            7 => 'base_feature',
            8 => 'wysiwyg',
            9 => 'strongarm',
            10 => 'views',
          ),
          'description' => 'Adds Basic Event Content Type and Views',
          'features' => 
          array (
            'context' => 
            array (
              0 => 'events_block',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-event-body',
              1 => 'node-event-field_date',
              2 => 'node-event-field_ticket_link',
              3 => 'node-event-field_time',
            ),
            'node' => 
            array (
              0 => 'event',
            ),
            'user_permission' => 
            array (
              0 => 'create event content',
              1 => 'delete any event content',
              2 => 'delete own event content',
              3 => 'edit any event content',
              4 => 'edit own event content',
              5 => 'view date repeats',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_event',
              1 => 'comment_default_mode_event',
              2 => 'comment_default_per_page_event',
              3 => 'comment_event',
              4 => 'comment_form_location_event',
              5 => 'comment_preview_event',
              6 => 'comment_subject_field_event',
              7 => 'menu_options_event',
              8 => 'menu_parent_event',
              9 => 'node_options_event',
              10 => 'node_preview_event',
              11 => 'node_submitted_event',
              12 => 'pathauto_node_event_pattern',
              13 => 'scheduler_publish_enable_event',
              14 => 'scheduler_publish_touch_event',
              15 => 'scheduler_unpublish_enable_event',
            ),
            'views_view' => 
            array (
              0 => 'events',
            ),
          ),
          'name' => 'Events',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'events',
          'version' => '7.x-1.5',
        ),
        'schema_version' => 0,
        'project' => 'events',
        'version' => '7.x-1.5',
      ),
      'auto_nodetitle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/auto_nodetitle/auto_nodetitle.module',
        'basename' => 'auto_nodetitle.module',
        'name' => 'auto_nodetitle',
        'info' => 
        array (
          'name' => 'Automatic Nodetitles',
          'description' => 'Allows hiding of the content title field and automatic title creation.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'auto_nodetitle.install',
            1 => 'auto_nodetitle.module',
            2 => 'auto_nodetitle.js',
          ),
          'version' => '7.x-1.0',
          'project' => 'auto_nodetitle',
          'datestamp' => '1307449915',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '1',
        'project' => 'auto_nodetitle',
        'version' => '7.x-1.0',
      ),
      'date_all_day' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_all_day/date_all_day.module',
        'basename' => 'date_all_day.module',
        'name' => 'date_all_day',
        'info' => 
        array (
          'name' => 'Date All Day',
          'description' => 'Adds \'All Day\' functionality to date fields, including an \'All Day\' theme and \'All Day\' checkboxes for the Date select and Date popup widgets.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_migrate_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_migrate/date_migrate_example/date_migrate_example.module',
        'basename' => 'date_migrate_example.module',
        'name' => 'date_migrate_example',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'date_repeat',
            2 => 'date_repeat_field',
            3 => 'date_migrate',
            4 => 'features',
            5 => 'migrate',
          ),
          'description' => 'Examples of migrating with the Date module',
          'features' => 
          array (
            'field' => 
            array (
              0 => 'node-date_migrate_example-body',
              1 => 'node-date_migrate_example-field_date',
              2 => 'node-date_migrate_example-field_date_range',
              3 => 'node-date_migrate_example-field_date_repeat',
              4 => 'node-date_migrate_example-field_datestamp',
              5 => 'node-date_migrate_example-field_datestamp_range',
              6 => 'node-date_migrate_example-field_datetime',
              7 => 'node-date_migrate_example-field_datetime_range',
            ),
            'node' => 
            array (
              0 => 'date_migrate_example',
            ),
          ),
          'files' => 
          array (
            0 => 'date_migrate_example.migrate.inc',
          ),
          'name' => 'Date Migration Example',
          'package' => 'Features',
          'project' => 'date',
          'version' => '7.x-2.5',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_migrate/date_migrate.module',
        'basename' => 'date_migrate.module',
        'name' => 'date_migrate',
        'info' => 
        array (
          'name' => 'Date Migration',
          'description' => 'Provides support for importing into date fields with the Migrate module.',
          'core' => '7.x',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'migrate',
            1 => 'date',
          ),
          'files' => 
          array (
            0 => 'date.migrate.inc',
            1 => 'date_migrate.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_popup' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_popup/date_popup.module',
        'basename' => 'date_popup.module',
        'name' => 'date_popup',
        'info' => 
        array (
          'name' => 'Date Popup',
          'description' => 'Enables jquery popup calendars and time entry widgets for selecting dates and times.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/date_popup',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'themes/datepicker.1.7.css',
            ),
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_views/date_views.module',
        'basename' => 'date_views.module',
        'name' => 'date_views',
        'info' => 
        array (
          'name' => 'Date Views',
          'description' => 'Views integration for date fields and date functionality.',
          'package' => 'Date/Time',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'views',
          ),
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'includes/date_views_argument_handler.inc',
            1 => 'includes/date_views_argument_handler_simple.inc',
            2 => 'includes/date_views_filter_handler.inc',
            3 => 'includes/date_views_filter_handler_simple.inc',
            4 => 'includes/date_views.views_default.inc',
            5 => 'includes/date_views.views.inc',
            6 => 'includes/date_views_plugin_pager.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_context/date_context.module',
        'basename' => 'date_context.module',
        'name' => 'date_context',
        'info' => 
        array (
          'name' => 'Date Context',
          'description' => 'Adds an option to the Context module to set a context condition based on the value of a date field.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'date',
            1 => 'context',
          ),
          'files' => 
          array (
            0 => 'date_context.module',
            1 => 'plugins/date_context_date_condition.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_tools' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_tools/date_tools.module',
        'basename' => 'date_tools.module',
        'name' => 'date_tools',
        'info' => 
        array (
          'name' => 'Date Tools',
          'description' => 'Tools to import and auto-create dates and calendars.',
          'dependencies' => 
          array (
            0 => 'date',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'configure' => 'admin/config/date/tools',
          'files' => 
          array (
            0 => 'tests/date_tools.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_repeat_field' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_repeat_field/date_repeat_field.module',
        'basename' => 'date_repeat_field.module',
        'name' => 'date_repeat_field',
        'info' => 
        array (
          'name' => 'Date Repeat Field',
          'description' => 'Creates the option of Repeating date fields and manages Date fields that use the Date Repeat API.',
          'dependencies' => 
          array (
            0 => 'date_api',
            1 => 'date',
            2 => 'date_repeat',
          ),
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date_repeat_field.css',
            ),
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_api/date_api.module',
        'basename' => 'date_api.module',
        'name' => 'date_api',
        'info' => 
        array (
          'name' => 'Date API',
          'description' => 'A Date API that can be used by other modules.',
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'date.css',
            ),
          ),
          'files' => 
          array (
            0 => 'date_api.module',
            1 => 'date_api_sql.inc',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => '7000',
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date_repeat' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date_repeat/date_repeat.module',
        'basename' => 'date_repeat.module',
        'name' => 'date_repeat',
        'info' => 
        array (
          'name' => 'Date Repeat API',
          'description' => 'A Date Repeat API to calculate repeating dates and times from iCal rules.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_repeat.test',
            1 => 'tests/date_repeat_form.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => 0,
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'date' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/date/date.module',
        'basename' => 'date.module',
        'name' => 'date',
        'info' => 
        array (
          'name' => 'Date',
          'description' => 'Makes date/time fields available.',
          'dependencies' => 
          array (
            0 => 'date_api',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'php' => '5.2',
          'files' => 
          array (
            0 => 'tests/date_api.test',
            1 => 'tests/date.test',
            2 => 'tests/date_field.test',
            3 => 'tests/date_validation.test',
            4 => 'tests/date_timezone.test',
          ),
          'version' => '7.x-2.5',
          'project' => 'date',
          'datestamp' => '1334835098',
        ),
        'schema_version' => '7003',
        'project' => 'date',
        'version' => '7.x-2.5',
      ),
      'views_galleriffic' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_galleriffic/views_galleriffic.module',
        'basename' => 'views_galleriffic.module',
        'name' => 'views_galleriffic',
        'info' => 
        array (
          'name' => 'Views Galleriffic',
          'description' => 'Use Views to make JQuery Galleriffic image gallery',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_plugin_style_views_galleriffic.inc',
            1 => 'views_galleriffic_plugin_row_gallerifficrows.inc',
          ),
          'version' => '7.x-1.1',
          'project' => 'views_galleriffic',
          'datestamp' => '1337097692',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_galleriffic',
        'version' => '7.x-1.1',
      ),
      'email' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/email/email.module',
        'basename' => 'email.module',
        'name' => 'email',
        'info' => 
        array (
          'name' => 'Email',
          'description' => 'Defines an email field type.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'email.module',
            1 => 'email.install',
          ),
          'version' => '7.x-1.0',
          'project' => 'email',
          'datestamp' => '1313666247',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'email',
        'version' => '7.x-1.0',
      ),
      'media_browser_plus' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media_browser_plus/media_browser_plus.module',
        'basename' => 'media_browser_plus.module',
        'name' => 'media_browser_plus',
        'info' => 
        array (
          'name' => 'Media Browser Plus',
          'description' => 'Provides better UX for the media browser',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
            1 => 'taxonomy',
            2 => 'multiform',
          ),
          'version' => '7.x-1.0-beta3+15-dev',
          'project' => 'media_browser_plus',
          'datestamp' => '1327969413',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_browser_plus',
        'version' => '7.x-1.0-beta3+15-dev',
      ),
      'views_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views_export/views_export.module',
        'basename' => 'views_export.module',
        'name' => 'views_export',
        'info' => 
        array (
          'dependencies' => 
          array (
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => '',
        'version' => NULL,
      ),
      'views_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/tests/views_test.module',
        'basename' => 'views_test.module',
        'name' => 'views_test',
        'info' => 
        array (
          'name' => 'Views Test',
          'description' => 'Test module for Views.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'hidden' => true,
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views.module',
        'basename' => 'views.module',
        'name' => 'views',
        'info' => 
        array (
          'name' => 'Views',
          'description' => 'Create customized lists and queries from your database.',
          'package' => 'Views',
          'core' => '7.x',
          'php' => '5.2',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/views.css',
            ),
          ),
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'handlers/views_handler_area.inc',
            1 => 'handlers/views_handler_area_result.inc',
            2 => 'handlers/views_handler_area_text.inc',
            3 => 'handlers/views_handler_area_view.inc',
            4 => 'handlers/views_handler_argument.inc',
            5 => 'handlers/views_handler_argument_date.inc',
            6 => 'handlers/views_handler_argument_formula.inc',
            7 => 'handlers/views_handler_argument_many_to_one.inc',
            8 => 'handlers/views_handler_argument_null.inc',
            9 => 'handlers/views_handler_argument_numeric.inc',
            10 => 'handlers/views_handler_argument_string.inc',
            11 => 'handlers/views_handler_argument_group_by_numeric.inc',
            12 => 'handlers/views_handler_field.inc',
            13 => 'handlers/views_handler_field_counter.inc',
            14 => 'handlers/views_handler_field_boolean.inc',
            15 => 'handlers/views_handler_field_contextual_links.inc',
            16 => 'handlers/views_handler_field_custom.inc',
            17 => 'handlers/views_handler_field_date.inc',
            18 => 'handlers/views_handler_field_entity.inc',
            19 => 'handlers/views_handler_field_markup.inc',
            20 => 'handlers/views_handler_field_math.inc',
            21 => 'handlers/views_handler_field_numeric.inc',
            22 => 'handlers/views_handler_field_prerender_list.inc',
            23 => 'handlers/views_handler_field_time_interval.inc',
            24 => 'handlers/views_handler_field_serialized.inc',
            25 => 'handlers/views_handler_field_machine_name.inc',
            26 => 'handlers/views_handler_field_url.inc',
            27 => 'handlers/views_handler_filter.inc',
            28 => 'handlers/views_handler_filter_boolean_operator.inc',
            29 => 'handlers/views_handler_filter_boolean_operator_string.inc',
            30 => 'handlers/views_handler_filter_date.inc',
            31 => 'handlers/views_handler_filter_equality.inc',
            32 => 'handlers/views_handler_filter_group_by_numeric.inc',
            33 => 'handlers/views_handler_filter_in_operator.inc',
            34 => 'handlers/views_handler_filter_many_to_one.inc',
            35 => 'handlers/views_handler_filter_numeric.inc',
            36 => 'handlers/views_handler_filter_string.inc',
            37 => 'handlers/views_handler_relationship.inc',
            38 => 'handlers/views_handler_relationship_groupwise_max.inc',
            39 => 'handlers/views_handler_sort.inc',
            40 => 'handlers/views_handler_sort_date.inc',
            41 => 'handlers/views_handler_sort_formula.inc',
            42 => 'handlers/views_handler_sort_group_by_numeric.inc',
            43 => 'handlers/views_handler_sort_menu_hierarchy.inc',
            44 => 'handlers/views_handler_sort_random.inc',
            45 => 'includes/base.inc',
            46 => 'includes/handlers.inc',
            47 => 'includes/plugins.inc',
            48 => 'includes/view.inc',
            49 => 'modules/aggregator/views_handler_argument_aggregator_fid.inc',
            50 => 'modules/aggregator/views_handler_argument_aggregator_iid.inc',
            51 => 'modules/aggregator/views_handler_argument_aggregator_category_cid.inc',
            52 => 'modules/aggregator/views_handler_field_aggregator_title_link.inc',
            53 => 'modules/aggregator/views_handler_field_aggregator_category.inc',
            54 => 'modules/aggregator/views_handler_field_aggregator_item_description.inc',
            55 => 'modules/aggregator/views_handler_field_aggregator_xss.inc',
            56 => 'modules/aggregator/views_handler_filter_aggregator_category_cid.inc',
            57 => 'modules/aggregator/views_plugin_row_aggregator_rss.inc',
            58 => 'modules/comment/views_handler_argument_comment_user_uid.inc',
            59 => 'modules/comment/views_handler_field_comment.inc',
            60 => 'modules/comment/views_handler_field_comment_depth.inc',
            61 => 'modules/comment/views_handler_field_comment_link.inc',
            62 => 'modules/comment/views_handler_field_comment_link_approve.inc',
            63 => 'modules/comment/views_handler_field_comment_link_delete.inc',
            64 => 'modules/comment/views_handler_field_comment_link_edit.inc',
            65 => 'modules/comment/views_handler_field_comment_link_reply.inc',
            66 => 'modules/comment/views_handler_field_comment_node_link.inc',
            67 => 'modules/comment/views_handler_field_comment_username.inc',
            68 => 'modules/comment/views_handler_field_ncs_last_comment_name.inc',
            69 => 'modules/comment/views_handler_field_ncs_last_updated.inc',
            70 => 'modules/comment/views_handler_field_node_comment.inc',
            71 => 'modules/comment/views_handler_field_node_new_comments.inc',
            72 => 'modules/comment/views_handler_field_last_comment_timestamp.inc',
            73 => 'modules/comment/views_handler_filter_comment_user_uid.inc',
            74 => 'modules/comment/views_handler_filter_ncs_last_updated.inc',
            75 => 'modules/comment/views_handler_filter_node_comment.inc',
            76 => 'modules/comment/views_handler_sort_comment_thread.inc',
            77 => 'modules/comment/views_handler_sort_ncs_last_comment_name.inc',
            78 => 'modules/comment/views_handler_sort_ncs_last_updated.inc',
            79 => 'modules/comment/views_plugin_row_comment_rss.inc',
            80 => 'modules/comment/views_plugin_row_comment_view.inc',
            81 => 'modules/contact/views_handler_field_contact_link.inc',
            82 => 'modules/field/views_handler_field_field.inc',
            83 => 'modules/field/views_handler_relationship_entity_reverse.inc',
            84 => 'modules/field/views_handler_argument_field_list.inc',
            85 => 'modules/field/views_handler_filter_field_list.inc',
            86 => 'modules/filter/views_handler_field_filter_format_name.inc',
            87 => 'modules/locale/views_handler_argument_locale_group.inc',
            88 => 'modules/locale/views_handler_argument_locale_language.inc',
            89 => 'modules/locale/views_handler_field_locale_group.inc',
            90 => 'modules/locale/views_handler_field_locale_language.inc',
            91 => 'modules/locale/views_handler_field_locale_link_edit.inc',
            92 => 'modules/locale/views_handler_filter_locale_group.inc',
            93 => 'modules/locale/views_handler_filter_locale_language.inc',
            94 => 'modules/locale/views_handler_filter_locale_version.inc',
            95 => 'modules/node/views_handler_argument_dates_various.inc',
            96 => 'modules/node/views_handler_argument_node_language.inc',
            97 => 'modules/node/views_handler_argument_node_nid.inc',
            98 => 'modules/node/views_handler_argument_node_type.inc',
            99 => 'modules/node/views_handler_argument_node_vid.inc',
            100 => 'modules/node/views_handler_argument_node_uid_revision.inc',
            101 => 'modules/node/views_handler_field_history_user_timestamp.inc',
            102 => 'modules/node/views_handler_field_node.inc',
            103 => 'modules/node/views_handler_field_node_link.inc',
            104 => 'modules/node/views_handler_field_node_link_delete.inc',
            105 => 'modules/node/views_handler_field_node_link_edit.inc',
            106 => 'modules/node/views_handler_field_node_revision.inc',
            107 => 'modules/node/views_handler_field_node_revision_link_delete.inc',
            108 => 'modules/node/views_handler_field_node_revision_link_revert.inc',
            109 => 'modules/node/views_handler_field_node_path.inc',
            110 => 'modules/node/views_handler_field_node_type.inc',
            111 => 'modules/node/views_handler_filter_history_user_timestamp.inc',
            112 => 'modules/node/views_handler_filter_node_access.inc',
            113 => 'modules/node/views_handler_filter_node_status.inc',
            114 => 'modules/node/views_handler_filter_node_type.inc',
            115 => 'modules/node/views_handler_filter_node_uid_revision.inc',
            116 => 'modules/node/views_plugin_argument_default_node.inc',
            117 => 'modules/node/views_plugin_argument_validate_node.inc',
            118 => 'modules/node/views_plugin_row_node_rss.inc',
            119 => 'modules/node/views_plugin_row_node_view.inc',
            120 => 'modules/profile/views_handler_field_profile_date.inc',
            121 => 'modules/profile/views_handler_field_profile_list.inc',
            122 => 'modules/profile/views_handler_filter_profile_selection.inc',
            123 => 'modules/search/views_handler_argument_search.inc',
            124 => 'modules/search/views_handler_field_search_score.inc',
            125 => 'modules/search/views_handler_filter_search.inc',
            126 => 'modules/search/views_handler_sort_search_score.inc',
            127 => 'modules/search/views_plugin_row_search_view.inc',
            128 => 'modules/statistics/views_handler_field_accesslog_path.inc',
            129 => 'modules/system/views_handler_argument_file_fid.inc',
            130 => 'modules/system/views_handler_field_file.inc',
            131 => 'modules/system/views_handler_field_file_extension.inc',
            132 => 'modules/system/views_handler_field_file_filemime.inc',
            133 => 'modules/system/views_handler_field_file_uri.inc',
            134 => 'modules/system/views_handler_field_file_status.inc',
            135 => 'modules/system/views_handler_filter_file_status.inc',
            136 => 'modules/taxonomy/views_handler_argument_taxonomy.inc',
            137 => 'modules/taxonomy/views_handler_argument_term_node_tid.inc',
            138 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth.inc',
            139 => 'modules/taxonomy/views_handler_argument_term_node_tid_depth_modifier.inc',
            140 => 'modules/taxonomy/views_handler_argument_vocabulary_vid.inc',
            141 => 'modules/taxonomy/views_handler_argument_vocabulary_machine_name.inc',
            142 => 'modules/taxonomy/views_handler_field_taxonomy.inc',
            143 => 'modules/taxonomy/views_handler_field_term_node_tid.inc',
            144 => 'modules/taxonomy/views_handler_field_term_link_edit.inc',
            145 => 'modules/taxonomy/views_handler_filter_term_node_tid.inc',
            146 => 'modules/taxonomy/views_handler_filter_term_node_tid_depth.inc',
            147 => 'modules/taxonomy/views_handler_filter_vocabulary_vid.inc',
            148 => 'modules/taxonomy/views_handler_filter_vocabulary_machine_name.inc',
            149 => 'modules/taxonomy/views_handler_relationship_node_term_data.inc',
            150 => 'modules/taxonomy/views_plugin_argument_validate_taxonomy_term.inc',
            151 => 'modules/taxonomy/views_plugin_argument_default_taxonomy_tid.inc',
            152 => 'modules/system/views_handler_filter_system_type.inc',
            153 => 'modules/translation/views_handler_argument_node_tnid.inc',
            154 => 'modules/translation/views_handler_field_node_language.inc',
            155 => 'modules/translation/views_handler_field_node_link_translate.inc',
            156 => 'modules/translation/views_handler_field_node_translation_link.inc',
            157 => 'modules/translation/views_handler_filter_node_language.inc',
            158 => 'modules/translation/views_handler_filter_node_tnid.inc',
            159 => 'modules/translation/views_handler_filter_node_tnid_child.inc',
            160 => 'modules/translation/views_handler_relationship_translation.inc',
            161 => 'modules/upload/views_handler_field_upload_description.inc',
            162 => 'modules/upload/views_handler_field_upload_fid.inc',
            163 => 'modules/upload/views_handler_filter_upload_fid.inc',
            164 => 'modules/user/views_handler_argument_user_uid.inc',
            165 => 'modules/user/views_handler_argument_users_roles_rid.inc',
            166 => 'modules/user/views_handler_field_user.inc',
            167 => 'modules/user/views_handler_field_user_language.inc',
            168 => 'modules/user/views_handler_field_user_link.inc',
            169 => 'modules/user/views_handler_field_user_link_cancel.inc',
            170 => 'modules/user/views_handler_field_user_link_edit.inc',
            171 => 'modules/user/views_handler_field_user_mail.inc',
            172 => 'modules/user/views_handler_field_user_name.inc',
            173 => 'modules/user/views_handler_field_user_permissions.inc',
            174 => 'modules/user/views_handler_field_user_picture.inc',
            175 => 'modules/user/views_handler_field_user_roles.inc',
            176 => 'modules/user/views_handler_filter_user_current.inc',
            177 => 'modules/user/views_handler_filter_user_name.inc',
            178 => 'modules/user/views_handler_filter_user_permissions.inc',
            179 => 'modules/user/views_handler_filter_user_roles.inc',
            180 => 'modules/user/views_plugin_argument_default_current_user.inc',
            181 => 'modules/user/views_plugin_argument_default_user.inc',
            182 => 'modules/user/views_plugin_argument_validate_user.inc',
            183 => 'modules/user/views_plugin_row_user_view.inc',
            184 => 'plugins/views_plugin_access.inc',
            185 => 'plugins/views_plugin_access_none.inc',
            186 => 'plugins/views_plugin_access_perm.inc',
            187 => 'plugins/views_plugin_access_role.inc',
            188 => 'plugins/views_plugin_argument_default.inc',
            189 => 'plugins/views_plugin_argument_default_php.inc',
            190 => 'plugins/views_plugin_argument_default_fixed.inc',
            191 => 'plugins/views_plugin_argument_default_raw.inc',
            192 => 'plugins/views_plugin_argument_validate.inc',
            193 => 'plugins/views_plugin_argument_validate_numeric.inc',
            194 => 'plugins/views_plugin_argument_validate_php.inc',
            195 => 'plugins/views_plugin_cache.inc',
            196 => 'plugins/views_plugin_cache_none.inc',
            197 => 'plugins/views_plugin_cache_time.inc',
            198 => 'plugins/views_plugin_display.inc',
            199 => 'plugins/views_plugin_display_attachment.inc',
            200 => 'plugins/views_plugin_display_block.inc',
            201 => 'plugins/views_plugin_display_default.inc',
            202 => 'plugins/views_plugin_display_embed.inc',
            203 => 'plugins/views_plugin_display_extender.inc',
            204 => 'plugins/views_plugin_display_feed.inc',
            205 => 'plugins/views_plugin_display_page.inc',
            206 => 'plugins/views_plugin_exposed_form_basic.inc',
            207 => 'plugins/views_plugin_exposed_form.inc',
            208 => 'plugins/views_plugin_exposed_form_input_required.inc',
            209 => 'plugins/views_plugin_localization_core.inc',
            210 => 'plugins/views_plugin_localization.inc',
            211 => 'plugins/views_plugin_localization_none.inc',
            212 => 'plugins/views_plugin_pager.inc',
            213 => 'plugins/views_plugin_pager_full.inc',
            214 => 'plugins/views_plugin_pager_mini.inc',
            215 => 'plugins/views_plugin_pager_none.inc',
            216 => 'plugins/views_plugin_pager_some.inc',
            217 => 'plugins/views_plugin_query.inc',
            218 => 'plugins/views_plugin_query_default.inc',
            219 => 'plugins/views_plugin_row.inc',
            220 => 'plugins/views_plugin_row_fields.inc',
            221 => 'plugins/views_plugin_style.inc',
            222 => 'plugins/views_plugin_style_default.inc',
            223 => 'plugins/views_plugin_style_grid.inc',
            224 => 'plugins/views_plugin_style_list.inc',
            225 => 'plugins/views_plugin_style_jump_menu.inc',
            226 => 'plugins/views_plugin_style_rss.inc',
            227 => 'plugins/views_plugin_style_summary.inc',
            228 => 'plugins/views_plugin_style_summary_jump_menu.inc',
            229 => 'plugins/views_plugin_style_summary_unformatted.inc',
            230 => 'plugins/views_plugin_style_table.inc',
            231 => 'tests/handlers/views_handler_area_text.test',
            232 => 'tests/handlers/views_handler_argument_null.test',
            233 => 'tests/handlers/views_handler_field.test',
            234 => 'tests/handlers/views_handler_field_boolean.test',
            235 => 'tests/handlers/views_handler_field_custom.test',
            236 => 'tests/handlers/views_handler_field_counter.test',
            237 => 'tests/handlers/views_handler_field_date.test',
            238 => 'tests/handlers/views_handler_field_file_size.test',
            239 => 'tests/handlers/views_handler_field_math.test',
            240 => 'tests/handlers/views_handler_field_url.test',
            241 => 'tests/handlers/views_handler_field_xss.test',
            242 => 'tests/handlers/views_handler_filter_date.test',
            243 => 'tests/handlers/views_handler_filter_equality.test',
            244 => 'tests/handlers/views_handler_filter_in_operator.test',
            245 => 'tests/handlers/views_handler_filter_numeric.test',
            246 => 'tests/handlers/views_handler_filter_string.test',
            247 => 'tests/handlers/views_handler_sort_random.test',
            248 => 'tests/handlers/views_handler_sort_date.test',
            249 => 'tests/handlers/views_handler_sort.test',
            250 => 'tests/test_plugins/views_test_plugin_access_test_dynamic.inc',
            251 => 'tests/test_plugins/views_test_plugin_access_test_static.inc',
            252 => 'tests/styles/views_plugin_style_jump_menu.test',
            253 => 'tests/styles/views_plugin_style.test',
            254 => 'tests/views_access.test',
            255 => 'tests/views_analyze.test',
            256 => 'tests/views_basic.test',
            257 => 'tests/views_argument_default.test',
            258 => 'tests/views_argument_validator.test',
            259 => 'tests/views_exposed_form.test',
            260 => 'tests/views_glossary.test',
            261 => 'tests/views_groupby.test',
            262 => 'tests/views_handlers.test',
            263 => 'tests/views_module.test',
            264 => 'tests/views_pager.test',
            265 => 'tests/views_plugin_localization_test.inc',
            266 => 'tests/views_translatable.test',
            267 => 'tests/views_query.test',
            268 => 'tests/views_upgrade.test',
            269 => 'tests/views_test.views_default.inc',
            270 => 'tests/comment/views_handler_argument_comment_user_uid.test',
            271 => 'tests/comment/views_handler_filter_comment_user_uid.test',
            272 => 'tests/user/views_handler_field_user_name.test',
            273 => 'tests/user/views_user_argument_default.test',
            274 => 'tests/user/views_user_argument_validate.test',
            275 => 'tests/user/views_user.test',
            276 => 'tests/views_cache.test',
            277 => 'tests/views_view.test',
            278 => 'tests/views_ui.test',
          ),
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
        ),
        'schema_version' => '7301',
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'views_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views/views_ui.module',
        'basename' => 'views_ui.module',
        'name' => 'views_ui',
        'info' => 
        array (
          'name' => 'Views UI',
          'description' => 'Administrative interface to views. Without this module, you cannot create or edit your views.',
          'package' => 'Views',
          'core' => '7.x',
          'configure' => 'admin/structure/views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_ui.module',
            1 => 'plugins/views_wizard/views_ui_base_views_wizard.class.php',
          ),
          'version' => '7.x-3.3',
          'project' => 'views',
          'datestamp' => '1329946249',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views',
        'version' => '7.x-3.3',
      ),
      'conditional_styles_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/conditional_styles/tests/conditional_styles_test.module',
        'basename' => 'conditional_styles_test.module',
        'name' => 'conditional_styles_test',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets Tests',
          'package' => 'Testing',
          'core' => '7.x',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'conditional_styles',
          ),
          'files' => 
          array (
            0 => 'conditional_styles_test.module',
          ),
          'version' => '7.x-2.1',
          'project' => 'conditional_styles',
          'datestamp' => '1331537446',
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'conditional_styles',
        'version' => '7.x-2.1',
      ),
      'conditional_styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/conditional_styles/conditional_styles.module',
        'basename' => 'conditional_styles.module',
        'name' => 'conditional_styles',
        'info' => 
        array (
          'name' => 'Conditional Stylesheets',
          'description' => 'Allows themes to add conditional stylesheets.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'conditional_styles.install',
            1 => 'conditional_styles.module',
            2 => 'tests/conditional_styles.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'conditional_styles',
          'datestamp' => '1331537446',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'conditional_styles',
        'version' => '7.x-2.1',
      ),
      'basic_page' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/basic_page/basic_page.module',
        'basename' => 'basic_page.module',
        'name' => 'basic_page',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'base_feature',
            2 => 'wysiwyg',
            3 => 'strongarm',
          ),
          'description' => 'Adds the Basic Page functionality and permissions',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'field' => 
            array (
              0 => 'node-page-body',
            ),
            'node' => 
            array (
              0 => 'page',
            ),
            'user_permission' => 
            array (
              0 => 'create page content',
              1 => 'delete any page content',
              2 => 'delete own page content',
              3 => 'edit any page content',
              4 => 'edit own page content',
            ),
            'variable' => 
            array (
              0 => 'comment_page',
              1 => 'node_options_page',
              2 => 'node_submitted_page',
            ),
          ),
          'name' => 'Basic Page',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'basic_page',
          'version' => '7.x-1.1',
        ),
        'schema_version' => 0,
        'project' => 'basic_page',
        'version' => '7.x-1.1',
      ),
      'diff' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/diff/diff.module',
        'basename' => 'diff.module',
        'name' => 'diff',
        'info' => 
        array (
          'name' => 'Diff',
          'description' => 'Show difference between node revisions.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'DiffEngine.php',
          ),
          'version' => '7.x-2.0',
          'project' => 'diff',
          'datestamp' => '1311239815',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'diff',
        'version' => '7.x-2.0',
      ),
      'advertisement_banners' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/advertisement_banners/advertisement_banners.module',
        'basename' => 'advertisement_banners.module',
        'name' => 'advertisement_banners',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'features',
            2 => 'field_group',
            3 => 'link',
            4 => 'list',
            5 => 'base_feature',
            6 => 'media',
            7 => 'strongarm',
            8 => 'taxonomy',
          ),
          'description' => 'Installs Banner Content Type, Sidebar Top and Sidebar Bottom Banner Blocks ',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'field_group:field_group:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'taxonomy' => 
            array (
              0 => 'banner_space',
            ),
          ),
          'name' => 'Advertisement Banners',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'advertisement_banners',
          'version' => '7.x-1.3',
        ),
        'schema_version' => 0,
        'project' => 'advertisement_banners',
        'version' => '7.x-1.3',
      ),
      'node_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/node_reference/node_reference.module',
        'basename' => 'node_reference.module',
        'name' => 'node_reference',
        'info' => 
        array (
          'name' => 'Node Reference',
          'description' => 'Defines a field type for referencing one node from another.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'files' => 
          array (
            0 => 'node_reference.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'user_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/user_reference/user_reference.module',
        'basename' => 'user_reference.module',
        'name' => 'user_reference',
        'info' => 
        array (
          'name' => 'User Reference',
          'description' => 'Defines a field type for referencing a user from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'references',
            2 => 'options',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'references' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/references/references.module',
        'basename' => 'references.module',
        'name' => 'references',
        'info' => 
        array (
          'name' => 'References',
          'description' => 'Defines common base features for the various reference field types.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'options',
          ),
          'files' => 
          array (
            0 => 'views/references_handler_relationship.inc',
            1 => 'views/references_handler_argument.inc',
            2 => 'views/references_plugin_display.inc',
            3 => 'views/references_plugin_style.inc',
            4 => 'views/references_plugin_row_fields.inc',
          ),
          'version' => '7.x-2.0',
          'project' => 'references',
          'datestamp' => '1324596643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'references',
        'version' => '7.x-2.0',
      ),
      'fences' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fences/fences.module',
        'basename' => 'fences.module',
        'name' => 'fences',
        'info' => 
        array (
          'name' => 'Fences',
          'description' => 'Configurable field wrappers',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
          ),
          'configure' => 'admin/config/content/fences',
          'version' => '7.x-1.0',
          'project' => 'fences',
          'datestamp' => '1335373578',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fences',
        'version' => '7.x-1.0',
      ),
      'comments' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/comments/comments.module',
        'basename' => 'comments.module',
        'name' => 'comments',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'comment',
            1 => 'ctools',
            2 => 'features',
            3 => 'strongarm',
          ),
          'description' => 'Add Commenting functionality to a site.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'user_permission' => 
            array (
              0 => 'access comments',
              1 => 'administer comments',
              2 => 'edit own comments',
              3 => 'post comments',
              4 => 'skip comment approval',
            ),
          ),
          'name' => 'Comments',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'comments',
          'version' => '7.x-1.0-beta2',
        ),
        'schema_version' => 0,
        'project' => 'comments',
        'version' => '7.x-1.0-beta2',
      ),
      'better_exposed_filters' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/better_exposed_filters/better_exposed_filters.module',
        'basename' => 'better_exposed_filters.module',
        'name' => 'better_exposed_filters',
        'info' => 
        array (
          'name' => 'Better Exposed Filters',
          'description' => 'Allow the use of checkboxes or radio buttons for exposed Views filters',
          'core' => '7.x',
          'package' => 'Views',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'better_exposed_filters.module',
            1 => 'better_exposed_filters.views.inc',
            2 => 'better_exposed_filters_exposed_form_plugin.inc',
            3 => 'better_exposed_filters.theme',
          ),
          'version' => '7.x-3.0-beta1',
          'project' => 'better_exposed_filters',
          'datestamp' => '1312327014',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'better_exposed_filters',
        'version' => '7.x-3.0-beta1',
      ),
      'videos' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/videos/videos.module',
        'basename' => 'videos.module',
        'name' => 'videos',
        'info' => 
        array (
          'name' => 'Videos',
          'description' => 'Adds Basic Video Content Type and Views',
          'core' => '7.x',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'version' => '7.x-1.4',
          'project' => 'videos',
          'dependencies' => 
          array (
            0 => 'base_feature',
            1 => 'features',
            2 => 'list',
            3 => 'media_internet',
            4 => 'media_youtube',
            5 => 'mediafield',
            6 => 'strongarm',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-video-field_video_embed',
              1 => 'node-video-field_video_sort',
            ),
            'node' => 
            array (
              0 => 'video',
            ),
            'user_permission' => 
            array (
              0 => 'add media from remote sources',
              1 => 'create video content',
              2 => 'delete any video content',
              3 => 'delete own video content',
              4 => 'edit any video content',
              5 => 'edit own video content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_video',
              1 => 'comment_default_mode_video',
              2 => 'comment_default_per_page_video',
              3 => 'comment_form_location_video',
              4 => 'comment_preview_video',
              5 => 'comment_subject_field_video',
              6 => 'comment_video',
              7 => 'menu_options_video',
              8 => 'menu_parent_video',
              9 => 'node_options_video',
              10 => 'node_preview_video',
              11 => 'node_submitted_video',
              12 => 'pathauto_node_video_pattern',
              13 => 'scheduler_publish_enable_video',
              14 => 'scheduler_publish_touch_video',
              15 => 'scheduler_unpublish_enable_video',
            ),
            'views_view' => 
            array (
              0 => 'videos',
            ),
          ),
        ),
        'schema_version' => 0,
        'project' => 'videos',
        'version' => '7.x-1.4',
      ),
      'colorbox' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/colorbox/colorbox.module',
        'basename' => 'colorbox.module',
        'name' => 'colorbox',
        'info' => 
        array (
          'name' => 'Colorbox',
          'description' => 'A light-weight, customizable lightbox plugin for jQuery 1.4.3+.',
          'core' => '7.x',
          'configure' => 'admin/config/media/colorbox',
          'files' => 
          array (
            0 => 'views/colorbox_handler_field_colorbox.inc',
          ),
          'version' => '7.x-1.3',
          'project' => 'colorbox',
          'datestamp' => '1334080546',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'colorbox',
        'version' => '7.x-1.3',
      ),
      'menu_block_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/menu_block/menu_block_export.module',
        'basename' => 'menu_block_export.module',
        'name' => 'menu_block_export',
        'info' => 
        array (
          'name' => 'Menu Block Export',
          'description' => 'Provides export interface for Menu block module.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu_block',
          ),
          'files' => 
          array (
            0 => 'menu_block_export.module',
            1 => 'menu_block_export.admin.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block/export',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'menu_block' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/menu_block/menu_block.module',
        'basename' => 'menu_block.module',
        'name' => 'menu_block',
        'info' => 
        array (
          'name' => 'Menu Block',
          'description' => 'Provides configurable blocks of menu items.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'menu (>7.11)',
          ),
          'files' => 
          array (
            0 => 'menu_block.module',
            1 => 'menu_block.admin.inc',
            2 => 'menu_block.follow.inc',
            3 => 'menu_block.pages.inc',
            4 => 'menu_block.sort.inc',
            5 => 'menu_block.install',
            6 => 'plugins/content_types/menu_tree/menu_tree.inc',
          ),
          'configure' => 'admin/config/user-interface/menu-block',
          'version' => '7.x-2.3',
          'project' => 'menu_block',
          'datestamp' => '1328286646',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'menu_block',
        'version' => '7.x-2.3',
      ),
      'wysiwyg_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/wysiwyg/tests/wysiwyg_test.module',
        'basename' => 'wysiwyg_test.module',
        'name' => 'wysiwyg_test',
        'info' => 
        array (
          'name' => 'Wysiwyg testing',
          'description' => 'Tests Wysiwyg module functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'wysiwyg',
          ),
          'files' => 
          array (
            0 => 'wysiwyg_test.module',
          ),
          'version' => '7.x-2.1+19-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1335790095',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'wysiwyg',
        'version' => '7.x-2.1+19-dev',
      ),
      'wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/wysiwyg/wysiwyg.module',
        'basename' => 'wysiwyg.module',
        'name' => 'wysiwyg',
        'info' => 
        array (
          'name' => 'Wysiwyg',
          'description' => 'Allows to edit content with client-side editors.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/wysiwyg',
          'files' => 
          array (
            0 => 'wysiwyg.module',
            1 => 'tests/wysiwyg.test',
          ),
          'version' => '7.x-2.1+19-dev',
          'project' => 'wysiwyg',
          'datestamp' => '1335790095',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'wysiwyg',
        'version' => '7.x-2.1+19-dev',
      ),
      'jplayer_protect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/jplayer/jplayer_protect/jplayer_protect.module',
        'basename' => 'jplayer_protect.module',
        'name' => 'jplayer_protect',
        'info' => 
        array (
          'name' => 'jPlayer Content Protection',
          'description' => 'Prevent direct access to media files.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'jplayer',
          ),
          'files' => 
          array (
            0 => 'jplayer_protect.install',
            1 => 'jplayer_protect.module',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'jplayer',
          'datestamp' => '1336782284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'jplayer',
        'version' => '7.x-2.x-dev',
      ),
      'jplayer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/jplayer/jplayer.module',
        'basename' => 'jplayer.module',
        'name' => 'jplayer',
        'info' => 
        array (
          'name' => 'jPlayer',
          'description' => 'Provides an HTML5-compatible with Flash-fallback audio player.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file',
          ),
          'configure' => 'admin/config/media/jplayer',
          'files' => 
          array (
            0 => 'jplayer.install',
            1 => 'jplayer.module',
            2 => 'includes/jplayer.admin.inc',
            3 => 'includes/jplayer.theme.inc',
            4 => 'includes/jplayer.views.inc',
            5 => 'includes/jplayer_style_plugin.inc',
            6 => 'theme/jplayer.tpl.php',
          ),
          'version' => '7.x-2.x-dev',
          'project' => 'jplayer',
          'datestamp' => '1336782284',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'jplayer',
        'version' => '7.x-2.x-dev',
      ),
      'simple_blog' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/simple_blog/simple_blog.module',
        'basename' => 'simple_blog.module',
        'name' => 'simple_blog',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'base_feature',
            2 => 'wysiwyg',
            3 => 'news',
            4 => 'strongarm',
          ),
          'description' => 'Installs a single user blog content type, page and block.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
          ),
          'name' => 'Simple Blog',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'simple_blog',
          'version' => '7.x-1.6',
        ),
        'schema_version' => 0,
        'project' => 'simple_blog',
        'version' => '7.x-1.6',
      ),
      'addressfield_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/addressfield/example/addressfield_example.module',
        'basename' => 'addressfield_example.module',
        'name' => 'addressfield_example',
        'info' => 
        array (
          'name' => 'Address Field Example',
          'description' => 'Example module for how to implement an addressfield format handler.',
          'core' => '7.x',
          'package' => 'Fields',
          'hidden' => true,
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'addressfield',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'addressfield',
          'datestamp' => '1314906115',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta2',
      ),
      'addressfield' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/addressfield/addressfield.module',
        'basename' => 'addressfield.module',
        'name' => 'addressfield',
        'info' => 
        array (
          'name' => 'Address Field',
          'description' => 'Manage a flexible address field, implementing the xNAL standard.',
          'core' => '7.x',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/addressfield_views_handler_filter_country.inc',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'addressfield',
          'datestamp' => '1314906115',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'addressfield',
        'version' => '7.x-1.0-beta2',
      ),
      'libraries' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/libraries/libraries.module',
        'basename' => 'libraries.module',
        'name' => 'libraries',
        'info' => 
        array (
          'name' => 'Libraries',
          'description' => 'Allows version dependent and shared usage of external libraries.',
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'libraries',
          'datestamp' => '1296096156',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'libraries',
        'version' => '7.x-1.0',
      ),
      'base_feature' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/base_feature/base_feature.module',
        'basename' => 'base_feature.module',
        'name' => 'base_feature',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
            1 => 'admin_menu_toolbar',
            2 => 'better_formats',
            3 => 'block',
            4 => 'colorbox',
            5 => 'context',
            6 => 'context_ui',
            7 => 'contextual',
            8 => 'features',
            9 => 'field_group',
            10 => 'file_entity',
            11 => 'googleanalytics',
            12 => 'image_resize_filter',
            13 => 'libraries',
            14 => 'link',
            15 => 'media',
            16 => 'mediafield',
            17 => 'menu',
            18 => 'node_reference',
            19 => 'overlay',
            20 => 'path',
            21 => 'pathauto',
            22 => 'plupload',
            23 => 'references',
            24 => 'scheduler',
            25 => 'shortcut',
            26 => 'strongarm',
            27 => 'taxonomy',
            28 => 'token',
            29 => 'toolbar',
            30 => 'transliteration',
            31 => 'wysiwyg',
          ),
          'description' => 'Provides base tools for content editing and site administration.  Required by all features.',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
            ),
            'menu_custom' => 
            array (
              0 => 'management',
            ),
            'menu_links' => 
            array (
              0 => 'management:admin/config',
              1 => 'management:admin/help',
            ),
            'user_permission' => 
            array (
              0 => 'access administration menu',
              1 => 'access administration pages',
              2 => 'access content',
              3 => 'access content overview',
              4 => 'access contextual links',
              5 => 'access overlay',
              6 => 'access site in maintenance mode',
              7 => 'access site reports',
              8 => 'access toolbar',
              9 => 'access user profiles',
              10 => 'administer actions',
              11 => 'administer blocks',
              12 => 'administer content types',
              13 => 'administer features',
              14 => 'administer fieldgroups',
              15 => 'administer files',
              16 => 'administer filters',
              17 => 'administer google analytics',
              18 => 'administer image styles',
              19 => 'administer menu',
              20 => 'administer modules',
              21 => 'administer nodes',
              22 => 'administer pathauto',
              23 => 'administer permissions',
              24 => 'administer scheduler',
              25 => 'administer shortcuts',
              26 => 'administer site configuration',
              27 => 'administer software updates',
              28 => 'administer taxonomy',
              29 => 'administer themes',
              30 => 'administer url aliases',
              31 => 'administer users',
              32 => 'block IP addresses',
              33 => 'bypass node access',
              34 => 'cancel account',
              35 => 'change own username',
              36 => 'create url aliases',
              37 => 'customize shortcut links',
              38 => 'delete terms in 1',
              39 => 'display drupal links',
              40 => 'edit file',
              41 => 'edit terms in 1',
              42 => 'flush caches',
              43 => 'import media',
              44 => 'manage features',
              45 => 'notify of path changes',
              46 => 'opt-in or out of tracking',
              47 => 'schedule (un)publishing of nodes',
              48 => 'select account cancellation method',
              49 => 'show format selection for file',
              50 => 'show format selection for node',
              51 => 'show format selection for taxonomy_term',
              52 => 'show format selection for user',
              53 => 'show format tips',
              54 => 'show more format tips link',
              55 => 'switch shortcut sets',
              56 => 'use PHP for tracking visibility',
              57 => 'use text format full_html',
              58 => 'view own unpublished content',
              59 => 'view the administration theme',
            ),
            'user_role' => 
            array (
              0 => 'account manager',
              1 => 'administrator',
              2 => 'client',
              3 => 'developer',
            ),
            'variable' => 
            array (
              0 => 'better_formats_per_field_core',
              1 => 'ckeditor_link_type_selected',
              2 => 'configurable_timezones',
              3 => 'date_default_timezone',
              4 => 'date_first_day',
              5 => 'filter_fallback_format',
              6 => 'image_jpeg_quality',
              7 => 'image_toolkit',
              8 => 'pathauto_node_pattern',
              9 => 'site_default_country',
              10 => 'site_frontpage',
              11 => 'user_register',
            ),
          ),
          'name' => 'Base Feature',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'base_feature',
          'version' => '7.x-1.6',
        ),
        'schema_version' => 0,
        'project' => 'base_feature',
        'version' => '7.x-1.6',
      ),
      'rules_admin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/rules/rules_admin/rules_admin.module',
        'basename' => 'rules_admin.module',
        'name' => 'rules_admin',
        'info' => 
        array (
          'name' => 'Rules UI',
          'description' => 'Administrative interface for managing rules.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_admin.module',
            1 => 'rules_admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/rules/rules_i18n/rules_i18n.module',
        'basename' => 'rules_i18n.module',
        'name' => 'rules_i18n',
        'info' => 
        array (
          'name' => 'Rules translation',
          'description' => 'Allows translating rules.',
          'dependencies' => 
          array (
            0 => 'rules',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_i18n.i18n.inc',
            1 => 'rules_i18n.rules.inc',
            2 => 'rules_i18n.test',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/rules/tests/rules_test.module',
        'basename' => 'rules_test.module',
        'name' => 'rules_test',
        'info' => 
        array (
          'name' => 'Rules Tests',
          'description' => 'Support module for the Rules tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_test.rules.inc',
            1 => 'rules_test.rules_defaults.inc',
          ),
          'hidden' => true,
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules_scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/rules/rules_scheduler/rules_scheduler.module',
        'basename' => 'rules_scheduler.module',
        'name' => 'rules_scheduler',
        'info' => 
        array (
          'name' => 'Rules Scheduler',
          'description' => 'Schedule the execution of Rules components using actions.',
          'dependencies' => 
          array (
            0 => 'rules',
          ),
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules_scheduler.admin.inc',
            1 => 'rules_scheduler.module',
            2 => 'rules_scheduler.install',
            3 => 'rules_scheduler.rules.inc',
            4 => 'rules_scheduler.test',
            5 => 'includes/rules_scheduler.views_default.inc',
            6 => 'includes/rules_scheduler.views.inc',
            7 => 'includes/rules_scheduler_views_filter.inc',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'rules' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/rules/rules.module',
        'basename' => 'rules.module',
        'name' => 'rules',
        'info' => 
        array (
          'name' => 'Rules',
          'description' => 'React on events and conditionally evaluate actions.',
          'package' => 'Rules',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'rules.features.inc',
            1 => 'tests/rules.test',
            2 => 'includes/faces.inc',
            3 => 'includes/rules.core.inc',
            4 => 'includes/rules.processor.inc',
            5 => 'includes/rules.plugins.inc',
            6 => 'includes/rules.state.inc',
            7 => 'modules/php.eval.inc',
            8 => 'modules/rules_core.eval.inc',
            9 => 'modules/system.eval.inc',
            10 => 'ui/ui.controller.inc',
            11 => 'ui/ui.core.inc',
            12 => 'ui/ui.data.inc',
            13 => 'ui/ui.plugins.inc',
          ),
          'dependencies' => 
          array (
            0 => 'entity_token',
            1 => 'entity',
          ),
          'version' => '7.x-2.1',
          'project' => 'rules',
          'datestamp' => '1331918148',
          'php' => '5.2.4',
        ),
        'schema_version' => '7209',
        'project' => 'rules',
        'version' => '7.x-2.1',
      ),
      'comment_notify' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/comment_notify/comment_notify.module',
        'basename' => 'comment_notify.module',
        'name' => 'comment_notify',
        'info' => 
        array (
          'name' => 'Comment notify',
          'description' => 'Comment follow-up e-mail notification for anonymous as well as registered users.',
          'dependencies' => 
          array (
            0 => 'comment',
            1 => 'token',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/comment_notify',
          'files' => 
          array (
            0 => 'comment_notify.install',
            1 => 'comment_notify.module',
            2 => 'comment_notify.tokens.inc',
            3 => 'comment_notify.inc',
            4 => 'comment_notify.test',
          ),
          'version' => '7.x-1.0',
          'project' => 'comment_notify',
          'datestamp' => '1320253230',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'comment_notify',
        'version' => '7.x-1.0',
      ),
      'eva' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/eva/eva.module',
        'basename' => 'eva.module',
        'name' => 'eva',
        'info' => 
        array (
          'name' => 'Eva',
          'description' => 'Provides a Views display type that can be attached to entities.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'files' => 
          array (
            0 => 'eva-display-entity-view.tpl.php',
            1 => 'eva.module',
            2 => 'eva.theme.inc',
            3 => 'eva.views.inc',
            4 => 'eva_plugin_display_entity.inc',
          ),
          'version' => '7.x-1.x-dev',
          'project' => 'eva',
          'datestamp' => '1316434020',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'eva',
        'version' => '7.x-1.x-dev',
      ),
      'media_vimeo' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media_vimeo/media_vimeo.module',
        'basename' => 'media_vimeo.module',
        'name' => 'media_vimeo',
        'info' => 
        array (
          'name' => 'Media: Vimeo',
          'description' => 'Provides Vimeo support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_vimeo.module',
            1 => 'includes/MediaInternetVimeoHandler.inc',
            2 => 'includes/MediaVimeoStreamWrapper.inc',
            3 => 'includes/MediaVimeoStyles.inc',
            4 => 'includes/media_vimeo.formatters.inc',
            5 => 'includes/media_vimeo.styles.inc',
            6 => 'includes/media_vimeo.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta5+1-dev',
          'project' => 'media_vimeo',
          'datestamp' => '1333585628',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media_vimeo',
        'version' => '7.x-1.0-beta5+1-dev',
      ),
      'admin_views' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/admin_views/admin_views.module',
        'basename' => 'admin_views.module',
        'name' => 'admin_views',
        'info' => 
        array (
          'name' => 'Administration views',
          'description' => 'Replaces all system object management pages in Drupal core with real views.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'views_bulk_operations',
          ),
          'files' => 
          array (
            0 => 'admin_views.module',
            1 => 'plugins/views_plugin_display_system.inc',
          ),
          'version' => '7.x-1.0-alpha1',
          'project' => 'admin_views',
          'datestamp' => '1336581349',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_views',
        'version' => '7.x-1.0-alpha1',
      ),
      'mollom_test_server' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mollom/tests/mollom_test_server.module',
        'basename' => 'mollom_test_server.module',
        'name' => 'mollom_test_server',
        'info' => 
        array (
          'name' => 'Mollom Test Server',
          'description' => 'Testing Server module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'mollom',
          'datestamp' => '1331691954',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.0',
      ),
      'mollom_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mollom/tests/mollom_test.module',
        'basename' => 'mollom_test.module',
        'name' => 'mollom_test',
        'info' => 
        array (
          'name' => 'Mollom Test',
          'description' => 'Testing module for Mollom functionality. Do not enable.',
          'core' => '7.x',
          'package' => 'Testing',
          'hidden' => true,
          'version' => '7.x-2.0',
          'project' => 'mollom',
          'datestamp' => '1331691954',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mollom',
        'version' => '7.x-2.0',
      ),
      'mollom' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mollom/mollom.module',
        'basename' => 'mollom.module',
        'name' => 'mollom',
        'info' => 
        array (
          'name' => 'Mollom',
          'description' => 'Automatically moderates user-submitted content and protects your site from spam and profanity.',
          'core' => '7.x',
          'configure' => 'admin/config/content/mollom',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'mollom.css',
            ),
          ),
          'files' => 
          array (
            0 => 'includes/mollom.class.inc',
            1 => 'mollom.drupal.inc',
            2 => 'tests/mollom.test',
            3 => 'tests/mollom.class.test',
          ),
          'version' => '7.x-2.0',
          'project' => 'mollom',
          'datestamp' => '1331691954',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7204',
        'project' => 'mollom',
        'version' => '7.x-2.0',
      ),
      'ckeditor_link' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ckeditor_link/ckeditor_link.module',
        'basename' => 'ckeditor_link.module',
        'name' => 'ckeditor_link',
        'info' => 
        array (
          'name' => 'CKEditor Link',
          'description' => 'Easily create links to Drupal internal paths through CKEditor.',
          'package' => 'User interface',
          'core' => '7.x',
          'configure' => 'admin/config/content/ckeditor_link',
          'version' => '7.x-2.2',
          'project' => 'ckeditor_link',
          'datestamp' => '1325952038',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ckeditor_link',
        'version' => '7.x-2.2',
      ),
      'transliteration' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/transliteration/transliteration.module',
        'basename' => 'transliteration.module',
        'name' => 'transliteration',
        'info' => 
        array (
          'name' => 'Transliteration',
          'description' => 'Converts non-latin text to US-ASCII and sanitizes file names.',
          'core' => '7.x',
          'version' => '7.x-3.0',
          'project' => 'transliteration',
          'datestamp' => '1318580199',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'transliteration',
        'version' => '7.x-3.0',
      ),
      'calendar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/calendar/calendar.module',
        'basename' => 'calendar.module',
        'name' => 'calendar',
        'info' => 
        array (
          'name' => 'Calendar',
          'description' => 'Views plugin to display views containing dates as Calendars.',
          'dependencies' => 
          array (
            0 => 'views',
            1 => 'date_api',
            2 => 'date_views',
          ),
          'package' => 'Date/Time',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/calendar_multiday.css',
            ),
          ),
          'files' => 
          array (
            0 => 'calendar.install',
            1 => 'calendar.module',
            2 => 'includes/calendar.views.inc',
            3 => 'includes/calendar_plugin_style.inc',
            4 => 'includes/calendar_plugin_row.inc',
            5 => 'includes/calendar.views_template.inc',
            6 => 'theme/theme.inc',
            7 => 'theme/calendar-style.tpl.php',
          ),
          'version' => '7.x-3.4',
          'project' => 'calendar',
          'datestamp' => '1337429753',
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'calendar',
        'version' => '7.x-3.4',
      ),
      'base_wysiwyg' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/base_wysiwyg/base_wysiwyg.module',
        'basename' => 'base_wysiwyg.module',
        'name' => 'base_wysiwyg',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ckeditor_link',
            1 => 'features',
            2 => 'image_resize_filter',
            3 => 'media',
            4 => 'wysiwyg',
          ),
          'description' => 'wysiwyg configuration',
          'features' => 
          array (
            'filter' => 
            array (
              0 => 'full_html',
            ),
            'user_permission' => 
            array (
              0 => 'access ckeditor link',
              1 => 'administer ckeditor link',
            ),
            'wysiwyg' => 
            array (
              0 => 'full_html',
            ),
          ),
          'name' => 'Base wysiwyg',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'base_wysiwyg',
          'version' => '7.x-1.1',
        ),
        'schema_version' => 0,
        'project' => 'base_wysiwyg',
        'version' => '7.x-1.1',
      ),
      'views_accordion' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_accordion/views_accordion.module',
        'basename' => 'views_accordion.module',
        'name' => 'views_accordion',
        'info' => 
        array (
          'name' => 'Views Accordion',
          'description' => 'Provides an accordion views display plugin.',
          'package' => 'Views',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'files' => 
          array (
            0 => 'views_accordion.views.inc',
            1 => 'views_accordion_style_plugin.inc',
          ),
          'version' => '7.x-1.0-rc1',
          'project' => 'views_accordion',
          'datestamp' => '1316625409',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_accordion',
        'version' => '7.x-1.0-rc1',
      ),
      'views_feature' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_feature/views_feature.module',
        'basename' => 'views_feature.module',
        'name' => 'views_feature',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'views',
            2 => 'views_ui',
          ),
          'description' => 'Installs basic Views elements and permissions.',
          'features' => 
          array (
            'user_permission' => 
            array (
              0 => 'access all views',
              1 => 'administer views',
            ),
          ),
          'name' => 'Views Feature',
          'package' => 'Features',
          'php' => '5.2.4',
          'project' => 'views_feature',
          'version' => '7.x-1.0-beta2',
        ),
        'schema_version' => 0,
        'project' => 'views_feature',
        'version' => '7.x-1.0-beta2',
      ),
      'kernest' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/kernest/kernest.module',
        'basename' => 'kernest.module',
        'name' => 'kernest',
        'info' => 
        array (
          'name' => 'KERNEST',
          'description' => '@font-your-face provider with KERNEST fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'typekit_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/typekit_api/typekit_api.module',
        'basename' => 'typekit_api.module',
        'name' => 'typekit_api',
        'info' => 
        array (
          'name' => 'Typekit API',
          'description' => '@font-your-face provider with Typekit.com fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'google_fonts_api' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/google_fonts_api/google_fonts_api.module',
        'basename' => 'google_fonts_api.module',
        'name' => 'google_fonts_api',
        'info' => 
        array (
          'name' => 'Google Fonts API',
          'description' => '@font-your-face provider with Google fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/google_fonts_api.views_default.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'fontdeck' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/fontdeck/fontdeck.module',
        'basename' => 'fontdeck.module',
        'name' => 'fontdeck',
        'info' => 
        array (
          'name' => 'Fontdeck',
          'description' => '@font-your-face provider of fonts from Fontdeck.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'fontdeck.install',
            1 => 'fontdeck.module',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'font_reference' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/font_reference/font_reference.module',
        'basename' => 'font_reference.module',
        'name' => 'font_reference',
        'info' => 
        array (
          'name' => 'Font Reference',
          'description' => 'Defines a field type for referencing a font from a node.',
          'package' => 'Fields',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'field',
            2 => 'options',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'fontyourface_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/fontyourface_ui/fontyourface_ui.module',
        'basename' => 'fontyourface_ui.module',
        'name' => 'fontyourface_ui',
        'info' => 
        array (
          'name' => '@font-your-face UI',
          'description' => 'Administrative interface for managing fonts.',
          'package' => '@font-your-face',
          'dependencies' => 
          array (
            0 => 'fontyourface',
            1 => 'views',
          ),
          'configure' => 'admin/config/user-interface/fontyourface',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views/fontyourface.views_default.inc',
            1 => 'views/views_handler_field_fontyourface_font.inc',
            2 => 'views/views_handler_field_fontyourface_foundry.inc',
            3 => 'views/views_handler_field_fontyourface_license.inc',
            4 => 'views/views_handler_field_fontyourface_provider.inc',
            5 => 'views/views_handler_field_fontyourface_tag_font_tid.inc',
            6 => 'views/views_handler_filter_tag_font_tid.inc',
            7 => 'views/views_handler_relationship_fontyourface_tag.inc',
            8 => 'views/views_handler_field_fontyourface_preview.inc',
            9 => 'views/views_handler_field_fontyourface_enable_disable.inc',
            10 => 'views/views_handler_field_fontyourface_enabled_yes_no.inc',
            11 => 'views/views_handler_filter_fontyourface_provider.inc',
            12 => 'views/views_handler_filter_fontyourface_foundry.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'fontsquirrel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/fontsquirrel/fontsquirrel.module',
        'basename' => 'fontsquirrel.module',
        'name' => 'fontsquirrel',
        'info' => 
        array (
          'name' => 'Font Squirrel API',
          'description' => '@font-your-face provider with Font Squirrel fonts.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'local_fonts' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/local_fonts/local_fonts.module',
        'basename' => 'local_fonts.module',
        'name' => 'local_fonts',
        'info' => 
        array (
          'name' => 'Local Fonts',
          'description' => '@font-your-face provider with fonts installed locally on the Drupal server.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'fonts_com' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/modules/fonts_com/fonts_com.module',
        'basename' => 'fonts_com.module',
        'name' => 'fonts_com',
        'info' => 
        array (
          'name' => 'Fonts.com',
          'description' => '@font-your-face provider of fonts from Fonts.com.',
          'dependencies' => 
          array (
            0 => 'fontyourface',
          ),
          'package' => '@font-your-face',
          'core' => '7.x',
          'php' => '5.2.0',
          'files' => 
          array (
            0 => 'api.inc',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
        ),
        'schema_version' => 0,
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'fontyourface' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fontyourface/fontyourface.module',
        'basename' => 'fontyourface.module',
        'name' => 'fontyourface',
        'info' => 
        array (
          'name' => '@font-your-face',
          'description' => 'Manages web fonts.',
          'package' => '@font-your-face',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'fontyourface.test',
          ),
          'version' => '7.x-2.2',
          'project' => 'fontyourface',
          'datestamp' => '1331430943',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'fontyourface',
        'version' => '7.x-2.2',
      ),
      'link' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/link/link.module',
        'basename' => 'link.module',
        'name' => 'link',
        'info' => 
        array (
          'name' => 'Link',
          'description' => 'Defines simple link field types.',
          'core' => '7.x',
          'package' => 'Fields',
          'files' => 
          array (
            0 => 'link.module',
            1 => 'link.install',
            2 => 'tests/link.test',
            3 => 'tests/link.attribute.test',
            4 => 'tests/link.crud.test',
            5 => 'tests/link.crud_browser.test',
            6 => 'tests/link.token.test',
            7 => 'tests/link.validate.test',
            8 => 'views/link_views_handler_argument_target.inc',
            9 => 'views/link_views_handler_filter_protocol.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'link',
          'datestamp' => '1319392535',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'link',
        'version' => '7.x-1.0',
      ),
      'googleanalytics' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/google_analytics/googleanalytics.module',
        'basename' => 'googleanalytics.module',
        'name' => 'googleanalytics',
        'info' => 
        array (
          'name' => 'Google Analytics',
          'description' => 'Allows your site to be tracked by Google Analytics by adding a Javascript tracking code to every page.',
          'core' => '7.x',
          'package' => 'Statistics',
          'configure' => 'admin/config/system/googleanalytics',
          'files' => 
          array (
            0 => 'googleanalytics.test',
          ),
          'version' => '7.x-1.2',
          'project' => 'google_analytics',
          'datestamp' => '1301340367',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'google_analytics',
        'version' => '7.x-1.2',
      ),
      'nodequeue_service' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/nodequeue/addons/nodequeue_service/nodequeue_service.module',
        'basename' => 'nodequeue_service.module',
        'name' => 'nodequeue_service',
        'info' => 
        array (
          'name' => 'Nodequeue Service',
          'description' => 'Provides a nodequeue service.',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'services',
            1 => 'nodequeue',
          ),
          'files' => 
          array (
            0 => 'nodequeue_service.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/nodequeue/nodequeue.module',
        'basename' => 'nodequeue.module',
        'name' => 'nodequeue',
        'info' => 
        array (
          'name' => 'Nodequeue',
          'description' => 'Create queues which can contain nodes in arbitrary order',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'configure' => 'admin/structure/nodequeue/settings',
          'files' => 
          array (
            0 => 'includes/views/nodequeue.views.inc',
            1 => 'includes/nodequeue.actions.inc',
            2 => 'includes/views/nodequeue_handler_argument_subqueue_qid.inc',
            3 => 'includes/views/nodequeue_handler_field_all_queues.inc',
            4 => 'includes/views/nodequeue_handler_field_all_subqueues.inc',
            5 => 'includes/views/nodequeue_handler_field_links.inc',
            6 => 'includes/views/nodequeue_handler_field_queue_tab.inc',
            7 => 'includes/views/nodequeue_handler_filter_in_queue.inc',
            8 => 'includes/views/nodequeue_handler_relationship_nodequeue.inc',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'nodequeue_generate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/nodequeue/nodequeue_generate.module',
        'basename' => 'nodequeue_generate.module',
        'name' => 'nodequeue_generate',
        'info' => 
        array (
          'name' => 'Nodequeue generate',
          'description' => 'Bulk assign nodes into queues for quickly populating a site.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'nodequeue',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'nodequeue_generate.module',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'smartqueue' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/nodequeue/smartqueue.module',
        'basename' => 'smartqueue.module',
        'name' => 'smartqueue',
        'info' => 
        array (
          'name' => 'Smartqueue taxonomy',
          'description' => 'Creates a node queue for each taxonomy vocabulary',
          'package' => 'Nodequeue',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'nodequeue',
            1 => 'taxonomy',
          ),
          'version' => '7.x-2.0-beta1',
          'project' => 'nodequeue',
          'datestamp' => '1316558104',
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'nodequeue',
        'version' => '7.x-2.0-beta1',
      ),
      'features_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/features/tests/features_test.module',
        'basename' => 'features_test.module',
        'name' => 'features_test',
        'info' => 
        array (
          'name' => 'Features Tests',
          'description' => 'Test module for Features testing.',
          'core' => '7.x',
          'package' => 'Testing',
          'php' => '5.2.0',
          'dependencies' => 
          array (
            0 => 'features',
            1 => 'image',
            2 => 'strongarm',
            3 => 'views',
          ),
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-features_test-field_features_test',
            ),
            'filter' => 
            array (
              0 => 'features_test',
            ),
            'image' => 
            array (
              0 => 'features_test',
            ),
            'node' => 
            array (
              0 => 'features_test',
            ),
            'user_permission' => 
            array (
              0 => 'create features_test content',
            ),
            'views_view' => 
            array (
              0 => 'features_test',
            ),
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'features',
          'datestamp' => '1334345807',
        ),
        'schema_version' => 0,
        'project' => 'features',
        'version' => '7.x-1.0-rc2',
      ),
      'features' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/features/features.module',
        'basename' => 'features.module',
        'name' => 'features',
        'info' => 
        array (
          'name' => 'Features',
          'description' => 'Provides feature management for Drupal.',
          'core' => '7.x',
          'package' => 'Features',
          'files' => 
          array (
            0 => 'tests/features.test',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'features',
          'datestamp' => '1334345807',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'features',
        'version' => '7.x-1.0-rc2',
      ),
      'file_entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/file_entity/tests/file_entity_test.module',
        'basename' => 'file_entity_test.module',
        'name' => 'file_entity_test',
        'info' => 
        array (
          'name' => 'File Entity Test',
          'description' => 'Support module for File Entity tests.',
          'package' => 'Testing',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity',
          ),
          'hidden' => true,
          'version' => '7.x-2.0-unstable5',
          'project' => 'file_entity',
          'datestamp' => '1337550955',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable5',
      ),
      'file_entity' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/file_entity/file_entity.module',
        'basename' => 'file_entity.module',
        'name' => 'file_entity',
        'info' => 
        array (
          'name' => 'File entity',
          'description' => 'Extends Drupal file entities to be fieldable and viewable.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'file',
            2 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_handler_argument_file_type.inc',
            1 => 'views/views_handler_field_file_type.inc',
            2 => 'views/views_handler_filter_file_type.inc',
            3 => 'views/views_plugin_row_file_view.inc',
            4 => 'tests/file_entity.test',
          ),
          'version' => '7.x-2.0-unstable5',
          'project' => 'file_entity',
          'datestamp' => '1337550955',
          'php' => '5.2.4',
        ),
        'schema_version' => '7200',
        'project' => 'file_entity',
        'version' => '7.x-2.0-unstable5',
      ),
      'twitter_actions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/twitter/twitter_actions/twitter_actions.module',
        'basename' => 'twitter_actions.module',
        'name' => 'twitter_actions',
        'info' => 
        array (
          'name' => 'Twitter actions',
          'description' => 'Exposes Drupal actions to send Twitter messages.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
            1 => 'oauth_common',
          ),
          'version' => '7.x-3.0-beta4',
          'project' => 'twitter',
          'datestamp' => '1322940643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-3.0-beta4',
      ),
      'twitter_post' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/twitter/twitter_post/twitter_post.module',
        'basename' => 'twitter_post.module',
        'name' => 'twitter_post',
        'info' => 
        array (
          'name' => 'Twitter Post',
          'description' => 'Enables posting to twitter',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
            1 => 'oauth_common',
          ),
          'version' => '7.x-3.0-beta4',
          'project' => 'twitter',
          'datestamp' => '1322940643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-3.0-beta4',
      ),
      'twitter_signin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/twitter/twitter_signin/twitter_signin.module',
        'basename' => 'twitter_signin.module',
        'name' => 'twitter_signin',
        'info' => 
        array (
          'name' => 'Twitter Signin',
          'description' => 'Adds support for "Sign in with Twitter"',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'twitter',
            1 => 'oauth_common',
          ),
          'configure' => 'admin/config/services/twitter/signin',
          'version' => '7.x-3.0-beta4',
          'project' => 'twitter',
          'datestamp' => '1322940643',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-3.0-beta4',
      ),
      'twitter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/twitter/twitter.module',
        'basename' => 'twitter.module',
        'name' => 'twitter',
        'info' => 
        array (
          'name' => 'Twitter',
          'description' => 'Adds integration with the Twitter microblogging service.',
          'php' => '5.1',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'twitter.lib.php',
            1 => 'twitter_views_field_handlers.inc',
            2 => 'tests/core.test',
            3 => 'tests/input_filters.test',
          ),
          'configure' => 'admin/config/services/twitter',
          'version' => '7.x-3.0-beta4',
          'project' => 'twitter',
          'datestamp' => '1322940643',
          'dependencies' => 
          array (
          ),
        ),
        'schema_version' => 0,
        'project' => 'twitter',
        'version' => '7.x-3.0-beta4',
      ),
      'backup_migrate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/backup_migrate/backup_migrate.module',
        'basename' => 'backup_migrate.module',
        'name' => 'backup_migrate',
        'info' => 
        array (
          'name' => 'Backup and Migrate',
          'description' => 'Backup or migrate the Drupal Database quickly and without unnecessary data.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'backup_migrate.module',
            1 => 'backup_migrate.install',
            2 => 'includes/destinations.inc',
            3 => 'includes/profiles.inc',
            4 => 'includes/schedules.inc',
          ),
          'configure' => 'admin/config/system/backup_migrate',
          'version' => '7.x-2.3',
          'project' => 'backup_migrate',
          'datestamp' => '1336146650',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7203',
        'project' => 'backup_migrate',
        'version' => '7.x-2.3',
      ),
      'scheduler' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/scheduler/scheduler.module',
        'basename' => 'scheduler.module',
        'name' => 'scheduler',
        'info' => 
        array (
          'name' => 'Scheduler',
          'description' => 'This module allows nodes to be published and unpublished on specified dates and time.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'scheduler.install',
            1 => 'scheduler.module',
            2 => 'scheduler.views.inc',
            3 => 'scheduler.test',
            4 => 'scheduler_handler_field_scheduler_countdown.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'scheduler',
          'datestamp' => '1299939069',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6101',
        'project' => 'scheduler',
        'version' => '7.x-1.0',
      ),
      'media_internet' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media/modules/media_internet/media_internet.module',
        'basename' => 'media_internet.module',
        'name' => 'media_internet',
        'info' => 
        array (
          'name' => 'Media Internet Sources',
          'description' => 'Provides an API for accessing media on various internet services',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'files' => 
          array (
            0 => 'includes/MediaBrowserInternet.inc',
          ),
          'version' => '7.x-2.0-unstable5+0-dev',
          'project' => 'media',
          'datestamp' => '1337560110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable5+0-dev',
      ),
      'mediafield' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media/modules/mediafield/mediafield.module',
        'basename' => 'mediafield.module',
        'name' => 'mediafield',
        'info' => 
        array (
          'name' => 'Media Field',
          'description' => 'Provides a field type that stores media-specific data. <em>Deprecated by the core File field type.</em>',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'media',
          ),
          'version' => '7.x-2.0-unstable5+0-dev',
          'project' => 'media',
          'datestamp' => '1337560110',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'media',
        'version' => '7.x-2.0-unstable5+0-dev',
      ),
      'media' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media/media.module',
        'basename' => 'media.module',
        'name' => 'media',
        'info' => 
        array (
          'name' => 'Media',
          'description' => 'Provides the core Media API',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'file_entity (>1.99)',
            1 => 'image',
            2 => 'views',
          ),
          'files' => 
          array (
            0 => 'includes/MediaReadOnlyStreamWrapper.inc',
            1 => 'includes/MediaBrowserPluginInterface.inc',
            2 => 'includes/MediaBrowserPlugin.inc',
            3 => 'includes/MediaBrowserLibrary.inc',
            4 => 'includes/MediaBrowserUpload.inc',
            5 => 'includes/MediaBrowserView.inc',
            6 => 'includes/media_views_plugin_display_media_browser.inc',
            7 => 'includes/media_views_plugin_style_media_browser.inc',
            8 => 'tests/media.test',
            9 => 'tests/media.types.test',
            10 => 'tests/media.entity.test',
          ),
          'testing_api' => '2.x',
          'version' => '7.x-2.0-unstable5+0-dev',
          'project' => 'media',
          'datestamp' => '1337560110',
          'php' => '5.2.4',
        ),
        'schema_version' => '7202',
        'project' => 'media',
        'version' => '7.x-2.0-unstable5+0-dev',
      ),
      'tweetbutton' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/tweetbutton/tweetbutton.module',
        'basename' => 'tweetbutton.module',
        'name' => 'tweetbutton',
        'info' => 
        array (
          'name' => 'Tweetbutton',
          'description' => 'Add tweet button to  your website without having to leave the page',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'token',
          ),
          'configure' => 'admin/config/services/tweetbutton',
          'version' => '7.x-2.0-beta1',
          'project' => 'tweetbutton',
          'datestamp' => '1324327545',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'tweetbutton',
        'version' => '7.x-2.0-beta1',
      ),
      'fb_social' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/fb_social/fb_social.module',
        'basename' => 'fb_social.module',
        'name' => 'fb_social',
        'info' => 
        array (
          'name' => 'fb social',
          'description' => 'Provides integration with Facebook social plugins',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Facebook Social Plugins',
          'core' => '7.x',
          'configure' => 'admin/structure/fbsocial',
          'files' => 
          array (
            0 => 'plugins/views/fb_social_handler_field.inc',
            1 => 'plugins/export_ui/fb_social_presets_ui.inc',
          ),
          'version' => '7.x-2.0-beta4',
          'project' => 'fb_social',
          'datestamp' => '1327205167',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'fb_social',
        'version' => '7.x-2.0-beta4',
      ),
      'news' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/news/news.module',
        'basename' => 'news.module',
        'name' => 'news',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'context',
            1 => 'features',
            2 => 'base_feature',
            3 => 'wysiwyg',
            4 => 'strongarm',
            5 => 'taxonomy',
            6 => 'views',
          ),
          'description' => 'Includes News Article Content Type and a sidebar block display and news page/feed.',
          'features' => 
          array (
            'context' => 
            array (
              0 => 'home_news_block',
              1 => 'news_block',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'strongarm:strongarm:1',
              2 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-news_article-body',
              1 => 'node-news_article-field_tags',
            ),
            'node' => 
            array (
              0 => 'news_article',
            ),
            'taxonomy' => 
            array (
              0 => 'tags',
            ),
            'user_permission' => 
            array (
              0 => 'create news_article content',
              1 => 'delete any news_article content',
              2 => 'delete own news_article content',
              3 => 'edit any news_article content',
              4 => 'edit own news_article content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_news_article',
              1 => 'comment_default_mode_news_article',
              2 => 'comment_default_per_page_news_article',
              3 => 'comment_form_location_news_article',
              4 => 'comment_news_article',
              5 => 'comment_preview_news_article',
              6 => 'comment_subject_field_news_article',
              7 => 'menu_options_news_article',
              8 => 'menu_parent_news_article',
              9 => 'node_options_news_article',
              10 => 'node_preview_news_article',
              11 => 'node_submitted_news_article',
              12 => 'pathauto_node_news_article_pattern',
              13 => 'scheduler_publish_enable_news_article',
              14 => 'scheduler_publish_touch_news_article',
              15 => 'scheduler_unpublish_enable_news_article',
            ),
            'views_view' => 
            array (
              0 => 'news',
            ),
          ),
          'name' => 'News',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'news',
          'version' => '7.x-1.8',
        ),
        'schema_version' => 0,
        'project' => 'news',
        'version' => '7.x-1.8',
      ),
      'discography' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/discography/discography.module',
        'basename' => 'discography.module',
        'name' => 'discography',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'colorbox',
            1 => 'context',
            2 => 'eva',
            3 => 'features',
            4 => 'fences',
            5 => 'field_group',
            6 => 'jplayer',
            7 => 'link',
            8 => 'list',
            9 => 'base_feature',
            10 => 'wysiwyg',
            11 => 'media',
            12 => 'mediaelement',
            13 => 'multiselect',
            14 => 'node_reference',
            15 => 'strongarm',
          ),
          'description' => 'Adds Albums and Tracks content types and associated views, including the site audio player.',
          'features' => 
          array (
            'context' => 
            array (
              0 => 'album_block',
            ),
            'ctools' => 
            array (
              0 => 'context:context:3',
              1 => 'field_group:field_group:1',
              2 => 'strongarm:strongarm:1',
              3 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-album-body',
              1 => 'node-album-field_album_art',
              2 => 'node-album-field_buy_now',
              3 => 'node-album-field_sort',
              4 => 'node-album-field_track_reference',
              5 => 'node-mp3_track-body',
              6 => 'node-mp3_track-field_audio_checkbox',
              7 => 'node-mp3_track-field_mp3',
              8 => 'node-mp3_track-field_site_audio_sort',
            ),
            'field_group' => 
            array (
              0 => 'group_website_audio_player|node|mp3_track|form',
            ),
            'image' => 
            array (
              0 => '50x50',
            ),
            'node' => 
            array (
              0 => 'album',
              1 => 'mp3_track',
            ),
            'user_permission' => 
            array (
              0 => 'create album content',
              1 => 'create mp3_track content',
              2 => 'delete any album content',
              3 => 'delete any mp3_track content',
              4 => 'delete own album content',
              5 => 'delete own mp3_track content',
              6 => 'edit any album content',
              7 => 'edit any mp3_track content',
              8 => 'edit own album content',
              9 => 'edit own mp3_track content',
            ),
            'variable' => 
            array (
              0 => 'colorbox_load',
              1 => 'comment_album',
              2 => 'comment_anonymous_album',
              3 => 'comment_anonymous_mp3_track',
              4 => 'comment_default_mode_album',
              5 => 'comment_default_mode_mp3_track',
              6 => 'comment_default_per_page_album',
              7 => 'comment_default_per_page_mp3_track',
              8 => 'comment_form_location_album',
              9 => 'comment_form_location_mp3_track',
              10 => 'comment_mp3_track',
              11 => 'comment_preview_album',
              12 => 'comment_preview_mp3_track',
              13 => 'comment_subject_field_album',
              14 => 'comment_subject_field_mp3_track',
              15 => 'file_private_path',
              16 => 'jplayer_protected',
              17 => 'menu_options_album',
              18 => 'menu_options_mp3_track',
              19 => 'menu_parent_album',
              20 => 'menu_parent_mp3_track',
              21 => 'node_options_album',
              22 => 'node_options_mp3_track',
              23 => 'node_preview_album',
              24 => 'node_preview_mp3_track',
              25 => 'node_submitted_album',
              26 => 'node_submitted_mp3_track',
              27 => 'pathauto_node_album_pattern',
              28 => 'pathauto_node_mp3_track_pattern',
              29 => 'scheduler_publish_enable_album',
              30 => 'scheduler_publish_enable_mp3_track',
              31 => 'scheduler_publish_touch_album',
              32 => 'scheduler_publish_touch_mp3_track',
              33 => 'scheduler_unpublish_enable_album',
              34 => 'scheduler_unpublish_enable_mp3_track',
            ),
            'views_view' => 
            array (
              0 => 'albums_tracks',
            ),
          ),
          'name' => 'Discography',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'discography',
          'version' => '7.x-1.4',
        ),
        'schema_version' => 0,
        'project' => 'discography',
        'version' => '7.x-1.4',
      ),
      'pathauto' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/pathauto/pathauto.module',
        'basename' => 'pathauto.module',
        'name' => 'pathauto',
        'info' => 
        array (
          'name' => 'Pathauto',
          'description' => 'Provides a mechanism for modules to automatically generate aliases for the content they manage.',
          'dependencies' => 
          array (
            0 => 'path',
            1 => 'token',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'pathauto.test',
          ),
          'configure' => 'admin/config/search/path/patterns',
          'recommends' => 
          array (
            0 => 'redirect',
          ),
          'version' => '7.x-1.1',
          'project' => 'pathauto',
          'datestamp' => '1336950382',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'pathauto',
        'version' => '7.x-1.1',
      ),
      'features_override' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/features_override/features_override.module',
        'basename' => 'features_override.module',
        'name' => 'features_override',
        'info' => 
        array (
          'name' => 'Features Override',
          'description' => 'Allows exported Features to be overridden',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'features',
          ),
          'package' => 'Features',
          'version' => '7.x-2.0-alpha1',
          'project' => 'features_override',
          'datestamp' => '1332024942',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'features_override',
        'version' => '7.x-2.0-alpha1',
      ),
      'field_group' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/field_group/field_group.module',
        'basename' => 'field_group.module',
        'name' => 'field_group',
        'info' => 
        array (
          'name' => 'Fieldgroup',
          'description' => 'Fieldgroup',
          'package' => 'Fields',
          'dependencies' => 
          array (
            0 => 'field',
            1 => 'ctools',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'field_group.install',
            1 => 'field_group.module',
            2 => 'field_group.field_ui.inc',
            3 => 'field_group.form.inc',
            4 => 'field_group.features.inc',
            5 => 'field_group.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'field_group',
          'datestamp' => '1319051133',
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'field_group',
        'version' => '7.x-1.1',
      ),
      'token_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/token/tests/token_test.module',
        'basename' => 'token_test.module',
        'name' => 'token_test',
        'info' => 
        array (
          'name' => 'Token Test',
          'description' => 'Testing module for token functionality.',
          'package' => 'Testing',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token_test.module',
          ),
          'hidden' => true,
          'version' => '7.x-1.1',
          'project' => 'token',
          'datestamp' => '1337115392',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'token',
        'version' => '7.x-1.1',
      ),
      'token' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/token/token.module',
        'basename' => 'token.module',
        'name' => 'token',
        'info' => 
        array (
          'name' => 'Token',
          'description' => 'Provides a user interface for the Token API and some missing core tokens.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'token.module',
            1 => 'token.install',
            2 => 'token.tokens.inc',
            3 => 'token.pages.inc',
            4 => 'token.test',
          ),
          'version' => '7.x-1.1',
          'project' => 'token',
          'datestamp' => '1337115392',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'token',
        'version' => '7.x-1.1',
      ),
      'ds_extras' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/modules/ds_extras/ds_extras.module',
        'basename' => 'ds_extras.module',
        'name' => 'ds_extras',
        'info' => 
        array (
          'name' => 'Extras',
          'description' => 'Contains additional features.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/extras',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => '7005',
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_forms' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/modules/ds_forms/ds_forms.module',
        'basename' => 'ds_forms.module',
        'name' => 'ds_forms',
        'info' => 
        array (
          'name' => 'Forms',
          'description' => 'Manage the layout of forms.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/modules/ds_search/ds_search.module',
        'basename' => 'ds_search.module',
        'name' => 'ds_search',
        'info' => 
        array (
          'name' => 'Search display',
          'description' => 'Extend the display options for search results for Drupal Core or Apache Solr.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds',
          ),
          'configure' => 'admin/structure/ds/search',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_exportables_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/tests/ds_exportables_test/ds_exportables_test.module',
        'basename' => 'ds_exportables_test.module',
        'name' => 'ds_exportables_test',
        'info' => 
        array (
          'name' => 'Display suite exportables test',
          'description' => 'Tests for exportables with Display Suite.',
          'package' => 'Display suite',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/tests/ds_test.module',
        'basename' => 'ds_test.module',
        'name' => 'ds_test',
        'info' => 
        array (
          'name' => 'Display suite Test',
          'description' => 'Test module for display suite',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ds_extras',
          ),
          'hidden' => true,
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'ds' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ds/ds.module',
        'basename' => 'ds.module',
        'name' => 'ds',
        'info' => 
        array (
          'name' => 'Display suite',
          'description' => 'Extend the display options for every entity type.',
          'core' => '7.x',
          'package' => 'Display suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'views/views_plugin_ds_entity_view.inc',
            1 => 'views/views_plugin_ds_fields_view.inc',
            2 => 'tests/ds.base.test',
            3 => 'tests/ds.search.test',
            4 => 'tests/ds.entities.test',
            5 => 'tests/ds.exportables.test',
            6 => 'tests/ds.panels.test',
            7 => 'tests/ds.views.test',
            8 => 'tests/ds.forms.test',
          ),
          'configure' => 'admin/structure/ds',
          'version' => '7.x-1.5',
          'project' => 'ds',
          'datestamp' => '1329223541',
          'php' => '5.2.4',
        ),
        'schema_version' => '7004',
        'project' => 'ds',
        'version' => '7.x-1.5',
      ),
      'plupload' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/plupload/plupload.module',
        'basename' => 'plupload.module',
        'name' => 'plupload',
        'info' => 
        array (
          'name' => 'Plupload integration module',
          'description' => 'Provides a plupload element.',
          'files' => 
          array (
            0 => 'plupload.module',
          ),
          'core' => '7.x',
          'package' => 'Media',
          'version' => '7.x-1.0',
          'project' => 'plupload',
          'datestamp' => '1336903889',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'plupload',
        'version' => '7.x-1.0',
      ),
      'nodereference_url' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/nodereference_url/nodereference_url.module',
        'basename' => 'nodereference_url.module',
        'name' => 'nodereference_url',
        'info' => 
        array (
          'name' => 'Node Reference URL Widget',
          'description' => 'Adds an additional widget to the Node Reference field that prepopulates a reference by the URL.',
          'dependencies' => 
          array (
            0 => 'node_reference',
          ),
          'files' => 
          array (
            0 => 'nodereference_url.module',
          ),
          'package' => 'Fields',
          'core' => '7.x',
          'version' => '7.x-1.12',
          'project' => 'nodereference_url',
          'datestamp' => '1316903507',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'nodereference_url',
        'version' => '7.x-1.12',
      ),
      'image_resize_filter' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/image_resize_filter/image_resize_filter.module',
        'basename' => 'image_resize_filter.module',
        'name' => 'image_resize_filter',
        'info' => 
        array (
          'name' => 'Image resize filter',
          'description' => 'Filter to automatically scale images to their height and width dimensions.',
          'core' => '7.x',
          'package' => 'Input filters',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.13',
          'project' => 'image_resize_filter',
          'datestamp' => '1313565117',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'image_resize_filter',
        'version' => '7.x-1.13',
      ),
      'demo' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/demo/demo.module',
        'basename' => 'demo.module',
        'name' => 'demo',
        'info' => 
        array (
          'name' => 'Demonstration site',
          'description' => 'Create snapshots and reset the site for demonstration or testing purposes.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/structure/demo',
          'files' => 
          array (
            0 => 'demo.module',
            1 => 'demo.admin.inc',
            2 => 'database_mysql_dump.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'demo',
          'datestamp' => '1294543925',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6100',
        'project' => 'demo',
        'version' => '7.x-1.0',
      ),
      'demo_reset' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/demo/demo_reset.module',
        'basename' => 'demo_reset.module',
        'name' => 'demo_reset',
        'info' => 
        array (
          'name' => 'Demonstration site reset',
          'description' => 'Allows to reset the site on cron runs and to <strong>reset the site WITHOUT CONFIRMATION.</strong> Only supposed to be used on public demonstration sites. Use at your own risk.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'demo',
          ),
          'files' => 
          array (
            0 => 'demo_reset.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'demo',
          'datestamp' => '1294543925',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'demo',
        'version' => '7.x-1.0',
      ),
      'entity_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity/tests/entity_test.module',
        'basename' => 'entity_test.module',
        'name' => 'entity_test',
        'info' => 
        array (
          'name' => 'Entity CRUD test module',
          'description' => 'Provides entity types based upon the CRUD API.',
          'version' => '7.x-1.0-rc2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_test.module',
            1 => 'entity_test.install',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1335099086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc2',
      ),
      'entity_feature' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity/tests/entity_feature.module',
        'basename' => 'entity_feature.module',
        'name' => 'entity_feature',
        'info' => 
        array (
          'name' => 'Entity feature module',
          'description' => 'Provides some entities in code.',
          'version' => '7.x-1.0-rc2',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_feature.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity_test',
          ),
          'hidden' => true,
          'project' => 'entity',
          'datestamp' => '1335099086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc2',
      ),
      'entity_test_i18n' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity/tests/entity_test_i18n.module',
        'basename' => 'entity_test_i18n.module',
        'name' => 'entity_test_i18n',
        'info' => 
        array (
          'name' => 'Entity-test type translation',
          'description' => 'Allows translating entity-test types.',
          'dependencies' => 
          array (
            0 => 'entity_test',
            1 => 'i18n_string',
          ),
          'package' => 'Multilingual - Internationalization',
          'core' => '7.x',
          'hidden' => true,
          'version' => '7.x-1.0-rc2',
          'project' => 'entity',
          'datestamp' => '1335099086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc2',
      ),
      'entity' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity/entity.module',
        'basename' => 'entity.module',
        'name' => 'entity',
        'info' => 
        array (
          'name' => 'Entity API',
          'description' => 'Enables modules to work with any entity type and to provide entities.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity.features.inc',
            1 => 'entity.i18n.inc',
            2 => 'entity.info.inc',
            3 => 'entity.rules.inc',
            4 => 'entity.test',
            5 => 'includes/entity.inc',
            6 => 'includes/entity.controller.inc',
            7 => 'includes/entity.ui.inc',
            8 => 'includes/entity.wrapper.inc',
            9 => 'views/entity.views.inc',
            10 => 'views/handlers/entity_views_field_handler_helper.inc',
            11 => 'views/handlers/entity_views_handler_area_entity.inc',
            12 => 'views/handlers/entity_views_handler_field_boolean.inc',
            13 => 'views/handlers/entity_views_handler_field_date.inc',
            14 => 'views/handlers/entity_views_handler_field_duration.inc',
            15 => 'views/handlers/entity_views_handler_field_entity.inc',
            16 => 'views/handlers/entity_views_handler_field_field.inc',
            17 => 'views/handlers/entity_views_handler_field_numeric.inc',
            18 => 'views/handlers/entity_views_handler_field_options.inc',
            19 => 'views/handlers/entity_views_handler_field_text.inc',
            20 => 'views/handlers/entity_views_handler_field_uri.inc',
            21 => 'views/handlers/entity_views_handler_relationship_by_bundle.inc',
            22 => 'views/handlers/entity_views_handler_relationship.inc',
            23 => 'views/plugins/entity_views_plugin_row_entity_view.inc',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'entity',
          'datestamp' => '1335099086',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7002',
        'project' => 'entity',
        'version' => '7.x-1.0-rc2',
      ),
      'entity_token' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity/entity_token.module',
        'basename' => 'entity_token.module',
        'name' => 'entity_token',
        'info' => 
        array (
          'name' => 'Entity tokens',
          'description' => 'Provides token replacements for all properties that have no tokens and are known to the entity API.',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'entity_token.tokens.inc',
            1 => 'entity_token.module',
          ),
          'dependencies' => 
          array (
            0 => 'entity',
          ),
          'version' => '7.x-1.0-rc2',
          'project' => 'entity',
          'datestamp' => '1335099086',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity',
        'version' => '7.x-1.0-rc2',
      ),
      'entity_autocomplete' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/entity_autocomplete/entity_autocomplete.module',
        'basename' => 'entity_autocomplete.module',
        'name' => 'entity_autocomplete',
        'info' => 
        array (
          'name' => 'Entity Autocomplete',
          'descriptions' => 'Adds a callback that will autocomplate any entity that defines a label',
          'core' => '7.x',
          'version' => '7.x-1.0-beta2',
          'project' => 'entity_autocomplete',
          'datestamp' => '1336421455',
          'dependencies' => 
          array (
          ),
          'description' => '',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'entity_autocomplete',
        'version' => '7.x-1.0-beta2',
      ),
      'devel_generate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel_generate/devel_generate.module',
        'basename' => 'devel_generate.module',
        'name' => 'devel_generate',
        'info' => 
        array (
          'name' => 'Devel generate',
          'description' => 'Generate dummy users, nodes, and taxonomy terms.',
          'package' => 'Development',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'devel',
          ),
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'devel_node_access' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel_node_access.module',
        'basename' => 'devel_node_access.module',
        'name' => 'devel_node_access',
        'info' => 
        array (
          'name' => 'Devel node access',
          'description' => 'Developer blocks and page illustrating relevant node_access records.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'devel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/devel/devel.module',
        'basename' => 'devel.module',
        'name' => 'devel',
        'info' => 
        array (
          'name' => 'Devel',
          'description' => 'Various blocks, pages, and functions for developers.',
          'package' => 'Development',
          'core' => '7.x',
          'configure' => 'admin/config/development/devel',
          'tags' => 
          array (
            0 => 'developer',
          ),
          'files' => 
          array (
            0 => 'devel.test',
            1 => 'devel.mail.inc',
          ),
          'version' => '7.x-1.2',
          'project' => 'devel',
          'datestamp' => '1311355316',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7003',
        'project' => 'devel',
        'version' => '7.x-1.2',
      ),
      'superfish' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/superfish/superfish.module',
        'basename' => 'superfish.module',
        'name' => 'superfish',
        'info' => 
        array (
          'name' => 'Superfish',
          'description' => 'jQuery Superfish plugin for your Drupal menus.',
          'package' => 'User interface',
          'dependencies' => 
          array (
            0 => 'menu',
            1 => 'libraries',
          ),
          'configure' => 'admin/config/user-interface/superfish',
          'core' => '7.x',
          'version' => '7.x-1.9-beta4',
          'project' => 'superfish',
          'datestamp' => '1322150145',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'superfish',
        'version' => '7.x-1.9-beta4',
      ),
      'mediaelement' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/mediaelement/mediaelement.module',
        'basename' => 'mediaelement.module',
        'name' => 'mediaelement',
        'info' => 
        array (
          'name' => 'MediaElement.js',
          'description' => 'Provide MediaElement.js to be used on the entire site or just with Filefields.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'libraries',
          ),
          'files' => 
          array (
            0 => 'mediaelement.admin.inc',
            1 => 'mediaelement.install',
            2 => 'mediaelement.module',
          ),
          'configure' => 'admin/config/media/mediaelement',
          'version' => '7.x-1.2',
          'project' => 'mediaelement',
          'datestamp' => '1326568843',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'mediaelement',
        'version' => '7.x-1.2',
      ),
      'imagecache_coloractions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/coloractions/imagecache_coloractions.module',
        'basename' => 'imagecache_coloractions.module',
        'name' => 'imagecache_coloractions',
        'info' => 
        array (
          'name' => 'Imagecache Color Actions',
          'description' => 'Additional ImageCache actions, providing color-shifting, brightness and alpha transparency effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_coloractions.install',
            1 => 'imagecache_coloractions.module',
            2 => 'transparency.inc',
            3 => 'tests/green.imagecache_preset.inc',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'imagecache_canvasactions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/canvasactions/imagecache_canvasactions.module',
        'basename' => 'imagecache_canvasactions.module',
        'name' => 'imagecache_canvasactions',
        'info' => 
        array (
          'name' => 'Imagecache Canvas Actions',
          'description' => 'Actions for manipulating image canvases layers, including watermark and background effect. Also an aspect switcher (portrait/landscape)',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'canvasactions.inc',
            1 => 'imagecache_canvasactions.install',
            2 => 'imagecache_canvasactions.module',
            3 => 'rounded_corners.inc',
            4 => 'tests/cheap_dropshadow.imagecache_preset.inc',
            5 => 'tests/keyword_positioning.imagecache_preset.inc',
            6 => 'tests/positioned_underlay.imagecache_preset.inc',
            7 => 'tests/rotate_alpha.imagecache_preset.inc',
            8 => 'tests/rotate_alpha_gif.imagecache_preset.inc',
            9 => 'tests/rotate_scale.imagecache_preset.inc',
            10 => 'tests/rotate_scale_alpha.imagecache_preset.inc',
            11 => 'tests/rounded.imagecache_preset.inc',
            12 => 'tests/rounded_bl.imagecache_preset.inc',
            13 => 'tests/rounded_flattened.imagecache_preset.inc',
            14 => 'tests/watermark_100.imagecache_preset.inc',
            15 => 'tests/watermark_50.imagecache_preset.inc',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'image_effects_text_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/image_effects_text/image_effects_text_test/image_effects_text_test.module',
        'basename' => 'image_effects_text_test.module',
        'name' => 'image_effects_text_test',
        'info' => 
        array (
          'name' => 'Image Effects Text test',
          'description' => 'Image effects that test the text effect',
          'core' => '7.x',
          'package' => 'Features',
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'image_effects_text',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'text-rotate-test',
              1 => 'text-test',
            ),
          ),
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'image_effects_text' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/image_effects_text/image_effects_text.module',
        'basename' => 'image_effects_text.module',
        'name' => 'image_effects_text',
        'info' => 
        array (
          'name' => 'Image Text Effects',
          'description' => 'Display simple or dynamic captions on images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
            1 => 'imagecache_actions',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'imagecache_testsuite' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/tests/imagecache_testsuite.module',
        'basename' => 'imagecache_testsuite.module',
        'name' => 'imagecache_testsuite',
        'info' => 
        array (
          'name' => 'Imagecache_actions Test Suite',
          'description' => 'Displays a collection of demo presets.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
          ),
          'features' => 
          array (
            'image' => 
            array (
              0 => 'corners_combo',
            ),
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'imagecache_customactions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/customactions/imagecache_customactions.module',
        'basename' => 'imagecache_customactions.module',
        'name' => 'imagecache_customactions',
        'info' => 
        array (
          'name' => 'Imagecache Custom Actions',
          'description' => 'Allow direct PHP code manipulation of imagecache images.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'imagecache_actions',
            1 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_customactions.install',
            1 => 'imagecache_customactions.module',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => '7100',
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'imagecache_autorotate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/autorotate/imagecache_autorotate.module',
        'basename' => 'imagecache_autorotate.module',
        'name' => 'imagecache_autorotate',
        'info' => 
        array (
          'name' => 'Imagecache Autorotate',
          'description' => 'Autorotate image based on EXIF Orientation.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'imagecache_autorotate.install',
            1 => 'imagecache_autorotate.module',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'image_styles_admin' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/image_styles_admin/image_styles_admin.module',
        'basename' => 'image_styles_admin.module',
        'name' => 'image_styles_admin',
        'info' => 
        array (
          'name' => 'Image styles admin',
          'description' => 'Provides additional administrative image style functionality.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'imagecache_actions' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/imagecache_actions/imagecache_actions.module',
        'basename' => 'imagecache_actions.module',
        'name' => 'imagecache_actions',
        'info' => 
        array (
          'name' => 'Imagecache Actions',
          'description' => 'Provides a number of additional image effects.',
          'package' => 'Media',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'image',
          ),
          'files' => 
          array (
            0 => 'ImageCacheActionsModuleStreamWrapper.php',
          ),
          'version' => '7.x-1.0+4-dev',
          'project' => 'imagecache_actions',
          'datestamp' => '1337646231',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'imagecache_actions',
        'version' => '7.x-1.0+4-dev',
      ),
      'photos' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/photos/photos.module',
        'basename' => 'photos.module',
        'name' => 'photos',
        'info' => 
        array (
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'colorbox',
            1 => 'features',
            2 => 'list',
            3 => 'base_feature',
            4 => 'media',
            5 => 'multiselect',
            6 => 'strongarm',
            7 => 'taxonomy',
          ),
          'description' => 'Adds Basic Photo Content Type and Views',
          'features' => 
          array (
            'ctools' => 
            array (
              0 => 'strongarm:strongarm:1',
              1 => 'views:views_default:3.0',
            ),
            'field' => 
            array (
              0 => 'node-photo-field_gallery',
              1 => 'node-photo-field_photo',
              2 => 'node-photo-field_photo_sort_order',
            ),
            'node' => 
            array (
              0 => 'photo',
            ),
            'taxonomy' => 
            array (
              0 => 'gallery',
            ),
            'user_permission' => 
            array (
              0 => 'create photo content',
              1 => 'delete any photo content',
              2 => 'delete own photo content',
              3 => 'edit any photo content',
              4 => 'edit own photo content',
            ),
            'variable' => 
            array (
              0 => 'comment_anonymous_photo',
              1 => 'comment_default_mode_photo',
              2 => 'comment_default_per_page_photo',
              3 => 'comment_form_location_photo',
              4 => 'comment_photo',
              5 => 'comment_preview_photo',
              6 => 'comment_subject_field_photo',
              7 => 'menu_options_photo',
              8 => 'menu_parent_photo',
              9 => 'node_options_photo',
              10 => 'node_preview_photo',
              11 => 'node_submitted_photo',
              12 => 'pathauto_node_photo_pattern',
              13 => 'scheduler_publish_enable_photo',
              14 => 'scheduler_publish_touch_photo',
              15 => 'scheduler_unpublish_enable_photo',
            ),
            'views_view' => 
            array (
              0 => 'photos',
            ),
          ),
          'name' => 'Photos',
          'package' => 'Base Features',
          'php' => '5.2.4',
          'project' => 'photos',
          'version' => '7.x-1.3',
        ),
        'schema_version' => 0,
        'project' => 'photos',
        'version' => '7.x-1.3',
      ),
      'webform' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/webform/webform.module',
        'basename' => 'webform.module',
        'name' => 'webform',
        'info' => 
        array (
          'name' => 'Webform',
          'description' => 'Enables the creation of forms and questionnaires.',
          'core' => '7.x',
          'package' => 'Webform',
          'configure' => 'admin/config/content/webform',
          'files' => 
          array (
            0 => 'includes/webform.export.inc',
            1 => 'views/webform_handler_field_form_body.inc',
            2 => 'views/webform_handler_field_is_draft.inc',
            3 => 'views/webform_handler_field_node_link_edit.inc',
            4 => 'views/webform_handler_field_node_link_results.inc',
            5 => 'views/webform_handler_field_submission_count.inc',
            6 => 'views/webform_handler_field_submission_link.inc',
            7 => 'views/webform_handler_field_webform_status.inc',
            8 => 'views/webform_handler_filter_is_draft.inc',
            9 => 'views/webform_handler_filter_webform_status.inc',
            10 => 'views/webform.views.inc',
            11 => 'tests/components.test',
            12 => 'tests/permissions.test',
            13 => 'tests/submission.test',
            14 => 'tests/webform.test',
          ),
          'version' => '7.x-3.18',
          'project' => 'webform',
          'datestamp' => '1336890411',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7320',
        'project' => 'webform',
        'version' => '7.x-3.18',
      ),
      'media_youtube' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/media_youtube/media_youtube.module',
        'basename' => 'media_youtube.module',
        'name' => 'media_youtube',
        'info' => 
        array (
          'name' => 'Media: YouTube',
          'description' => 'Provides YouTube support to the Media module.',
          'package' => 'Media',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'media_youtube.module',
            1 => 'includes/MediaInternetYouTubeHandler.inc',
            2 => 'includes/MediaYouTubeStreamWrapper.inc',
            3 => 'includes/MediaYouTubeStyles.inc',
            4 => 'includes/media_youtube.formatters.inc',
            5 => 'includes/media_youtube.styles.inc',
            6 => 'includes/media_youtube.variables.inc',
          ),
          'dependencies' => 
          array (
            0 => 'media_internet',
          ),
          'version' => '7.x-1.0-beta3',
          'project' => 'media_youtube',
          'datestamp' => '1331655643',
          'php' => '5.2.4',
        ),
        'schema_version' => '7012',
        'project' => 'media_youtube',
        'version' => '7.x-1.0-beta3',
      ),
      'multiselect_fapi_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/multiselect/multiselect_fapi_example/multiselect_fapi_example.module',
        'basename' => 'multiselect_fapi_example.module',
        'name' => 'multiselect_fapi_example',
        'info' => 
        array (
          'name' => 'Multiselect FAPI Example',
          'description' => 'Example usage of the Multiselect module via Form API calls.',
          'package' => 'Example modules',
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'multiselect_fapi_example.module',
          ),
          'project' => 'multiselect',
          'datestamp' => '1336842370',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiselect',
        'version' => '7.x-1.9',
      ),
      'multiselect' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/multiselect/multiselect.module',
        'basename' => 'multiselect.module',
        'name' => 'multiselect',
        'info' => 
        array (
          'name' => 'Multiselect',
          'description' => 'Defines a CCK multiple selection field widget, to allow easier multi-selection for users.',
          'package' => 'CCK',
          'core' => '7.x',
          'version' => '7.x-1.9',
          'files' => 
          array (
            0 => 'multiselect.module',
          ),
          'project' => 'multiselect',
          'datestamp' => '1336842370',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiselect',
        'version' => '7.x-1.9',
      ),
      'better_formats' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/better_formats/better_formats.module',
        'basename' => 'better_formats.module',
        'name' => 'better_formats',
        'info' => 
        array (
          'name' => 'Better Formats',
          'description' => 'Enhances the core input format system by managing input format defaults and settings.',
          'core' => '7.x',
          'configure' => 'admin/config/content/formats',
          'version' => '7.x-1.x-dev',
          'project' => 'better_formats',
          'datestamp' => '1316174599',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'better_formats',
        'version' => '7.x-1.x-dev',
      ),
      'quicktabs_tabstyles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/quicktabs/quicktabs_tabstyles/quicktabs_tabstyles.module',
        'basename' => 'quicktabs_tabstyles.module',
        'name' => 'quicktabs_tabstyles',
        'info' => 
        array (
          'name' => 'Quicktabs Styles',
          'description' => 'Adds predefined tab styles to choose from per Quicktabs instance.',
          'core' => '7.x',
          'configure' => 'admin/structure/quicktabs/styles',
          'dependencies' => 
          array (
            0 => 'quicktabs',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'quicktabs' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/quicktabs/quicktabs.module',
        'basename' => 'quicktabs.module',
        'name' => 'quicktabs',
        'info' => 
        array (
          'name' => 'Quicktabs',
          'description' => 'Render content with tabs and other display styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'quicktabs.module',
            1 => 'quicktabs.classes.inc',
            2 => 'includes/quicktabs_style_plugin.inc',
            3 => 'tests/quicktabs.test',
          ),
          'configure' => 'admin/structure/quicktabs',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-3.4',
          'project' => 'quicktabs',
          'datestamp' => '1332980461',
          'php' => '5.2.4',
        ),
        'schema_version' => '7302',
        'project' => 'quicktabs',
        'version' => '7.x-3.4',
      ),
      'multiform_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/multiform/tests/multiform_test.module',
        'basename' => 'multiform_test.module',
        'name' => 'multiform_test',
        'info' => 
        array (
          'name' => 'Multiform test',
          'description' => 'Handle module for testing Multiform',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'multiform',
          ),
          'hidden' => true,
          'files' => 
          array (
            0 => 'multiform_test.module',
          ),
          'version' => '7.x-1.0',
          'project' => 'multiform',
          'datestamp' => '1327823749',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0',
      ),
      'multiform' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/multiform/multiform.module',
        'basename' => 'multiform.module',
        'name' => 'multiform',
        'info' => 
        array (
          'name' => 'Multiple forms',
          'description' => 'Allows displaying and submitting multiple forms in one form',
          'files' => 
          array (
            0 => 'multiform.module',
            1 => 'tests/multiform.test',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'multiform',
          'datestamp' => '1327823749',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'multiform',
        'version' => '7.x-1.0',
      ),
      'page_manager' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/page_manager/page_manager.module',
        'basename' => 'page_manager.module',
        'name' => 'page_manager',
        'info' => 
        array (
          'name' => 'Page manager',
          'description' => 'Provides a UI and API to manage pages within the site.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools_plugin_example' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_plugin_example/ctools_plugin_example.module',
        'basename' => 'ctools_plugin_example.module',
        'name' => 'ctools_plugin_example',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) Plugin Example',
          'description' => 'Shows how an external module can provide ctools plugins (for Panels, etc.).',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'panels',
            2 => 'page_manager',
            3 => 'advanced_help',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools_custom_content' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_custom_content/ctools_custom_content.module',
        'basename' => 'ctools_custom_content.module',
        'name' => 'ctools_custom_content',
        'info' => 
        array (
          'name' => 'Custom content panes',
          'description' => 'Create custom, exportable, reusable content panes for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'views_content' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/views_content/views_content.module',
        'basename' => 'views_content.module',
        'name' => 'views_content',
        'info' => 
        array (
          'name' => 'Views content panes',
          'description' => 'Allows Views content to be used in Panels, Dashboard and other modules which use the CTools Content API.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'views',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'plugins/views/views_content_plugin_display_ctools_context.inc',
            1 => 'plugins/views/views_content_plugin_display_panel_pane.inc',
            2 => 'plugins/views/views_content_plugin_style_ctools_context.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools_ajax_sample' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_ajax_sample/ctools_ajax_sample.module',
        'basename' => 'ctools_ajax_sample.module',
        'name' => 'ctools_ajax_sample',
        'info' => 
        array (
          'name' => 'Chaos Tools (CTools) AJAX Example',
          'description' => 'Shows how to use the power of Chaos AJAX.',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'core' => '7.x',
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'bulk_export' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/bulk_export/bulk_export.module',
        'basename' => 'bulk_export.module',
        'name' => 'bulk_export',
        'info' => 
        array (
          'name' => 'Bulk Export',
          'description' => 'Performs bulk exporting of data objects known about by Chaos tools.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'package' => 'Chaos tool suite',
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'stylizer' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/stylizer/stylizer.module',
        'basename' => 'stylizer.module',
        'name' => 'stylizer',
        'info' => 
        array (
          'name' => 'Stylizer',
          'description' => 'Create custom styles for applications such as Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
            1 => 'color',
          ),
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools_access_ruleset' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools_access_ruleset/ctools_access_ruleset.module',
        'basename' => 'ctools_access_ruleset.module',
        'name' => 'ctools_access_ruleset',
        'info' => 
        array (
          'name' => 'Custom rulesets',
          'description' => 'Create custom, exportable, reusable access rulesets for applications like Panels.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools_plugin_test' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/tests/ctools_plugin_test.module',
        'basename' => 'ctools_plugin_test.module',
        'name' => 'ctools_plugin_test',
        'info' => 
        array (
          'name' => 'Chaos tools plugins test',
          'description' => 'Provides hooks for testing ctools plugins.',
          'package' => 'Chaos tool suite',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'ctools.plugins.test',
            1 => 'object_cache.test',
          ),
          'hidden' => true,
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'ctools' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/ctools/ctools.module',
        'basename' => 'ctools.module',
        'name' => 'ctools',
        'info' => 
        array (
          'name' => 'Chaos tools',
          'description' => 'A library of helpful tools by Merlin of Chaos.',
          'core' => '7.x',
          'package' => 'Chaos tool suite',
          'files' => 
          array (
            0 => 'includes/context.inc',
            1 => 'includes/math-expr.inc',
            2 => 'includes/stylizer.inc',
          ),
          'version' => '7.x-1.0',
          'project' => 'ctools',
          'datestamp' => '1332962446',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '6007',
        'project' => 'ctools',
        'version' => '7.x-1.0',
      ),
      'admin_menu_toolbar' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/admin_menu/admin_menu_toolbar/admin_menu_toolbar.module',
        'basename' => 'admin_menu_toolbar.module',
        'name' => 'admin_menu_toolbar',
        'info' => 
        array (
          'name' => 'Administration menu Toolbar style',
          'description' => 'A better Toolbar.',
          'package' => 'Administration',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'admin_menu',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'php' => '5.2.4',
        ),
        'schema_version' => '6300',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'admin_devel' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/admin_menu/admin_devel/admin_devel.module',
        'basename' => 'admin_devel.module',
        'name' => 'admin_devel',
        'info' => 
        array (
          'name' => 'Administration Development tools',
          'description' => 'Administration and debugging functionality for developers and site builders.',
          'package' => 'Administration',
          'core' => '7.x',
          'scripts' => 
          array (
            0 => 'admin_devel.js',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'admin_menu' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/admin_menu/admin_menu.module',
        'basename' => 'admin_menu.module',
        'name' => 'admin_menu',
        'info' => 
        array (
          'name' => 'Administration menu',
          'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
          'package' => 'Administration',
          'core' => '7.x',
          'configure' => 'admin/config/administration/admin_menu',
          'dependencies' => 
          array (
            0 => 'system (>7.10)',
          ),
          'files' => 
          array (
            0 => 'tests/admin_menu.test',
          ),
          'version' => '7.x-3.0-rc3',
          'project' => 'admin_menu',
          'datestamp' => '1337292349',
          'php' => '5.2.4',
        ),
        'schema_version' => '7304',
        'project' => 'admin_menu',
        'version' => '7.x-3.0-rc3',
      ),
      'context_layouts' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/context/context_layouts/context_layouts.module',
        'basename' => 'context_layouts.module',
        'name' => 'context_layouts',
        'info' => 
        array (
          'name' => 'Context layouts',
          'description' => 'Allow theme layer to provide multiple region layouts and integrate with context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'context_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/context/context_ui/context_ui.module',
        'basename' => 'context_ui.module',
        'name' => 'context_ui',
        'info' => 
        array (
          'name' => 'Context UI',
          'description' => 'Provides a simple UI for settings up a site structure using Context.',
          'dependencies' => 
          array (
            0 => 'context',
          ),
          'package' => 'Context',
          'core' => '7.x',
          'configure' => 'admin/structure/context',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context_ui.test',
          ),
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => '6004',
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'context' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/context/context.module',
        'basename' => 'context.module',
        'name' => 'context',
        'info' => 
        array (
          'name' => 'Context',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'description' => 'Provide modules with a cache that lasts for a single page request.',
          'package' => 'Context',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'context.module',
            1 => 'tests/context.test',
            2 => 'tests/context.conditions.test',
            3 => 'tests/context.reactions.test',
          ),
          'version' => '7.x-3.0-beta3',
          'project' => 'context',
          'datestamp' => '1337490055',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'context',
        'version' => '7.x-3.0-beta3',
      ),
      'views_slideshow_cycle' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_slideshow/contrib/views_slideshow_cycle/views_slideshow_cycle.module',
        'basename' => 'views_slideshow_cycle.module',
        'name' => 'views_slideshow_cycle',
        'info' => 
        array (
          'name' => 'Views Slideshow: Cycle',
          'description' => 'Adds a Rotating slideshow mode to Views Slideshow.',
          'dependencies' => 
          array (
            0 => 'views_slideshow',
            1 => 'libraries',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow_cycle.module',
            1 => 'views_slideshow_cycle.views_slideshow.inc',
            2 => 'theme/views_slideshow_cycle.theme.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'views_slideshow' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/views_slideshow/views_slideshow.module',
        'basename' => 'views_slideshow.module',
        'name' => 'views_slideshow',
        'info' => 
        array (
          'name' => 'Views Slideshow',
          'description' => 'Provides a View style that displays rows as a jQuery slideshow.  This is an API and requires Views Slideshow Cycle or another module that supports the API.',
          'dependencies' => 
          array (
            0 => 'views',
          ),
          'package' => 'Views',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'views_slideshow.module',
            1 => 'theme/views_slideshow.theme.inc',
            2 => 'views_slideshow.views.inc',
            3 => 'views_slideshow_plugin_style_slideshow.inc',
          ),
          'version' => '7.x-3.0',
          'project' => 'views_slideshow',
          'datestamp' => '1319589616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'views_slideshow',
        'version' => '7.x-3.0',
      ),
      'location_phone' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_phone/location_phone.module',
        'basename' => 'location_phone.module',
        'name' => 'location_phone',
        'info' => 
        array (
          'name' => 'Location Phone',
          'package' => 'Location',
          'description' => 'Allows you to add a phone number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_phone.module',
            1 => 'location_phone.install',
            2 => 'location_phone.views.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_cck' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_cck/location_cck.module',
        'basename' => 'location_cck.module',
        'name' => 'location_cck',
        'info' => 
        array (
          'name' => 'Location CCK',
          'description' => 'Defines a Location field type.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'CCK',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_cck.module',
            1 => 'location_cck.install',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_generate' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_generate/location_generate.module',
        'basename' => 'location_generate.module',
        'name' => 'location_generate',
        'info' => 
        array (
          'name' => 'Location Generate',
          'description' => 'Bulk assign random latitude and longitudes to nodes.',
          'package' => 'Development',
          'dependencies' => 
          array (
            0 => 'devel_generate',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_generate.module',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_fax' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_fax/location_fax.module',
        'basename' => 'location_fax.module',
        'name' => 'location_fax',
        'info' => 
        array (
          'name' => 'Location Fax',
          'package' => 'Location',
          'description' => 'Allows you to add a fax number to a location.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_fax.module',
            1 => 'location_fax.install',
            2 => 'location_fax.views.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => '6301',
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_search' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_search/location_search.module',
        'basename' => 'location_search.module',
        'name' => 'location_search',
        'info' => 
        array (
          'name' => 'Location Search',
          'package' => 'Location',
          'description' => 'Advanced search page for locations.',
          'dependencies' => 
          array (
            0 => 'search',
            1 => 'location',
          ),
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_search.module',
            1 => 'location_search.install',
            2 => 'location_search.admin.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => '5300',
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_addanother' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_addanother/location_addanother.module',
        'basename' => 'location_addanother.module',
        'name' => 'location_addanother',
        'info' => 
        array (
          'name' => 'Location Add Another',
          'description' => 'Allows you to quickly add locations directly from a node without having to click \'edit\' first.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'location_node',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_addanother.module',
            1 => 'location_addanother.install',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_taxonomy' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/contrib/location_taxonomy/location_taxonomy.module',
        'basename' => 'location_taxonomy.module',
        'name' => 'location_taxonomy',
        'info' => 
        array (
          'name' => 'Location Taxonomy',
          'description' => 'Associate locations with taxonomy terms.',
          'dependencies' => 
          array (
            0 => 'location',
            1 => 'taxonomy',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_taxonomy.module',
            1 => 'location_taxonomy.install',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_node' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/location_node.module',
        'basename' => 'location_node.module',
        'name' => 'location_node',
        'info' => 
        array (
          'name' => 'Node Locations',
          'description' => 'Associate locations with nodes.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_node.module',
            1 => 'location_node.install',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/location.module',
        'basename' => 'location.module',
        'name' => 'location',
        'info' => 
        array (
          'name' => 'Location',
          'package' => 'Location',
          'description' => 'The location module allows you to associate a geographic location with content and users. Users can do proximity searches by postal code.  This is useful for organizing communities that have a geographic presence.',
          'core' => '7.x',
          'configure' => 'admin/config/content/location',
          'files' => 
          array (
            0 => 'location.module',
            1 => 'location.install',
            2 => 'location.admin.inc',
            3 => 'location.georss.inc',
            4 => 'location.inc',
            5 => 'location.token.inc',
            6 => 'location.views.inc',
            7 => 'location.views_default.inc',
            8 => 'tests/location_testcase.php',
            9 => 'tests/cow.test',
            10 => 'tests/earth.test',
            11 => 'tests/google_geocoder.test',
            12 => 'tests/location_cck.test',
            13 => 'handlers/location_handler_argument_location_country.inc',
            14 => 'handlers/location_handler_argument_location_province.inc',
            15 => 'handlers/location_handler_argument_location_proximity.inc',
            16 => 'handlers/location_handler_field_location_address.inc',
            17 => 'handlers/location_handler_field_location_country.inc',
            18 => 'handlers/location_handler_field_location_distance.inc',
            19 => 'handlers/location_handler_field_location_province.inc',
            20 => 'handlers/location_handler_field_location_street.inc',
            21 => 'handlers/location_handler_filter_location_country.inc',
            22 => 'handlers/location_handler_filter_location_province.inc',
            23 => 'handlers/location_handler_sort_location_distance.inc',
            24 => 'handlers/location_views_handler_field_coordinates.inc',
            25 => 'handlers/location_views_handler_field_latitude.inc',
            26 => 'handlers/location_views_handler_field_longitude.inc',
            27 => 'handlers/location_views_handler_filter_proximity.inc',
            28 => 'plugins/contexts/location.inc',
            29 => 'plugins/relationships/location_from_node.inc',
          ),
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7301',
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'location_user' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/location/location_user.module',
        'basename' => 'location_user.module',
        'name' => 'location_user',
        'info' => 
        array (
          'name' => 'User Locations',
          'description' => 'Associate locations with users.',
          'dependencies' => 
          array (
            0 => 'location',
          ),
          'package' => 'Location',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'location_user.module',
            1 => 'location_user.install',
          ),
          'configure' => 'admin/config/people/accounts',
          'version' => '7.x-3.x-dev',
          'project' => 'location',
          'datestamp' => '1336177497',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'location',
        'version' => '7.x-3.x-dev',
      ),
      'file_styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/styles/contrib/file_styles/file_styles.module',
        'basename' => 'file_styles.module',
        'name' => 'file_styles',
        'info' => 
        array (
          'name' => 'File Styles',
          'description' => 'Allows preset transformation of files and media for display.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'file_styles.module',
            1 => 'file_styles.admin.inc',
            2 => 'includes/styles/FileStyles.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
            1 => 'image',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7210',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles_ui' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/styles/contrib/styles_ui/styles_ui.module',
        'basename' => 'styles_ui.module',
        'name' => 'styles_ui',
        'info' => 
        array (
          'name' => 'Styles UI',
          'description' => 'Allows administration of the Styles modules.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles_ui.admin.inc',
          ),
          'dependencies' => 
          array (
            0 => 'styles',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'php' => '5.2.4',
        ),
        'schema_version' => '7206',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'styles' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/styles/styles.module',
        'basename' => 'styles.module',
        'name' => 'styles',
        'info' => 
        array (
          'name' => 'Styles',
          'description' => 'Bundles similar display formatters together.',
          'package' => 'Styles',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'styles.module',
            1 => 'includes/Styles.inc',
          ),
          'version' => '7.x-2.0-alpha8',
          'project' => 'styles',
          'datestamp' => '1306964517',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7215',
        'project' => 'styles',
        'version' => '7.x-2.0-alpha8',
      ),
      'recaptcha_mailhide' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/recaptcha/recaptcha_mailhide.module',
        'basename' => 'recaptcha_mailhide.module',
        'name' => 'recaptcha_mailhide',
        'info' => 
        array (
          'name' => 'reCAPTCHA Mailhide',
          'description' => 'Uses the reCAPTCHA web service to protect email addresses.',
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha_mailhide.module',
          ),
          'version' => '7.x-1.7',
          'project' => 'recaptcha',
          'datestamp' => '1304527616',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.7',
      ),
      'recaptcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/recaptcha/recaptcha.module',
        'basename' => 'recaptcha.module',
        'name' => 'recaptcha',
        'info' => 
        array (
          'name' => 'reCAPTCHA',
          'description' => 'Uses the reCAPTCHA web service to improve the CAPTCHA system.',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'package' => 'Spam control',
          'core' => '7.x',
          'files' => 
          array (
            0 => 'recaptcha.admin.inc',
            1 => 'recaptcha.module',
            2 => 'recaptcha.install',
          ),
          'version' => '7.x-1.7',
          'project' => 'recaptcha',
          'datestamp' => '1304527616',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'recaptcha',
        'version' => '7.x-1.7',
      ),
      'image_captcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/captcha/image_captcha/image_captcha.module',
        'basename' => 'image_captcha.module',
        'name' => 'image_captcha',
        'info' => 
        array (
          'name' => 'Image CAPTCHA',
          'description' => 'Provides an image based CAPTCHA.',
          'package' => 'Spam control',
          'dependencies' => 
          array (
            0 => 'captcha',
          ),
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha/image_captcha',
          'files' => 
          array (
            0 => 'image_captcha.install',
            1 => 'image_captcha.module',
            2 => 'image_captcha.admin.inc',
            3 => 'image_captcha.user.inc',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'captcha',
          'datestamp' => '1325504137',
          'php' => '5.2.4',
        ),
        'schema_version' => 0,
        'project' => 'captcha',
        'version' => '7.x-1.0-beta2',
      ),
      'captcha' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/captcha/captcha.module',
        'basename' => 'captcha.module',
        'name' => 'captcha',
        'info' => 
        array (
          'name' => 'CAPTCHA',
          'description' => 'Base CAPTCHA module for adding challenges to arbitrary forms.',
          'package' => 'Spam control',
          'core' => '7.x',
          'configure' => 'admin/config/people/captcha',
          'files' => 
          array (
            0 => 'captcha.module',
            1 => 'captcha.inc',
            2 => 'captcha.admin.inc',
            3 => 'captcha.install',
            4 => 'captcha.test',
          ),
          'version' => '7.x-1.0-beta2',
          'project' => 'captcha',
          'datestamp' => '1325504137',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'captcha',
        'version' => '7.x-1.0-beta2',
      ),
      'google_plusone' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/google_plusone/google_plusone.module',
        'basename' => 'google_plusone.module',
        'name' => 'google_plusone',
        'info' => 
        array (
          'name' => 'Google Plus One +1',
          'description' => 'Adds Google +1 button to your site. Enable it per node, or as a block.',
          'core' => '7.x',
          'configure' => 'admin/config/services/google-plusone',
          'version' => '7.x-1.3',
          'project' => 'google_plusone',
          'datestamp' => '1324223739',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
        ),
        'schema_version' => '7001',
        'project' => 'google_plusone',
        'version' => '7.x-1.3',
      ),
      'strongarm' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/strongarm/strongarm.module',
        'basename' => 'strongarm.module',
        'name' => 'strongarm',
        'info' => 
        array (
          'name' => 'Strongarm',
          'description' => 'Enforces variable values defined by modules that need settings set to operate properly.',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'ctools',
          ),
          'files' => 
          array (
            0 => 'strongarm.admin.inc',
            1 => 'strongarm.install',
            2 => 'strongarm.module',
          ),
          'version' => '7.x-2.0-rc1',
          'project' => 'strongarm',
          'datestamp' => '1332787846',
          'php' => '5.2.4',
        ),
        'schema_version' => '7201',
        'project' => 'strongarm',
        'version' => '7.x-2.0-rc1',
      ),
      'menu_attributes' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/sites/all/modules/menu_attributes/menu_attributes.module',
        'basename' => 'menu_attributes.module',
        'name' => 'menu_attributes',
        'info' => 
        array (
          'name' => 'Menu attributes',
          'description' => 'Allows administrators to specify custom attributes for menu items.',
          'dependencies' => 
          array (
            0 => 'menu',
          ),
          'core' => '7.x',
          'configure' => 'admin/structure/menu/settings',
          'version' => '7.x-1.0-rc1',
          'project' => 'menu_attributes',
          'datestamp' => '1304355717',
          'php' => '5.2.4',
        ),
        'schema_version' => '7000',
        'project' => 'menu_attributes',
        'version' => '7.x-1.0-rc1',
      ),
    ),
    'themes' => 
    array (
      'seven' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/themes/seven/seven.info',
        'basename' => 'seven.info',
        'name' => 'Seven',
        'info' => 
        array (
          'name' => 'Seven',
          'description' => 'A simple one-column, tableless, fluid width administration theme.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'screen' => 
            array (
              0 => 'reset.css',
              1 => 'style.css',
            ),
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '1',
          ),
          'regions' => 
          array (
            'content' => 'Content',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'sidebar_first' => 'First sidebar',
          ),
          'regions_hidden' => 
          array (
            0 => 'sidebar_first',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
        ),
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
        'info' => 
        array (
          'name' => 'Garland',
          'description' => 'A multi-column theme which can be configured to modify colors and switch between fixed and fluid width layouts.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'style.css',
            ),
            'print' => 
            array (
              0 => 'print.css',
            ),
          ),
          'settings' => 
          array (
            'garland_width' => 'fluid',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
        ),
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'stark' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/themes/stark/stark.info',
        'basename' => 'stark.info',
        'name' => 'Stark',
        'info' => 
        array (
          'name' => 'Stark',
          'description' => 'This theme demonstrates Drupal\'s default HTML markup and CSS styles. To learn how to build your own theme and override Drupal\'s default code, see the <a href="http://drupal.org/theme-guide">Theming Guide</a>.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'layout.css',
            ),
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
        ),
        'project' => 'drupal',
        'version' => '7.14',
      ),
      'bartik' => 
      array (
        'filename' => '/var/aegir/platforms/drupal-7.14/themes/bartik/bartik.info',
        'basename' => 'bartik.info',
        'name' => 'Bartik',
        'info' => 
        array (
          'name' => 'Bartik',
          'description' => 'A flexible, recolorable theme with many regions.',
          'package' => 'Core',
          'version' => '7.14',
          'core' => '7.x',
          'stylesheets' => 
          array (
            'all' => 
            array (
              0 => 'css/layout.css',
              1 => 'css/style.css',
              2 => 'css/colors.css',
            ),
            'print' => 
            array (
              0 => 'css/print.css',
            ),
          ),
          'regions' => 
          array (
            'header' => 'Header',
            'help' => 'Help',
            'page_top' => 'Page top',
            'page_bottom' => 'Page bottom',
            'highlighted' => 'Highlighted',
            'featured' => 'Featured',
            'content' => 'Content',
            'sidebar_first' => 'Sidebar first',
            'sidebar_second' => 'Sidebar second',
            'triptych_first' => 'Triptych first',
            'triptych_middle' => 'Triptych middle',
            'triptych_last' => 'Triptych last',
            'footer_firstcolumn' => 'Footer first column',
            'footer_secondcolumn' => 'Footer second column',
            'footer_thirdcolumn' => 'Footer third column',
            'footer_fourthcolumn' => 'Footer fourth column',
            'footer' => 'Footer',
          ),
          'settings' => 
          array (
            'shortcut_module_link' => '0',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
        ),
        'project' => 'drupal',
        'version' => '7.14',
      ),
    ),
    'platforms' => 
    array (
      'drupal' => 
      array (
        'short_name' => 'drupal',
        'version' => '7.14',
        'description' => 'This platform is running Drupal 7.14',
      ),
    ),
    'profiles' => 
    array (
      'testing' => 
      array (
        'name' => 'testing',
        'filename' => '/var/aegir/platforms/drupal-7.14/profiles/testing/testing.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Testing',
          'description' => 'Minimal profile for running tests. Includes absolutely required modules only.',
          'version' => '7.14',
          'core' => '7.x',
          'hidden' => true,
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'dependencies' => 
          array (
          ),
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.14',
      ),
      'minimal' => 
      array (
        'name' => 'minimal',
        'filename' => '/var/aegir/platforms/drupal-7.14/profiles/minimal/minimal.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Minimal',
          'description' => 'Start with only a few modules enabled.',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'dblog',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.14',
      ),
      'artist_profile' => 
      array (
        'name' => 'artist_profile',
        'filename' => '/var/aegir/platforms/drupal-7.14/profiles/artist_profile/artist_profile.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Artist Profile',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'comment',
            2 => 'contextual',
            3 => 'dblog',
            4 => 'field_ui',
            5 => 'file',
            6 => 'help',
            7 => 'image',
            8 => 'list',
            9 => 'menu',
            10 => 'number',
            11 => 'options',
            12 => 'overlay',
            13 => 'path',
            14 => 'rdf',
            15 => 'shortcut',
            16 => 'taxonomy',
            17 => 'toolbar',
            18 => 'ctools',
            19 => 'eva',
            20 => 'features',
            21 => 'mediaelement',
            22 => 'media_vimeo',
            23 => 'multiselect',
            24 => 'strongarm',
            25 => 'basic_page',
            26 => 'discography',
            27 => 'events',
            28 => 'base_feature',
            29 => 'wysiwyg',
            30 => 'news',
            31 => 'photos',
            32 => 'views_feature',
            33 => 'videos',
          ),
          'variables' => 
          array (
            'admin_theme' => 'seven',
            'block_cache' => '1',
            'configurable_timezones' => '0',
            'date_default_timezone' => 'America/Chicago',
            'error_level' => '0',
            'node_admin_theme' => '1',
            'page_compression' => '0',
            'pathauto_node_pattern' => '[node:title]',
            'site_default_country' => 'US',
            'site_mail' => 'sysadmin@evanwillhite.com',
            'update_check_frequency' => '7',
            'update_notification_threshold' => 'security',
            'update_notify_emails' => 
            array (
              0 => 'sysadmin@evanwillhite.com',
            ),
          ),
          'users' => 
          array (
            'evan' => 
            array (
              'uid' => '2',
              'name' => 'evan',
              'mail' => 'evan@evanwillhite.com',
              'roles' => 'developer',
              'status' => '1',
            ),
            'client' => 
            array (
              'uid' => '3',
              'name' => 'client',
              'mail' => 'client@evanwillhite.com',
              'roles' => 'client',
              'status' => '1',
            ),
          ),
          'nodes' => 
          array (
            'front' => 
            array (
              'type' => 'page',
              'title' => 'Home',
              'uid' => '1',
            ),
          ),
          'description' => '',
          'version' => NULL,
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
        ),
        'version' => '7.14',
      ),
      'standard' => 
      array (
        'name' => 'standard',
        'filename' => '/var/aegir/platforms/drupal-7.14/profiles/standard/standard.profile',
        'project' => 'drupal',
        'info' => 
        array (
          'name' => 'Standard',
          'description' => 'Install with commonly used features pre-configured.',
          'version' => '7.14',
          'core' => '7.x',
          'dependencies' => 
          array (
            0 => 'block',
            1 => 'color',
            2 => 'comment',
            3 => 'contextual',
            4 => 'dashboard',
            5 => 'help',
            6 => 'image',
            7 => 'list',
            8 => 'menu',
            9 => 'number',
            10 => 'options',
            11 => 'path',
            12 => 'taxonomy',
            13 => 'dblog',
            14 => 'search',
            15 => 'shortcut',
            16 => 'toolbar',
            17 => 'overlay',
            18 => 'field_ui',
            19 => 'file',
            20 => 'rdf',
          ),
          'project' => 'drupal',
          'datestamp' => '1335997555',
          'php' => '5.2.4',
          'languages' => 
          array (
            0 => 'en',
          ),
          'old_short_name' => 'default',
        ),
        'version' => '7.14',
      ),
    ),
  ),
  'profiles' => 
  array (
    'testing' => 
    array (
      'modules' => 
      array (
        'drupal_system_listing_compatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/drupal-7.14/profiles/testing/modules/drupal_system_listing_compatible_test/drupal_system_listing_compatible_test.module',
          'basename' => 'drupal_system_listing_compatible_test.module',
          'name' => 'drupal_system_listing_compatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing compatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.14',
            'core' => '7.x',
            'hidden' => true,
            'files' => 
            array (
              0 => 'drupal_system_listing_compatible_test.test',
            ),
            'project' => 'drupal',
            'datestamp' => '1335997555',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.14',
        ),
        'drupal_system_listing_incompatible_test' => 
        array (
          'filename' => '/var/aegir/platforms/drupal-7.14/profiles/testing/modules/drupal_system_listing_incompatible_test/drupal_system_listing_incompatible_test.module',
          'basename' => 'drupal_system_listing_incompatible_test.module',
          'name' => 'drupal_system_listing_incompatible_test',
          'info' => 
          array (
            'name' => 'Drupal system listing incompatible test',
            'description' => 'Support module for testing the drupal_system_listing function.',
            'package' => 'Testing',
            'version' => '7.14',
            'core' => '6.x',
            'hidden' => true,
            'project' => 'drupal',
            'datestamp' => '1335997555',
            'dependencies' => 
            array (
            ),
            'php' => '5.2.4',
          ),
          'schema_version' => 0,
          'project' => 'drupal',
          'version' => '7.14',
        ),
      ),
      'themes' => 
      array (
      ),
    ),
    'minimal' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'artist_profile' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'standard' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
  ),
);