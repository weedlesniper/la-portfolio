import './bootstrap';
import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-carousel]');
    if (!carousel) return;

    const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
    const dotsContainer = carousel.querySelector('[data-carousel-dots]');
    const dots = dotsContainer ? Array.from(dotsContainer.querySelectorAll('[data-carousel-dot]')) : [];
    const prevBtn = carousel.querySelector('[data-carousel-prev]');
    const nextBtn = carousel.querySelector('[data-carousel-next]');

    let currentIndex = slides.findIndex(slide => slide.dataset.active === 'true');
    if (currentIndex < 0) currentIndex = 0;

    function showSlide(index) {
        if (!slides.length) return;

        // Wrap index
        currentIndex = (index + slides.length) % slides.length;

        slides.forEach((slide, i) => {
            const isActive = i === currentIndex;
            slide.classList.toggle('hidden', !isActive);
            slide.dataset.active = isActive ? 'true' : 'false';
        });

        dots.forEach((dot, i) => {
            const isActive = i === currentIndex;
            dot.classList.toggle('w-3', isActive);
            dot.classList.toggle('w-1.5', !isActive);
            dot.classList.toggle('bg-white', isActive);
            dot.classList.toggle('bg-white/50', !isActive);
        });
    }

    prevBtn?.addEventListener('click', () => showSlide(currentIndex - 1));
    nextBtn?.addEventListener('click', () => showSlide(currentIndex + 1));

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => showSlide(i));
    });

    // Optional: auto-rotate every 7 seconds
    let autoRotate = setInterval(() => showSlide(currentIndex + 1), 7000);

    carousel.addEventListener('mouseenter', () => clearInterval(autoRotate));
    carousel.addEventListener('mouseleave', () => {
        autoRotate = setInterval(() => showSlide(currentIndex + 1), 7000);
    });
    function makeMiniChart(canvasId, dataPoints, color) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;

        new Chart(canvas.getContext('2d'), {
            type: 'line',
            data: {
                labels: dataPoints.map((_, i) => i + 1),
                datasets: [
                    {
                        data: dataPoints,
                        borderColor: color,
                        backgroundColor: 'rgba(0,0,0,0)',
                        borderWidth: 2,
                        pointRadius: 0,
                        tension: 0.35
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                },
                scales: {
                    x: { display: false },
                    y: { display: false }
                }
            }
        });
    }

    // Example dummy data – replace with whatever shapes you like
    makeMiniChart('codingChart1', [8, 3, 5, 5, 5, 6, 8, 9], '#22c55e'); // GitHub
    makeMiniChart('codingChart2', [2, 3, 2, 4, 3, 5, 4, 6], '#6366f1'); // WakaTime
    makeMiniChart('codingChart3', [1, 2, 3, 4, 4, 5, 6, 7], '#f97316'); // Projects
});
