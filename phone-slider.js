// JavaScript para el slider del celular
let phoneCurrentIndex = 0;
const phoneSlides = document.querySelectorAll('.phone-slide');
const totalPhoneSlides = phoneSlides.length;
const phoneIndicators = document.querySelectorAll('.phone-indicator');

function showPhoneSlide(index) {
    const phoneSlidesContainer = document.querySelector('.phone-slides');
    if (index >= totalPhoneSlides) {
        phoneCurrentIndex = 0;
    } else if (index < 0) {
        phoneCurrentIndex = totalPhoneSlides - 1;
    } else {
        phoneCurrentIndex = index;
    }
    const newTransform = `translateX(-${phoneCurrentIndex * 100}%)`;
    phoneSlidesContainer.style.transform = newTransform;
    updatePhoneIndicators(phoneCurrentIndex);
}

function updatePhoneIndicators(index) {
    phoneIndicators.forEach(indicator => indicator.classList.remove('active'));
    phoneIndicators[index].classList.add('active');
}

phoneIndicators.forEach(indicator => {
    indicator.addEventListener('click', (event) => {
        const index = parseInt(event.target.getAttribute('data-index'));
        showPhoneSlide(index);
    });
});

document.addEventListener('DOMContentLoaded', () => {
    showPhoneSlide(0); // Muestra la primera imagen inicialmente
});
