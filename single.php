<?php get_header(); ?>
<div class="container-fluid p-0 img_banner_single">
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