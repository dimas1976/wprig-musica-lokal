<?php
/**
Template Name: News
*/
?>
<?php
get_header();

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'category_name' => 'news',
    'paged' => $paged,
    'posts_per_page' => 4,
    'current_article_number' => get_query_var('current_post')
);

//query_posts($args);
$query = new WP_Query($args);

?>
<div id="news-articles">
    <div class="container pt-md-4 pb-5">
        <div class="row pb-md-3">
            <?php
            while ($query->have_posts()) : $query->the_post();
                /*
                * Include the Post-Format-specific template for the content.
                * If you want to override this in a child theme, then include a file
                * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                */
                $current_post = $query->current_post;
                get_template_part('template-parts/post/content', get_post_format());
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous page', 'twentysixteen'),
                'next_text' => __('Next page', 'twentysixteen'),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'twentysixteen') . ' </span>',
            ));
            ?>
        </div>
    </div>
</div>
<div class="arrow">
    <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
         width="40.000000pt" height="40.000000pt" viewBox="0 0 1280.000000 1280.000000"
         preserveAspectRatio="xMidYMid meet">
        <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
           fill="#009688" stroke="none">
            <path d="M6080 11255 c-171 -35 -306 -109 -435 -239 -100 -101 -158 -193 -199
-316 -36 -108 -46 -186 -46 -357 l0 -153 2355 0 c1694 0 2369 -3 2407 -11 167
-35 301 -170 337 -337 16 -76 16 -6808 0 -6884 -36 -167 -171 -302 -337 -337
-38 -8 -713 -11 -2407 -11 l-2355 0 0 -152 c0 -172 10 -250 46 -358 41 -122
99 -214 199 -316 133 -134 278 -211 459 -243 41 -8 807 -11 2393 -11 2569 0
2395 -4 2563 61 107 41 192 100 290 199 126 127 201 275 229 450 15 91 15
8229 0 8320 -55 348 -329 629 -677 696 -106 20 -4721 19 -4822 -1z"/>
            <path d="M5825 8954 c-44 -14 -78 -43 -289 -252 -266 -265 -286 -292 -286
-397 0 -37 8 -76 19 -101 13 -28 204 -227 646 -670 l628 -629 -2574 -5 -2574
-5 -41 -22 c-56 -30 -119 -103 -133 -155 -9 -31 -11 -143 -9 -383 3 -328 4
-341 25 -381 25 -48 83 -101 129 -120 28 -12 446 -14 2604 -14 1413 0 2570 -3
2570 -7 0 -4 -281 -289 -625 -633 -478 -479 -629 -636 -644 -670 -27 -60 -27
-150 0 -210 29 -64 454 -491 523 -525 64 -32 157 -34 219 -5 31 15 363 341
1218 1197 1160 1162 1176 1179 1208 1251 30 66 33 80 30 150 -5 97 -35 161
-123 263 -35 41 -563 572 -1172 1181 -783 781 -1122 1112 -1153 1128 -57 29
-133 34 -196 14z"/>
        </g>
    </svg>
</div>

<?php
get_footer();
?>
