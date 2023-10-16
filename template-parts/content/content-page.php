<?php
/**
 * Template part for displaying a page.
 *
 * @package DennisK
 */
?>

<!--  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('post_item'); ?>>
    <div class="entry_content">
        <?php the_content(); ?>
    </div>

</article>