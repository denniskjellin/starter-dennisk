<?php
// Check if comments are allowed or if there are comments to display
if (comments_open() || have_comments()) :
?>
<div id="comments" class="comments">
    <h2 class="comments-title">
        <?php
            if (get_comments_number() == 1) {
                _e('1 Comment', 'your-theme-textdomain');
            } else {
                printf(
                    _nx(
                        '%1$s Comment',
                        '%1$s Comments',
                        get_comments_number(),
                        'comments title',
                        'your-theme-textdomain'
                    ),
                    number_format_i18n(get_comments_number())
                );
            }
            ?>
    </h2>

    <ol class="comment-list">
        <?php
            wp_list_comments(array(
                'style'       => 'ol',
                'short_ping'  => true,
                'avatar_size' => 50,
            ));
            ?>
    </ol>

    <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
    <nav class="comment-navigation" role="navigation">
        <div class="nav-previous">
            <?php previous_comments_link(__('Older Comments', 'your-theme-textdomain')); ?>
        </div>
        <div class="nav-next">
            <?php next_comments_link(__('Newer Comments', 'your-theme-textdomain')); ?>
        </div>
    </nav>
    <?php endif; ?>

</div>

<?php
endif;

// Display the comment form
comment_form();
?>