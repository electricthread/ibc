<?php
/**
 * @file
 * photos.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function photos_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'photos';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Photos';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['title'] = 'Photos';
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'full';
  $handler->display->display_options['pager']['options']['items_per_page'] = '10';
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['row_plugin'] = 'fields';
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = FALSE;
  $handler->display->display_options['empty']['area']['content'] = '<em>No photos have been added.</em>';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  $handler->display->display_options['empty']['area']['tokenize'] = 0;
  /* Field: Content: Photo */
  $handler->display->display_options['fields']['field_photo']['id'] = 'field_photo';
  $handler->display->display_options['fields']['field_photo']['table'] = 'field_data_field_photo';
  $handler->display->display_options['fields']['field_photo']['field'] = 'field_photo';
  $handler->display->display_options['fields']['field_photo']['label'] = '';
  $handler->display->display_options['fields']['field_photo']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_photo']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_photo']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_photo']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_photo']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_photo']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_photo']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_photo']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_photo']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_photo']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_photo']['type'] = 'colorbox';
  $handler->display->display_options['fields']['field_photo']['settings'] = array(
    'colorbox_node_style' => 'medium',
    'colorbox_image_style' => '',
    'colorbox_gallery' => 'page',
    'colorbox_gallery_custom' => '',
    'colorbox_caption' => 'auto',
  );
  $handler->display->display_options['fields']['field_photo']['field_api_classes'] = 0;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 0;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 0;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 0;
  /* Sort criterion: Content: Photo Sort Order (field_photo_sort_order) */
  $handler->display->display_options['sorts']['field_photo_sort_order_value']['id'] = 'field_photo_sort_order_value';
  $handler->display->display_options['sorts']['field_photo_sort_order_value']['table'] = 'field_data_field_photo_sort_order';
  $handler->display->display_options['sorts']['field_photo_sort_order_value']['field'] = 'field_photo_sort_order_value';
  /* Filter criterion: Content: Published */
  $handler->display->display_options['filters']['status']['id'] = 'status';
  $handler->display->display_options['filters']['status']['table'] = 'node';
  $handler->display->display_options['filters']['status']['field'] = 'status';
  $handler->display->display_options['filters']['status']['value'] = 1;
  $handler->display->display_options['filters']['status']['group'] = 0;
  $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
  /* Filter criterion: Content: Type */
  $handler->display->display_options['filters']['type']['id'] = 'type';
  $handler->display->display_options['filters']['type']['table'] = 'node';
  $handler->display->display_options['filters']['type']['field'] = 'type';
  $handler->display->display_options['filters']['type']['value'] = array(
    'photo' => 'photo',
  );
  /* Filter criterion: Content: Gallery (field_gallery) */
  $handler->display->display_options['filters']['field_gallery_tid']['id'] = 'field_gallery_tid';
  $handler->display->display_options['filters']['field_gallery_tid']['table'] = 'field_data_field_gallery';
  $handler->display->display_options['filters']['field_gallery_tid']['field'] = 'field_gallery_tid';
  $handler->display->display_options['filters']['field_gallery_tid']['exposed'] = TRUE;
  $handler->display->display_options['filters']['field_gallery_tid']['expose']['operator_id'] = 'field_gallery_tid_op';
  $handler->display->display_options['filters']['field_gallery_tid']['expose']['label'] = 'Gallery:';
  $handler->display->display_options['filters']['field_gallery_tid']['expose']['operator'] = 'field_gallery_tid_op';
  $handler->display->display_options['filters']['field_gallery_tid']['expose']['identifier'] = 'field_gallery_tid';
  $handler->display->display_options['filters']['field_gallery_tid']['expose']['reduce'] = 0;
  $handler->display->display_options['filters']['field_gallery_tid']['reduce_duplicates'] = 0;
  $handler->display->display_options['filters']['field_gallery_tid']['type'] = 'select';
  $handler->display->display_options['filters']['field_gallery_tid']['vocabulary'] = 'gallery';
  $handler->display->display_options['filters']['field_gallery_tid']['hierarchy'] = 1;
  $handler->display->display_options['filters']['field_gallery_tid']['error_message'] = 1;

  /* Display: Page */
  $handler = $view->new_display('page', 'Page', 'photos_page');
  $handler->display->display_options['defaults']['use_ajax'] = FALSE;
  $handler->display->display_options['use_ajax'] = TRUE;
  $handler->display->display_options['path'] = 'photos';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Photos';
  $handler->display->display_options['menu']['weight'] = '5';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Feed */
  $handler = $view->new_display('feed', 'Feed', 'feed');
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['style_plugin'] = 'rss';
  $handler->display->display_options['row_plugin'] = 'node_rss';
  $handler->display->display_options['path'] = 'photos.xml';
  $handler->display->display_options['displays'] = array(
    'default' => 'default',
    'page' => 'page',
  );
  $export['photos'] = $view;

  return $export;
}
