<?php
// $Id$
/**
 * @file
 *
 *
 *
 * @author Kálmán Hosszu - hosszu.kalman@gmail.com - http://www.kalman-hosszu.com
 */

/**
 * Implementation of hook_perprocess_page().
 *
 * Chcek search box, and a special class to body_classes.
 *
 * @param array $vars
 */
function phptemplate_preprocess_page(&$vars) {
  if (!empty($vars['search_box'])) {
    $vars['body_classes'] .= ' search-box';
  }
}

/**
 * Override search form theme.
 *
 * Disable title and modify submit button to image.
 *
 * @param array $form
 * @return The rendered form
 */
function phptemplate_search_theme_form($form) {
  unset($form['search_theme_form']['#title']);
  return drupal_render($form);
}

/**
 * Change breadcrumb simbol.
 *
 * @param array $breadcrumb
 * @return string
 */
function phptemplate_breadcrumb($breadcrumb) {
  if (!empty($breadcrumb)) {
    return implode('<span></span> ', $breadcrumb);
  }
}
