
const menuBtn = document.querySelector('.menu-btn');
const webBody = document.body;
const menuOverlay = document.getElementById('cuerpo');
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