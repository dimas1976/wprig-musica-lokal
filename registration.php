<?php
/**
 * Template Name: Anmeldung
 */

get_header(); ?>

<div id="motiv-registration" class="mb-3" data-aos="fade-down">
	<div class="credit">Foto: &copy; Dally</div>
</div>
<section id="registration-articles">
	<div class="container pt-3 pt-md-5 pb-md-5">
		<div class="row pb-4">
			<div class="col-12 text-center text-md-left" data-aos="zoom-in">
				<h1>Wenn Ihr mit anderen gemeinsam musizieren möchtet, solltet Ihr zunächst überlegen, welches Angebot
					Euch interessiert und dann:</h1>
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
							Bitte nehmt <span class="description-bold">Kontakt</span> mit der jeweiligen Dozentin bzw.
							Dozent auf
							(siehe Menüpunkt Kurse) und erkundigt Euch, wann Ihr zu einer (kostenlosen) <span
								class="description-bold">Probestunde</span> kommen könnt.
							Dann erfahrt Ihr auch, wann und wo die Gruppe sich trifft.<br>
							Mehr Infos bekommt Ihr <a
								href="<?= get_bloginfo("template_url"); ?>/formulare/Willkommen.pdf" target="_blank"
								style="text-decoration: underline">hier</a>.
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
							Zur <span class="description-bold">Anmeldung</span> bekommst Du in Deiner ersten Unterrichtsstunde  den Vertrag/Anmeldebogen (zweifache Ausführung). Ein Exemplar davon bekommt Musica Altona e.V. und eines behalten Deine Eltern. Außerdem gibt es zum Anmeldebogen ein SEPA-Lastschriftmandat, welches Deine Eltern bitte ausfüllen und ebenfalls der Kursleitung zurückgeben.
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
							<span class="description-bold">Kursgebühr:</span> 40€<br>
							Klavier und Gruppen mit weniger als 3 Schüler/-innen: 45€.
							&nbsp;<br>
							Bildungs-und Teilhabepaket (BuT) wird akzeptiert.<br>
							Antrag auf Ermässigung ist möglich (nur schriftlich).<br>
							Geschwisterrabatt wird gewährt
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
							<span class="description-bold">Download:</span><br>
							Hier könnt Ihr Euch das <a
								href="<?= get_bloginfo("template_url"); ?>/formulare/anmeldevertrag.pdf"
								target="_blank">Anmeldeformular</a> und die <a
								href="<?= get_bloginfo("template_url"); ?>/formulare/sepa.pdf" target="_blank">Erteilung
								einer SEPA-Basislastschrift</a> runterladen.<br>
							SEPA, An-und Abmeldungen unter <a
								href="mailto:info@musica-altona.de">info@musica-altona.de</a>
						</p>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
