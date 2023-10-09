<?php get_header(); ?>

<div class="hero-image">
    <div class="hero-text">
        <h1 class="site_title solid_underline_wide"><?php echo get_bloginfo('name'); ?></h1>
    </div>
    <div>
        <a href="#news_content" aria-label="Scroll down to news content">
            <i class="bi bi-chevron-double-down scroll-down-arrow"></i>
        </a>
    </div>
</div>




<div id="news_content" class="container mt-5 mb-5">
    <div class="col-md-12 text-center">
        <h2 class="solid_underline text-uppercase fw-bold">Latest Posts</h2>
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