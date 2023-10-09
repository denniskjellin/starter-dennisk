<?php
function heroImage() {
    $hero_image = get_field('hero-img', 'options');
    $image_url = esc_url($hero_image['url']);
    ?>

<div class="hero_image" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(<?php echo $image_url; ?>)">
    <div class="hero_text">
        <h1 class="site_title solid_underline_wide"><?php echo get_bloginfo('name'); ?></h1>
    </div>
    <div>
        <a href="#news_content" aria-label="Scroll down to news content">
            <i class="bi bi-chevron-double-down scroll-down-arrow"></i>
        </a>
    </div>
</div>

<?php }
?>