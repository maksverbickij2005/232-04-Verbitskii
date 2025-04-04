<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель | Supreme Control</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div class="admin-container">
    <header class="admin-header">
        <div class="admin-greeting">
            <div class="title-wrapper">
                <h1 class="admin-title">Добро пожаловать в Имперский Центр, <span class="username"><?php echo htmlspecialchars($_SESSION['user']); ?></span>!</h1>
                <div class="title-underline">
                    <div class="underline-part" style="width: 30%; background: #800020;"></div>
                    <div class="underline-part" style="width: 40%; background: #D4AF37;"></div>
                    <div class="underline-part" style="width: 30%; background: #800020;"></div>
                </div>
            </div>
            
            <div class="admin-subtitle-wrapper">
                <p class="admin-subtitle">Верховный администратор королевства данных</p>
                <div class="subtitle-decoration">
                    <span class="decoration-star">✧</span>
                    <span class="decoration-line"></span>
                    <span class="decoration-star">✧</span>
                </div>
            </div>
            
            <div class="admin-meta">
                <div class="meta-item">
                    <svg class="meta-icon" viewBox="0 0 24 24">
                        <path fill="#D4AF37" d="M19,4H17V3H7V4H5V3H3V21H21V3H19V4M17,19H7V17H17V19M17,15H7V13H17V15M17,11H7V9H17V11M17,7H7V5H17V7Z"/>
                    </svg>
                    <span class="admin-date"><?php echo date('d F Y, H:i'); ?></span>
                </div>
                <div class="meta-item">
                    <svg class="meta-icon" viewBox="0 0 24 24">
                        <path fill="#D4AF37" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M10,17L5,12L6.41,10.58L10,14.17L17.59,6.58L19,8L10,17Z"/>
                    </svg>
                    <span class="admin-status">Статус: <span class="status-active">Активен</span></span>
                </div>
            </div>
        </div>
        
        <div class="admin-crest">
            <div class="crest-container">
                <svg viewBox="0 0 100 100" class="crest-icon">
                    <path d="M50 10 L60 40 L90 40 L65 60 L75 90 L50 70 L25 90 L35 60 L10 40 L40 40 Z" fill="#D4AF37"/>
                    <circle cx="50" cy="50" r="20" fill="#800020"/>
                    <text x="50" y="55" text-anchor="middle" fill="#D4AF37" font-size="20" font-weight="bold">A</text>
                </svg>
                <div class="crest-glow"></div>
            </div>
            <div class="crest-shadow"></div>
        </div>
    </header>
</div>>
        
<nav class="admin-nav">
    <ul>
        <li>
            <a href="users.php">
                <span class="nav-icon">👑</span>
                <span class="nav-content">
                    <span class="nav-title">Клиентская база</span>
                    <span class="nav-stats">+12 премиум клиентов за 24ч</span>
                    <span class="nav-alert">15 VIP ожидают верификации</span>
                </span>
            </a>
        </li>
        <li>
            <a href="content.php">
                <span class="nav-icon">💎</span>
                <span class="nav-content">
                    <span class="nav-title">Контент-аудит</span>
                    <span class="nav-stats">87% премиум контента</span>
                    <span class="nav-alert">3 материала на модерации</span>
                </span>
            </a>
        </li>
        <li>
            <a href="stats.php">
                <span class="nav-icon">📈</span>
                <span class="nav-content">
                    <span class="nav-title">Аналитика</span>
                    <span class="nav-stats">ROI 247% за квартал</span>
                    <span class="nav-alert">Тренд +1.2% к капитализации</span>
                </span>
            </a>
        </li>
        <li>
            <a href="transactions.php">
                <span class="nav-icon">💳</span>
                <span class="nav-content">
                    <span class="nav-title">Транзакции</span>
                    <span class="nav-stats">$284K оборот сегодня</span>
                    <span class="nav-alert">3 high-net-worth инвестора</span>
                </span>
            </a>
        </li>
        <li>
            <a href="settings.php">
                <span class="nav-icon">⚙️</span>
                <span class="nav-content">
                    <span class="nav-title">Системные настройки</span>
                    <span class="nav-stats">99.98% uptime</span>
                    <span class="nav-alert">Требуется SSL-ротация</span>
                </span>
            </a>
        </li>
        <li>
            <a href="logs.php">
                <span class="nav-icon">🔐</span>
                <span class="nav-content">
                    <span class="nav-title">Мониторинг</span>
                    <span class="nav-stats">0 инцидентов за сутки</span>
                    <span class="nav-alert">42 запроса на доступ</span>
                </span>
            </a>
        </li>
        <li class="nav-exit">
            <a href="../auth/logout.php">
                <span class="nav-icon">🚪</span>
                <span class="nav-content">
                    <span class="nav-title">Завершение сессии</span>
                    <span class="nav-stats">Active 2ч 14мин</span>
                    <span class="nav-alert">Несохраненные данные</span>
                </span>
            </a>
        </li>
    </ul>
</nav>
        
<main class="admin-main">
    <div class="featured-button-container">
        <button id="moneyRainButton" class="money-rain-button">
            <div class="button-content">
                <span class="button-text">АКТИВИРОВАТЬ ПРОТОКОЛ "ЗОЛОТОЙ ДОЖДЬ"</span>
                <span class="button-subtext">Инициировать массовую транзакцию всех активов пользователей</span>
            </div>
            <div class="button-badge">VIP ONLY</div>
            <div class="money-animation">
                <div class="money-particle">💰</div>
                <div class="money-particle">💵</div>
                <div class="money-particle">💎</div>
                <div class="money-particle">🏦</div>
            </div>
            <div class="button-overlay"></div>
        </button>
    </div>
</main>
            
            <div class="quick-stats">
    <div class="stat-card">
        <div class="stat-header">
            <h3>Клиентский портфель</h3>
            <span class="stat-trend up">+12.7%</span>
        </div>
        <p class="stat-value">1,337</p>
        <div class="stat-details">
            <span class="stat-change">↑ 24 новых</span>
            <span class="stat-period">за 24 часа</span>
        </div>
        <div class="stat-icon">👑</div>
    </div>
    
    <div class="stat-card">
        <div class="stat-header">
            <h3>Капитализация</h3>
            <span class="stat-trend up">+5.3%</span>
        </div>
        <p class="stat-value">$999,999</p>
        <div class="stat-details">
            <span class="stat-change">↑ $42,300</span>
            <span class="stat-period">MTD</span>
        </div>
        <div class="stat-icon">💎</div>
    </div>
    
    <div class="stat-card">
        <div class="stat-header">
            <h3>Активность</h3>
            <span class="stat-trend down">-3.2%</span>
        </div>
        <p class="stat-value">42</p>
        <div class="stat-details">
            <span class="stat-change">↓ 2 сессии</span>
            <span class="stat-period">peak: 58</span>
        </div>
        <div class="stat-icon">📈</div>
    </div>
</div>

    <script src="../js/admin.js"></script>
</body>
</html>