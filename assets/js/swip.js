var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    effect: "fade",
    speed: 1000,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            let prefix = (index > 0) ? "<span class='tpc dot'>●</span>" : "";
            return '<span class="' + className + '" >' + prefix + bulletNames[index] + "</span>";
        },
        bulletClass: 'my-bullet',
        bulletActiveClass: 'my-bullet-active'
    },
});

$(document).ready(function () {
    showImages('.star');
});
$(window).scroll(function () {
    showImages('.star');
});