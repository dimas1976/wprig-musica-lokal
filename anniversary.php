<?php
/**
Template Name: Anniversary
 */

//get_header();

?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Anniversary-Musica Altona</title>
			<link rel="icon" type="image/png" href="<?php bloginfo('template_directory') ;?>/favicon/favicon-16x16.png"/>
			<link rel="stylesheet" href="<?php bloginfo('template_directory') ;?>/css/styles.min.css">
			<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
		</head>

		<body>
			<div class="container anniversary-container">
				<img class="anniversary-container__image" src="<?php bloginfo('template_directory');?>/img/anniversary/teaser.png?123" alt="teaser">
				<a class="anniversary-container__link" href="https://dev.musica-altona.de/kinder-foerdern-durch-musik">ZUR STARTSEITE</a>
			</div>
			<script>
				// do this for 30 seconds
				var duration = 0.5 * 1000;
				var end = Date.now() + duration;

				(function frame() {
					// launch a few confetti from the left edge
					confetti({
						particleCount: 60,
						spread: 300,  origin: {
							x: Math.random(),
							// since they fall down, start a bit higher than random
							y: Math.random() - 0.2
						}
					});
					// and launch a few from the right edge

					// keep going until we are out of time
					if (Date.now() < end) {
						requestAnimationFrame(frame);
					}
				}());

			</script>
		</body>

	</html>



<?php //get_footer();?>



