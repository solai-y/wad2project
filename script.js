// script.js
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll-container');

    function animateOnScroll() {
        const triggerPoint = window.innerHeight * 0.75;
        
        animatedElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            if (rect.top <= triggerPoint) {
                element.classList.add('active');
            }
        });
    }

    animateOnScroll();
    window.addEventListener('scroll', animateOnScroll);
});
