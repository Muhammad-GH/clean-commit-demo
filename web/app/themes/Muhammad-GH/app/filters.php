<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});


add_filter('body_class', function($classes) {
    return $classes[] = 'font-body antialiased text-[#41454c] bg-[#FFFFFF] dark:text-[#b3c3d9] dark:bg-[#000000]';
});
