<?php


drupal_add_library('system', 'drupal.ajax');

function portalbk_preprocess_page(&$variables) {

  if (!empty($variables['node']) && !empty($variables['node']->type)) {
    $variables['theme_hook_suggestions'][] = 'page__node__' . $variables['node']->type;
  } 

  if( !empty($variables['node'])){
      drupal_add_js(array('nid' => $variables['node']->nid), 'setting');
  }

}



?>
