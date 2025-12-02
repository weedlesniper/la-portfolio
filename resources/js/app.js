import './bootstrap';
import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('[data-carousel]');
    if (!carousel) {
        // we still want charts to init even if no carousel,
        // so don't `return` here – just guard carousel logic
    } else {
        const slides = Array.from(carousel.querySelectorAll('[data-carousel-slide]'));
        const dotsContainer = carousel.querySelector('[data-carousel-dots]');
        const dots = dotsContainer ? Array.from(dotsContainer.querySelectorAll('[data-carousel-dot]')) : [];
        const prevBtn = carousel.querySelector('[data-carousel-prev]');
        const nextBtn = carousel.querySelector('[data-carousel-next]');

        let currentIndex = slides.findIndex(slide => slide.dataset.active === 'true');
        if (currentIndex < 0) currentIndex = 0;

        function showSlide(index) {
            if (!slides.length) return;

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

        let autoRotate = setInterval(() => showSlide(currentIndex + 1), 7000);
        carousel.addEventListener('mouseenter', () => clearInterval(autoRotate));
        carousel.addEventListener('mouseleave', () => {
            autoRotate = setInterval(() => showSlide(currentIndex + 1), 7000);
        });
    }

    // ---- existing mini chart helper ----
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

    // Your existing mini charts
    makeMiniChart('codingChart1', [8, 3, 5, 5, 5, 6, 8, 9], '#22c55e');
    makeMiniChart('codingChart2', [2, 3, 2, 4, 3, 5, 4, 6], '#6366f1');
    makeMiniChart('codingChart3', [1, 2, 3, 4, 4, 5, 6, 7], '#f97316');

    // ---- unused
    // function initCodingByWeekChart() {
    //     const canvas = document.getElementById('codingByWeekChart');
    //     if (!canvas) return;

    //     const labels = JSON.parse(canvas.dataset.labels || '[]');
    //     const minutes = JSON.parse(canvas.dataset.minutes || '[]');

    //     if (!labels.length || !minutes.length) return;

    //     const hours = minutes.map(m => (m / 60).toFixed(1));

    //     new Chart(canvas.getContext('2d'), {
    //         type: 'bar',
    //         data: {
    //             labels,
    //             datasets: [{
    //                 label: 'Coding (hours)',
    //                 data: hours,
    //                 borderWidth: 1
    //             }]
    //         },
    //         options: {
    //             responsive: true,
    //             maintainAspectRatio: false,
    //             scales: {
    //                 y: {
    //                     beginAtZero: true,
    //                     ticks: {
    //                         callback: value => value + 'h'
    //                     }
    //                 }
    //             },
    //             plugins: {
    //                 legend: { display: false },
    //                 tooltip: {
    //                     callbacks: {
    //                         label: ctx => `${ctx.parsed.y} hours`
    //                     }
    //                 }
    //             }
    //         }
    //     });
    // }

    function initLanguagesChart() {
    const canvas = document.getElementById('languagesChart');
    if (!canvas) return;

    const labels = JSON.parse(canvas.dataset.labels || '[]');
    const minutes = JSON.parse(canvas.dataset.minutes || '[]');

    if (!labels.length || !minutes.length) return;

    // simple palette – reuse / tweak as you like
    const palette = [
        '#38bdf8', // sky-400
        '#22c55e', // emerald-500
        '#f97316', // orange-500
        '#eab308', '#a855f7', '#ec4899', '#f43f5e', '#0ea5e9'
    ];

    // repeat colours if there are more languages than palette entries
    const barColors = minutes.map((_, i) => palette[i % palette.length]);

    new Chart(canvas.getContext('2d'), {
        type: 'bar',
        data: {
            labels,
            datasets: [{
                label: 'Minutes',
                data: minutes,
                backgroundColor: barColors,
                borderColor: barColors,
                borderWidth: 1
            }]
        },
        options: {
            indexAxis: 'y',
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        color: '#9ca3af',          // x-axis labels (Tailwind gray-400)
                        callback: value => value + 'm'
                    },
                    grid: {
                        color: 'rgba(148,163,184,0.2)' // grid lines
                    }
                },
                y: {
                    ticks: {
                        color: '#e5e7eb',        // language names (gray-200)
                        autoSkip: false
                    },
                    grid: {
                        display: false
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    callbacks: {
                        label: ctx => {
                            const mins = ctx.parsed.x;
                            const h = Math.floor(mins / 60);
                            const m = mins % 60;
                            if (h && m) return `${h}h ${m}m`;
                            if (h) return `${h}h`;
                            return `${m}m`;
                        }
                    }
                }
            }
        }
    });
    }

    function initPieChart(canvasId) {
        const canvas = document.getElementById(canvasId);
        if (!canvas) return;

        const labels = JSON.parse(canvas.dataset.labels || '[]');
        const minutes = JSON.parse(canvas.dataset.minutes || '[]');

        if (!labels.length || !minutes.length) return;

        new Chart(canvas.getContext('2d'), {
            type: 'pie',
            data: {
                labels,
                datasets: [{
                    data: minutes,
                    // Simple colour palette you can tweak
                    backgroundColor: [
                        '#38bdf8', '#22c55e', '#f97316',
                        '#eab308', '#a855f7', '#ec4899',
                        '#f43f5e', '#0ea5e9'
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            color: '#e5e7eb',
                            boxWidth: 10,
                            font: { size: 10 }
                        }
                    },
                    tooltip: {
                        callbacks: {
                            label: ctx => {
                                const label = ctx.label || '';
                                const mins = ctx.parsed;
                                const h = Math.floor(mins / 60);
                                const m = mins % 60;
                                let timeStr;
                                if (h && m) timeStr = `${h}h ${m}m`;
                                else if (h) timeStr = `${h}h`;
                                else timeStr = `${m}m`;
                                return `${label}: ${timeStr}`;
                            }
                        }
                    }
                }
            }
        });
    }

    // Call for each of the 3 pies
    initPieChart('categoriesPie');
    initPieChart('projectsPie');
    initPieChart('machinesPie');

    // initCodingByWeekChart();
    initLanguagesChart();
});
