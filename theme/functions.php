<?php
/**
 * Theme related functions.
 *
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
    global $athena;
    return $title . (isset($athena['title_append']) ? $athena['title_append'] : null);
}