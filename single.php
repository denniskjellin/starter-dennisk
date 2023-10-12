<?php get_header(); ?>
<div class="container-fluid p-0 img_banner_single">
    <div class="text_banner">
        <h6 class="post_info">
            <?php echo esc_html_e('by '); ?>
            <a class="post_href" href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                <?php the_author(); ?>
            </a>
            <?php echo esc_html(get_the_date('F j, Y')); ?>
        </h6>
    </div>
    <?php the_post_thumbnail('full'); ?>
</div>
<div id="news_content" class="container mt-5 mb-5">

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