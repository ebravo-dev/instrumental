
const menuBtn = document.querySelector('.menu-btn');
const webBody = document.body;
const menuOverlay = document.getElementById('cuerpo');
const homeClick = document.getElementsByClassName('home-click');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        webBody.classList.add('oh');
        menuOverlay.classList.remove('dn');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        webBody.classList.remove('oh');
        menuOverlay.classList.add('dn');
        menuOpen = false;
    }
});

for (let index = 0; index < homeClick.length; index++) {
    homeClick[index].addEventListener('click', () => {
        window.location = '/';
    });

}