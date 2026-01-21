document.querySelectorAll('[data-carousel]').forEach(carousel => {
    const track = carousel.querySelector('.carousel-track');
    const slides = track.children;
    let index = 0;

    carousel.querySelector('[data-next]').onclick = () => {
        index = (index + 1) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
    };

    carousel.querySelector('[data-prev]').onclick = () => {
        index = (index - 1 + slides.length) % slides.length;
        track.style.transform = `translateX(-${index * 100}%)`;
    };
});
