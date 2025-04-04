document.addEventListener('DOMContentLoaded', () => {
    // Класс для управления анимациями
    class Animator {
        static fadeIn(element, delay = 100) {
            setTimeout(() => {
                element.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
                element.style.opacity = 1;
                element.style.transform = 'translateY(0)';
            }, delay);
        }

        static scaleOnHover(element) {
            element.addEventListener('mouseenter', () => {
                element.style.transform = 'scale(1.05)';
            });
            element.addEventListener('mouseleave', () => {
                element.style.transform = 'scale(1)';
            });
        }
    }

    // Анимация появления для карточек
    document.querySelectorAll('.feature-item, .widget, .testimonial-card, .analytics-card').forEach(card => {
        card.style.opacity = 0;
        card.style.transform = 'translateY(20px)';
        Animator.fadeIn(card);
    });

    // Обработчик для кнопок модальных окон
    document.querySelectorAll('[data-modal]').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = btn.getAttribute('data-modal');
            const modal = document.getElementById(`${modalId}-modal`);
            if (modal) {
                modal.style.display = 'block';
                modal.querySelector('.modal-content').style.transform = 'scale(1)';
            }
        });
    });

    // Закрытие модальных окон
    document.querySelectorAll('.modal .close').forEach(closeBtn => {
        closeBtn.addEventListener('click', () => {
            const modal = closeBtn.closest('.modal');
            modal.querySelector('.modal-content').style.transform = 'scale(0.9)';
            setTimeout(() => {
                modal.style.display = 'none';
            }, 200);
        });
    });

    // Обработчик для FAQ аккордеона
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const answer = question.nextElementSibling;
            answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        });
    });

    // Инициализация графиков
    const initializeCharts = () => {
        // График 1: User Activity Overview (линейный график)
        const activityCtx = document.getElementById('activityChart')?.getContext('2d');
        if (activityCtx) {
            new Chart(activityCtx, {
                type: 'line',
                data: {
                    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
                    datasets: [{
                        label: 'User Activity',
                        data: [12, 19, 3, 5, 2, 3, 15],
                        borderColor: 'rgba(255, 0, 0, 0.8)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#ffffff'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        }
                    }
                }
            });
        }

        // График 2: Feature Usage Analytics (столбчатая диаграмма)
        const usageCtx = document.getElementById('usageChart')?.getContext('2d');
        if (usageCtx) {
            new Chart(usageCtx, {
                type: 'bar',
                data: {
                    labels: ['Feature 1', 'Feature 2', 'Feature 3', 'Feature 4'],
                    datasets: [{
                        label: 'Usage',
                        data: [4, 6, 8, 7],
                        backgroundColor: 'rgba(255, 215, 0, 0.5)',
                        borderColor: '#ffd700',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#ffffff'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        }
                    }
                }
            });
        }

        // График 3: Task Distribution (круговая диаграмма)
        const taskDistributionCtx = document.getElementById('taskDistributionChart')?.getContext('2d');
        if (taskDistributionCtx) {
            new Chart(taskDistributionCtx, {
                type: 'pie',
                data: {
                    labels: ['Team A', 'Team B', 'Team C', 'Team D'],
                    datasets: [{
                        label: 'Task Distribution',
                        data: [30, 25, 20, 25],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(75, 192, 192, 0.8)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#ffffff'
                            }
                        }
                    }
                }
            });
        }

        // График 4: Revenue Trends (график области)
        const revenueTrendsCtx = document.getElementById('revenueTrendsChart')?.getContext('2d');
        if (revenueTrendsCtx) {
            new Chart(revenueTrendsCtx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                    datasets: [{
                        label: 'Revenue',
                        data: [5000, 7000, 4500, 8000, 6000, 9000],
                        borderColor: 'rgba(0, 255, 0, 0.8)',
                        borderWidth: 2,
                        fill: true,
                        backgroundColor: 'rgba(0, 255, 0, 0.2)'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                color: '#ffffff'
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        },
                        x: {
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            },
                            ticks: {
                                color: '#ffffff'
                            }
                        }
                    }
                }
            });
        }
    };

    // Ленивая загрузка графиков с IntersectionObserver
    const lazyLoadCharts = () => {
        const chartContainers = document.querySelectorAll('.chart-wrapper');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    initializeCharts();
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        chartContainers.forEach(container => observer.observe(container));
    };

    lazyLoadCharts();

    // Анимация для кнопок
    document.querySelectorAll('.btn').forEach(button => {
        Animator.scaleOnHover(button);
    });

    // Плавная прокрутка для якорных ссылок
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Эффект самоуничтожения
    const selfDestructBtn = document.getElementById('self-destruct-btn');
    if (selfDestructBtn) {
        selfDestructBtn.addEventListener('click', () => {
            // Добавляем эффект помех
            document.body.classList.add('glitch-effect');

            // Через 1 секунду добавляем эффект растворения
            setTimeout(() => {
                document.body.classList.remove('glitch-effect');
                document.body.classList.add('dissolve-effect');

                // Заменяем текст на случайные коды
                const elements = document.querySelectorAll('h1, h2, h3, p, a, span, li');
                elements.forEach((element) => {
                    element.classList.add('code-effect');
                    element.textContent = generateRandomCode();
                });

                // Через 2 секунды перенаправляем на страницу регистрации
                setTimeout(() => {
                    window.location.href = '../views/registr_form.php';
                }, 2000);
            }, 1000);
        });
    }

    // Функция для генерации случайного кода
    function generateRandomCode() {
        const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        let code = '';
        for (let i = 0; i < 10; i++) {
            code += chars[Math.floor(Math.random() * chars.length)];
        }
        return code;
    }
});

document.getElementById('calculateButton').addEventListener('click', () => {
    const amount = parseFloat(document.getElementById('investmentAmount').value) || 0;
    const period = parseFloat(document.getElementById('investmentPeriod').value) || 0;

    if (amount <= 0 || period <= 0) {
        document.getElementById('result').textContent = 'Пожалуйста, введите корректные значения.';
        return;
    }

    const rate = 0.1; // Годовая доходность 10%
    const profit = amount * rate * (period / 12);

    document.getElementById('result').textContent = `Потенциальная прибыль: $${profit.toFixed(2)}`;
});

  // Mobile menu toggle
  const hamburger = document.querySelector('.hamburger-menu');
  const navLinks = document.querySelector('.nav-links');

  hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navLinks.classList.toggle('active');
  });

  // Close menu when clicking on a link
  document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
          hamburger.classList.remove('active');
          navLinks.classList.remove('active');
      });
  });

  // 3D tilt effect
  document.querySelectorAll('.nav-links li').forEach(item => {
      item.addEventListener('mousemove', (e) => {
          const rect = item.getBoundingClientRect();
          const x = e.clientX - rect.left;
          const y = e.clientY - rect.top;
          const centerX = rect.width / 2;
          const centerY = rect.height / 2;
          const angleX = (y - centerY) / 20;
          const angleY = (centerX - x) / 20;
          
          item.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg)`;
      });

      item.addEventListener('mouseleave', () => {
          item.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
      });
  });

  // Scroll reveal animation
  window.addEventListener('scroll', () => {
      const header = document.querySelector('header');
      if (window.scrollY > 50) {
          header.style.boxShadow = '0 5px 20px rgba(0, 0, 0, 0.8)';
          header.style.padding = '15px 20px';
      } else {
          header.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.5)';
          header.style.padding = '25px 20px';
      }
  });

          // Параллакс эффект для декоративных элементов
          document.addEventListener('mousemove', (e) => {
            const circle1 = document.querySelector('.circle-1');
            const circle2 = document.querySelector('.circle-2');
            
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            circle1.style.transform = `translate(${x * 30}px, ${y * 30}px)`;
            circle2.style.transform = `translate(${x * -40}px, ${y * -40}px)`;
        });

        // Анимация при скролле
        const welcomeSection = document.querySelector('.welcome-section');
        window.addEventListener('scroll', () => {
            const scrollPosition = window.scrollY;
            welcomeSection.style.backgroundPositionY = `${scrollPosition * 0.5}px`;
        });

        // Анимация info-items при наведении
        document.querySelectorAll('.info-item').forEach(item => {
            item.addEventListener('mousemove', (e) => {
                const rect = item.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const angleX = (y - centerY) / 20;
                const angleY = (centerX - x) / 20;
                
                item.style.transform = `translateY(-10px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.03)`;
            });

            item.addEventListener('mouseleave', () => {
                item.style.transform = 'translateY(-10px) rotateX(0) rotateY(0) scale(1.03)';
            });
        });

 // 3D эффект при наведении
 document.querySelectorAll('.widget').forEach(widget => {
    widget.addEventListener('mousemove', (e) => {
        const rect = widget.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const angleX = (y - centerY) / 15;
        const angleY = (centerX - x) / 15;
        
        widget.style.transform = `translateY(-15px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.03)`;
    });

    widget.addEventListener('mouseleave', () => {
        widget.style.transform = 'translateY(-15px) rotateX(0) rotateY(0) scale(1.03)';
    });
});

// Параллакс эффект для декоративных элементов
document.addEventListener('mousemove', (e) => {
    const dots1 = document.querySelector('.dots-1');
    const dots2 = document.querySelector('.dots-2');
    
    const x = e.clientX / window.innerWidth;
    const y = e.clientY / window.innerHeight;
    
    dots1.style.transform = `translate(${x * 20}px, ${y * 20}px)`;
    dots2.style.transform = `translate(${x * -30}px, ${y * -30}px)`;
});

// Анимация при скролле
const widgetsSection = document.querySelector('.widgets');
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    widgetsSection.style.backgroundPositionY = `${scrollPosition * 0.3}px`;
});

 // 3D эффект для карточек
 document.querySelectorAll('.analytics-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        const angleX = (y - centerY) / 15;
        const angleY = (centerX - x) / 15;
        
        card.style.transform = `translateY(-15px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale(1.03)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'translateY(-15px) rotateX(0) rotateY(0) scale(1.03)';
    });
});

// Анимация при скролле
const analyticsSection = document.querySelector('.analytics');
window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;
    analyticsSection.style.backgroundPositionY = `${scrollPosition * 0.3}px`;
});

// Имитация загрузки графиков
document.querySelectorAll('.chart-placeholder').forEach(chart => {
    setTimeout(() => {
        chart.style.opacity = '0.5';
        chart.style.transition = 'opacity 1s ease';
    }, 1000);
});

document.querySelectorAll('.testimonial-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const midX = rect.width / 2;
        const midY = rect.height / 2;

        const offsetX = ((x - midX) / midX) * 10;
        const offsetY = ((y - midY) / midY) * 10;

        card.style.transform = `rotateY(${offsetX}deg) rotateX(${-offsetY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'rotateY(0deg) rotateX(0deg)';
    });
});

document.querySelectorAll('.feature-item').forEach(item => {
    item.addEventListener('mousemove', (e) => {
        const rect = item.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const midX = rect.width / 2;
        const midY = rect.height / 2;

        const offsetX = ((x - midX) / midX) * 10;
        const offsetY = ((y - midY) / midY) * 10;

        item.style.transform = `rotateY(${offsetX}deg) rotateX(${-offsetY}deg)`;
    });

    item.addEventListener('mouseleave', () => {
        item.style.transform = 'rotateY(0deg) rotateX(0deg)';
    });
});

// 3D-эффекты для карточек рекомендаций
document.querySelectorAll('.recommendation-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        const midX = rect.width / 2;
        const midY = rect.height / 2;

        const offsetX = ((x - midX) / midX) * 10;
        const offsetY = ((y - midY) / midY) * 10;

        card.style.transform = `rotateY(${offsetX}deg) rotateX(${-offsetY}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'rotateY(0deg) rotateX(0deg)';
    });
});

// Добавляем сортировку таблицы по клику на заголовок столбца
document.addEventListener('DOMContentLoaded', () => {
    const table = document.querySelector('.usage-table-section .usage-table');
    if (!table) return;

    const headers = table.querySelectorAll('th');
    const rows = Array.from(table.querySelectorAll('tbody tr'));

    headers.forEach((header, index) => {
        header.style.cursor = 'pointer';
        header.addEventListener('click', () => {
            // Сортировка строк по содержимому столбца
            rows.sort((a, b) => {
                const aText = a.children[index].innerText.trim();
                const bText = b.children[index].innerText.trim();

                // Если данные числовые, сравниваем как числа
                if (!isNaN(aText) && !isNaN(bText)) {
                    return aText - bText;
                }

                // Иначе сравниваем как строки
                return aText.localeCompare(bText, undefined, { numeric: true });
            });

            // Перестраиваем таблицу
            rows.forEach(row => table.querySelector('tbody').appendChild(row));
        });
    });

    // Добавляем эффект "пульсации" для подсветки строк
    const tableRows = table.querySelectorAll('tbody tr');
    tableRows.forEach(row => {
        row.addEventListener('mouseenter', () => {
            row.style.transition = 'box-shadow 0.3s ease, transform 0.3s ease';
            row.style.boxShadow = '0 5px 15px rgba(255, 215, 0, 0.5)';
            row.style.transform = 'scale(1.02)';
        });

        row.addEventListener('mouseleave', () => {
            row.style.boxShadow = 'none';
            row.style.transform = 'scale(1)';
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const features = document.querySelectorAll('.premium-unlock-section .premium-features li');

    features.forEach(feature => {
        feature.addEventListener('mousemove', (e) => {
            const rect = feature.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const midX = rect.width / 2;
            const midY = rect.height / 2;

            const offsetX = ((x - midX) / midX) * 10;
            const offsetY = ((y - midY) / midY) * 10;

            feature.style.transform = `rotateY(${offsetX}deg) rotateX(${-offsetY}deg)`;
        });

        feature.addEventListener('mouseleave', () => {
            feature.style.transform = 'rotateY(0deg) rotateX(0deg)';
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const icon = item.querySelector('.faq-icon');
        const answer = item.querySelector('.faq-answer');

        question.addEventListener('click', () => {
            // Переключаем активное состояние
            if (item.classList.contains('active')) {
                item.classList.remove('active');
            } else {
                // Закрываем все остальные вопросы
                faqItems.forEach(otherItem => otherItem.classList.remove('active'));
                item.classList.add('active');
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const footerBoxes = document.querySelectorAll('.footer-box');

    footerBoxes.forEach(box => {
        box.addEventListener('mousemove', (e) => {
            const rect = box.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const midX = rect.width / 2;
            const midY = rect.height / 2;

            const offsetX = ((x - midX) / midX) * 10;
            const offsetY = ((y - midY) / midY) * 10;

            box.style.transform = `rotateY(${offsetX}deg) rotateX(${-offsetY}deg)`;
        });

        box.addEventListener('mouseleave', () => {
            box.style.transform = 'rotateY(0deg) rotateX(0deg)';
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    // Добавляем эффект "пульсации" для кнопок
    const buttons = document.querySelectorAll('button');
    buttons.forEach(button => {
        button.addEventListener('mouseenter', () => {
            button.style.boxShadow = '0 10px 20px rgba(255, 215, 0, 0.5)';
        });

        button.addEventListener('mouseleave', () => {
            button.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.3)';
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const hamburgerMenu = document.querySelector('.hamburger-menu');
    const navLinks = document.querySelector('.nav-links');

    hamburgerMenu.addEventListener('click', () => {
        hamburgerMenu.classList.toggle('active');
        navLinks.classList.toggle('active');
    });

    // Закрытие меню при клике вне его области
    document.addEventListener('click', (e) => {
        if (!hamburgerMenu.contains(e.target) && !navLinks.contains(e.target)) {
            hamburgerMenu.classList.remove('active');
            navLinks.classList.remove('active');
        }
    });
});

