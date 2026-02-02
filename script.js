// ===================================
// PORTFOLIO INTERACTIVE FEATURES
// ===================================
document.addEventListener('DOMContentLoaded', () => {
    initCarousel();
});



// ===================================
// CAROUSEL FUNCTIONALITY
// ===================================

function initCarousel() {
    const track = document.querySelector('.carousel-track');
    const cards = Array.from(document.querySelectorAll('.portfolio-card'));
    const leftArrow = document.querySelector('.carousel-arrow-left');
    const rightArrow = document.querySelector('.carousel-arrow-right');
    
    let currentIndex = 1; // Start with middle card (index 1)
    const totalCards = cards.length;

    function updateCarousel(newIndex) {
        // Update index with wrapping
        currentIndex = ((newIndex % totalCards) + totalCards) % totalCards;
        
        // Update all card states
        cards.forEach((card, index) => {
            // Remove all position classes
            card.classList.remove('active', 'left', 'right', 'hidden');
            
            // Calculate relative position
            let relativePos = index - currentIndex; 
            
            // Handle wrapping
            if (relativePos > totalCards / 2) {
                relativePos -= totalCards;
            } else if (relativePos < -totalCards / 2) {
                relativePos += totalCards;
            }
            
            // Apply appropriate class based on position
            if (relativePos === 0) {
                card.classList.add('active');
            } else if (relativePos === -1) {
                card.classList.add('left');
            } else if (relativePos === 1) {
                card.classList.add('right');
            } else {
                card.classList.add('hidden');
            }
        });
    }

    // Arrow click handlers
    leftArrow.addEventListener('click', () => {
        updateCarousel(currentIndex - 1);
    });

    rightArrow.addEventListener('click', () => {
        updateCarousel(currentIndex + 1);
    });

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') {
            updateCarousel(currentIndex - 1);
        } else if (e.key === 'ArrowRight') {
            updateCarousel(currentIndex + 1);
        }
    });

    // Touch/swipe support
    let touchStartX = 0;
    let touchEndX = 0;

    track.addEventListener('touchstart', (e) => {
        touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    track.addEventListener('touchend', (e) => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, { passive: true });

    function handleSwipe() {
        const swipeThreshold = 50;
        if (touchStartX - touchEndX > swipeThreshold) {
            // Swipe left - go to next
            updateCarousel(currentIndex + 1);
        } else if (touchEndX - touchStartX > swipeThreshold) {
            // Swipe right - go to previous
            updateCarousel(currentIndex - 1);
        }
    }

    // Initialize with middle card active
    updateCarousel(1);
}

// ===================================
// LOGO ANIMATION
// ===================================

const logoLetters = document.querySelectorAll('.logo-letter');
logoLetters.forEach((letter, index) => {
    letter.addEventListener('mouseenter', () => {
        letter.style.transform = 'scale(1.2) rotateZ(5deg)';
        letter.style.color = '#7000d8';
    });
    
    letter.addEventListener('mouseleave', () => {
        letter.style.transform = '';
        letter.style.color = '';
    });
});

// ===================================
// PERFORMANCE OPTIMIZATION
// ===================================

// Lazy load images
if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll('img[loading="lazy"]');
    images.forEach(img => {
        img.src = img.dataset.src;
    });
} else {
    // Fallback for browsers that don't support lazy loading
    const script = document.createElement('script');
    script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js';
    document.body.appendChild(script);
}

// ===================================
// SMOOTH SCROLL POLYFILL
// ===================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ===================================
// KEYBOARD NAVIGATION
// ===================================

document.addEventListener('keydown', (e) => {
    const cards = Array.from(document.querySelectorAll('.portfolio-card'));
    const activeElement = document.activeElement;
    const currentIndex = cards.indexOf(activeElement);
    
    if (e.key === 'ArrowRight' && currentIndex < cards.length - 1) {
        cards[currentIndex + 1].focus();
    } else if (e.key === 'ArrowLeft' && currentIndex > 0) {
        cards[currentIndex - 1].focus();
    }
});

// ===================================
// CONSOLE EASTER EGG
// ===================================

console.log('%cTAZ Portfolio', 'font-size: 32px; font-weight: bold; color: #ff3333;');
console.log('%cBuilt with passion by Timothy Adedotun', 'font-size: 14px; color: #666;');
console.log('%cInterested in working together? Let\'s connect!', 'font-size: 12px; color: #999;');