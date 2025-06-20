import './bootstrap';

console.log('App JS loaded');

document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.getElementById('navToggle');
    const nav = document.getElementById('mainNav');

    if (toggle && nav) {
        console.log('Toggle and Nav elements found');
        toggle.addEventListener('click', () => {
            console.log('Toggle clicked');
            nav.classList.toggle('open');
        });
    }
});
