<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Startup Hub</title>
    <link rel="stylesheet" href="../css/startup_hub.css">
    <script src="https://cdn.jsdelivr.net/npm/three@0.132.2/build/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="../js/about-animations.js" defer></script>
</head>
<body>

    <!-- Шапка сайта -->
    <header>
        <div class="header-content">
            <div class="logo">
                <a href="../lk/startup_hub.php">
                    <img src="../images/logo.png" alt="Startup Hub Logo">
                </a>
            </div>
            <nav>
                <ul>
                    <li><a href="#" class="btn btn-profile glitch-button">Главная</a></li>  
                    <li><a href="#" id="blog-link" class="btn btn-profile">Блог</a></li>
                    <li><a href="../lk/welcome.php" class="btn btn-profile">Личный кабинет</a></li>
                </ul>
            </nav>
        </div>
    </header>

       <!-- Модальное окно на весь экран -->
  <div id="glitchModal" class="modal">
    <pre id="glitchCode"></pre> <!-- Бегущий код -->
    <p id="errorMessage" class="hidden">Технические неполадки. Обратитесь к амбассадору Blender для устранения проблемы. Пожалуйста, подождите, пока система перенаправит вас...</p>
  </div>

    <!-- Сценка обрушения рынка -->
    <div id="market-crash" class="modal">
        <div class="modal-content crash-content">
            <h2 class="crash-title">Обрушение рынка</h2>
            <p class="crash-text">В казино депай, если не умеешь просчитывать тактики и читать новости, дилетант</p>
            <div class="crash-animation"></div>
        </div>
    </div>
</div>
    
    <!-- Контейнер для видео -->
    <div id="video-container" style="display: none; margin-top: 20px;">
        <video id="blog-video" width="640" height="360" controls>
            <source src="../videos/your-video.MP4" type="video/MP4">
            Ваш браузер не поддерживает воспроизведение видео.
        </video>
    </div>
</div>

        <!-- О нас (About Us) -->
        <section class="about">
            <div class="about-container">
                <!-- 3D-сфера -->
                <div class="sphere-container">
                    <div class="sphere">
                        <span>Инновации</span>
                        <span>Инвестиции</span>
                        <span>Рост</span>
                        <span>Будущее</span>
                    </div>
                </div>

                <!-- Модальное окно -->
                <div class="modal" id="about-modal">
                    <!-- 3D Canvas для фона -->
                    <canvas id="3d-background"></canvas>

                    <!-- Контент модального окна -->
                    <div class="modal-content">
                        <span class="close-btn">&times;</span>
                        <h2>Полная биография сайта</h2>
                        <div class="scrollable-content">
                            <p>
                                Startup Hub был основан в 2020 году с целью создания экосистемы, где инновации встречаются с инвестициями. 
                                Наша платформа объединяет стартапы, инвесторов и экспертов, предоставляя инструменты для роста и развития. 
                                За эти годы мы помогли более 500 проектам привлечь финансирование и выйти на новые рынки.
                            </p>
                            <p>
                                Мы гордимся тем, что создали сообщество, где каждый может найти поддержку, знания и возможности. 
                                Наша команда состоит из профессионалов с многолетним опытом в области технологий, финансов и управления проектами.
                            </p>
                            <p>
                                Наша миссия — вдохновлять и поддерживать тех, кто стремится изменить мир к лучшему. 
                                Мы верим, что будущее создается сегодня, и мы здесь, чтобы помочь вам стать частью этого будущего.
                            </p>
                            <!-- Дополнительный текст для премиальности -->
                            <p>
                                В 2023 году мы запустили новую платформу, которая использует искусственный интеллект для анализа и прогнозирования успеха стартапов. 
                                Это позволяет нам предоставлять персонализированные рекомендации и стратегии для каждого проекта.
                            </p>
                            <p>
                                Наши партнеры включают ведущие венчурные фонды, технологические гиганты и международные организации. 
                                Мы активно участвуем в глобальных инициативах, направленных на поддержку инноваций и устойчивого развития.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Текст -->
                <div class="about-content">
                    <h2>Кто мы?</h2>
                    <p class="lead">Мы — не просто команда. Мы — <strong>визионеры</strong>, создающие будущее.</p>
                    <p>Наша миссия — построить экосистему, где идеи превращаются в реальность, а мечты — в успешные проекты. Мы объединяем стартапы, инвесторов и экспертов, чтобы создать пространство для роста, инноваций и вдохновения.</p>
                    <p>С 2020 года мы помогли более <strong>500 проектам</strong> привлечь финансирование и выйти на новый уровень. Наша платформа — это не просто инструмент, это <strong>сообщество</strong>, где каждый может найти поддержку, знания и возможности.</p>
                    <blockquote>
                        "Мы верим, что будущее создается сегодня. И мы здесь, чтобы помочь вам стать частью этого будущего."
                    </blockquote>
                    <a href="#" class="btn">Узнать больше о нас</a>
                </div>
            </div>
        </section>

        <!-- Секция "Популярные стартапы" -->
        <section class="featured-startups">
            <h2>Популярные стартапы</h2>
            <div class="startup-grid">
                <!-- Карточка стартапа 1 -->
                <div class="startup-card">
                    <div class="card-content">
                        <h3>EcoTech</h3>
                        <p>Решения для экологически чистого будущего. Мы разрабатываем инновационные технологии, которые помогают сократить углеродный след и улучшить качество жизни.</p>
                        <p>Привлечено: <span class="funding">$1,000,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>

                <!-- Карточка стартапа 2 -->
                <div class="startup-card">
                    <div class="card-content">
                        <h3>HealthAI</h3>
                        <p>Искусственный интеллект для здравоохранения. Наши алгоритмы помогают врачам ставить точные диагнозы и предлагать персонализированные методы лечения.</p>
                        <p>Привлечено: <span class="funding">$750,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>

                <!-- Карточка стартапа 3 -->
                <div class="startup-card">
                    <div class="card-content">
                        <h3>FinTech Solutions</h3>
                        <p>Инновационные решения для финансового сектора. Мы создаем платформы для безопасных и быстрых транзакций, а также инструменты для анализа рынка.</p>
                        <p>Привлечено: <span class="funding">$1,200,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>

                <!-- Дополнительные карточки -->
                <div class="startup-card">
                    <div class="card-content">
                        <h3>GreenEnergy</h3>
                        <p>Инновационные решения в области возобновляемой энергии. Мы разрабатываем солнечные панели и ветряные турбины нового поколения.</p>
                        <p>Привлечено: <span class="funding">$2,500,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>

                <div class="startup-card">
                    <div class="card-content">
                        <h3>EdTech Pro</h3>
                        <p>Образовательные технологии для будущего. Наши платформы помогают студентам и профессионалам осваивать новые навыки.</p>
                        <p>Привлечено: <span class="funding">$900,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>

                <div class="startup-card">
                    <div class="card-content">
                        <h3>SpaceXplore</h3>
                        <p>Исследование космоса с помощью передовых технологий. Мы разрабатываем спутники и ракеты для освоения новых горизонтов.</p>
                        <p>Привлечено: <span class="funding">$5,000,000</span></p>
                        <a href="#" class="btn" data-modal="premium-modal">Подробнее</a>
                    </div>
                    <div class="card-background"></div>
                </div>
            </div>
        </section>

        <!-- Модальное окно для премиум-доступа -->
        <div class="modal" id="premium-modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h2>Эксклюзивный доступ</h2>
                <p>
                    Информация о стартапах доступна только для <strong>премиум-клиентов</strong>. 
                    Премиум-доступ открывает уникальные возможности:
                </p>
                <ul>
                    <li>Полный доступ к деталям стартапов, включая финансовые показатели и стратегии.</li>
                    <li>Возможность инвестировать в проекты на ранних этапах.</li>
                    <li>Эксклюзивные аналитические отчеты и прогнозы.</li>
                    <li>Персональные консультации с экспертами.</li>
                </ul>
                <p>
                    Станьте частью эксклюзивного сообщества и получите доступ к лучшим возможностям для инвестиций и роста.
                </p>
                <a href="#" class="btn premium-btn" id="premium-btn">Стать премиум-клиентом</a>
            </div>
        </div>

        <!-- Новое модальное окно для сообщения -->
        <div class="modal" id="error-modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                <h2>Ошибка</h2>
                <p>У вас зарплата 30 тысяч, куда вы лезете? 😅</p>
                <p>Разводите огурцы на балконе — это более реалистично.</p>
            </div>
        </div>

        <!-- Секция "Инвестиционные решения" -->
        <section class="investment-solutions">
            <div class="premium-overlay"></div> <!-- Для создания эффекта глубины и премиальности -->
            <div class="container">
                <h2 class="animated-heading">Инвестируйте в будущее, которое вы создаете</h2>
                <p class="animated-text">Мы предлагаем эксклюзивные инвестиционные решения, которые помогут вашему капиталу расти с опережением времени. Наши инструменты и стратегии разработаны для тех, кто стремится к большему.</p>

                <!-- Премиальные карточки с анимацией -->
                <div class="premium-cards">
                    <div class="card">
                        <div class="card-icon">
                        </div>
                        <h3>Венчурные инвестиции</h3>
                        <p>Инвестируйте в стартапы с высоким потенциалом роста. Мы помогаем находить проекты, которые изменят мир.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                        </div>
                        <h3>Краудфандинг</h3>
                        <p>Станьте частью глобальных проектов, поддерживая инновации через платформы краудфандинга.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">
                        </div>
                        <h3>Акселерационные программы</h3>
                        <p>Ускорьте рост вашего бизнеса с помощью наших экспертных программ и ресурсов.</p>
                    </div>
                </div>

                <!-- Дополнительные разделы -->
                <div class="additional-sections">
                    <div class="section">
                        <h3>Эксклюзивные возможности</h3>
                        <p>Доступ к закрытым инвестиционным раундам и персональные консультации от ведущих экспертов.</p>
                    </div>
                    <div class="section">
                        <h3>Глобальная диверсификация</h3>
                        <p>Инвестируйте в проекты по всему миру, минимизируя риски и максимизируя доходность.</p>
                    </div>
                    <div class="section">
                        <h3>Технологии будущего</h3>
                        <p>Мы используем искусственный интеллект и блокчейн для анализа и управления вашими инвестициями.</p>
                    </div>
                </div>

                <!-- Кнопка с анимацией -->
                <a href="#" class="btn-premium-glowing">Начать инвестировать</a>
            </div>
        </section>

<!-- Модальное окно для загрузки и выбора куратора -->
<div class="modal" id="curator-modal">
    <div class="modal-content">
        <span class="close-btn">&times;</span>
        
        <!-- Загрузка -->
        <div class="loading-section">
            <div class="loading-spinner"></div>
            <p class="loading-text">Ищем подходящего куратора...</p>
        </div>

        <!-- Результат загрузки -->
        <div class="result-section" style="display: none;">
            <img src="..//images/tutor.jpg" class="curator-image">
            <p class="question-text">Вы уверены, что хотите доверить свои средства этому специалисту?</p>
            <div class="action-buttons">
                <button class="btn-yes">Да, я уверен</button>
                <button class="btn-no">Нет, спасибо</button>
            </div>
        </div>

        <!-- Финальный ответ -->
        <div class="final-response" style="display: none;">
            <p class="response-text">Мы так и думали. Спасибо за ваш выбор!</p>
            <button class="btn-close">Закрыть</button>
        </div>
    </div>
</div>

<!-- Как это работает? -->
<section class="how-it-works">
    <h2>Как это работает?</h2>
    <div class="steps">
        <!-- Шаг 1 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">1</span>
                <h3>Регистрация на платформе</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="1"></div>
                </div>
            </div>
            <div class="step-content" data-step="1">
                <p>Создайте аккаунт, чтобы получить доступ к эксклюзивным возможностям. Мы предлагаем персонализированный подход: выберите тип аккаунта (инвестор или предприниматель) и получите доступ к уникальным инструментам.</p>
            </div>
        </div>

        <!-- Шаг 2 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">2</span>
                <h3>Подача заявки на инвестиции</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="2"></div>
                </div>
            </div>
            <div class="step-content" data-step="2">
                <p>Используйте наш интеллектуальный поиск, чтобы найти проекты, соответствующие вашим интересам. Для предпринимателей: подайте заявку, и наш алгоритм автоматически подберет подходящих инвесторов.</p>
            </div>
        </div>

        <!-- Шаг 3 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">3</span>
                <h3>Оценка и одобрение проектов</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="3"></div>
                </div>
            </div>
            <div class="step-content" data-step="3">
                <p>Наши эксперты проводят глубокий анализ каждого проекта. Вы получите подробный отчет с рекомендациями и прогнозами. Мы используем AI для оценки рисков и потенциала.</p>
            </div>
        </div>

        <!-- Шаг 4 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">4</span>
                <h3>Инвестирование и поддержка</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="4"></div>
                </div>
            </div>
            <div class="step-content" data-step="4">
                <p>После одобрения проекта вы можете инвестировать в один клик. Мы предоставляем полную поддержку: от юридического сопровождения до регулярных отчетов о прогрессе.</p>
            </div>
        </div>

        <!-- Шаг 5 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">5</span>
                <h3>Мониторинг и аналитика</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="5"></div>
                </div>
            </div>
            <div class="step-content" data-step="5">
                <p>Следите за своими инвестициями в режиме реального времени. Наша платформа предоставляет детальную аналитику и прогнозы, основанные на данных.</p>
            </div>
        </div>

        <!-- Шаг 6 -->
        <div class="step">
            <div class="step-header">
                <span class="step-number">6</span>
                <h3>Эксклюзивные возможности</h3>
                <div class="step-graphic">
                    <div class="animated-circle" data-step="6"></div>
                </div>
            </div>
            <div class="step-content" data-step="6">
                <p>Получите доступ к закрытым мероприятиям, мастер-классам и нетворкингу с ведущими экспертами отрасли. Мы создаем экосистему для успеха.</p>
            </div>
        </div>
    </div>
</section>

        <!-- Отзывы (Testimonials) -->
<section class="testimonials">
    <h2>Отзывы наших клиентов</h2>
    <div class="testimonial-grid">
        <!-- Отзыв 1 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Startup Hub помог нам найти инвесторов и вывести наш проект на новый уровень. Профессиональный подход, глубокий анализ и поддержка на каждом этапе. Мы смогли привлечь $2 млн инвестиций благодаря этой платформе!"</p>
                <p class="author">— Иван Петров, основатель EcoTech</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>

        <!-- Отзыв 2 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Отличная платформа для поиска перспективных стартапов. Я инвестировал в 5 проектов, и все они показывают стабильный рост. Рекомендую всем, кто ищет качественные инвестиционные возможности."</p>
                <p class="author">— Анна Сидорова, инвестор</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>

        <!-- Отзыв 3 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Startup Hub is a game-changer! The platform helped us connect with top-tier investors and scale our business globally. The AI-driven matchmaking is incredibly accurate. Highly recommended!"</p>
                <p class="author">— John Smith, CEO of InnovateX</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>

        <!-- Отзыв 4 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Я в восторге от уровня сервиса! Платформа не только помогла найти инвесторов, но и предоставила доступ к эксклюзивным материалам и мероприятиям. Это настоящий must-have для стартапов."</p>
                <p class="author">— Мария Иванова, основатель HealthTech</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>

        <!-- Отзыв 5 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"The platform is intuitive and powerful. I've invested in 3 startups, and the returns are impressive. The analytics and insights provided are top-notch. A must for any serious investor."</p>
                <p class="author">— Emily Johnson, Venture Capitalist</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>

        <!-- Отзыв 6 -->
        <div class="testimonial-card">
            <div class="testimonial-content">
                <p>"Startup Hub предоставляет уникальные возможности для нетворкинга. Благодаря платформе я познакомился с ключевыми игроками рынка и нашел партнеров для своего проекта."</p>
                <p class="author">— Алексей Кузнецов, основатель FinTech</p>
            </div>
            <div class="testimonial-graphic">
            </div>
        </div>
    </div>
</section>

<!-- Блог -->
<section class="blog-premium">
    <div class="blog-header">
        <h2>Наш блог</h2>
        <p class="blog-subtitle">Экспертные материалы о стартапах, инвестициях и стратегиях роста. Погрузитесь в мир инноваций и финансовых решений, которые меняют будущее.</p>
    </div>
    <div class="blog-grid">
        <!-- Карточка 1 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Как привлечь инвестиции в стартап: полное руководство</h3>
                <p>Привлечение инвестиций — это искусство, требующее стратегии, подготовки и уверенности. В этой статье мы расскажем, как создать убедительный pitch deck, выбрать правильных инвесторов и избежать распространенных ошибок. Узнайте, как презентовать свой проект так, чтобы инвесторы не смогли отказать. Мы также разберем реальные кейсы успешных стартапов и поделимся советами от экспертов венчурного рынка.</p>
                <ul>
                    <li>Как составить бизнес-план, который впечатлит.</li>
                    <li>Топ-5 ошибок при поиске инвестиций.</li>
                    <li>Кейсы успешных презентаций.</li>
                    <li>Как подготовиться к встрече с инвестором.</li>
                    <li>Секреты переговоров с венчурными фондами.</li>
                </ul>
            </div>
        </div>

        <!-- Карточка 2 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Тренды венчурных инвестиций в 2023 году: что нужно знать</h3>
                <p>2023 год принес новые вызовы и возможности для стартапов и инвесторов. В этом материале мы анализируем ключевые тренды, включая рост интереса к AI, устойчивым технологиям и биотехнологиям. Узнайте, какие отрасли привлекают больше всего капитала и как адаптировать свою стратегию под текущие рыночные условия. Мы также поделимся прогнозами на 2024 год и расскажем, как использовать эти данные для развития вашего бизнеса.</p>
                <ul>
                    <li>Топ-5 перспективных отраслей.</li>
                    <li>Как изменились ожидания инвесторов.</li>
                    <li>Прогнозы на 2024 год.</li>
                    <li>Роль искусственного интеллекта в инвестициях.</li>
                    <li>Устойчивость как ключевой фактор успеха.</li>
                </ul>
            </div>
        </div>

        <!-- Карточка 3 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Как выбрать правильного инвестора: советы от экспертов</h3>
                <p>Не все инвесторы одинаково полезны. В этой статье мы расскажем, как найти партнера, который не только предоставит финансирование, но и привнесет ценный опыт, связи и стратегическое видение. Узнайте, на что обращать внимание при выборе инвестора и как избежать токсичных отношений. Мы также разберем истории успешных партнерств и поделимся советами от основателей крупных компаний.</p>
                <ul>
                    <li>Критерии выбора инвестора.</li>
                    <li>Как проверить репутацию инвестора.</li>
                    <li>Истории успешных партнерств.</li>
                    <li>Как избежать конфликтов интересов.</li>
                    <li>Роль инвестора в долгосрочном развитии.</li>
                </ul>
            </div>
        </div>

        <!-- Карточка 4 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Кейсы успешных стартапов: уроки для будущих лидеров</h3>
                <p>Истории успеха — это не только вдохновение, но и ценные уроки. В этой статье мы разбираем кейсы стартапов, которые смогли привлечь миллионы инвестиций и выйти на международные рынки. Узнайте, какие стратегии они использовали и как преодолевали трудности. Мы также поговорим о стартапах, которые провалились, и выделим ключевые ошибки, которых следует избегать.</p>
                <ul>
                    <li>Как Airbnb и Uber стали гигантами.</li>
                    <li>Уроки от стартапов, которые провалились.</li>
                    <li>Советы от основателей успешных компаний.</li>
                    <li>Как масштабировать бизнес за границу.</li>
                    <li>Роль команды в успехе стартапа.</li>
                </ul>
            </div>
        </div>

        <!-- Карточка 5 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Стратегии выхода на международный рынок</h3>
                <p>Выход на международный рынок — это сложный, но важный шаг для любого стартапа. В этой статье мы разберем ключевые стратегии, которые помогут вам успешно масштабироваться за пределы своей страны. Узнайте, как адаптировать продукт под локальные рынки, находить надежных партнеров и минимизировать риски. Мы также поделимся историями стартапов, которые успешно вышли на глобальную арену.</p>
                <ul>
                    <li>Анализ целевых рынков и их особенностей.</li>
                    <li>Локализация продукта и маркетинга.</li>
                    <li>Поиск надежных партнеров за рубежом.</li>
                    <li>Правовые и налоговые аспекты международной экспансии.</li>
                    <li>Как избежать культурных барьеров.</li>
                </ul>
            </div>
        </div>

        <!-- Карточка 6 -->
        <div class="blog-card">
            <div class="card-background"></div>
            <div class="blog-card-content">
                <h3>Как построить устойчивый бизнес в эпоху неопределенности</h3>
                <p>В современном мире устойчивость бизнеса становится ключевым фактором успеха. В этой статье мы расскажем, как строить компанию, которая сможет противостоять экономическим колебаниям, изменениям рынка и другим вызовам. Узнайте, как внедрять принципы устойчивого развития, формировать сильную команду и адаптироваться к новым условиям. Мы также разберем примеры компаний, которые успешно справились с кризисами.</p>
                <ul>
                    <li>Принципы устойчивого развития.</li>
                    <li>Как формировать устойчивую команду.</li>
                    <li>Адаптация к изменяющимся рыночным условиям.</li>
                    <li>Роль инноваций в устойчивости бизнеса.</li>
                    <li>Как избежать типичных ошибок в кризис.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

        <!-- Спонсоры (Sponsors) -->
        <section class="sponsors-premium">
        <div class="sponsors-header">
        <h2>Наши спонсоры</h2>
        <p class="sponsors-subtitle">Мы гордимся поддержкой ведущих мировых компаний, которые разделяют наши ценности и стремятся к инновациям и развитию.</p>
    </div>
    <div class="sponsor-logos">
        <!-- Goldman Sachs -->
        <div class="sponsor-card">
            <div class="sponsor-card-content">
                <h3>Goldman Sachs</h3>
                <p>Goldman Sachs — один из крупнейших инвестиционных банков мира. Они решили поддержать наш проект благодаря нашему фокусу на устойчивое развитие и инновации. Их опыт в финансовых рынках помогает нам создавать долгосрочные стратегии для наших клиентов.</p>
            </div>
            <div class="sponsor-card-animation">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="url(#gradient)" stroke-width="5"></circle>
                </svg>
            </div>
        </div>

        <!-- J.P. Morgan -->
        <div class="sponsor-card">
            <div class="sponsor-card-content">
                <h3>J.P. Morgan</h3>
                <p>J.P. Morgan — глобальный лидер в сфере финансов и инвестиций. Их поддержка направлена на развитие технологий, которые меняют будущее. Мы сотрудничаем с ними для внедрения передовых решений в области цифровой трансформации.</p>
            </div>
            <div class="sponsor-card-animation">
                    <rect x="10" y="70" width="20" height="30" fill="url(#gradient)"></rect>
                    <rect x="40" y="50" width="20" height="50" fill="url(#gradient)"></rect>
                    <rect x="70" y="30" width="20" height="70" fill="url(#gradient)"></rect>
                </svg>
            </div>
        </div>

        <!-- Morgan Stanley -->
        <div class="sponsor-card">
            <div class="sponsor-card-content">
                <h3>Morgan Stanley</h3>
                <p>Morgan Stanley — признанный эксперт в управлении капиталом. Они выбрали нас за нашу приверженность к качеству и инновациям. Вместе мы создаем решения, которые помогают стартапам масштабироваться и процветать.</p>
            </div>
            <div class="sponsor-card-animation">
                    <polyline points="10,90 40,60 70,30" fill="none" stroke="url(#gradient)" stroke-width="5"></polyline>
                </svg>
            </div>
        </div>

        <!-- BlackRock -->
        <div class="sponsor-card">
            <div class="sponsor-card-content">
                <h3>BlackRock</h3>
                <p>BlackRock — крупнейший в мире инвестиционный менеджер. Их участие в нашем проекте обусловлено стремлением поддерживать устойчивые инициативы, которые способствуют росту экономики. Мы вместе работаем над тем, чтобы сделать финансы более доступными для всех.</p>
            </div>
            <div class="sponsor-card-animation">
                    <circle cx="20" cy="20" r="10" fill="url(#gradient)"></circle>
                    <circle cx="80" cy="20" r="10" fill="url(#gradient)"></circle>
                    <circle cx="50" cy="80" r="10" fill="url(#gradient)"></circle>
                    <line x1="20" y1="20" x2="50" y2="80" stroke="url(#gradient)" stroke-width="5"></line>
                    <line x1="80" y1="20" x2="50" y2="80" stroke="url(#gradient)" stroke-width="5"></line>
                </svg>
            </div>
        </div>

        <!-- Sequoia Capital -->
        <div class="sponsor-card">
            <div class="sponsor-card-content">
                <h3>Sequoia Capital</h3>
                <p>Sequoia Capital — легендарная венчурная компания, которая поддержала таких гигантов, как Apple, Google и Airbnb. Их выбор в пользу нашего проекта объясняется нашей уникальной экосистемой для стартапов и инновационным подходом к решению глобальных проблем.</p>
            </div>
            <div class="sponsor-card-animation">
                </svg>
            </div>
        </div>
    </div>
</section>

       <!-- FAQ (Часто задаваемые вопросы) -->
<section class="faq">
    <h2>Часто задаваемые вопросы</h2>
    <div class="faq-list">
        <div class="faq-item">
            <h3>Как происходит due diligence стартапа перед инвестированием?</h3>
            <p>Due diligence включает комплексную проверку финансовой, юридической и операционной деятельности стартапа. Мы анализируем бизнес-модель, рыночные перспективы, команду, риски и прогнозируемые показатели. По результатам формируется отчет с рекомендациями.</p>
        </div>
        <div class="faq-item">
            <h3>Что такое pre-money и post-money оценка компании?</h3>
            <p>Pre-money оценка — это стоимость компании до привлечения инвестиций. Post-money оценка учитывает сумму инвестиций: она равна pre-money оценке плюс объем привлеченных средств. Например, если pre-money оценка составляет $10 млн, а инвестиции составляют $2 млн, то post-money оценка будет $12 млн.</p>
        </div>
        <div class="faq-item">
            <h3>Как рассчитывается IRR проекта?</h3>
            <p>IRR (Internal Rate of Return) — это внутренняя норма доходности, которая показывает годовую процентную ставку, при которой чистая приведенная стоимость (NPV) всех денежных потоков равна нулю. Мы используем сложные финансовые модели для расчета IRR на основе прогнозируемых доходов и расходов проекта.</p>
        </div>
        <div class="faq-item">
            <h3>Что такое SAFE-инструмент и как он работает?</h3>
            <p>SAFE (Simple Agreement for Future Equity) — это договор, который позволяет инвесторам получить долю в компании в будущем при следующем раунде финансирования. SAFE не предполагает немедленного выпуска акций, что делает его удобным для ранних стадий инвестирования.</p>
        </div>
        <div class="faq-item">
            <h3>Какие этапы финансирования стартапа существуют?</h3>
            <p>Этапы финансирования включают: Pre-seed (начальная стадия), Seed (посевной раунд), Series A, B, C (последующие раунды), а также IPO или выход через M&A (слияние и поглощение). Каждый этап характеризуется разной суммой инвестиций и целями развития.</p>
        </div>
        <div class="faq-item">
            <h3>Что такое burn rate и почему он важен для инвестора?</h3>
            <p>Burn rate — это скорость, с которой компания тратит свои денежные средства до достижения безубыточности. Он важен для оценки финансовой устойчивости стартапа и планирования времени до следующего раунда финансирования. Высокий burn rate может указывать на риски.</p>
        </div>
        <div class="faq-item">
            <h3>Как рассчитывается equity split между основателями и инвесторами?</h3>
            <p>Equity split определяется на основе оценки компании, объема инвестиций и соглашений между сторонами. Обычно инвесторы получают меньшую долю на ранних этапах, но их доля может увеличиваться при последующих раундах финансирования через механизмы dilution (разбавления).</p>
        </div>
        <div class="faq-item">
            <h3>Что такое pro-rata право и зачем оно нужно?</h3>
            <p>Pro-rata право позволяет инвесторам сохранить свою долю в компании при последующих раундах финансирования. Это важно для защиты их интересов и предотвращения разбавления доли. Например, если инвестор владеет 10% компании, он может участвовать в новом раунде, чтобы сохранить эту долю.</p>
        </div>
        <div class="faq-item">
            <h3>Какие риски связаны с инвестированием в early-stage стартапы?</h3>
            <p>Основные риски включают высокую вероятность провала проекта, непредсказуемость рынка, недостаточную компетентность команды, технологические сложности и конкуренцию. Инвесторы должны быть готовы к долгосрочным вложениям и возможным потерям капитала.</p>
        </div>
</section>

<!-- Контакты (Contact Us) -->
<section class="contact">
    <h2>Свяжитесь с нами</h2>
    <div class="contact-container">
        <!-- Блок с контактной информацией -->
        <div class="contact-info">
            <h3>Наши контакты</h3>
            <p><strong>Email:</strong> <a href="mailto:info@example.com" class="link">info@example.com</a></p>
            <p><strong>Телефон:</strong> <a href="tel:+71234567890" class="link">+7 (123) 456-78-90</a></p>
            <p><strong>Адрес:</strong><br>ул. Примерная, 123<br>Москва, Россия, 123456</p>
            <div class="social-links">
                <a href="#" class="social-link"><i class="fab fa-telegram"></i></a>
                <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="working-hours">
                <h4>Часы работы</h4>
                <p>Пн–Пт: 9:00–18:00<br>Сб–Вс: выходной</p>
            </div>
        </div>

        <!-- Форма обратной связи -->
        <form class="contact-form">
            <h3>Напишите нам</h3>
            <div class="form-group">
                <input type="text" placeholder="Ваше имя" required>
                <input type="email" placeholder="Ваш email" required>
            </div>
            <input type="text" placeholder="Тема сообщения" required>
            <textarea placeholder="Ваше сообщение" rows="5" required></textarea>
            <button type="submit" class="btn">Отправить</button>
        </form>
    </div>
</section>

        <!-- Подписка (Newsletter) -->
<section class="newsletter">
    <div class="newsletter-container">
        <h2>Подпишитесь на нашу рассылку</h2>
        <p>Будьте в курсе последних новостей, эксклюзивных предложений и аналитики рынка стартапов.</p>
        <form class="newsletter-form">
            <div class="input-group">
                <input type="email" placeholder="Введите ваш email" required>
                <button type="submit" class="btn">Подписаться</button>
            </div>
            <div class="privacy-note">
                <p>Мы гарантируем конфиденциальность ваших данных. Вы можете отписаться в любой момент.</p>
            </div>
        </form>
    </div>
</section>

<!-- Нас рекомендуют  -->
<section class="social-proof">
    <h2>Нас рекомендуют</h2>
    <div class="social-proof-grid">
        <!-- Блок с цифрами и иконками -->
        <div class="proof-item animated-item">
            <div class="icon-container">
                <i class="fas fa-users"></i>
            </div>
            <p><strong>10,000+</strong> активных пользователей</p>
            <span>Присоединяйтесь к нашей растущей экосистеме.</span>
        </div>
        <div class="proof-item animated-item">
            <div class="icon-container">
                <i class="fas fa-chart-line"></i>
            </div>
            <p><strong>500+</strong> успешных проектов</p>
            <span>Инвестиции, которые меняют будущее.</span>
        </div>
        <div class="proof-item animated-item">
            <div class="icon-container">
                <i class="fas fa-handshake"></i>
            </div>
            <p><strong>100+</strong> довольных инвесторов</p>
            <span>Наши партнеры доверяют нам свои средства.</span>
        </div>
        <div class="proof-item animated-item">
            <div class="icon-container">
                <i class="fas fa-award"></i>
            </div>
            <p><strong>10+</strong> престижных наград</p>
            <span>Признание ведущих экспертов отрасли.</span>
        </div>
        <div class="proof-item animated-item">
            <div class="icon-container">
                <i class="fas fa-globe"></i>
            </div>
            <p><strong>30+</strong> стран охвата</p>
            <span>Глобальное влияние и международное сотрудничество.</span>
        </div>
    </div>

   <!-- Блок с рецензиями и примерами -->
<div class="reviews-section">
    <h3>Что говорят о нас ведущие издания:</h3>
    <div class="reviews-grid">
        <div class="review-item">
            <h4>Forbes</h4>
            <p>"Один из самых инновационных проектов в сфере инвестиций. Компания демонстрирует уникальный подход к управлению активами, сочетая передовые технологии и глубокую аналитику."</p>
            <p class="review-details">— Статья от 15 марта 2024 года</p>
        </div>
        <div class="review-item">
            <h4>Bloomberg</h4>
            <p>"Глобальное влияние и стабильный рост. Компания продолжает удивлять рынок своими стратегиями, которые обеспечивают высокую доходность даже в условиях нестабильной экономики."</p>
            <p class="review-details">— Репортаж от 10 апреля 2023 года</p>
        </div>
        <div class="review-item">
            <h4>TechCrunch</h4>
            <p>"Технологии, которые меняют правила игры. Инновационные решения компании уже сегодня задают новые стандарты в индустрии, обеспечивая прозрачность и эффективность инвестиций."</p>
            <p class="review-details">— Интервью с CEO, май 2024 года</p>
        </div>
    </div>
</div>

 <!-- Блок с примерами успешных проектов -->
<div class="projects-section">
    <h3>Примеры успешных проектов:</h3>
    <div class="projects-grid">
        <div class="project-item">
            <h4>Проект "Green Energy"</h4>
            <p>Инвестиции в возобновляемые источники энергии. За последние 3 года проект обеспечил:</p>
            <ul>
                <li>Строительство 5 солнечных электростанций мощностью 100 МВт.</li>
                <li>Сокращение выбросов CO2 на 250 000 тонн в год.</li>
                <li>Рост доходности для инвесторов на 18% ежегодно.</li>
            </ul>
            <p class="project-details">— Реализовано в партнерстве с ведущими энергетическими компаниями Европы.</p>
        </div>
        <div class="project-item">
            <h4>Проект "Smart Cities"</h4>
            <p>Развитие умных городов будущего. Ключевые достижения:</p>
            <ul>
                <li>Внедрение IoT-решений в 10 крупных городах.</li>
                <li>Снижение энергопотребления на 30% в пилотных зонах.</li>
                <li>Улучшение качества жизни для 2 млн человек.</li>
            </ul>
            <p class="project-details">— Проект отмечен наградами за инновации в урбанистике.</p>
        </div>
        <div class="project-item">
            <h4>Проект "HealthTech"</h4>
            <p>Инновации в медицине. Основные результаты:</p>
            <ul>
                <li>Запуск 15 стартапов в области цифровой медицины.</li>
                <li>Увеличение доступности медицинских услуг на 40%.</li>
                <li>Привлечение $50 млн инвестиций в разработку новых технологий.</li>
            </ul>
            <p class="project-details">— Партнерство с ведущими исследовательскими институтами.</p>
        </div>
    </div>
</div>

<!-- Акции (Promotions) -->
<section class="promotions">
    <h2>Специальные акции</h2>
    <div class="promotion-grid">
        <div class="promotion-card">
            <div class="promotion-header">
                <h3>Скидка на регистрацию</h3>
                <span class="promotion-badge">-20%</span>
            </div>
            <p>Зарегистрируйтесь сейчас и получите скидку 20% на первые 3 месяца обслуживания. Идеально для новых клиентов, которые хотят начать с выгодных условий.</p>
            <ul class="promotion-details">
                <li>Доступ ко всем функциям платформы.</li>
                <li>Персональный менеджер для поддержки.</li>
                <li>Бесплатная консультация по инвестициям.</li>
            </ul>
            <a href="#" class="btn learn-more-btn">Узнать больше</a> <!-- Используем класс вместо ID -->
            <p class="promotion-note">Акция действует до 31 декабря 2026 года.</p>
        </div>
        <div class="promotion-card">
            <div class="promotion-header">
                <h3>Реферальная программа</h3>
                <span class="promotion-badge">+10%</span>
            </div>
            <p>Пригласите друзей и получите бонус 10% от их первых инвестиций. Чем больше вы рекомендуете, тем больше зарабатываете.</p>
            <ul class="promotion-details">
                <li>Без ограничений по количеству приглашенных.</li>
                <li>Мгновенные выплаты на ваш счет.</li>
                <li>Доступно для всех пользователей.</li>
            </ul>
            <a href="#" class="btn learn-more-btn">Узнать больше</a> <!-- Используем класс вместо ID -->
            <p class="promotion-note">Программа действует бессрочно.</p>
        </div>
        <div class="promotion-card">
            <div class="promotion-header">
                <h3>Бесплатный пробный период</h3>
                <span class="promotion-badge">30 дней</span>
            </div>
            <p>Попробуйте наши услуги бесплатно в течение 30 дней. Полный доступ ко всем инструментам и функциям без обязательств.</p>
            <ul class="promotion-details">
                <li>Без скрытых платежей.</li>
                <li>Возможность отменить в любой момент.</li>
                <li>Поддержка 24/7.</li>
            </ul>
            <a href="#" class="btn learn-more-btn">Начать пробный период</a> <!-- Используем класс вместо ID -->
            <p class="promotion-note">Только для новых пользователей.</p>
        </div>
    </div>
</section>

<!-- Модальное окно -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Куда идут ваши вложения?</h2>
        <p>
            Все средства, которые вы вкладываете через нашу платформу, направляются на поддержку нашего главного IT-специалиста. А если точнее, они идут на закупку шоколадных конфет, которые помогают ему оставаться в тонусе и придумывать чистый, оптимизированный код.
        </p>
        <p>
            Шоколадные конфеты — это не просто сладость, а важный элемент его рабочего процесса. Они помогают ему быстрее дебажить код, оптимизировать алгоритмы и находить решения для сложных задач. В последнее время, правда, он начал экспериментировать с другими источниками вдохновения, такими как кофейные напитки и печенье с предсказуемым исходом (cookie), но шоколад остается его главным топливом.
        </p>
        <p>
            Ваши вложения помогают ему не только поддерживать высокий уровень продуктивности, но и внедрять инновации, такие как машинное обучение на основе шоколадных предпочтений (Chocolate-Based ML) и автоматизацию процессов с помощью конфетных API (Candy API).
        </p>
        <p>
            Так что, инвестируя в нашу платформу, вы не только получаете выгоду, но и вносите вклад в развитие технологий и повышение уровня счастья нашего главного кодера.
        </p>
        <p>Спасибо за вашу поддержку! 🍫</p>

        <!-- Раздел оплаты -->
        <div class="payment-section">
            <h3>Оплатить</h3>
            <p>Выберите сумму для оплаты:</p>
            <div class="payment-amounts">
                <!-- Суммы будут добавлены через JavaScript -->
            </div>
            <button id="pay-button" class="btn">Оплатить</button>
        </div>

        <!-- Сообщение об успешной оплате -->
        <div id="success-message" class="success-message">
            <p>✅ Оплата прошла успешно! Спасибо за вашу поддержку!</p>
        </div>
    </div>
</div>

<!-- Сообщество (Community) -->
<section class="community">
    <div class="community-container">
        <h2>Присоединяйтесь к нашему сообществу</h2>
        <p>Общайтесь с другими предпринимателями и инвесторами, делитесь опытом и находите новые возможности для роста.</p>
        <a href="#" class="btn" id="join-community-btn">Присоединиться</a>
    </div>
</section>

<!-- Модальное окно с соглашением -->
<div id="agreement-modal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Соглашение о добровольном обнищании благодаря нашим советам</h2>
        <div class="agreement-text">
            <p>
                Мы, нижеподписавшиеся, в здравом уме и трезвой памяти (ну или почти), настоящим документом подтверждаем, что полностью осознаем последствия следования советам, рекомендациям и гениальным (или не очень) идеям, предоставленным нам командой <strong>«[Название вашей компании/проекта]»</strong>.
            </p>
            <p>
                Мы понимаем, что:
            </p>
            <ol>
                <li>Наши финансовые решения, принятые под влиянием ваших советов, могут привести к тому, что наш кошелек станет легче, чем перо страуса в ураган.</li>
                <li>Мы можем внезапно обнаружить, что наш банковский счет выглядит так, будто его посетил финансовый вампир и высосал все до последней копейки.</li>
                <li>Наши инвестиции могут превратиться в пыль, а мечты о богатстве — в воспоминания о том, как мы когда-то были не такими бедными.</li>
            </ol>
            <p>
                Несмотря на это, мы добровольно и с радостью (или с легкой дрожью в коленях) отказываемся от любых претензий, исков, жалоб и попыток вернуть что-либо в адрес <strong>«[Название вашей компании/проекта]»</strong>. Мы понимаем, что:
            </p>
            <ul>
                <li>Ваши советы давались с благими намерениями (ну, мы надеемся).</li>
                <li>Мы сами выбрали следовать этим советам, даже если они звучали как «вложи все в акции компании, которая производит воздух».</li>
                <li>Мы сами не удосужились проконсультироваться с финансовым консультантом, магическим шаром или хотя бы с котом, который, как известно, всегда знает больше.</li>
            </ul>
            <p>
                Мы также соглашаемся с тем, что:
            </p>
            <ul>
                <li>Если наши инвестиции превратятся в пыль, мы не будем винить вас, а просто начнем копить на метлу, чтобы подметать остатки нашего богатства.</li>
                <li>Если наш банковский счет опустеет, мы не будем требовать компенсации, а просто начнем есть доширак и мечтать о лучших временах.</li>
                <li>Если наши друзья и родственники начнут смеяться над нашими финансовыми решениями, мы не будем винить вас, а просто скажем, что это был «эксперимент».</li>
            </ul>
            <p>
                Настоящим мы подтверждаем, что полностью освобождаем <strong>«[Название вашей компании/проекта]»</strong> от любой ответственности за:
            </p>
            <ul>
                <li>Потерю денег, имущества, здравого смысла и веры в человечество.</li>
                <li>Любые эмоциональные потрясения, вызванные осознанием того, что мы теперь беднее, чем церковная мышь.</li>
                <li>Любые попытки продать наши вещи на eBay, чтобы оплатить счет за интернет, который мы использовали для получения ваших советов.</li>
            </ul>
            <p>
                Мы также соглашаемся с тем, что если вдруг (по чистой случайности) наши финансовые дела пойдут в гору, мы не забудем упомянуть вас в своих мемуарах, но только если они когда-нибудь будут написаны.
            </p>
            <p>
                Настоящее соглашение вступает в силу с момента его подписания и действует до тех пор, пока мы не разбогатеем (что, судя по всему, произойдет не скоро).
            </p>
        </div>
   
        <!-- Поля для подписи и даты -->
<div class="signature-premium">
    <h3 class="animated-heading">Подтвердите соглашение</h3>
    <div class="form-container">
        <div class="form-group">
            <label for="signature" class="animated-text">Подписано:</label>
            <input type="text" id="signature" placeholder="Ваше имя" required />
        </div>
        <div class="form-group">
            <label for="date" class="animated-text">Дата:</label>
            <input type="date" id="date" required />
        </div>
    </div>
    <!-- Кнопка подтверждения -->
    <button id="confirm-agreement-btn" class="btn-golden">Подтвердить</button>
</div>

<!-- Футер -->
<footer>
    <div class="footer-container">
        <p>&copy; 2025 © Quantum Leap Project. Все права защищены.</p>
        <div class="footer-links">
            <a href="#">Политика конфиденциальности</a>
            <a href="#">Условия использования</a>
        </div>
    </div>
</footer>

    <!-- Скрипт для загрузки -->
    <script>
        setTimeout(() => {
            document.querySelector('.loading-screen').style.display = 'none';
            document.querySelector('.main-content').style.display = 'block';
        }, 1000); // 5 секунд
    </script>
</body>
</html>