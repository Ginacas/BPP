let currentIndex = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

function showSlide(index) {
    const slidesContainer = document.querySelector('.slides');
    if (index >= totalSlides) {
        currentIndex = 0;
    } else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }
    const newTransform = `translateX(-${currentIndex * 100}%)`;
    slidesContainer.style.transform = newTransform;
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

function startSlider() {
    setInterval(nextSlide, 7000); // Cambia de imagen cada 7 segundos
}

document.addEventListener('DOMContentLoaded', startSlider);


