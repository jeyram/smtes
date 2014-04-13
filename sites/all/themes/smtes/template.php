<?php
// $Id: template.php,v 1.21 2009/08/12 04:25:15 johnalbin Exp $

/**
 * @file
 * Contains theme override functions and preprocess functions for the theme.
 *
 * ABOUT THE TEMPLATE.PHP FILE
 *
 *   The template.php file is one of the most useful files when creating or
 *   modifying Drupal themes. You can add new regions for block content, modify
 *   or override Drupal's theme functions, intercept or make additional
 *   variables available to your theme, and create custom PHP logic. For more
 *   information, please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/theme-guide
 *
 * OVERRIDING THEME FUNCTIONS
 *
 *   The Drupal theme system uses special theme functions to generate HTML
 *   output automatically. Often we wish to customize this HTML output. To do
 *   this, we have to override the theme function. You have to first find the
 *   theme function that generates the output, and then "catch" it and modify it
 *   here. The easiest way to do it is to copy the original function in its
 *   entirety and paste it here, changing the prefix from theme_ to Smtes_.
 *   For example:
 *
 *     original: theme_breadcrumb()
 *     theme override: Smtes_breadcrumb()
 *
 *   where Smtes is the name of your sub-theme. For example, the
 *   zen_classic theme would define a zen_classic_breadcrumb() function.
 *
 *   If you would like to override any of the theme functions used in Zen core,
 *   you should first look at how Zen core implements those functions:
 *     theme_breadcrumbs()      in zen/template.php
 *     theme_menu_item_link()   in zen/template.php
 *     theme_menu_local_tasks() in zen/template.php
 *
 *   For more information, please visit the Theme Developer's Guide on
 *   Drupal.org: http://drupal.org/node/173880
 *
 * CREATE OR MODIFY VARIABLES FOR YOUR THEME
 *
 *   Each tpl.php template file has several variables which hold various pieces
 *   of content. You can modify those variables (or add new ones) before they
 *   are used in the template files by using preprocess functions.
 *
 *   This makes THEME_preprocess_HOOK() functions the most powerful functions
 *   available to themers.
 *
 *   It works by having one preprocess function for each template file or its
 *   derivatives (called template suggestions). For example:
 *     THEME_preprocess_page    alters the variables for page.tpl.php
 *     THEME_preprocess_node    alters the variables for node.tpl.php or
 *                              for node-forum.tpl.php
 *     THEME_preprocess_comment alters the variables for comment.tpl.php
 *     THEME_preprocess_block   alters the variables for block.tpl.php
 *
 *   For more information on preprocess functions and template suggestions,
 *   please visit the Theme Developer's Guide on Drupal.org:
 *   http://drupal.org/node/223440
 *   and http://drupal.org/node/190815#template-suggestions
 */


/**
* Implementation of HOOK_theme().
*/
 function Smtes_theme(&$existing, $type, $theme, $path) {
  $hooks = zen_theme($existing, $type, $theme, $path);
  // Add your theme hooks like this:
  /*
  $hooks['hook_name_here'] = array( // Details go here );
  */
  $hooks['contact_mail_page2'] = array( 'arguments' => array('form' => NULL), );
  // @TODO: Needs detailed comments. Patches welcome!
  return $hooks;
}

/**
* Intercept template variables
*
* @param $hook
*   The name of the theme function being executed
* @param $vars
*   A sequential array of variables passed to the theme function.
*/
function Smtes_phptemplate_variables($hook, $vars = array()) {
  switch ($hook) {
    case 'page':
      if ((arg(0) == 'admin')) {
        $vars['template_file'] = 'page-admin';
      }
      break;
  }

  return $vars;
}

/**
 * Override or insert variables into all templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered (name of the .tpl.php file.)
 */
/* -- Delete this line if you want to use this function
function Smtes_preprocess(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function Smtes_preprocess_page(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function Smtes_preprocess_node(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // Smtes_preprocess_node_page() or Smtes_preprocess_node_story()
  $function = __FUNCTION__ . '_' . $vars['node']->type;
  if (function_exists($function)) {
    $function($vars, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function Smtes_preprocess_comment(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function Smtes_preprocess_block(&$vars, $hook) {
  $vars['sample_variable'] = t('Lorem ipsum.');
}
// */


/**
* Override or insert PHPTemplate variables into the search_theme_form template.
*
* @param $vars
*   A sequential array of variables to pass to the theme template.
* @param $hook
*   The name of the theme function being called (not used in this case.)
**/

function Smtes_preprocess_search_theme_form(&$vars, $hook) {

// Remove the "Search this site" label from the form
$vars['form']['search_theme_form']['#title'] = t('');

// Set a default value for text inside the search box field.
$vars['form']['search_theme_form']['#value'] = t('');

// Add a custom class and placeholder text to the search box.
$vars['form']['search_theme_form']['#attributes'] = array('class' => 'NormalTextBox txtSearch', 'onblur' => "if (this.value == '') {this.value = '".$vars['form']['search_theme_form']['#value']."';} ;", 'onfocus' => "if (this.value == '".$vars['form']['search_theme_form']['#value']."') {this.value = '';} ;" );

// Change the text on the submit button
//$vars['form']['submit']['#value'] = t('Go');

// Rebuild the rendered version (search form only, rest remains unchanged)
unset($vars['form']['search_theme_form']['#printed']);
$vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);

/*THIS IS TO REPLACE SUBMIT BUTTON WITH AN IMAGE*/
$vars['form']['submit']['#type'] = 'image_button';
$vars['form']['submit']['#src'] = path_to_theme() . '/mis_images/search-button.png';

// Rebuild the rendered version (submit button, rest remains unchanged)
unset($vars['form']['submit']['#printed']);
$vars['search']['submit'] = drupal_render($vars['form']['submit']);

// Collect all form elements to make it easier to print the whole form.
$vars['search_form'] = implode($vars['search']);
}

/**
* Override or insert PHPTemplate variables into the contact_mail_page2 form
*
* @param $form
*   A sequential array of variables to pass to the theme template.
* 
*   
**/
function Smtes_contact_mail_page2($form) {
  $form['name']['#title'] = t('First Name');
  $form['mail']['#title']= t('Work Email');
  $form['subject']['#required']= FALSE;
  $form['subject']['#access']= FALSE;
  $form['message']['#title']= t('Question/Request');
  return (drupal_render($form));
}

