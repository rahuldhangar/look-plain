<?php
/**
 * Plain Text functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package plain_theme
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
$plaintheme_include = array(
	'/related-post.php',
	'/theme-excerpt.php',
	'/theme-support.php',
	'/content-width.php',
	'/widgets.php',
	'/breadcrumb.php',
	'/class-wp-bootstrap-navwalker.php',
	'/enqueue.php',
	'/template-tags.php',
	'/template-functions.php',
	'/customizer.php',
	'/jetpack.php',
);
foreach ($plaintheme_include as $file) {
    $filepath = locate_template('inc' . $file);
    if (!$filepath) {
        trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
    }
    require_once $filepath;
}