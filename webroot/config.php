<?php
/**
 * Config-file for Athena. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define Athena paths.
 *
 */
define('ATHENA_INSTALL_PATH', __DIR__ . '/..');
define('ATHENA_THEME_PATH', ATHENA_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(ATHENA_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Athena variable.
 *
 */
$athena = array();


/**
 * Site wide settings.
 *
 */
$athena['lang']         = 'sv';
$athena['title_append'] = ' | Athena en webbtemplate';

/**
 * Theme related settings.
 *
 */
$athena['stylesheet'] = 'css/style.css';
$athena['favicon']    = 'favicon.ico';