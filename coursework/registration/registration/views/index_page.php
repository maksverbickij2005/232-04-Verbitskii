<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>SoundBridge - Платформа для независимых музыкантов</title>
</head>
<body>
<div class="container">
  <header>
    <nav class="navbar">
      <div class="navbar-background"></div>
      <div class="logo-container">
        <img src="..//images/logo.png" alt="Логотип SoundBridge" class="logo">
        <div class="logo-hover-effect"></div>
      </div>
      <ul class="nav-menu">
        <li><a href="#about" class="nav-link">О нас</a></li>
        <li><a href="#features" class="nav-link">Возможности</a></li>
        <li><a href="#artists" class="nav-link">Артисты</a></li>
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
        <h1>SoundBridge - <span class="gradient-text">мост между артистами и слушателями</span></h1>
        <p class="subtitle">Первая децентрализованная платформа, где независимые музыканты встречают свою аудиторию без посредников.</p>
        
        <div class="hero-stats">
            <div class="stat-item">
                <span class="stat-value" data-count="5000">0</span>
                <span class="stat-label">независимых артистов</span>
            </div>
            <div class="stat-item">
                <span class="stat-value" data-count="100000">0</span>
                <span class="stat-label">треков в каталоге</span>
            </div>
            <div class="stat-item">
                <span class="stat-value" data-count="1">0</span>
                <span class="stat-label">миллион слушателей</span>
            </div>
        </div>

        <div class="hero-description">
            <p>Мы создаем экосистему, которая объединяет талантливых музыкантов и ценителей независимой музыки:</p>
            <ul class="hero-features">
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <span>Прямая монетизация вашего творчества</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <span>Сообщество единомышленников</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <span>Продвижение вашей музыки</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-wallet"></i>
                    </div>
                    <span>Прозрачные выплаты</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-guitar"></i>
                    </div>
                    <span>Коллаборации с другими артистами</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <span>Эксклюзивный контент для фанатов</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-compact-disc"></i>
                    </div>
                    <span>NFT-релизы</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <span>Подкасты и интервью</span>
                </li>
                <li>
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <span>Организация концертов</span>
                </li>
            </ul>
        </div>

        <div class="hero-cta">
            <a href="#" class="btn btn-gold">Загрузить трек</a>
            <a href="#" class="btn btn-outline">Слушать музыку</a>
        </div>
    </div>
</div>

<main>
    <!-- О нас -->
    <section id="about" class="section">
        <h2 class="section-title">О SoundBridge</h2>
        <div class="about-content">
            <div class="about-text">
                <p class="lead">Мы верим, что настоящая музыка должна быть свободной от корпоративного контроля. Наша платформа дает независимым артистам инструменты для творчества, монетизации и роста.</p>
                <p>SoundBridge — это революция в музыкальной индустрии, где:</p>
                <ul class="about-features">
                    <li data-aos="fade-right" data-aos-delay="100">
                        <strong>Артисты получают 90% доходов</strong> — в отличие от 15-20% на традиционных платформах
                    </li>
                    <li data-aos="fade-right" data-aos-delay="200">
                        <strong>Слушатели открывают новые таланты</strong> до того, как они станут мейнстримом
                    </li>
                    <li data-aos="fade-right" data-aos-delay="300">
                        <strong>Сообщество определяет тренды</strong> без влияния лейблов и алгоритмов
                    </li>
                    <li data-aos="fade-right" data-aos-delay="400">
                        <strong>Технологии Web3</strong> обеспечивают прозрачность и справедливость
                    </li>
                </ul>
                <p data-aos="fade-up" data-aos-delay="500">Присоединяйтесь к музыкальной революции!</p>
            </div>
            <div class="about-image">
                <div class="image-container">
                    <img src="../images/case.png" alt="О SoundBridge" class="about-img">
                    <div class="image-overlay">
                        <p class="overlay-text">Ваша музыка. Ваши правила. Ваша аудитория.</p>
                    </div>
                </div>
                <div class="particles"></div>
            </div>
        </div>
    </section>

    <!-- Возможности -->
    <section id="features" class="section dark-bg">
        <h2 class="section-title" data-aos="fade-up">Наши возможности</h2>
        <div class="services-content">
            <p class="services-intro" data-aos="fade-up" data-aos-delay="100">Мы предлагаем полный набор инструментов для независимых музыкантов и их поклонников:</p>
            <ul class="services-list">
                <li class="service-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-icon">
                        <i class="fas fa-cloud-upload-alt"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <h3>Загрузка и распространение</h3>
                    <p>Публикуйте свои треки и альбомы на всех основных стриминговых платформах через единый интерфейс.</p>
                    <a href="#" class="service-link">Подробнее →</a>
                    <div class="service-overlay">
                        <p>Автоматическая дистрибуция на Spotify, Apple Music, YouTube Music и другие платформы.</p>
                        <a href="#" class="btn-service">Начать загрузку →</a>
                    </div>
                    <div class="service-3d-effect"></div>
                </li>
                <li class="service-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-icon">
                        <i class="fas fa-money-bill-wave"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <h3>Монетизация</h3>
                    <p>Получайте доход от стримов, продажи треков, мерча и эксклюзивного контента.</p>
                    <a href="#" class="service-link">Подробнее →</a>
                    <div class="service-overlay">
                        <p>Множество способов заработка: подписки, донаты, NFT, патронаж и многое другое.</p>
                        <a href="#" class="btn-service">Узнать больше →</a>
                    </div>
                    <div class="service-3d-effect"></div>
                </li>
                <li class="service-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-icon">
                        <i class="fas fa-chart-pie"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <h3>Аналитика</h3>
                    <p>Детальная статистика по прослушиваниям, демография аудитории и эффективность промо.</p>
                    <a href="#" class="service-link">Подробнее →</a>
                    <div class="service-overlay">
                        <p>Узнайте, где вас слушают, кто ваша аудитория и как увеличить доход.</p>
                        <a href="#" class="btn-service">Узнать больше →</a>
                    </div>
                    <div class="service-3d-effect"></div>
                </li>
                <li class="service-item" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <h3>Сообщество</h3>
                    <p>Общайтесь с фанатами, находите коллабораторов и продюсеров.</p>
                    <a href="#" class="service-link">Подробнее →</a>
                    <div class="service-overlay">
                        <p>Форумы, чаты, совместные проекты и живое общение с поклонниками.</p>
                        <a href="#" class="btn-service">Узнать больше →</a>
                    </div>
                    <div class="service-3d-effect"></div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Преимущества -->
    <section id="advantages" class="section dark-bg">
        <h2 class="section-title" data-aos="fade-up">Почему SoundBridge?</h2>
        <div class="advantages-content">
            <div class="advantage-item" data-aos="fade-up" data-aos-delay="100">
                <div class="advantage-icon">
                    <i class="fas fa-percentage"></i>
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>90% роялти</h3>
                <p>Артисты получают 90% доходов против 15-20% на других платформах.</p>
                <div class="advantage-overlay">
                    <p>Мы берем лишь 10% за использование платформы, остальное - ваше.</p>
                    <a href="#" class="btn-advantage">Калькулятор доходов →</a>
                </div>
                <div class="particles"></div>
            </div>
            <div class="advantage-item" data-aos="fade-up" data-aos-delay="200">
                <div class="advantage-icon">
                    <i class="fas fa-fingerprint"></i>
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Авторские права</h3>
                <p>Полный контроль над вашей музыкой и правами.</p>
                <div class="advantage-overlay">
                    <p>Вы сохраняете 100% прав на свою музыку и можете удалить ее в любой момент.</p>
                    <a href="#" class="btn-advantage">Подробнее о правах →</a>
                </div>
                <div class="particles"></div>
            </div>
            <div class="advantage-item" data-aos="fade-up" data-aos-delay="300">
                <div class="advantage-icon">
                    <i class="fas fa-bolt"></i>
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Мгновенные выплаты</h3>
                <p>Вывод средств в любой момент без минимального порога.</p>
                <div class="advantage-overlay">
                    <p>Получайте деньги на карту или криптокошелек когда вам удобно.</p>
                    <a href="#" class="btn-advantage">О выплатах →</a>
                </div>
                <div class="particles"></div>
            </div>
            <div class="advantage-item" data-aos="fade-up" data-aos-delay="400">
                <div class="advantage-icon">
                    <i class="fas fa-shield-alt"></i>
                    <div class="icon-hover-effect"></div>
                </div>
                <h3>Защита контента</h3>
                <p>Технология блокчейн для доказательства авторства.</p>
                <div class="advantage-overlay">
                    <p>Фиксация прав на музыку в блокчейне с возможностью проверки в любое время.</p>
                    <a href="#" class="btn-advantage">Как это работает →</a>
                </div>
                <div class="particles"></div>
            </div>
        </div>
    </section>

    <!-- Как это работает -->
    <section id="process" class="section dark-bg">
        <h2 class="section-title" data-aos="fade-up">Как начать?</h2>
        <div class="process-content">
            <div class="process-step" data-aos="fade-up" data-aos-delay="100">
                <div class="step-number">1</div>
                <div class="step-content">
                    <h3>Регистрация</h3>
                    <p>Создайте аккаунт артиста за 2 минуты - без сложных договоров.</p>
                </div>
                <div class="step-line"></div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="200">
                <div class="step-number">2</div>
                <div class="step-content">
                    <h3>Загрузка музыки</h3>
                    <p>Добавьте свои треки, обложки и метаданные.</p>
                </div>
                <div class="step-line"></div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="300">
                <div class="step-number">3</div>
                <div class="step-content">
                    <h3>Распространение</h3>
                    <p>Ваша музыка автоматически попадает на все платформы.</p>
                </div>
                <div class="step-line"></div>
            </div>
            <div class="process-step" data-aos="fade-up" data-aos-delay="400">
                <div class="step-number">4</div>
                <div class="step-content">
                    <h3>Монетизация</h3>
                    <p>Начинайте зарабатывать с первых прослушиваний.</p>
                </div>
                <div class="step-line"></div>
            </div>
        </div>
    </section>

    <!-- Популярные артисты -->
    <section id="artists" class="section dark-bg">
        <h2 class="section-title" data-aos="fade-up">Артисты на SoundBridge</h2>
        <div class="partners-content">
            <p class="partners-intro" data-aos="fade-up" data-aos-delay="100">Тысячи независимых музыкантов уже используют нашу платформу:</p>
            <div class="partners-grid">
                <div class="partner-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="partner-logo">
                        <img src="../images/case4.png" alt="Аватар артиста">
                        <div class="logo-hover-effect"></div>
                    </div>
                    <h3>Toxis</h3>
                    <p class="partner-description">Электронная музыка, 250k слушателей</p>
                    <div class="partner-overlay">
                        <p>"SoundBridge помог мне утроить доход от музыки за 3 месяца"</p>
                        <a href="#" class="btn-partner">Слушать →</a>
                    </div>
                    <div class="particles"></div>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="partner-logo">
                        <img src="../images/case2.png" alt="Аватар артиста">
                        <div class="logo-hover-effect"></div>
                    </div>
                    <h3>Три дня дождя</h3>
                    <p class="partner-description">Альтернативный рок, 1800k слушателей</p>
                    <div class="partner-overlay">
                        <p>"Наконец-то платформа, где артист на первом месте"</p>
                        <a href="#" class="btn-partner">Слушать →</a>
                    </div>
                    <div class="particles"></div>
                </div>
                <div class="partner-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="partner-logo">
                        <img src="../images/case3.png" alt="Аватар артиста">
                        <div class="logo-hover-effect"></div>
                    </div>
                    <h3>Soda LUV</h3>
                    <p class="partner-description">Реп, 950k слушателей</p>
                    <div class="partner-overlay">
                        <p>"Впервые за 5 лет я могу жить только на доход от музыки"</p>
                        <a href="#" class="btn-partner">Слушать →</a>
                    </div>
                    <div class="particles"></div>
                </div>
            </div>
            <div class="artists-cta" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="btn btn-gold">Стать артистом</a>
                <a href="#" class="btn btn-outline">Все артисты</a>
            </div>
        </div>
    </section>

    <!-- Контакты -->
    <section id="contacts" class="section dark-bg">
        <h2 class="section-title" data-aos="fade-up">Контакты</h2>
        <div class="contact-grid">
            <div class="contact-info">
                <div class="contact-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <div class="contact-details">
                        <h3>Адрес</h3>
                        <p>ул. Музыкальная, 7<br>Москва, Россия</p>
                    </div>
                </div>
                <div class="contact-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <div class="contact-details">
                        <h3>Поддержка артистов</h3>
                        <p>+7 (495) 123-45-67</p>
                    </div>
                </div>
                <div class="contact-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                        <div class="icon-hover-effect"></div>
                    </div>
                    <div class="contact-details">
                        <h3>Email</h3>
                        <p>artists@soundbridge.com</p>
                    </div>
                </div>
            </div>

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
        <h3 data-aos="fade-up">Есть вопросы?</h3>
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
                <select name="subject" required>
                    <option value="" disabled selected>Тема вопроса</option>
                    <option value="artist">Регистрация артиста</option>
                    <option value="technical">Техническая поддержка</option>
                    <option value="copyright">Авторские права</option>
                    <option value="other">Другое</option>
                </select>
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
</main>

<!-- Футер -->
<footer>
    <div class="footer-content">
        <div class="footer-logo">
            <a href="#" target="_blank">
                <img src="../images/logo.png" alt="SoundBridge">
            </a>
        </div>
        <p>2025 © SoundBridge<br>
        <span class="brand-slogan">Музыка без границ. Свобода без компромиссов.</span></p>
        <div class="social-links">
            <a href="https://www.instagram.com/soundbridge" class="social-link" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://t.me/soundbridge" class="social-link" target="_blank">
                <i class="fab fa-telegram-plane"></i>
            </a>
            <a href="https://www.youtube.com/soundbridge" class="social-link" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@soundbridge" class="social-link" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Подключение AOS JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- Инициализация AOS -->
<script>
    AOS.init({
        duration: 800,
        once: true,
    });
</script>
<!-- Подключение JavaScript -->
<script src="../js/script.js"></script>
</body>
</html>