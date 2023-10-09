<?php

function heroImage() {
    ?>
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
<?php }
?>