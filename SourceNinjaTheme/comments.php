<div id="comments">
    <?php if ( have_comments() ) : ?>
    <h2 id="comments-title"><?php
    printf(_n('One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number()), number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>');
    ?></h2>
    <ol class="commentlist">
            <?php
                /* Loop through and list the comments. Tell wp_list_comments()
                 * to use twentyeleven_comment() to format the comments.
                 * If you want to overload this in a child theme then you can
                 * define twentyeleven_comment() and that will be used instead.
                 * See twentyeleven_comment() in twentyeleven/functions.php for more.
                 */
                wp_list_comments();
            ?>
        </ol>
    <?php endif; ?>
    <?php comment_form();?>
</div><!-- #comments -->
