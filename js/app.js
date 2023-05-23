let secGames = document.querySelector('section.games');
let secNews = document.querySelector('section.news');
let secBuy = document.querySelector('section.buy');
let secBild = document.querySelector('section.building');


let header = document.querySelector('header');

window.onscroll = () => {
    header.classList.toggle('active', window.scrollY > secGames.offsetTop && window.scrollY < secNews.offsetTop);
    header.classList.toggle('active-grey', window.scrollY > secNews.offsetTop - 50 && window.scrollY < secBuy.offsetTop);
    header.classList.toggle('active-green', window.scrollY > secBuy.offsetTop - 50 && window.scrollY < secBild.offsetTop);
    header.classList.toggle('active-dark-grey', window.scrollY > secBild.offsetTop - 50);
}

let btnIcon = document.querySelector('.icon-toggler');
let navBar = document.querySelector('header .nav');

btnIcon.onclick = () => {
    btnIcon.classList.toggle('btn-x');
    navBar.classList.toggle('nav-active');
}

btnIcon.classList.remove('btn-x');
navBar.classList.remove('nav-active');

// parallax

function parallax(event) {
    this.querySelectorAll('.layer').forEach(layer => {
        let speed = layer.dataset.speed;
        layer.style.transform = 'translateX(' + event.clientX * speed / 1250 + 'px)';
        console.log(layer.style.transform);
    });
}

document.addEventListener('mousemove', parallax);