$(document).ready(function () {
    /* Плавная прокрутка меню */
    $('header a[href^="#"]').click(function () {
        let target = $(this).attr('href');
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 500);
        $('header a[href^="#"]').parent().removeClass('active');
        $(this).parent().addClass('active');
        $('.menu__mobile .menu').toggle(500);
        $('.menu__burger').toggleClass('close');
        return false;
    });
    /* Мобильное меню */
    $('.menu__burger').click(function () {
        $('.menu__mobile .menu').toggle(500);
        $(this).toggleClass('close');
    });

    //  Initialize Swiper

    let swiper = new Swiper(".mySwiper", {
        // cssMode: true,
        slidesPerView: 3,
        // slidesPerGroup: 2,
        spaceBetween: 30,
        loop: true,
        freeMode: true,
        pauseOnMouseEnter: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        // pagination: {
        //     el: ".swiper-pagination",
        // },
        mousewheel: true,
        keyboard: true,
    })

});
console.log('hello');
;