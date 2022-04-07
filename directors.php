<?php
/*
Template Name: Vorstand
*/
get_header();
?>
<section id="directors">
        <div class="container pb-5">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-4 mb-md-0" data-aos="flip-left">
                        <picture>
                            <source media="(min-width:1200px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg 3.5x">
                            <source media="(min-width:992px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg 3x">
                            <source media="(min-width:768px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg 2x">
                            <source media="(min-width:576px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg 1x">
                            <source data-srcset="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg">
                            <img class="card-img-top lazyload director-img beth" data-src="<?= bloginfo("template_url"); ?>/img/directors/bethina/beth.jpg"  alt="Bethina Walbaum">
                        </picture>
                        <div class="credit">Foto: &copy; Gerd Wilkens</div>
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title">Bethina Walbaum</h5>
                            <p class="card-text text-left">
                                Selbständige Musikerin, Gründungsmitglied und ehrenamtliches Vorstandsmitglied. Tätigkeitsfeld: Kontakt und telefonische Ansprechperson für den Verein, Betreuung und Organisation von Auftritten, KiMuFest und Ferien Workshops. Updates der Homepage in CoOp mit den Webdesignern.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-4 mb-md-0" data-aos="flip-left">
                        <picture>
                            <source media="(min-width:1200px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia.jpg 3.5x">
                            <source media="(min-width:992px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia.jpg 3x">
                            <source media="(min-width:768px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia.jpg 2x">
                            <source media="(min-width:576px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia_sm.jpg 1x">
                            <source data-srcset="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia_xs.jpg">
                            <img class="card-img-top lazyload director-img" data-src="<?= bloginfo("template_url"); ?>/img/directors/patricia/patricia.jpg"  alt="Patricia Renz">
                        </picture>
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title">Patricia Renz</h5>
                            <p class="card-text text-left">
                                Schulleiterin der Louise-Schröder Schule und Gründungsmitglied. Tätigkeitsfeld: ehrenamtliche Vereins-Vorsitzende, Fundraising und Antragstellung, Eltern- und Dozentenberatung, Koordination, Konzept-Arbeit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="card mb-md-0" data-aos="flip-left">
                        <picture>
                            <source media="(min-width:1200px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/marion/marion.jpg 3.5x">
                            <source media="(min-width:992px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/marion/marion.jpg 3x">
                            <source media="(min-width:768px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/marion/marion.jpg 2x">
                            <source media="(min-width:576px)" data-srcset="<?= bloginfo("template_url"); ?>/img/directors/marion/marion_sm.jpg 1x">
                            <source data-srcset="<?= bloginfo("template_url"); ?>/img/directors/marion/marion_xs.jpg">
                            <img class="card-img-top lazyload director-img" data-src="<?= bloginfo("template_url"); ?>/img/directors/marion/marion.jpg"  alt="Marion Wolf-Dietrich">
                        </picture>
                        <div class="card-body" data-aos="fade-up">
                            <h5 class="card-title">Marion Wolf-Dietrich</h5>
                            <p class="card-text text-left">
                                Erzieherin und Leiterin einer Elbkinder Kita in Altona - jetzt im Ruhestand. Mitgründerin des Vereins und ehrenamtliches Mitglied im Vorstand. Tätigkeitsfeld: Programme musikalischer Grundbildung für Kleinkinder und Vorschüler, Koordination der Angebote für Kitas, Beratung und Vernetzung des Vereins im Stadtteil, Veranstaltungen des Vereins, Kontakte zu Förderinstitutionen und dem Bezirk.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
?>