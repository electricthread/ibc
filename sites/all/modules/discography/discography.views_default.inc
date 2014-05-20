<?php
/**
 * @file
 * discography.views_default.inc
 */

/**
 * Implements hook_views_default_views().
 */
function discography_views_default_views() {
  $export = array();

  $view = new view;
  $view->name = 'albums_tracks';
  $view->description = '';
  $view->tag = 'default';
  $view->base_table = 'node';
  $view->human_name = 'Albums/tracks';
  $view->core = 7;
  $view->api_version = '3.0';
  $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

  /* Display: Master */
  $handler = $view->new_display('default', 'Master', 'default');
  $handler->display->display_options['access']['type'] = 'perm';
  $handler->display->display_options['cache']['type'] = 'none';
  $handler->display->display_options['query']['type'] = 'views_query';
  $handler->display->display_options['query']['options']['query_comment'] = FALSE;
  $handler->display->display_options['exposed_form']['type'] = 'basic';
  $handler->display->display_options['pager']['type'] = 'none';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_track_sort' => 'field_track_sort',
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['separator'] = '&nbsp;';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  /* Relationship: File Usage: File */
  $handler->display->display_options['relationships']['node_to_file']['id'] = 'node_to_file';
  $handler->display->display_options['relationships']['node_to_file']['table'] = 'file_usage';
  $handler->display->display_options['relationships']['node_to_file']['field'] = 'node_to_file';
  /* Field: Content: Album Art */
  $handler->display->display_options['fields']['field_album_art']['id'] = 'field_album_art';
  $handler->display->display_options['fields']['field_album_art']['table'] = 'field_data_field_album_art';
  $handler->display->display_options['fields']['field_album_art']['field'] = 'field_album_art';
  /* Sort criterion: Content: Post date */
  $handler->display->display_options['sorts']['created']['id'] = 'created';
  $handler->display->display_options['sorts']['created']['table'] = 'node';
  $handler->display->display_options['sorts']['created']['field'] = 'created';
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
    'album' => 'album',
  );

  /* Display: Music Page */
  $handler = $view->new_display('page', 'Music Page', 'music_page');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Music';
  $handler->display->display_options['defaults']['pager'] = FALSE;
  $handler->display->display_options['pager']['type'] = 'some';
  $handler->display->display_options['pager']['options']['items_per_page'] = '1';
  $handler->display->display_options['pager']['options']['offset'] = '0';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'default';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'node';
  $handler->display->display_options['row_options']['view_mode'] = 'full';
  $handler->display->display_options['row_options']['links'] = 1;
  $handler->display->display_options['row_options']['comments'] = 0;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['empty'] = FALSE;
  /* No results behavior: Global: Text area */
  $handler->display->display_options['empty']['area']['id'] = 'area';
  $handler->display->display_options['empty']['area']['table'] = 'views';
  $handler->display->display_options['empty']['area']['field'] = 'area';
  $handler->display->display_options['empty']['area']['empty'] = FALSE;
  $handler->display->display_options['empty']['area']['content'] = '<em>No albums have been added.</em>';
  $handler->display->display_options['empty']['area']['format'] = 'full_html';
  $handler->display->display_options['empty']['area']['tokenize'] = 0;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Album Sort Order (field_sort) */
  $handler->display->display_options['sorts']['field_sort_value']['id'] = 'field_sort_value';
  $handler->display->display_options['sorts']['field_sort_value']['table'] = 'field_data_field_sort';
  $handler->display->display_options['sorts']['field_sort_value']['field'] = 'field_sort_value';
  $handler->display->display_options['path'] = 'music';
  $handler->display->display_options['menu']['type'] = 'normal';
  $handler->display->display_options['menu']['title'] = 'Music';
  $handler->display->display_options['menu']['weight'] = '2';
  $handler->display->display_options['menu']['name'] = 'main-menu';

  /* Display: Discography Block */
  $handler = $view->new_display('block', 'Discography Block', 'disc_block');
  $handler->display->display_options['defaults']['title'] = FALSE;
  $handler->display->display_options['title'] = 'Discography';
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'list';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_track_sort' => 'field_track_sort',
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['separator'] = '&nbsp;';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Album Art */
  $handler->display->display_options['fields']['field_album_art']['id'] = 'field_album_art';
  $handler->display->display_options['fields']['field_album_art']['table'] = 'field_data_field_album_art';
  $handler->display->display_options['fields']['field_album_art']['field'] = 'field_album_art';
  $handler->display->display_options['fields']['field_album_art']['label'] = '';
  $handler->display->display_options['fields']['field_album_art']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['external'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['field_album_art']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['field_album_art']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['field_album_art']['alter']['html'] = 0;
  $handler->display->display_options['fields']['field_album_art']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['field_album_art']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['field_album_art']['hide_empty'] = 0;
  $handler->display->display_options['fields']['field_album_art']['empty_zero'] = 0;
  $handler->display->display_options['fields']['field_album_art']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['field_album_art']['click_sort_column'] = 'fid';
  $handler->display->display_options['fields']['field_album_art']['settings'] = array(
    'image_style' => '50x50',
    'image_link' => 'content',
  );
  $handler->display->display_options['fields']['field_album_art']['field_api_classes'] = 0;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Album Sort Order (field_sort) */
  $handler->display->display_options['sorts']['field_sort_value']['id'] = 'field_sort_value';
  $handler->display->display_options['sorts']['field_sort_value']['table'] = 'field_data_field_sort';
  $handler->display->display_options['sorts']['field_sort_value']['field'] = 'field_sort_value';

  /* Display: Site Audio Player */
  $handler = $view->new_display('block', 'Site Audio Player', 'site_play');
  $handler->display->display_options['defaults']['style_plugin'] = FALSE;
  $handler->display->display_options['style_plugin'] = 'jplayer';
  $handler->display->display_options['style_options']['path_field'] = array(
    'uri' => 'uri',
  );
  $handler->display->display_options['style_options']['autoplay'] = '0';
  $handler->display->display_options['style_options']['volume'] = '80';
  $handler->display->display_options['style_options']['muted'] = '0';
  $handler->display->display_options['defaults']['style_options'] = FALSE;
  $handler->display->display_options['defaults']['row_plugin'] = FALSE;
  $handler->display->display_options['row_plugin'] = 'fields';
  $handler->display->display_options['row_options']['inline'] = array(
    'field_track_sort' => 'field_track_sort',
    'title' => 'title',
  );
  $handler->display->display_options['row_options']['separator'] = '&nbsp;';
  $handler->display->display_options['row_options']['hide_empty'] = 0;
  $handler->display->display_options['row_options']['default_field_elements'] = 1;
  $handler->display->display_options['defaults']['row_options'] = FALSE;
  $handler->display->display_options['defaults']['relationships'] = FALSE;
  /* Relationship: File Usage: File */
  $handler->display->display_options['relationships']['node_to_file']['id'] = 'node_to_file';
  $handler->display->display_options['relationships']['node_to_file']['table'] = 'file_usage';
  $handler->display->display_options['relationships']['node_to_file']['field'] = 'node_to_file';
  $handler->display->display_options['relationships']['node_to_file']['required'] = 1;
  $handler->display->display_options['defaults']['fields'] = FALSE;
  /* Field: Content: Title */
  $handler->display->display_options['fields']['title']['id'] = 'title';
  $handler->display->display_options['fields']['title']['table'] = 'node';
  $handler->display->display_options['fields']['title']['field'] = 'title';
  $handler->display->display_options['fields']['title']['label'] = '';
  $handler->display->display_options['fields']['title']['exclude'] = TRUE;
  $handler->display->display_options['fields']['title']['alter']['alter_text'] = 0;
  $handler->display->display_options['fields']['title']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['title']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['title']['alter']['external'] = 0;
  $handler->display->display_options['fields']['title']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['title']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['title']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['title']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['title']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['title']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['title']['alter']['html'] = 0;
  $handler->display->display_options['fields']['title']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['title']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['title']['hide_empty'] = 0;
  $handler->display->display_options['fields']['title']['empty_zero'] = 0;
  $handler->display->display_options['fields']['title']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['title']['link_to_node'] = 0;
  /* Field: File: Path */
  $handler->display->display_options['fields']['uri']['id'] = 'uri';
  $handler->display->display_options['fields']['uri']['table'] = 'file_managed';
  $handler->display->display_options['fields']['uri']['field'] = 'uri';
  $handler->display->display_options['fields']['uri']['relationship'] = 'node_to_file';
  $handler->display->display_options['fields']['uri']['label'] = '';
  $handler->display->display_options['fields']['uri']['alter']['alter_text'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['text'] = '[title]';
  $handler->display->display_options['fields']['uri']['alter']['make_link'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['absolute'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['external'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['replace_spaces'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['trim_whitespace'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['nl2br'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['word_boundary'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['ellipsis'] = 1;
  $handler->display->display_options['fields']['uri']['alter']['strip_tags'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['trim'] = 0;
  $handler->display->display_options['fields']['uri']['alter']['html'] = 0;
  $handler->display->display_options['fields']['uri']['element_label_colon'] = FALSE;
  $handler->display->display_options['fields']['uri']['element_default_classes'] = 1;
  $handler->display->display_options['fields']['uri']['hide_empty'] = 0;
  $handler->display->display_options['fields']['uri']['empty_zero'] = 0;
  $handler->display->display_options['fields']['uri']['hide_alter_empty'] = 0;
  $handler->display->display_options['fields']['uri']['link_to_file'] = 0;
  $handler->display->display_options['fields']['uri']['file_download_path'] = 1;
  $handler->display->display_options['defaults']['sorts'] = FALSE;
  /* Sort criterion: Content: Audio Player Sort Order (field_site_audio_sort) */
  $handler->display->display_options['sorts']['field_site_audio_sort_value']['id'] = 'field_site_audio_sort_value';
  $handler->display->display_options['sorts']['field_site_audio_sort_value']['table'] = 'field_data_field_site_audio_sort';
  $handler->display->display_options['sorts']['field_site_audio_sort_value']['field'] = 'field_site_audio_sort_value';
  $handler->display->display_options['defaults']['filters'] = FALSE;
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
    'mp3_track' => 'mp3_track',
  );
  /* Filter criterion: Content: Add to Site Audio Player (field_audio_checkbox) */
  $handler->display->display_options['filters']['field_audio_checkbox_value']['id'] = 'field_audio_checkbox_value';
  $handler->display->display_options['filters']['field_audio_checkbox_value']['table'] = 'field_data_field_audio_checkbox';
  $handler->display->display_options['filters']['field_audio_checkbox_value']['field'] = 'field_audio_checkbox_value';
  $handler->display->display_options['filters']['field_audio_checkbox_value']['value'] = array(
    1 => '1',
  );
  $export['albums_tracks'] = $view;

  return $export;
}
