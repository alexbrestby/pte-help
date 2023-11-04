// burger menu init
const hamburger = document.querySelector('.hamburger');
const navigation = document.querySelector('.header-navigation')
hamburger.addEventListener('click', function () {
    this.classList.toggle('is-active');
    navigation.classList.toggle('is-active');
})

// swiper slider init
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