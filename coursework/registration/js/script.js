document.addEventListener("DOMContentLoaded", function() {
    const steps = document.querySelectorAll(".process-step");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("active");
            }
        });
    }, { threshold: 0.5 });

    steps.forEach((step) => {
        observer.observe(step);
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll(".stat-value");

    counters.forEach(counter => {
        const target = +counter.getAttribute("data-count");
        const duration = 10000; // Длительность анимации в миллисекундах
        const increment = target / (duration / 16); // 16ms для 60fps

        let current = 0;

        const updateCounter = () => {
            current += increment;
            if (current < target) {
                counter.textContent = Math.ceil(current);
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + "+";
            }
        };

        updateCounter();
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const contactItems = document.querySelectorAll(".contact-item");

    contactItems.forEach(item => {
        item.addEventListener("mouseenter", () => {
            item.style.transform = "translateY(-10px)";
            item.style.boxShadow = "0 10px 30px rgba(212, 175, 55, 0.3)";
        });

        item.addEventListener("mouseleave", () => {
            item.style.transform = "translateY(0)";
            item.style.boxShadow = "none";
        });
    });
});
document.addEventListener("DOMContentLoaded", function() {
    const mobileMenu = document.getElementById("mobile-menu");
    const navMenu = document.querySelector(".nav-menu");

    mobileMenu.addEventListener("click", () => {
        mobileMenu.classList.toggle("active");
        navMenu.classList.toggle("active");
    });
});
// Инициализация AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('[data-aos]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
            }
        });
    }, { threshold: 0.1 });

    elements.forEach(element => observer.observe(element));
});
// Мобильное меню
const mobileMenu = document.getElementById('mobile-menu');
const navMenu = document.querySelector('.nav-menu');

mobileMenu.addEventListener('click', () => {
    mobileMenu.classList.toggle('active');
    navMenu.classList.toggle('active');
});

// Анимация логотипа
const logo = document.querySelector('.logo');

logo.addEventListener('mouseenter', () => {
    logo.style.transform = 'rotateY(360deg) scale(1.1)';
    logo.style.filter = 'drop-shadow(0 0 20px rgba(212, 175, 55, 0.8))';
});

logo.addEventListener('mouseleave', () => {
    logo.style.transform = 'rotateY(0) scale(1)';
    logo.style.filter = 'none';
});



