const btn = document.getElementById('menu-btn');
const nav = document.getElementById('menu');

btn.addEventListener('click', () => {
    nav.classList.toggle('d-md-none');
    nav.classList.toggle('d-none');
})