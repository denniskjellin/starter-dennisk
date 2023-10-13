<?php get_header(); ?>

<div id="news_content" class="container mt-5 mb-5">
    <div class="col-md-12 text-center">
        <?php
        $author_name = get_the_author_meta('display_name');
        ?>
        <h2 class="page_title text-uppercase fw-bold">author: <span class="text-lowercase"><?php echo esc_html($author_name); ?></span></h2>

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