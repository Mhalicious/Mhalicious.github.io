jQuery(document).ready(function($) {
	// PARALLAX

		function parallaxeVerschiebung($id, $prozent) {
			var offsetEinzelnerIDs = $($id).offset().top;
			var berechnungFINAL = Math.round(window.pageYOffset) - offsetEinzelnerIDs;

			$($id).each(function() {
				$(this).css(
					'-webkit-transform', 'translate3d(0px,' + berechnungFINAL / $prozent + 'px, 0px)',
					'transform', 'translate3d(0px,' + berechnungFINAL / $prozent + 'px, 0px)'
				);
			});

		}

		// Schaut wann gescrollt und führt die Funktion zur parallaxen Verschiebung aus

		$(window).on('scroll', function() {
			parallaxeVerschiebung('.img img', 3);
		});

	// PARALLAX ENDE
});
