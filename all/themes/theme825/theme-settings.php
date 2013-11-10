<?php

/**
 * @file
 * Theme settings for the theme825
 */
function theme825_form_system_theme_settings_alter(&$form, &$form_state) {

  /**
   * Breadcrumb settings
   */
  $form['theme825_breadcrumb'] = array(
    '#type' => 'fieldset',
    '#title' => t('Breadcrumb'),
  );
  
  $form['theme825_breadcrumb']['theme825_breadcrumb_display'] = array(
   '#type' => 'select',
   '#title' => t('Display breadcrumb'),
   '#default_value' => theme_get_setting('theme825_breadcrumb_display'),
   '#options' => array(
     'yes' => t('Yes'),
     'no' => t('No'),
   ),
  );
  
  $form['theme825_breadcrumb']['theme825_breadcrumb_hideonlyfront'] = array(
    '#type' => 'checkbox',
    '#title' => t('Hide the breadcrumb if the breadcrumb only contains the link to the front page.'),
    '#default_value' => theme_get_setting('theme825_breadcrumb_hideonlyfront'),
  );
  
  $form['theme825_breadcrumb']['theme825_breadcrumb_showtitle'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show page title on breadcrumb.'),
    '#default_value' => theme_get_setting('theme825_breadcrumb_showtitle'),
  );

  $form['theme825_breadcrumb']['theme825_breadcrumb_separator'] = array(
    '#type' => 'textfield',
    '#title' => t('Breadcrumb separator'),
    '#default_value' => theme_get_setting('theme825_breadcrumb_separator'),
  );
}