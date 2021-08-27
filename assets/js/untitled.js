
const menuBtn = document.querySelector('.menu-btn');
const webBody = document.body;
const menuOverlay = document.getElementById('cuerpo');
const homeClick = document.getElementsByClassName('home-click');
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

window.addEventListener('resize', function (event) {
    _closeMenu();
}, true);