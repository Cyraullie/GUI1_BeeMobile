const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',


    // If we need pagination
    pagination: {
        el: '.horizontal_Swiper-pagination',
    },

    // Navigation arrows
    navigation: {
        nextEl: '.horizontal_Swiper-button-next',
        prevEl: '.horizontal_Swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
        el: '.horizontal_Swiper-scrollbar',
    },
});
