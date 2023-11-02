const swiper = new Swiper('.swiper', {
    // Optional parameters
    autoplay: {
        delay: 3000,
        stopOnLastSlide: true,
        pauseOnMouseEnter: true,
    },
    direction: 'horizontal',
    effect: 'fade',
    speed: 2000,
    fadeEffect: {
        crossFade: true,
    },
});