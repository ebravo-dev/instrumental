
const menuBtn = document.querySelector('.menu-btn');
const webBody = document.body;
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        webBody.classList.add('oh');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        webBody.classList.remove('oh');
        menuOpen = false;
    }
});