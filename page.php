<?php get_header(); ?>
<div class="container-fluid p-0 img_banner_single">
    <?php
if (has_post_thumbnail()) {
    the_post_thumbnail('full');
} else {
    ?>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mountains.jpg" alt="Mountains at dawn">
    <?php
}
?>
</div>

<div class="container meta_wrapper">
    <div class="text_banner col-12">
        <h1 class="entry_title"><?php the_title(); ?></h1>
        <div class="entry_meta">
            <!-- secondary title goes here -->
        </div>
    </div>
</div>
</div>

<div id="content_wrapper" class="container mt-4 mb-4">
    <div class="col-md-12">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content/content', 'pages'); ?>
        <?php endwhile; ?>
        <?php else : ?>
        <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>