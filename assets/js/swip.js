var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    effect: "fade",
    speed: 3000,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

$(document).ready(function () {
    showImages('.star');
});
$(window).scroll(function () {
    showImages('.star');
});

// swiper.on('slideChange', function () {
//     for (let i = 0; i < 10; i++) {
//         let indice = (indices[i] + 1) % 36;
//         indices[i] = indice;

//         let alianza = document.getElementById('alianza' + i.toString());
//         alianza.style.backgroundImage = 'url(\'assets/img/alianzas/' + alianzas[indice] + '\') ';
//     }
// });


let alianzas = [
    'coca-cola.svg',
    'Alstom.svg',
    'CFE.svg',
    'basf.svg',
    'dupont.svg',
    'conagua.svg',
    'FINACRIL.svg',
    'General_Electric.svg',
    'cydsa.svg',
    'grupo primex.svg',
    'comego.svg',
    'grupo-dynasol .svg',
    'honeywell.svg',
    'insa.svg',
    'Indelpro-Transparent.svg',
    'Intertek_logo.svg',
    'GUILFORD.svg',
    'Kentech.svg',
    'NHUMO.svg',
    'pemex.svg',
    'pepsi.svg',
    'M_G.svg',
    'petrocel-temex.svg',
    'petrocel.svg',
    'polioles.svg',
    'PPG.svg',
    'siemens.svg',
    'SK.svg',
    'Tepeal.svg',
    'Trigen.svg',
    'UNE.svg',
    'Universidad_Anahuac.svg',
    'vopak.svg',
    'SEMAR.svg',
    'SALUD.svg',
    'PGR.svg'
];

let indices = [
    0, 3, 6, 9, 12, 15, 18, 21, 24, 27,
];



