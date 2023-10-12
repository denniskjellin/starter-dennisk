<?php
/**
 * Template part for displaying posts.
 *
 * @package DennisK
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post_item mx-auto'); ?>>
    <?php if (!is_single()) : ?>
    <div class="post_thumb mb-4">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', ['class' => 'rounded', ]); ?>
        </a>
    </div>
    <?php endif; ?>


    <?php if (is_single()) : ?>
    <?php else : ?>
    <h2 class="post_title">
        <a class="post_href" href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
            <?php the_title(); ?>
        </a>
    </h2>
    <?php endif; ?>

    <?php if (!is_single()) : ?>
    <h6 class="post_info">
        <?php echo esc_html_e('by '); ?>
        <a class="post_href" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
            <?php the_author(); ?>
        </a>
        <?php echo esc_html(get_the_date('F j, Y')); ?>
    </h6>
    <?php endif; ?>

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
</article>