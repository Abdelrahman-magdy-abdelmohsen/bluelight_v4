let slideIndex = 0;

function moveSlide(n) {
    const slides = document.querySelectorAll('.box');
    const totalSlides = slides.length;

    const visibleSlides = 5; // Number of visible slides
    const slidesToScroll = 5; // Number of slides to scroll

    slideIndex = (slideIndex + n + totalSlides) % totalSlides;

    const slideWidth = slides[0].offsetWidth * slidesToScroll;
    document.querySelector('.row').style.transform = `translateX(-${slideWidth * slideIndex}px)`;

    // Disable next button when at last set of slides
    document.querySelector('.next').disabled = slideIndex >= totalSlides - visibleSlides;

    // Disable prev button when at first set of slides
    document.querySelector('.prev').disabled = slideIndex === 0;
}
