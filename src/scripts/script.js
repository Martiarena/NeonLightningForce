import lightGallery from 'lightgallery';

// Plugins opcionales
import lgZoom from 'lightgallery/plugins/zoom';
import lgThumbnail from 'lightgallery/plugins/thumbnail';
import lgFullscreen from 'lightgallery/plugins/fullscreen';
import lgVideo from 'lightgallery/plugins/video';

// Estilos
import 'lightgallery/css/lightgallery.css';
import 'lightgallery/css/lg-zoom.css';
import 'lightgallery/css/lg-thumbnail.css';
import 'lightgallery/css/lg-fullscreen.css';
import 'lightgallery/css/lg-video.css';

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

	const gallery = document.getElementById('light-galeria');
	if (gallery) {
    	lightGallery(gallery, {
			plugins: [lgZoom, lgThumbnail, lgFullscreen],
			speed: 500,
			download: false,
			selector: '.gallery-photo',
			thumbnail: false,
		});
	}

	const gallery_video = document.getElementById('light-galeria-video');
	if (gallery_video) {
    	lightGallery(gallery_video, {
			plugins: [lgFullscreen, lgVideo],
			speed: 500,
			download: false,
			selector: '.gallery-video',
			thumbnail: true,
		});
	}
/*
	const gallery_html = document.getElementById('light-html');
	if (gallery_html) {
    	lightGallery(gallery_html, {
			plugins: [],
			speed: 500,
			download: false,
			selector: '.gallery-html',
			thumbnail: false,
			dynamic: false, 
			appendSubHtmlTo: ".lg-item", 
		});
	}
	const gallery_html_2 = document.getElementById('light-html_2');
	if (gallery_html_2) {
    	lightGallery(gallery_html_2, {
			plugins: [],
			speed: 500,
			download: false,
			selector: '.gallery-html_2',
			thumbnail: false,
			dynamic: false, 
			appendSubHtmlTo: ".lg-item", 
		});
	}*/
});


document.querySelectorAll('.gallery-html').forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();

    const targetId = link.getAttribute('href').replace('#', '');
    const target = document.getElementById(targetId);

    if (!target) return;

    const htmlContent = target.innerHTML;

    const temp = document.createElement('button');

    const instance = lightGallery(temp, {
      dynamic: true,
      dynamicEl: [
        {
          src: '',
          subHtml: htmlContent,
        }
      ],
      download: false
    });

    instance.openGallery(0);
  });
});


document.querySelectorAll('.gallery-html_2').forEach((link) => {
  link.addEventListener('click', (e) => {
    e.preventDefault();

    const targetId = link.getAttribute('href').replace('#', '');
    const target = document.getElementById(targetId);

    if (!target) return;

    const htmlContent = target.innerHTML;

    const temp = document.createElement('button');

    const instance = lightGallery(temp, {
      dynamic: true,
      dynamicEl: [
        {
          src: '',
          subHtml: htmlContent,
        }
      ],
      download: false
    });

    instance.openGallery(0);
  });
});
