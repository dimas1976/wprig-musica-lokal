<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="XjWoRvRlOGLeyuCZYuXlQ0jyk7M6cLoCGi_br_KF1Vs">
    <meta name="allow-search" content="YES">
    <meta name="" http-equiv="expires" content="0">
    <meta name="revisit-after" content="3 days">
    <meta name="audience" content="All">
    <meta name="content-language" content="DE">
    <meta name="author" content="Dimitri Kogan">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= bloginfo("template_url"); ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= bloginfo("template_url"); ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= bloginfo("template_url"); ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?= bloginfo("template_url"); ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?=bloginfo("template_url"); ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="format-detection" content="telephone=no">
    <script type="text/javascript">
        var templateUrl = '<?= bloginfo("template_url"); ?>';
    </script>
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_rig()->print_styles( 'wp-rig-styles' ); ?>
    <?php get_template_part('template-parts/header/theme','header');?>
    <?php if(has_nav_menu('top')) : get_template_part('template-parts/navigation/navigation', 'top')?>
    <?php endif; ?>
