/// ===================================
// PORTFOLIO INTERACTIVE FEATURES
// ===================================

document.addEventListener('DOMContentLoaded', () => {
    initCursorEffect();
    initCardInteractions();
    initScrollAnimations();
    initParallaxEffect();
});

// ===================================
// CUSTOM CURSOR EFFECT
// ===================================

function initCursorEffect() {
    // Only on desktop
    if (window.innerWidth < 768) return;

    const cursor = document.createElement('div');
    cursor.className = 'custom-cursor';
    document.body.appendChild(cursor);

    // Add cursor styles
    const style = document.createElement('style');
    style.textContent = `
        .custom-cursor {
            position: fixed;
            width: 20px;
            height: 20px;
            border: 2px solid #ff3333;
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            transition: transform 0.2s ease, opacity 0.3s ease;
            opacity: 0;
            mix-blend-mode: difference;
        }
        
        .custom-cursor.active {
            opacity: 1;
        }
        
        .custom-cursor.hover {
            transform: scale(1.8);
            background-color: rgba(255, 51, 51, 0.1);
        }
    `;
    document.head.appendChild(style);

    let mouseX = 0;
    let mouseY = 0;
    let cursorX = 0;
    let cursorY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        cursor.classList.add('active');
    });

    document.addEventListener('mouseleave', () => {
        cursor.classList.remove('active');
    });

    // Smooth cursor follow
    function animateCursor() {
        const dx = mouseX - cursorX;
        const dy = mouseY - cursorY;
        
        cursorX += dx * 0.1;
        cursorY += dy * 0.1;
        
        cursor.style.left = cursorX - 10 + 'px';
        cursor.style.top = cursorY - 10 + 'px';
        
        requestAnimationFrame(animateCursor);
    }
    animateCursor();

    // Hover effect on interactive elements
    const interactiveElements = document.querySelectorAll('a, .portfolio-card');
    interactiveElements.forEach(el => {
        el.addEventListener('mouseenter', () => cursor.classList.add('hover'));
        el.addEventListener('mouseleave', () => cursor.classList.remove('hover'));
    });
}


// ===================================
// CARD INTERACTIONS
// ===================================

function initCardInteractions() {
    const cards = document.querySelectorAll('.portfolio-card');
    
    cards.forEach(card => {
        // Magnetic effect
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const deltaX = (x - centerX) / centerX;
            const deltaY = (y - centerY) / centerY;
            
            const rotateX = deltaY * 5;
            const rotateY = deltaX * 5;
            
            card.style.transform = `perspective(1000px) rotateX(${-rotateX}deg) rotateY(${rotateY}deg) translateY(-8px)`;
        });
        
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });

        // Ripple effect on click
        card.addEventListener('click', (e) => {
            createRipple(e, card);
        });
    });
}

function createRipple(event, element) {
    const ripple = document.createElement('span');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = event.clientX - rect.left - size / 2;
    const y = event.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        border-radius: 50%;
        background: rgba(255, 51, 51, 0.3);
        left: ${x}px;
        top: ${y}px;
        transform: scale(0);
        animation: rippleEffect 0.6s ease-out;
        pointer-events: none;
        z-index: 10;
    `;
    
    element.style.position = 'relative';
    element.appendChild(ripple);
    
    setTimeout(() => ripple.remove(), 600);
}

// Add ripple animation
const rippleStyle = document.createElement('style');
rippleStyle.textContent = `
    @keyframes rippleEffect {
        to {
            transform: scale(2);
            opacity: 0;
        }
    }
`;
document.head.appendChild(rippleStyle);

// ===================================
// SCROLL ANIMATIONS
// ===================================

function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe elements that should animate on scroll
    const animateOnScroll = document.querySelectorAll('.portfolio-card');
    animateOnScroll.forEach(el => observer.observe(el));
}

// ===================================
// PARALLAX EFFECT
// ===================================

function initParallaxEffect() {
    const gradientBg = document.querySelector('.gradient-bg');
    
    if (!gradientBg) return;

    let ticking = false;
    
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const scrolled = window.pageYOffset;
                const parallax = scrolled * 0.3;
                
                gradientBg.style.transform = `translate(${parallax * 0.1}px, ${parallax * 0.1}px)`;
                
                ticking = false;
            });
            
            ticking = true;
        }
    });
}

