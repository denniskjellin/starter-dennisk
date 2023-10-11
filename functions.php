<?php


/*
* require scripts
*/

/* Excerpt Limit Begin */
function string_limit_words($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if(count($words) > $word_limit)
    array_pop($words);
    return implode(' ', $words);
}

// Include scripts
require get_template_directory().'/assets/inc/scripts.php';
require get_template_directory().'/assets/lib/functions/hero-image.php';
require get_template_directory().'/assets/lib/acf-blocks/class-admin-option-page.php';