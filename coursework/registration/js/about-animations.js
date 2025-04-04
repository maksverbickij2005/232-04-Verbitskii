// Интерактивность для 3D-сферы
const sphere = document.querySelector('.sphere');

if (sphere) {
    sphere.addEventListener('mouseenter', () => {
        sphere.style.animationPlayState = 'paused';
    });

    sphere.addEventListener('mouseleave', () => {
        sphere.style.animationPlayState = 'running';
    });
}

// Анимация для кнопки в секции "О нас"
const aboutBtn = document.querySelector('.about .btn');

if (aboutBtn) {
    aboutBtn.addEventListener('mouseenter', () => {
        aboutBtn.style.transform = 'scale(1.1)';
    });

    aboutBtn.addEventListener('mouseleave', () => {
        aboutBtn.style.transform = 'scale(1)';
    });
}

// Обработка модальных окон
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM загружен!'); // Проверка загрузки DOM

    // Открытие модального окна "О нас"
    const aboutBtn = document.querySelector('.about .btn');
    const aboutModal = document.getElementById('about-modal');
    const closeBtns = document.querySelectorAll('.close-btn');
    const modalContents = document.querySelectorAll('.modal-content');

    if (aboutBtn && aboutModal) {
        aboutBtn.addEventListener('click', (e) => {
            e.preventDefault();
            aboutModal.style.display = 'block';
            aboutModal.querySelector('.modal-content').classList.remove('explode');
        });
    }

    // Закрытие модальных окон
    closeBtns.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            if (modal) {
                const modalContent = modal.querySelector('.modal-content');
                modalContent.classList.add('explode');
                setTimeout(() => {
                    modal.style.display = 'none';
                }, 500); // Время анимации (0.5 секунды)
            }
        });
    });

    // Закрытие модального окна при клике вне его области
    window.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal')) {
            const modalContent = e.target.querySelector('.modal-content');
            modalContent.classList.add('explode');
            setTimeout(() => {
                e.target.style.display = 'none';
            }, 500); // Время анимации (0.5 секунды)
        }
    });

    // Обработка кнопок с атрибутом data-modal
    document.querySelectorAll('.btn[data-modal]').forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const modalId = button.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.style.display = 'block';
            }
        });
    });

    // Закрытие модального окна при клике на кнопку закрытия
    document.querySelectorAll('.close-btn').forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal');
            if (modal) {
                modal.style.display = 'none';
            }
        });
    });

    // Закрытие модального окна при клике вне его
    window.addEventListener('click', (e) => {
        if (e.target.classList.contains('modal')) {
            e.target.style.display = 'none';
        }
    });

    // Обработка кнопки "Стать премиум-клиентом"
    const premiumBtn = document.getElementById('premium-btn');
    const errorModal = document.getElementById('error-modal');

    console.log('premiumBtn:', premiumBtn); // Проверка, что кнопка найдена
    console.log('errorModal:', errorModal); // Проверка, что модальное окно найдено

    if (premiumBtn && errorModal) {
        premiumBtn.addEventListener('click', (e) => {
            e.preventDefault(); // Предотвращаем переход по ссылке
            errorModal.style.display = 'block'; // Показываем новое модальное окно
        });
    }
});

// Инициализация Three.js для 3D-фона
if (document.querySelector('.featured-startups')) {
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({ alpha: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    document.querySelector('.featured-startups').appendChild(renderer.domElement);

    // Добавление света
    const light = new THREE.DirectionalLight(0xffffff, 1);
    light.position.set(5, 5, 5).normalize();
    scene.add(light);

    // Добавление геометрии
    const geometry = new THREE.IcosahedronGeometry(2, 0);
    const material = new THREE.MeshPhongMaterial({ color: 0xD4AF37, wireframe: true });
    const mesh = new THREE.Mesh(geometry, material);
    scene.add(mesh);

    camera.position.z = 5;

    // Анимация
    function animate() {
        requestAnimationFrame(animate);
        mesh.rotation.x += 0.01;
        mesh.rotation.y += 0.01;
        renderer.render(scene, camera);
    }
    animate();
}

// Открытие модального окна при нажатии на кнопку "Начать инвестировать"
const btnInvest = document.querySelector('.btn-premium-glowing');
const modal = document.getElementById('curator-modal');
const loadingSection = modal.querySelector('.loading-section');
const resultSection = modal.querySelector('.result-section');
const finalResponse = modal.querySelector('.final-response');
const btnYes = modal.querySelector('.btn-yes');
const btnNo = modal.querySelector('.btn-no');
const btnClose = modal.querySelector('.btn-close');
const closeBtn = modal.querySelector('.close-btn');

if (btnInvest) {
    btnInvest.addEventListener('click', (e) => {
        e.preventDefault();
        modal.style.display = 'block';

        // Показываем загрузку
        loadingSection.style.display = 'flex';
        resultSection.style.display = 'none';
        finalResponse.style.display = 'none';

        // Имитация загрузки (3 секунды)
        setTimeout(() => {
            loadingSection.style.display = 'none';
            resultSection.style.display = 'flex';
        }, 3000);
    });
}

// Обработка кнопки "Да"
if (btnYes) {
    btnYes.addEventListener('click', () => {
        btnYes.style.display = 'none'; // Скрываем кнопку "Да"
    });
}

// Обработка кнопки "Нет"
if (btnNo) {
    btnNo.addEventListener('click', () => {
        resultSection.style.display = 'none';
        finalResponse.style.display = 'flex';
    });
}

// Закрытие модального окна
if (btnClose) {
    btnClose.addEventListener('click', () => {
        modal.style.display = 'none';
    });
}

if (closeBtn) {
    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });
}

// Закрытие модального окна при клике вне его области
window.addEventListener('click', (e) => {
    if (e.target === modal) {
        modal.style.display = 'none';
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const circles = document.querySelectorAll('.animated-circle');
    circles.forEach(circle => {
        circle.addEventListener('click', function () {
            const stepNumber = this.getAttribute('data-step');
            const content = document.querySelector(`.step-content[data-step="${stepNumber}"]`);
            content.classList.toggle('active');
        });
    });
});

const sponsorCards = document.querySelectorAll('.sponsor-card');
sponsorCards.forEach(card => {
    card.addEventListener('mouseenter', () => {
        const svg = card.querySelector('svg');
        if (svg) {
            svg.style.animationPlayState = 'running';
        }
    });

    card.addEventListener('mouseleave', () => {
        const svg = card.querySelector('svg');
        if (svg) {
            svg.style.animationPlayState = 'paused';
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const animatedItems = document.querySelectorAll('.animated-item');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fadeInUp');
            }
        });
    }, { threshold: 0.1 });

    animatedItems.forEach(item => {
        observer.observe(item);
    });
});

document.getElementById('blog-link').addEventListener('click', function(event) {
    event.preventDefault(); // Предотвращаем переход по ссылке
    const videoContainer = document.getElementById('video-container');
    if (videoContainer.style.display === 'none') {
        videoContainer.style.display = 'block'; // Показываем видео
    } else {
        videoContainer.style.display = 'none'; // Скрываем видео
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const investmentModal = document.getElementById('investment-modal');
    const marketCrashModal = document.getElementById('market-crash');
    const openModalButton = document.getElementById('open-investment-modal');
    const closeModalButtons = document.querySelectorAll('.close');
    const investmentForm = document.getElementById('investment-form');
    const companiesGrid = document.querySelector('.companies-grid');

    // Список компаний (увеличили до 50)
    const companies = [
        'Apple', 'Google', 'Microsoft', 'Amazon', 'Tesla',
        'Meta', 'Netflix', 'NVIDIA', 'Intel', 'Samsung',
        'Sony', 'IBM', 'Oracle', 'Adobe', 'PayPal',
        'SpaceX', 'Alibaba', 'Tencent', 'Toyota', 'BMW',
        'Disney', 'Starbucks', 'Coca-Cola', 'Pepsi', 'Nike',
        'McDonald\'s', 'Visa', 'Mastercard', 'Goldman Sachs', 'JPMorgan',
        'Airbnb', 'Uber', 'Spotify', 'Twitter', 'Snapchat',
        'TikTok', 'Zoom', 'Salesforce', 'SAP', 'HP',
        'Dell', 'Lenovo', 'ASUS', 'AMD', 'Qualcomm',
        'Boeing', 'Lockheed Martin', 'General Electric', 'Ford', 'Volkswagen'
    ];

    // Заполнение списка компаний
    companies.forEach(company => {
        const companyItem = document.createElement('div');
        companyItem.classList.add('company-item');
        companyItem.innerHTML = `
            <h3>${company}</h3>
            <p>Инвестируйте в будущее</p>
        `;
        companiesGrid.appendChild(companyItem);
    });

    // Открыть модальное окно
    openModalButton.addEventListener('click', () => {
        investmentModal.style.display = 'flex';
    });

    // Закрыть модальное окно
    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            investmentModal.style.display = 'none';
            marketCrashModal.style.display = 'none';
        });
    });

    // Обработка формы
    investmentForm.addEventListener('submit', (e) => {
        e.preventDefault();
        investmentModal.style.display = 'none';
        marketCrashModal.style.display = 'flex';
    });

    // Закрыть модальное окно при клике вне его
    window.addEventListener('click', (e) => {
        if (e.target === investmentModal) {
            investmentModal.style.display = 'none';
        }
        if (e.target === marketCrashModal) {
            marketCrashModal.style.display = 'none';
        }
    });
});

// Получаем элементы
const promoModal = document.getElementById("modal"); // Модальное окно
const promoCloseBtn = document.getElementsByClassName("close")[0]; // Кнопка закрытия
const promoLearnMoreBtns = document.querySelectorAll(".learn-more-btn"); // Все кнопки "Узнать больше"
const paymentAmountsContainer = document.querySelector(".payment-amounts"); // Контейнер для сумм оплаты
const payButton = document.getElementById("pay-button"); // Кнопка "Оплатить"
const successMessage = document.getElementById("success-message"); // Сообщение об успешной оплате

// Генерация случайных сумм для оплаты
const generateRandomAmounts = () => {
    const amounts = [];
    for (let i = 0; i < 3; i++) {
        amounts.push(Math.floor(Math.random() * 1000) + 100); // Суммы от 100 до 1000
    }
    return amounts;
};

// Отображение сумм в модальном окне
const displayPaymentAmounts = () => {
    const amounts = generateRandomAmounts();
    paymentAmountsContainer.innerHTML = amounts
        .map((amount) => `<button class="amount-btn">${amount} ₽</button>`)
        .join("");
};

// Обработчик для кнопки "Оплатить"
payButton.addEventListener("click", () => {
    successMessage.style.display = "block"; // Показываем сообщение об успешной оплате
    setTimeout(() => {
        successMessage.style.display = "none"; // Скрываем сообщение через 3 секунды
    }, 3000);
});

// Открываем модальное окно при нажатии на любую кнопку "Узнать больше"
promoLearnMoreBtns.forEach((btn) => {
    btn.addEventListener("click", (event) => {
        event.preventDefault(); // Отменяем стандартное поведение ссылки
        displayPaymentAmounts(); // Генерируем и показываем суммы
        promoModal.style.display = "block";
    });
});

// Закрываем модальное окно при нажатии на крестик
promoCloseBtn.onclick = () => {
    promoModal.style.display = "none";
};

// Закрываем модальное окно при клике вне его области
window.onclick = (event) => {
    if (event.target == promoModal) {
        promoModal.style.display = "none";
    }
};

// Получаем элементы
const joinCommunityBtn = document.getElementById("join-community-btn");
const agreementModal = document.getElementById("agreement-modal");
const closeModalBtn = document.querySelector(".close");
const confirmAgreementBtn = document.getElementById("confirm-agreement-btn");

// Открываем модальное окно при нажатии на кнопку "Присоединиться"
joinCommunityBtn.addEventListener("click", (event) => {
    event.preventDefault();
    agreementModal.style.display = "block";
});

// Закрываем модальное окно при нажатии на крестик
closeModalBtn.addEventListener("click", () => {
    agreementModal.style.display = "none";
});

// Закрываем модальное окно при клике вне его области
window.addEventListener("click", (event) => {
    if (event.target === agreementModal) {
        agreementModal.style.display = "none";
    }
});

// Обработка подтверждения соглашения
confirmAgreementBtn.addEventListener("click", () => {
    const signature = document.getElementById("signature").value;
    const date = document.getElementById("date").value;

    if (signature && date) {
        alert(`Спасибо, ${signature}! Ваше соглашение подписано ${date}.`);
        agreementModal.style.display = "none";
    } else {
        alert("Пожалуйста, заполните все поля.");
    }
});

// Функция для генерации случайного кода
function generateRandomCode() {
    const characters = '0123456789ABCDEF';
    let code = '';
    for (let i = 0; i < 2000; i++) { // Генерация 2000 символов
      code += characters[Math.floor(Math.random() * characters.length)];
      if ((i + 1) % 100 === 0) code += '\n'; // Добавляем перенос строки каждые 100 символов
    }
    return code;
  }
  
  // Функция для обновления текста в модальном окне
  function updateGlitchCode() {
    const glitchCodeElement = document.getElementById('glitchCode');
    if (glitchCodeElement) {
      glitchCodeElement.textContent = generateRandomCode();
      setTimeout(updateGlitchCode, 100); // Обновление текста каждые 100 мс
    }
  }
  
  // Функция для открытия модального окна
  function openModal() {
    const modal = document.getElementById('glitchModal');
    const body = document.body;
  
    if (modal && body) {
      modal.style.display = 'flex'; // Показываем модальное окно
      body.classList.add('glitch-effect'); // Добавляем эффект помех на всю страницу
      updateGlitchCode(); // Запускаем бегущий код
  
      // Через 10 секунд показываем сообщение и перенаправляем
      setTimeout(() => {
        const errorMessage = document.getElementById('errorMessage');
        if (errorMessage) {
          errorMessage.style.display = 'block'; // Показываем сообщение
        }
  
        // Перенаправление через 3 секунды после показа сообщения
        setTimeout(() => {
          window.location.href = '../index.php';
        }, 10000);
      }, 10000); // 10 секунд
    }
  }
  
  // Назначаем обработчик события на кнопку
  const glitchButton = document.querySelector('.glitch-button');
  if (glitchButton) {
    glitchButton.addEventListener('click', (e) => {
      e.preventDefault(); // Отменяем стандартное поведение ссылки
      openModal(); // Открываем модальное окно
    });
  }

  document.addEventListener('DOMContentLoaded', () => {
    const modal = document.querySelector('.modal');
    const openModalButton = document.querySelector('.btn-profile');
    const closeModalButton = document.querySelector('.close');

    // Открытие модального окна
    openModalButton.addEventListener('click', () => {
        modal.style.display = 'flex';
        document.body.style.overflow = 'hidden'; // Блокируем прокрутку страницы
    });

    // Закрытие модального окна
    closeModalButton.addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Возвращаем прокрутку страницы
    });

    // Закрытие модального окна при клике вне его области
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const companyItems = document.querySelectorAll('.company-item');

    // Добавляем эффект "пульсации" для карточек компаний
    companyItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.style.boxShadow = '0 15px 40px rgba(212, 175, 55, 0.7)';
        });

        item.addEventListener('mouseleave', () => {
            item.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
        });
    });

    // Анимация для видео блога
    const blogVideo = document.querySelector('#blog-video');
    if (blogVideo) {
        blogVideo.addEventListener('mouseenter', () => {
            blogVideo.style.transform = 'scale(1.05)';
            blogVideo.style.boxShadow = '0 15px 40px rgba(212, 175, 55, 0.7)';
        });

        blogVideo.addEventListener('mouseleave', () => {
            blogVideo.style.transform = 'scale(1)';
            blogVideo.style.boxShadow = '0 10px 30px rgba(0, 0, 0, 0.5)';
        });
    }
});

