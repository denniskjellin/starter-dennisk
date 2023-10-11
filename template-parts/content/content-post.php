<?php
/**
 * Template part for displaying posts.
 *
 * @package DennisK
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post_item mx-auto'); ?>>

    <?php if (has_post_thumbnail()) : ?>

    <?php if (is_single()) 
        {
        ?>
    <div class="post_thumb">
        <?php the_post_thumbnail('large'); ?>
    </div>

    <?php 
        } 
        else 
        { 
        ?>

    <div class="post_thumb mb-4">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <?php
        }
        ?>

    <?php endif; ?>

    <?php
    if (is_single()) :
        the_title('<h1 class="entry_title mb-5">', '</h1>');
    else :
        the_title(sprintf('<h2 class="post_title"><a class="post_href" href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    endif;
    ?>


    <h6 class="post_info">
        <?php echo esc_html_e('by '); ?><a class="post_href" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
            <?php the_author(); ?>
        </a>
        <?php echo esc_html(get_the_date('F j, Y')); ?>
    </h6>


    <?php if (is_single()) 
    {
        
    the_content(); 

    } 
    else 
    {
        $excerpt = get_the_excerpt();
        $word_count = str_word_count($excerpt);

        if ($word_count > 55) 
        {
            $limited_excerpt = string_limit_words($excerpt, 55);
             echo $limited_excerpt;
             echo '...';
             echo '<p><a class="link_more_btn" role="button" href="' . get_permalink() . '">Read More</a></p>';
    
        } 
        else 
        {
            the_excerpt();
        }
    }
    ?>

</article>