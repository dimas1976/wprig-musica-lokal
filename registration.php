<?php
/**
Template Name: Anmeldung
 */

get_header(); ?>

<div id="motiv-registration" class="mb-3" data-aos="fade-down">
    <div class="credit">Foto: &copy; Cem Renkligül</div>
</div>
<section id="registration-articles">
    <div class="container pt-3 pt-md-5 pb-md-5">
        <div class="row pb-4">
            <div class="col-12 text-center text-md-left" data-aos="zoom-in">
                <h1>Wenn Ihr mit anderen gemeinsam musizieren möchtet, solltet Ihr zunächst überlegen, welches Angebot Euch interessiert und dann:</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <article data-aos="flip-left">
                    <div class="number">
                        <h2 class="pt-md-3 pb-md-3">01</h2>
                    </div>
                    <div class="registration-description">
                        <p>
                            1. den Dozenten bzw. die Dozentin anrufen (alle Telefonnummern) und
                            2. fragen, wann Ihr zu einer (kostenlosen) Probestunde kommen könnt.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article data-aos="flip-right">
                    <div class="number">
                        <h2 class="pt-md-3 pb-md-3">02</h2>
                    </div>
                    <div class="registration-description">
                        <p>
                            Der Dozent / die Dozentin gibt Auskunft darüber, wann und wo sich die Gruppe trifft.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article data-aos="flip-left">
                    <div class="number">
                        <h2 class="pt-md-3 pb-md-3">03</h2>
                    </div>
                    <div class="registration-description">
                        <p>
                            Zur Anmeldung bekommst du dort einen Anmeldebogen (doppelt). Ein Exemplar davon bekommt Musica Altona e.V. und eines sollten deine Eltern behalten.
                        </p>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article data-aos="flip-right">
                    <div class="number">
                        <h2 class="pt-md-3 pb-md-3">04</h2>
                    </div>
                    <div class="registration-description">
                        <p>
                            Außerdem gibt es zum Anmeldebogen ein SEPA-Lastschriftmandat. Wenn du dauerhaft mitmachen möchtest, sollen Deine Eltern den Bogen bitte ausfüllen und ebenfalls dem Dozenten zurückgeben.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<div id="registration-download">
    <div class="container pt-3 pb-md-5">
        <div class="row">
            <div class="col-md-6"  data-aos="fade-up">
                <a href="<?= get_bloginfo("template_url"); ?>/formulare/anmeldevertrag.pdf" target="_blank"><i class="fas fa-download"></i> Anmeldebogen runterladen </a>
            </div>
            <div class="col-md-6"  data-aos="fade-up">
                <a href="<?= get_bloginfo("template_url"); ?>/formulare/sepa.pdf" target="_blank"><i class="fas fa-download"></i> Erteilung einer SEPA-Basislastschrift runterladen</a>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
