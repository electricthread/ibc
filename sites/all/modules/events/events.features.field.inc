<?php
/**
 * @file
 * events.features.field.inc
 */

/**
 * Implements hook_field_default_fields().
 */
function events_field_default_fields() {
  $fields = array();

  // Exported field: 'node-event-body'
  $fields['node-event-body'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(
        0 => 'node',
      ),
      'field_name' => 'body',
      'foreign keys' => array(
        'format' => array(
          'columns' => array(
            'format' => 'format',
          ),
          'table' => 'filter_format',
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'module' => 'text',
      'settings' => array(),
      'translatable' => '0',
      'type' => 'text_with_summary',
    ),
    'field_instance' => array(
      'bundle' => 'event',
      'default_value' => array(
        0 => array(
          'summary' => '',
          'value' => '',
          'format' => 'full_html',
        ),
      ),
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '4',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(
            'trim_length' => '100',
          ),
          'type' => 'text_summary_or_trimmed',
          'weight' => '2',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'body',
      'label' => 'Event Description',
      'required' => 0,
      'settings' => array(
        'display_summary' => 1,
        'text_processing' => '1',
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'text',
        'settings' => array(
          'rows' => '20',
          'summary_rows' => 5,
        ),
        'type' => 'text_textarea_with_summary',
        'weight' => '3',
      ),
    ),
  );

  // Exported field: 'node-event-field_date'
  $fields['node-event-field_date'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_date',
      'foreign keys' => array(),
      'indexes' => array(),
      'module' => 'date',
      'settings' => array(
        'granularity' => array(
          'day' => 'day',
          'hour' => 0,
          'minute' => 0,
          'month' => 'month',
          'second' => 0,
          'year' => 'year',
        ),
        'repeat' => 0,
        'timezone_db' => '',
        'todate' => 'optional',
        'tz_handling' => 'none',
      ),
      'translatable' => '0',
      'type' => 'datetime',
    ),
    'field_instance' => array(
      'bundle' => 'event',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'date',
          'settings' => array(
            'format_type' => 'short',
            'fromto' => 'both',
            'multiple_from' => '',
            'multiple_number' => '',
            'multiple_to' => '',
            'show_repeat_rule' => 'show',
          ),
          'type' => 'date_default',
          'weight' => '1',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'date',
          'settings' => array(
            'format_type' => 'short',
            'fromto' => 'both',
            'multiple_from' => '',
            'multiple_number' => '',
            'multiple_to' => '',
            'show_repeat_rule' => 'show',
          ),
          'type' => 'date_default',
          'weight' => '0',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_date',
      'label' => 'Event Date',
      'required' => 0,
      'settings' => array(
        'default_value' => 'now',
        'default_value2' => 'blank',
        'default_value_code' => '',
        'default_value_code2' => '',
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'date',
        'settings' => array(
          'increment' => '15',
          'input_format' => 'm/d/Y - H:i:s',
          'input_format_custom' => '',
          'label_position' => 'above',
          'repeat_collapsed' => 0,
          'text_parts' => array(),
          'year_range' => '-3:+3',
        ),
        'type' => 'date_popup',
        'weight' => '1',
      ),
    ),
  );

  // Exported field: 'node-event-field_ticket_link'
  $fields['node-event-field_ticket_link'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_ticket_link',
      'foreign keys' => array(),
      'indexes' => array(),
      'module' => 'link',
      'settings' => array(
        'attributes' => array(
          'class' => '',
          'rel' => '',
          'target' => 'default',
        ),
        'display' => array(
          'url_cutoff' => 80,
        ),
        'enable_tokens' => 1,
        'title' => 'optional',
        'title_maxlength' => 128,
        'title_value' => '',
        'url' => 0,
      ),
      'translatable' => '0',
      'type' => 'link_field',
    ),
    'field_instance' => array(
      'bundle' => 'event',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '<em>When linking to content on this website, you can just use the relative path, e.g., for http://yoursite.com/tickets, you can just put \'<b>tickets</b>\' (no quotes).  Otherwise, use the full url, e.g., <b>http://yoursite.com/tickets</b>.',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'link',
          'settings' => array(),
          'type' => 'link_default',
          'weight' => '3',
        ),
        'teaser' => array(
          'label' => 'above',
          'settings' => array(),
          'type' => 'hidden',
          'weight' => '3',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_ticket_link',
      'label' => 'Ticket Link',
      'required' => 0,
      'settings' => array(
        'attributes' => array(
          'class' => 'buy-link',
          'configurable_title' => 0,
          'rel' => '',
          'target' => 'user',
          'title' => '',
        ),
        'display' => array(
          'url_cutoff' => '',
        ),
        'enable_tokens' => 0,
        'title' => 'value',
        'title_maxlength' => '128',
        'title_value' => 'Buy Tickets',
        'url' => 0,
        'user_register_form' => FALSE,
        'validate_url' => 1,
      ),
      'widget' => array(
        'active' => 0,
        'module' => 'link',
        'settings' => array(),
        'type' => 'link_field',
        'weight' => '4',
      ),
    ),
  );

  // Exported field: 'node-event-field_time'
  $fields['node-event-field_time'] = array(
    'field_config' => array(
      'active' => '1',
      'cardinality' => '1',
      'deleted' => '0',
      'entity_types' => array(),
      'field_name' => 'field_time',
      'foreign keys' => array(
        'format' => array(
          'columns' => array(
            'format' => 'format',
          ),
          'table' => 'filter_format',
        ),
      ),
      'indexes' => array(
        'format' => array(
          0 => 'format',
        ),
      ),
      'module' => 'text',
      'settings' => array(
        'max_length' => '255',
      ),
      'translatable' => '0',
      'type' => 'text',
    ),
    'field_instance' => array(
      'bundle' => 'event',
      'default_value' => NULL,
      'deleted' => '0',
      'description' => '<em>You can enter time in any format, e.g., 7pm, 7:00pm, 7-10pm, etc.</em>',
      'display' => array(
        'default' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '2',
        ),
        'teaser' => array(
          'label' => 'hidden',
          'module' => 'text',
          'settings' => array(),
          'type' => 'text_default',
          'weight' => '1',
        ),
      ),
      'entity_type' => 'node',
      'field_name' => 'field_time',
      'label' => 'Time',
      'required' => 0,
      'settings' => array(
        'text_processing' => '0',
        'user_register_form' => FALSE,
      ),
      'widget' => array(
        'active' => 1,
        'module' => 'text',
        'settings' => array(
          'size' => '60',
        ),
        'type' => 'text_textfield',
        'weight' => '2',
      ),
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('<em>When linking to content on this website, you can just use the relative path, e.g., for http://yoursite.com/tickets, you can just put \'<b>tickets</b>\' (no quotes).  Otherwise, use the full url, e.g., <b>http://yoursite.com/tickets</b>.');
  t('<em>You can enter time in any format, e.g., 7pm, 7:00pm, 7-10pm, etc.</em>');
  t('Event Date');
  t('Event Description');
  t('Ticket Link');
  t('Time');

  return $fields;
}
