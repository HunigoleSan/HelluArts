const header = document.getElementById('header');
let $container_circles_vectors = document.querySelector('.container-circles-vectors')
const scrollTrigger = 341;

window.addEventListener('scroll', () => {
    if (window.scrollY >= scrollTrigger) {
        $container_circles_vectors.classList.add('vectors-scrolls');
    } else {
        $container_circles_vectors.classList.remove('vectors-scrolls');
    }
});
