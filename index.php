<?php
/**
Template Name: Home
 */

get_header();
?>

    <div id="motiv" data-aos="fade-down">
        <div class="container mt-4">
            <div class="row">
                <div class="col">
                    <p class="quotes text-center">
                        <q>Das wundervolle an Musik ist für mich,
                            dass sie wildfremde Menschen zusammenbringt</q>
                        (Bobby McFerrin)
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="start-article">
        <div class="container pt-md-5">
            <div class="row">
                <div class="col-sm-12 col-md-7" data-aos="fade-right">
                    <h1 class="pb-3">
                        Kinder fördern durch Musik
                    </h1>
                    <p>
                        <i class="fas fa-hand-point-up"></i>
                        <span>
                        Ein bewährtes Konzept: Musizieren in der Gruppe macht stark
                    </span>
                    </p>

                    <p>
                        <i class="fas fa-hand-point-up"></i>
                        <span>
                        Engagierte DozentInnen, die neben der Liebe zur Musik auch großen Wert auf das freundliche,
                        wertschätzende und unterstützende Miteinander der jungen MusikerInnen legen.
                    </span>
                    </p>
                    <p class="pb-3">
                        <i class="fas fa-hand-point-up"></i>
                        <span>
                        Die Kurstgebühren sind moderat und die
                        Vereinsorganisation schlank.
                    </span>
                    </p>
                    <a class="btn btn-primary" href="./bewaehrtes-konzept-musizieren-in-der-gruppe-macht-stark/" role="button">ÜBER UNS</a>
                </div>
                <div class="col-md-5 start-img" data-aos="fade-left">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/8JzEtFdB7Yc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 hidden-md-down music-kid" data-aos="zoom-in"></div>
                <div class="col-md-12 col-lg-4 pt-5 pt-md-3 ml-md-1" data-aos="zoom-in-up">
                    <p>
                        Musica Altona ist eine Plattform für sozialen und künstlerischen Austausch; in einer
                        multikulturellen Stadt, die eine weltoffene Persönlichkeitsbildung der Einzelnen unterstützt.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="course-list" class="lazyload" data-bg="<?= bloginfo("template_url"); ?>/assets/img/kurslist_bg.jpg" data-aos="zoom-in-up">
        <div class="container pb-4 pb-md-0">
            <div class="row">
                <div class="col-md-12">
                    <p class="pb-5 pb-md-4">Unsere Kurse </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-5 offset-lg-1">
                    <ul>
                        <li>
                            <i class="fas fa-music"></i> Altonaer Tastenspaß am Klavier
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> The Junior Drummers (Trommeln)
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Altonaer Geigensterne
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Cello
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> KRASS BRASS - Blasinstrumente
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Bratsche
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i
                                        class="fas fa-chevron-circle-right"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5 offset-md-1">
                    <ul>
                        <li>
                            <i class="fas fa-music"></i> Saz
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Keyboard
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Altonaer Gitarren und Band
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Altona Laut (Schlagzeug)
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Rollender Musikkoffer
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                        <li>
                            <i class="fas fa-music"></i> Trommeln, Gumboots und <br>
                            Recycling Groove Workshops
                            <a href="./unsere-kurse/" title="Link zu den Kursen"><i class="fas fa-chevron-circle-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>
