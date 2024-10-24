$(document).ready(function() {
    let currentIndex = 0;
    const slides = $('.slides .slide');
    const totalSlides = slides.length;

    slides.eq(currentIndex).addClass('active');

    $('.next').click(function() {
        slides.eq(currentIndex).removeClass('active');
        currentIndex = (currentIndex + 1) % totalSlides;
        slides.eq(currentIndex).addClass('active');
    });

    $('.prev').click(function() {
        slides.eq(currentIndex).removeClass('active');
        currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        slides.eq(currentIndex).addClass('active');
    });
});