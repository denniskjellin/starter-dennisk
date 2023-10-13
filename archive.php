<?php get_header(); ?>

<div id="content_wrapper" class="container pt-5 mt-5 mb-5">
    <div class="col-md-12 text-center">
        <?php if (is_author()) : ?>
        <h1 class="h3 page_title text-uppercase fw-bold">author: <span class="text-lowercase"><?php echo esc_html($author_name); ?></span></h1>
        <?php else : ?>
        <h1 class="h3 page_title text-uppercase fw-bold"><?php the_archive_title(); ?></h1>
        <?php endif; ?>


        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part('template-parts/content/content', 'archive'); ?>

        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>
    </div>

</div>





<?php get_footer(); ?>