import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

document.addEventListener("DOMContentLoaded", () => {
	"use strict";

	// --- Preloader
	const preloader = document.querySelector(".preloader");
	if (preloader) {
		setTimeout(() => {
			document.body.classList.add("page-loaded");
			setTimeout(() => preloader.style.display = "none", 500);
		}, 1500);
	}

	// Créditos (independiente)
	GLightbox({
		selector: '.glightbox-credits',
		loop: false,
		touchNavigation: false,
    	keyboardNavigation: false,
    	arrows: false,
    	draggable: false,
		width: '100%',
		height: 'fit-to-content',
		onOpen: () => addPopupClass('popup-credits'),
	});
	function addPopupClass(className) {
		const slide = document.querySelector('.gslide.current');
		if (slide && !slide.classList.contains(className)) {
			slide.classList.add(className);
		}
	}
});