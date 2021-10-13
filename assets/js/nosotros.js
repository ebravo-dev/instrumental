var n1 = document.getElementById('n1');
var n2 = document.getElementById('n2');
var n3 = document.getElementById('n3');

var np1 = document.getElementById('np1');
var np2 = document.getElementById('np2');
var np3 = document.getElementById('np3');


function activarn1() {
    n1.classList.remove('ncd');
    n1.classList.add('nca');

    n2.classList.remove('nca');
    n2.classList.add('ncd');

    n3.classList.remove('nca');
    n3.classList.add('ncd');

    np1.classList.remove('dn');
    np2.classList.add('dn');
    np3.classList.add('dn');

}

function activarn2() {
    n2.classList.remove('ncd');
    n2.classList.add('nca');

    n1.classList.remove('nca');
    n1.classList.add('ncd');

    n3.classList.remove('nca');
    n3.classList.add('ncd');

    np2.classList.remove('dn');
    np1.classList.add('dn');
    np3.classList.add('dn');
}


function activarn3() {
    n3.classList.remove('ncd');
    n3.classList.add('nca');

    n2.classList.remove('nca');
    n2.classList.add('ncd');

    n1.classList.remove('nca');
    n1.classList.add('ncd');

    np3.classList.remove('dn');
    np2.classList.add('dn');
    np1.classList.add('dn');
}