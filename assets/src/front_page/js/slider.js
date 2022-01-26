import Swiper, {Navigation} from 'swiper';

Swiper.use([Navigation]);

new Swiper(".mySwiper", {
    slidesPerView: "auto",
    spaceBetween: 8,
    breakpoints: {
        // when window width is >= 336px
        337: {
            spaceBetween: 32
        },
        // when window width is >= 768px
        769: {
            spaceBetween: 128
        },
        // when window width is >= 1444px
        1445: {
            spaceBetween: 160
        }
    },
    centeredSlides: true,
    loop: true,
    loopFillGroupWithBlank: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});