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
    <style>
        *{margin:0;padding:0}body{background-color:#fff}p{font-size:1rem}.navbar-nav .nav-item a.nav-link{font-family:Lato,sans-serif;font-size:.938em;font-weight:700;color:#0099ed}.navbar-light .navbar-nav .active>.nav-link{color:#8ad2fb !important;}#logo .slogan{font-family:'Love Ya Like A Sister',sans-serif;font-weight:600;color:#000}#logo .slogan p{font-size:2.2rem}nav li.active{border-bottom:1px solid #c90f0d}nav .navbar-toggler{border:0}#motiv .container{max-width:100%;background-color:rgba(220,160,140,0)}#motiv .container .col{margin:auto}#motiv .container .col p{font-family:LORA-REGULAR;color:#fff}#motiv .container .col p q{quotes:' \201C ' ' \201D '}@media (max-width:575px){#logo .musica-logo{text-align:center}#logo .slogan p{text-align:center;font-size:1.4rem}#logo .herz{text-align:center}nav.navbar{padding-bottom:0;padding-left:0;padding-right:0}nav .container{min-width:100%}nav .container .row{width:100%}nav .container .row .navbar-collapse{margin-left:-24px;margin-right:-53px}nav .container .row .navbar-collapse ul{background-color:#ebeff2;padding-left:2rem}nav .container .row .navbar-collapse li{padding-left:.5rem;border-bottom:1px solid #e0e0e8}nav .container .row .navbar-collapse li .nav-link{color:#777}#motiv{height:14.75rem;background:url(<?= bloginfo("template_url"); ?>/img/motiv/gino_banner_xs.jpg) top center no-repeat;background-size:cover}#motiv .container .row .col .quotes{font-size:.9rem;margin-top:12rem}}@media (min-width:576px) and (max-width:767px){#logo .slogan p{font-size:1.6rem}nav.navbar{padding-bottom:0;padding-left:0;padding-right:0}nav .container{min-width:100%}nav .container .row{width:100%}nav .container .row .navbar-collapse{margin-left:-24px;margin-right:-53px}nav .container .row .navbar-collapse ul{background-color:#ebeff2;padding-left:2rem}nav .container .row .navbar-collapse li{padding-left:.5rem;border-bottom:1px solid #e0e0e8}nav .container .row .navbar-collapse li .nav-link{color:#777}#motiv{height:15.4rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_sm.jpg) top center no-repeat;background-size:cover}#motiv .container .col p{font-size:1rem;margin-top:12rem}}@media (min-width:768px) and (max-width:799px){#motiv{height:23rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_md.jpg) top center no-repeat;background-size:cover}#motiv .container .col p{font-size:1.7rem;margin-top:17rem;text-shadow:2px 0px #000}}@media (min-width:800px) and (max-width:992px){#logo .slogan p{font-size:1.6rem}#motiv{height:23rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_md.jpg) top center no-repeat;background-size:cover}#motiv .container .col p{font-size:2rem;margin-top:17rem;text-shadow:2px 0px #000}}@media (min-width:992px) and (max-width:1299px){#logo .slogan p{font-size:1.6rem}#motiv{height:19rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_lg.jpg) center center no-repeat;background-size:cover}#motiv .container .col p{font-size:2.3rem;margin-top:12rem;text-shadow:2px 0px #000}}@media (min-width:1200px){#logo .slogan p{font-size:1.7rem}#motiv{height:26rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_lg.jpg) center center no-repeat;background-size:cover}#motiv .container .col p{font-size:3rem;margin-top:17rem;text-shadow:2px 0px #000}}@media (min-width:1300px){#motiv{height:44rem;background:url(<?= get_bloginfo("template_url"); ?>/img/motiv/gino_banner_xlg.jpg) center center no-repeat;background-size:cover}#motiv .container .col p{font-size:3rem;margin-top:33rem;text-shadow:2px 0px #000}}
    </style>
    <script type="text/javascript">
        var templateUrl = '<?= bloginfo("template_url"); ?>';
    </script>
    <!--<script>
        /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */
        (function(w){
            "use strict";
            /* exported loadCSS */
            var loadCSS = function( href, before, media ){
                // Arguments explained:
                // `href` [REQUIRED] is the URL for your CSS file.
                // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
                // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
                // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
                var doc = w.document;
                var ss = doc.createElement( "link" );
                var ref;
                if( before ){
                    ref = before;
                }
                else {
                    var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
                    ref = refs[ refs.length - 1];
                }

                var sheets = doc.styleSheets;
                ss.rel = "stylesheet";
                ss.href = href;
                // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
                ss.media = "only x";

                // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
                function ready( cb ){
                    if( doc.body ){
                        return cb();
                    }
                    setTimeout(function(){
                        ready( cb );
                    });
                }
                // Inject link
                // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
                // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
                ready( function(){
                    ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
                });
                // A method (exposed on return object for external use) that mimics onload by polling document.styleSheets until it includes the new sheet.
                var onloadcssdefined = function( cb ){
                    var resolvedHref = ss.href;
                    var i = sheets.length;
                    while( i-- ){
                        if( sheets[ i ].href === resolvedHref ){
                            return cb();
                        }
                    }
                    setTimeout(function() {
                        onloadcssdefined( cb );
                    });
                };

                function loadCB(){
                    if( ss.addEventListener ){
                        ss.removeEventListener( "load", loadCB );
                    }
                    ss.media = media || "all";
                }

                // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
                if( ss.addEventListener ){
                    ss.addEventListener( "load", loadCB);
                }
                ss.onloadcssdefined = onloadcssdefined;
                onloadcssdefined( loadCB );
                return ss;
            };
            // commonjs
            if( typeof exports !== "undefined" ){
                exports.loadCSS = loadCSS;
            }
            else {
                w.loadCSS = loadCSS;
            }
        }( typeof global !== "undefined" ? global : this ));
        loadCSS(templateUrl + '/css/styles.min.css');
    </script>-->
    <?php wp_head(); ?>
</head>
<body>
    <?php wp_rig()->print_styles( 'wp-rig-styles' ); ?>
    <?php get_template_part('template-parts/header/theme','header');?>
    <?php if(has_nav_menu('top')) : get_template_part('template-parts/navigation/navigation', 'top')?>
    <?php endif; ?>
