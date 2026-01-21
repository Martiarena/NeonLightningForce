document.addEventListener("DOMContentLoaded", () => {
	"use strict";

	// Video (una sola)
	GLightbox({
		selector: '.glightbox-video',
		loop: false,
		touchNavigation: false,
    	keyboardNavigation: false,
    	arrows: false,
    	draggable: false,
		autoplayVideos: true,
	});

	// Descarga
	GLightbox({
		selector: '.glightbox-download',
		loop: false,
		touchNavigation: false,
    	keyboardNavigation: false,
    	arrows: false,
    	draggable: false,
		width: '100%',
		height: '100%',
		onOpen: () => addPopupClass('popup-download'),
	});

	// Jugar Online
	GLightbox({
		selector: '.glightbox-playonline',
		loop: false,
		touchNavigation: false,
    	keyboardNavigation: false,
    	arrows: false,
    	draggable: false,
		width: '100%',
		height: '100%',
		onOpen: () => addPopupClass('popup-playonline'),
	});

	function addPopupClass(className) {
		const slide = document.querySelector('.gslide.current');
		if (slide && !slide.classList.contains(className)) {
			slide.classList.add(className);
		}
	}
});