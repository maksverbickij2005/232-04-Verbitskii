<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Главная страница</title>
</head>
<body>
<div class="container">
    <header>
        <nav class="navbar">
            <div class="navbar-background"></div>
            <div class="logo-container">
                <img src="..//images/logo.png" alt="Логотип InvestMent" class="logo">
                <div class="logo-hover-effect"></div>
            </div>
            <ul class="nav-menu">
                <li><a href="#about" class="nav-link">О нас</a></li>
                <li><a href="#services" class="nav-link">Услуги</a></li>
                <li><a href="#partners" class="nav-link">Партнеры</a></li>
                <li><a href="#contact" class="nav-link">Контакты</a></li>
                <li class="nav-buttons">
                    <a href="auth/registr.php" class="btn">Зарегистрироваться</a>
                    <a href="auth/login.php" class="btn">Войти</a>
                    <a href="/lk/welcome.php" class="btn btn-profile">Личный кабинет</a>
                </li>
            </ul>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
</div>
            
            <div class="hero-section">
    <div class="hero-background">
        <div class="particles"></div>
        <div class="gradient-overlay"></div>
    </div>
    <div class="hero-content">
        <h1>Добро пожаловать в <span class="gradient-text">мир инноваций и инвестиций</span></h1>
        <p class="subtitle">Ваш портал к безграничным возможностям — место, где идеи встречают капитал, а стартапы становятся реальностью.</p>
        
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-value" data-count="100">0</span>
                <span class="stat-label">успешных стартапов</span>
            </div>
            <div class="stat-item">
                <span class="stat-value" data-count="500">0</span>
                <span class="stat-label">млн $ инвестиций привлечено</span>
            </div>
            <div class="stat-item">
                <span class="stat-value" data-count="50">0</span>
                <span class="stat-label">стратегических партнеров</span>
            </div>
        </div>

        <div class="hero-description">
    <p>Мы создаем экосистему, которая объединяет предпринимателей, инвесторов и экспертов. Наша платформа — это:</p>
    <ul class="hero-features">
        <li>
            <div class="feature-icon">
            </div>
            <span>Доступ к уникальным инвестиционным возможностям</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Поддержка стартапов на всех этапах развития</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Экспертиза в области инноваций и технологий</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Глобальная сеть профессионалов и инвесторов</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Возможность участия в эксклюзивных мероприятиях и воркшопах</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Персональные консультации от ведущих экспертов рынка</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Индивидуальные стратегии для масштабирования бизнеса</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Доступ к закрытым аналитическим отчетам и исследованиям рынка</span>
        </li>
        <li>
            <div class="feature-icon">
            </div>
            <span>Возможность ко-инвестирования с топовыми венчурными фондами</span>
        </li>
    </ul>
</div>

        <div class="hero-cta">
            <a href="#" class="btn btn-gold">Начать сейчас</a>
            <a href="#" class="btn btn-outline">Узнать больше</a>
        </div>
    </div>
</div>

    <!-- О нас -->
<main>
    <section id="about" class="section">
        <h2 class="section-title">О нас</h2>
        <div class="about-content">
            <div class="about-text">
                <p class="lead">Мы создаем будущее, соединяя амбициозные идеи с надежными инвестициями. Наша платформа — это смотровая площадка для стартапов, где мечты становятся реальностью, а инновации получают мощный импульс для роста.</p>
                <p>Investment — это не просто платформа, это экосистема, которая объединяет предпринимателей, инвесторов и экспертов. Мы предоставляем:</p>
                <ul class="about-features">
                    <li data-aos="fade-right" data-aos-delay="100">
                        <strong>Поддержку стартапов</strong> на всех этапах развития — от идеи до масштабирования.
                    </li>
                    <li data-aos="fade-right" data-aos-delay="200">
                        <strong>Доступ к капиталу</strong> от ведущих инвесторов и венчурных фондов.
                    </li>
                    <li data-aos="fade-right" data-aos-delay="300">
                        <strong>Глобальную сеть</strong> профессионалов и экспертов в различных отраслях.
                    </li>
                    <li data-aos="fade-right" data-aos-delay="400">
                        <strong>Экспертизу и аналитику</strong> для успешного вывода проектов на рынок.
                    </li>
                </ul>
                <p data-aos="fade-up" data-aos-delay="500">Присоединяйтесь к нам, чтобы достичь новых высот и изменить мир вместе.</p>
            </div>
            <div class="about-image">
                <div class="image-container">
                    <img src="../images/s.png" alt="О нас" class="about-img">
                    <div class="image-overlay">
                        <p class="overlay-text">Экстраординарные Инновации + Стратегические Инвестиции = Новый Горизонт Успеха</p>
                    </div>
                </div>
                <div class="particles"></div>
            </div>
        </div>
    </section>
</main>
</main>

<!-- Наши услуги -->
<section id="services" class="section dark-bg">
    <h2 class="section-title" data-aos="fade-up">Наши услуги</h2>
    <div class="services-content">
        <p class="services-intro" data-aos="fade-up" data-aos-delay="100">Мы предлагаем комплексные решения для стартапов и инвесторов, которые помогают превратить идеи в успешные проекты:</p>
        <ul class="services-list">
            <li class="service-item" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Инвестиции в стартапы</h3>
                <p>Финансирование на всех этапах развития перспективных проектов. Мы помогаем привлечь капитал от ведущих инвесторов и фондов.</p>
                <a href="#" class="service-link">Подробнее →</a>
                <div class="service-overlay">
                    <p>Мы предоставляем инвестиции на всех этапах: от seed-раунда до IPO.</p>
                    <a href="#" class="btn-service">Узнать больше →</a>
                </div>
                <div class="service-3d-effect"></div>
            </li>
            <li class="service-item" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Бизнес-консалтинг</h3>
                <p>Стратегическое планирование, оптимизация бизнес-процессов и помощь в построении масштабируемых моделей.</p>
                <a href="#" class="service-link">Подробнее →</a>
                <div class="service-overlay">
                    <p>Наши эксперты помогут вам разработать стратегию роста и масштабирования.</p>
                    <a href="#" class="btn-service">Узнать больше →</a>
                </div>
                <div class="service-3d-effect"></div>
            </li>
            <li class="service-item" data-aos="fade-up" data-aos-delay="400">
                <div class="service-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Аналитика рынка</h3>
                <p>Глубокое исследование трендов, конкурентной среды и потребительского поведения для принятия обоснованных решений.</p>
                <a href="#" class="service-link">Подробнее →</a>
                <div class="service-overlay">
                    <p>Мы предоставляем аналитические отчеты и рекомендации для вашего бизнеса.</p>
                    <a href="#" class="btn-service">Узнать больше →</a>
                </div>
                <div class="service-3d-effect"></div>
            </li>
            <li class="service-item" data-aos="fade-up" data-aos-delay="500">
                <div class="service-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Юридическая поддержка</h3>
                <p>Полное сопровождение правовых аспектов бизнеса, включая регистрацию, договоры и защиту интеллектуальной собственности.</p>
                <a href="#" class="service-link">Подробнее →</a>
                <div class="service-overlay">
                    <p>Мы обеспечиваем юридическую защиту на всех этапах вашего бизнеса.</p>
                    <a href="#" class="btn-service">Узнать больше →</a>
                </div>
                <div class="service-3d-effect"></div>
            </li>
        </ul>
    </div>
</section>

<!-- Секция "Наши преимущества" -->
<section id="advantages" class="section dark-bg">
    <h2 class="section-title" data-aos="fade-up">Наши преимущества</h2>
    <div class="advantages-content">
        <div class="advantage-item" data-aos="fade-up" data-aos-delay="100">
            <div class="advantage-icon">
                <div class="icon-hover-effect"></div>
            </div>
            <h3>Инновационные решения</h3>
            <p>Мы предлагаем уникальные решения, которые помогают вашему бизнесу выделиться на рынке.</p>
            <div class="advantage-overlay">
                <p>Наши инновационные подходы позволяют достичь высоких результатов в кратчайшие сроки.</p>
                <a href="#" class="btn-advantage">Узнать больше →</a>
            </div>
            <div class="particles"></div>
        </div>
        <div class="advantage-item" data-aos="fade-up" data-aos-delay="200">
            <div class="advantage-icon">
                <div class="icon-hover-effect"></div>
            </div>
            <h3>Глобальная сеть</h3>
            <p>Мы работаем с клиентами по всему миру, предоставляя доступ к международным рынкам.</p>
            <div class="advantage-overlay">
                <p>Наша глобальная сеть партнеров помогает выйти на новые рынки и масштабировать бизнес.</p>
                <a href="#" class="btn-advantage">Узнать больше →</a>
            </div>
            <div class="particles"></div>
        </div>
        <div class="advantage-item" data-aos="fade-up" data-aos-delay="300">
            <div class="advantage-icon">
                <div class="icon-hover-effect"></div>
            </div>
            <h3>Экспертная поддержка</h3>
            <p>Наши эксперты с многолетним опытом помогут вам в реализации самых амбициозных проектов.</p>
            <div class="advantage-overlay">
                <p>Мы предоставляем полный спектр услуг, от консалтинга до реализации.</p>
                <a href="#" class="btn-advantage">Узнать больше →</a>
            </div>
            <div class="particles"></div>
        </div>
        <div class="advantage-item" data-aos="fade-up" data-aos-delay="400">
            <div class="advantage-icon">
                <div class="icon-hover-effect"></div>
            </div>
            <h3>Гибкие условия</h3>
            <p>Мы предлагаем индивидуальные условия сотрудничества, адаптированные под ваши потребности.</p>
            <div class="advantage-overlay">
                <p>Наши гибкие условия позволяют вам сосредоточиться на развитии бизнеса.</p>
                <a href="#" class="btn-advantage">Узнать больше →</a>
            </div>
            <div class="particles"></div>
        </div>
    </div>
</section>

<!-- Секция "Как мы работаем" -->
<section id="process" class="section dark-bg">
    <h2 class="section-title" data-aos="fade-up">Как мы работаем</h2>
    <div class="process-content">
        <div class="process-step" data-aos="fade-up" data-aos-delay="100">
            <div class="step-number">1</div>
            <div class="step-content">
                <h3>Анализ и планирование</h3>
                <p>Мы проводим глубокий анализ вашего бизнеса и рынка, чтобы разработать стратегию, которая приведет к успеху.</p>
            </div>
            <div class="step-line"></div>
        </div>
        <div class="process-step" data-aos="fade-up" data-aos-delay="200">
            <div class="step-number">2</div>
            <div class="step-content">
                <h3>Разработка решений</h3>
                <p>Наши эксперты создают индивидуальные решения, которые соответствуют вашим целям и потребностям.</p>
            </div>
            <div class="step-line"></div>
        </div>
        <div class="process-step" data-aos="fade-up" data-aos-delay="300">
            <div class="step-number">3</div>
            <div class="step-content">
                <h3>Реализация</h3>
                <p>Мы внедряем разработанные решения, обеспечивая максимальную эффективность и результат.</p>
            </div>
            <div class="step-line"></div>
        </div>
        <div class="process-step" data-aos="fade-up" data-aos-delay="400">
            <div class="step-number">4</div>
            <div class="step-content">
                <h3>Поддержка и оптимизация</h3>
                <p>Мы предоставляем постоянную поддержку и оптимизацию, чтобы ваш бизнес продолжал расти.</p>
            </div>
            <div class="step-line"></div>
        </div>
    </div>
</section>

<!-- Секция "Наши партнеры" -->
<section id="partners" class="section dark-bg">
    <h2 class="section-title" data-aos="fade-up">Наши партнеры</h2>
    <div class="partners-content">
        <p class="partners-intro" data-aos="fade-up" data-aos-delay="100">Мы сотрудничаем с ведущими мировыми компаниями, чтобы обеспечить нашим клиентам доступ к лучшим ресурсам и возможностям:</p>
        <div class="partners-grid">
            <div class="partner-card" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-logo">
                    <div class="logo-hover-effect"></div>
                </div>
                <h3>Goldman Sachs</h3>
                <p class="partner-description">Мировой лидер в области инвестиций и финансовых услуг.</p>
                <div class="partner-overlay">
                    <p>Goldman Sachs — один из крупнейших инвестиционных банков мира, основанный в 1869 году.</p>
                    <a href="#" class="btn-partner">Подробнее →</a>
                </div>
                <div class="particles"></div>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="300">
                <div class="partner-logo">
                    <div class="logo-hover-effect"></div>
                </div>
                <h3>BlackRock</h3>
                <p class="partner-description">Крупнейшая инвестиционная компания с активами под управлением более $10 трлн.</p>
                <div class="partner-overlay">
                    <p>BlackRock — мировой лидер в управлении активами и инвестиционных технологиях.</p>
                    <a href="#" class="btn-partner">Подробнее →</a>
                </div>
                <div class="particles"></div>
            </div>
            <div class="partner-card" data-aos="fade-up" data-aos-delay="400">
                <div class="partner-logo">
                    <div class="logo-hover-effect"></div>
                </div>
                <h3>J.P. Morgan</h3>
                <p class="partner-description">Один из крупнейших банков мира с более чем 200-летней историей.</p>
                <div class="partner-overlay">
                    <p>J.P. Morgan — ведущий глобальный финансовый институт с широким спектром услуг.</p>
                    <a href="#" class="btn-partner">Подробнее →</a>
                </div>
                <div class="particles"></div>
            </div>
        </div>
    </div>
</section>

<!-- Секция "Контакты" -->
<section id="contacts" class="section dark-bg">
    <h2 class="section-title" data-aos="fade-up">Контакты</h2>
    <div class="contact-grid">
        <div class="contact-info">
            <div class="contact-item" data-aos="fade-up" data-aos-delay="100">
                <div class="contact-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <div class="contact-details">
                    <h3>Адрес</h3>
                    <p>123 Улица, <br>Москва, Россия, 123456</p>
                </div>
            </div>
            <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
                <div class="contact-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <div class="contact-details">
                    <h3>Телефон</h3>
                    <p>+7 (123) 456-78-90</p>
                </div>
            </div>
            <div class="contact-item" data-aos="fade-up" data-aos-delay="300">
                <div class="contact-icon">
                    <div class="icon-hover-effect"></div>
                </div>
                <div class="contact-details">
                    <h3>Email</h3>
                    <p>info@example.com</p>
                </div>
            </div>
        </div>

        <!-- Карта с интерактивным эффектом -->
        <div class="contact-map" data-aos="fade-up" data-aos-delay="400">
            <div class="map-overlay"></div>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.372951897579!2d37.61729931593076!3d55.75582698055308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a5a738fa419%3A0x7c347d506f52311f!2sRed%20Square!5e0!3m2!1sen!2sru!4v1622541234567!5m2!1sen!2sru"
                width="100%"
                height="400"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</section>

<!-- Форма обратной связи -->
<div class="contact-form">
    <h3 data-aos="fade-up">Оставьте заявку</h3>
    <form action="#" method="post" data-aos="fade-up" data-aos-delay="100">
        <div class="form-group">
            <input type="text" name="name" placeholder="Ваше имя" required>
            <div class="input-effect"></div>
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="Ваш email" required>
            <div class="input-effect"></div>
        </div>
        <div class="form-group">
            <textarea name="message" placeholder="Ваше сообщение" rows="5" required></textarea>
            <div class="input-effect"></div>
        </div>
        <button type="submit" class="btn btn-gold">
            <span>Отправить</span>
            <div class="btn-hover-effect"></div>
        </button>
    </form>
</div>

<!-- Футер -->
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <!-- Добавляем ссылку на социальную сеть вокруг логотипа -->
            <a href="https://web.telegram.org/a/" target="_blank">
                <img src="../images/logo.png" alt="Quantum Leap Project">
            </a>
        </div>
        <p>2025 © Quantum Leap Project<br>
        <span class="brand-slogan">From pixels to progress. Securely crafted since 2023.</span></p>
        <div class="social-links">
            <!-- Ссылка на Facebook -->
            <a href="https://www.facebook.com/yourpage" class="social-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <!-- Ссылка на Twitter -->
            <a href="https://twitter.com/yourpage" class="social-link" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <!-- Ссылка на LinkedIn -->
            <a href="https://www.linkedin.com/company/yourpage" class="social-link" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <!-- Ссылка на Instagram -->
            <a href="https://www.instagram.com/yourpage" class="social-link" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Подключение AOS JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Инициализация AOS -->
    <script>
        AOS.init({
            duration: 800, // Длительность анимации
            once: true,    // Анимация сработает только один раз
        });
    </script>
     <!-- Подключение JavaScript -->
     <script src="../js/script.js"></script>
</body>
</html>