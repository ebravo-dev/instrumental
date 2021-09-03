
const menuBtn = document.querySelector('.menu-btn');
const webBody = document.body;
const menuOverlay = document.getElementById('cuerpo');
const homeClick = document.getElementsByClassName('home-click');
const navBar = document.getElementById('nav-bar');
const topBar = document.getElementById('top-bar');
const textsBar = document.getElementsByClassName('textb');
let menuOpen = false;

function _openMenu() {
    menuBtn.classList.add('open');
    webBody.classList.add('oh');
    menuOverlay.classList.remove('dn');
    menuOpen = true;
}

function _closeMenu() {
    menuBtn.classList.remove('open');
    webBody.classList.remove('oh');
    menuOverlay.classList.add('dn');
    menuOpen = false;
}

menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        _openMenu();
    } else {
        _closeMenu();
    }
});

for (let index = 0; index < homeClick.length; index++) {
    homeClick[index].addEventListener('click', () => {
        window.location = '/';
    });

}

// window.addEventListener('resize', function (event) {
//     _closeMenu();
// }, true);

window.addEventListener('scroll', function (event) {
    if (window.scrollY > 0) {
        navBar.classList.add('nvs');
        topBar.style.height = '0px';

        for (let i = 0; i < textsBar.length; i++) {
            textsBar[i].style.height = '80px';
            textsBar[i].style.fontSize = '16pt';
        }
    } else {
        navBar.classList.remove('nvs');
        topBar.style.height = '8px';
        for (let i = 0; i < textsBar.length; i++) {
            textsBar[i].style.height = '100px';
            textsBar[i].style.fontSize = '18pt';
        }
    }
}, true);

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    loop: true,
    effect: "fade",
    speed: 1000,
    autoplay: {
        delay: 1500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
});