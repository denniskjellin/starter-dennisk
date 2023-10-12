<?php get_header(); ?>
<div class="container-fluid p-0 img_banner_single">
    <?php the_post_thumbnail('full'); ?>
    <div class="container meta_wrapper">
        <div class="text_banner col-12">
            <h1><?php the_title(); ?></h1>
            <div class="entry_meta post_info">
                <?php
            $author_id = get_post_field('post_author');
            $author_name = get_the_author_meta('display_name', $author_id);
            $author_posts_url = get_author_posts_url($author_id);
            ?>
                <span class="entry_author"><?php echo esc_html_e('by '); ?>
                    <a class="post_href" href="<?php echo esc_url($author_posts_url); ?>">
                        <?php echo esc_html($author_name); ?>
                    </a>
                </span>
                <span class="entry_date">
                    <?php echo esc_html(get_the_date('F j, Y')); ?>
                </span>
            </div>
        </div>
    </div>
</div>

<div id="news_content" class="container mt-4 mb-4">

    <div class="col-md-12">

        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content/content', 'post'); ?>

        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>
    </div>

</div>

<?php get_footer(); ?>