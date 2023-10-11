<?php
/**
 * Template part for displaying posts.
 *
 * @package DennisK
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('post_item mx-auto'); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
    <div class="post_thumb"><?php the_post_thumbnail(); ?></div>
    <?php endif; ?>
    <?php 
            if ( is_single() ) :
                the_title('<h2 class="post_title">', '</h2>' );
            else:
                the_title( sprintf( '<h2 class="post_title"><a class="post_href href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
            endif; 
        ?>
    <h6 class="post_info">
        <?php echo esc_html_e('by '); ?><a class="post_href" href="<?php echo esc_url(get_author_posts_url( get_the_author_meta('ID')));?>">
            <?php esc_html(the_author()); ?></a>

        <?php echo esc_html(get_the_date('F ')); echo esc_html(get_the_date('j, ')); echo esc_html(get_the_date('Y')); ?>
    </h6>


    <?php
if ( is_single() ) {
    the_content();
}
else {
    the_excerpt();
    echo '<a class="link_more_btn" role="button" href="' . get_permalink() . '">Read More</a>';
}
?>


</article>