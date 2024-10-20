// Back to top button functionality
const backToTopButton = document.querySelector('.back-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        backToTopButton.style.display = 'block';
    } else {
        backToTopButton.style.display = 'none';
    }
});

backToTopButton.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Countdown Timer Script
function flipDigit(digit, newValue) {
    const bottom = digit.querySelector('.bottom');
    const currentValue = bottom.textContent;

    if (currentValue === newValue) {
        return; // Do nothing if the value hasn't changed
    }

    const flipCard = digit.querySelector('.flip-card');

    // Temporarily remove the flip class to reset animation
    flipCard.classList.remove('flip');

    // Update the bottom text before the flip
    bottom.textContent = newValue;

    // Trigger the flip animation by adding the flip class
    setTimeout(() => {
        flipCard.classList.add('flip');
    }, 20); // Delay to ensure the flip happens after text is updated
}

function startCountdown() {
    const countdownDate = Date.UTC(2024, 10, 30, 20, 0, 0);  // November 3, 2024, 20:00 UTC

    setInterval(() => {
        const now = new Date().getTime();
        const distance = countdownDate - now;

        if (distance < 0) {
            console.log("Countdown finished.");
            return;
        }

        // Calculate time components
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Apply the flip effect for each digit
        flipDigit(document.getElementById('days'), String(days).padStart(2, '0'));
        flipDigit(document.getElementById('hours'), String(hours).padStart(2, '0'));
        flipDigit(document.getElementById('minutes'), String(minutes).padStart(2, '0'));
        flipDigit(document.getElementById('seconds'), String(seconds).padStart(2, '0'));
    }, 1000);
}

window.onload = startCountdown;