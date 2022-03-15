<?php
/*
Template Name: Ueber Uns - statische Seite
*/
get_header();
?>
<div id="motiv-about" class="mb-3" data-aos="fade-down">
    <div class="credit">Foto: &copy; Fayssal Boukari</div>
</div>

<section id="about-section">
    <div class="container pt-5  pl-4 pr-4 pl-md-3 pr-md-3 pl-lg-0 pr-lg-0 ">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="pb-3" data-aos="zoom-in">Ein vielseitiges Musikprojekt in der Nachbarschaft</h2>
                <p class="pb-3" data-aos="zoom-in-up">
					Der Musica Altona e. V. wurde 2002 von der BürgerStiftung Hamburg zusammen mit einigen Institutionen und engagierten Musiker:innen in Altona-Altstadt initiiert, um Kindern und Jugendlichen in einem interkulturellen Rahmen das Musizieren zu ermöglichen. So entstand ein vielschichtiges musikalisches Angebot, das in Gruppen stattfindet, wohnortnah und auch für Familien mit geringerem Einkommen erschwinglich ist. Auf diesem Weg werden auch diejenigen gefördert, die erschwerte Zugangsmöglichkeiten zu Musikinstrumenten haben, Interesse und Talent jedoch mitbringen. Inklusion ist selbstredend. Musica Altona versteht sich zudem als Plattform des sozialen und künstlerischen Austausches in einer multikulturellen Stadt, die eine weltoffene Persönlichkeitsbildung der Einzelnen unterstützt.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="pb-3" data-aos="zoom-in">Bewährtes Konzept: Musizieren in der Gruppe macht stark</h2>
                <p class="pb-3" data-aos="zoom-in-up">
					Mit dem 'Rollenden Musikkoffer', der regelmäßig durch die Kitas des Stadtteils zieht, erleben die ganz Kleinen seit vielen Jahren ein lebendiges Programm der musikalischen Früherziehung. Seit Anfang 2019 gibt es 'Bellas Klangtonne', ein Projekt für die Elementar Kinder in Kitas und ab März 2022 'Bella spielt Ukulele'. Bereits hier wird das Prinzip des Gruppenunterrichts gepflegt, der sich dann für Kinder ab dem ersten Schuljahr in den Instrumental- und natürlich auch Orchestergruppen fortsetzt. Unter der Leitung von erfahrenen Dozenten:innen und Musikpädagogen:innen treffen sich die Schüler:innen in Altonaer Schulen und anderen Einrichtungen. Auf einen einzigen Musikstil müssen sich die inzwischen über 300 Nachwuchsmusiker:innen nicht festlegen, denn bei Musica Altona wird in verschiedenen Gruppen »crossover« musiziert : von Schlagzeug, Blasinstrumenten, Klavier, Keyboard, afrikanischen Trommeln über Saz und Gitarre bis zur klassischen Geige und Cello sowie einem Shanty Chor und zwei Band Projekten.
				</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 class="pb-3" data-aos="zoom-in">zu guter Letzt</h2>
                <p class="pb-3" data-aos="zoom-in-up">
					Seit nunmehr 20 Jahren ist der große und von Herzen kommende Einsatz aller Beteiligten bezeichnend für Musica Altona. Die Kursgebühren sind moderat und die Organisation schlank. So wird es jungen Menschen ermöglicht - auch denjenigen, die neu in der Stadt sind - einen leichteren Zugang zu ihrem Stadtteil und zu anderen Jugendlichen zu finden.
                </p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-sm col-md-6 mt-4 mb-4 about-links-container">
                    <a class="mb-2" href="./vorstand" title="Zur Vorstand-Seite">der Vorstand von Musica Altona <i class="fas fa-chevron-circle-right ml-2"></i></a>
                    <a href="./geschichte" title="Zur Geschichte-Seite">die Gründungsgeschichte von Musica Altona <i class="fas fa-chevron-circle-right ml-2"></i></a>
            </div>
            <div class="col-sm-4 offset-sm-2 col-md-3 offset-md-3 col-lg-2 offset-lg-4">
                <picture>
                    <source media="(min-width:1200px)" data-srcset="<?= bloginfo("template_url"); ?>/img/refugess.gif 3.5x">
                    <source media="(min-width:992px)" data-srcset="<?= bloginfo("template_url"); ?>/img/refugess.gif 3x">
                    <source media="(min-width:768px)" data-srcset="<?= bloginfo("template_url"); ?>/img/refugess.gif 2x">
                    <source media="(min-width:576px)" data-srcset="<?= bloginfo("template_url"); ?>/img/refugess.gif 1x">
                    <source data-srcset="<?= bloginfo("template_url"); ?>/img/refugess.gif">
                    <img data-src="<?= bloginfo("template_url"); ?>/img/refugess.gif" class="img-fluid lazyload refugees-image" alt="Bewährtes Konzept: Musizieren in der Gruppe macht stark" data-aos="fade-right">
                </picture>
            </div>
</section>
<?php
get_footer();
?>
