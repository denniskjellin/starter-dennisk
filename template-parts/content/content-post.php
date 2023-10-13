<?php
/**
 * Template part for displaying posts.
 *
 * @package DennisK
 */
?>

<!--  -->
<article id="post-<?php the_ID(); ?>" <?php post_class('post_item mx-auto'); ?>>
    <?php if (!is_single()) : ?>
    <div class="post_thumb mb-4">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', ['class' => 'rounded', ]); ?>
        </a>
    </div>
    <?php endif; ?>

    <!-- if its a single post, show the h2 title as a navigation link -->
    <?php if (is_single()) : ?>
    <?php else : ?>
    <h2 class="post_title">
        <a class="post_href" href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>
    </h2>
    <?php endif; ?>


    <!-- if its not a single page show the post info this way -->
    <?php if (!is_single()) : ?>
    <h6 class="post_info">
        <?php echo esc_html_e('by '); ?>
        <a class="post_href" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
            <?php the_author(); ?>
        </a>
        <?php echo esc_html(get_the_date('F j, Y')); ?>
    </h6>
    <?php endif; ?>

    <!-- if is single, show the content else show the excerpt, if excerpt is long show read more button -->
    <?php if (is_single()) : ?>
    <?php the_content(); ?>
    <?php else : ?>
    <?php
        $excerpt = get_the_excerpt();
        $word_count = str_word_count($excerpt);

        if ($word_count > 55) : ?>
    <?php
            $limited_excerpt = string_limit_words($excerpt, 55);
            echo $limited_excerpt . '...';
            ?>
    <p><a class="link_more_btn" role="button" href="<?php echo esc_url(get_permalink()); ?>">Read More</a></p>
    <?php else : ?>
    <?php the_excerpt(); ?>
    <?php endif; ?>
    <?php endif; ?>

    <!-- If is single, display entry footer with author image  -->
    <?php if (is_single()) : ?>
    <footer class="entry_footer">
        <div class="post_author">
            <h4 class="section_title visually-hidden">
                Post author</h4>
            <a class="post_href" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php
            $author_avatar = get_avatar(get_the_author_meta('ID'), 65); 
            if (strpos($author_avatar, 'default-avatar.png') !== false) {
                // Author has the default avatar, display your fallback avatar
                echo '<img src="' . get_template_directory_uri() . '/assets/images/avatar.png" alt="Fallback Avatar" class="avatar">';
            } else {
                // Author has a custom avatar, display it
                echo $author_avatar;
            }
            ?>
            </a>
            <?php echo esc_html_e('written by '); 
                the_author_posts_link();
                ?>

        </div>
    </footer>
    <?php else : ?>
    <?php endif; ?>


</article>