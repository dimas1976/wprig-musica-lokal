




<?php
/**
Template Name: Anniversary
 */

get_header();
?>
<main>
	<h1>
		Das ist die Jubiläumsseite
	</h1>
</main>
<?php get_footer();?>
<script>
	// do this for 30 seconds
	var duration = 0.3 * 1000;
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


