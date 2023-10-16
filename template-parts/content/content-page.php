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
        <h1 class="entry_title"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>

</article>