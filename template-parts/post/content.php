<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<?php global $current_post ?>
<div class="<?php echo is_single()? 'col' : 'col-md-6 pb-4' ?>">
    <article id="post-<?php the_ID();
    echo is_single() ? ' event-article' : '' ?>"
             data-aos="<?php echo 'fade-right' ?>" <?php post_class() ?>>
        <header class="entry-header">
            <?php
            if ('post' === get_post_type()) {
                echo '<div class="entry-meta">';
                if (is_single()) {
                    //twentyseventeen_posted_on();
                } else {
                    // echo twentyseventeen_time_link();
                    twentyseventeen_edit_link();
                };
                echo '</div><!-- .entry-meta -->';
            };
            ?>
        </header><!-- .entry-header -->
        <?php
        if (is_single()) {
            echo '<div class="container">
            <div class="row">
                <div class="col">';

            //the_title('<h1 class="entry-title">', '</h1>');
        }
        ?>
        <div class="card <?php echo is_single() ? 'pb-5" style="border: none"' : '' ?>">
            <?php
            /* translators: %s: Name of current post */
            the_content(sprintf(
                __('MEHR DAZU'),
                get_the_title()
            ));

            if (is_single()) {
                echo '</div>
                     </div>
                    </div> ';
            }

            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'twentyseventeen'),
                'after' => '</div>',
                'link_before' => '<span class="page-number">',
                'link_after' => '</span>',
            ));
            ?>
        </div><!-- .entry-content -->
    </article>
</div><!-- #post-## -->
