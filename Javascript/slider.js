
	let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.slide');
    const totalSlides = slides.length;

    // Ensure the index wraps around
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    // Move the slider
    document.querySelector('.slider').style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
}

function moveSlide(step) {
    showSlide(currentSlide + step);
}

// Initialize the first slide
showSlide(currentSlide);

