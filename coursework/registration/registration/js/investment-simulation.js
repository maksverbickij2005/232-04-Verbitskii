document.addEventListener('DOMContentLoaded', function () {
    // Инициализация элементов управления
    const virtualCapitalSelect = document.getElementById('virtualCapital');
    const customCapitalInput = document.getElementById('customCapital');
    const startSimulationBtn = document.getElementById('startSimulation');
    const simulationDashboard = document.querySelector('.simulation-dashboard');
    const simulationAnalytics = document.querySelector('.simulation-analytics');

    // Обработчик изменения выбора капитала
    virtualCapitalSelect.addEventListener('change', function () {
        if (this.value === 'custom') {
            customCapitalInput.style.display = 'block';
            customCapitalInput.focus();
        } else {
            customCapitalInput.style.display = 'none';
        }
    });

    // Запуск симуляции
    startSimulationBtn.addEventListener('click', function () {
        const capital = virtualCapitalSelect.value === 'custom'
            ? customCapitalInput.value
            : virtualCapitalSelect.value;

        if (!capital || (virtualCapitalSelect.value === 'custom' && capital < 1000)) {
            alert('Пожалуйста, введите сумму не менее $1,000');
            return;
        }

        // Обновляем отображаемый капитал
        document.getElementById('portfolioValue').textContent = formatCurrency(capital);
        document.getElementById('availableCash').textContent = formatCurrency(capital);

        // Показываем панель симуляции
        simulationDashboard.style.display = 'block';
        startSimulationBtn.disabled = true;

        // Инициализируем графики
        initializeCharts();
    });

    // Завершение симуляции
    document.getElementById('endSimulation')?.addEventListener('click', function () {
        simulationDashboard.style.display = 'none';
        simulationAnalytics.style.display = 'block';

        // Здесь можно добавить расчет результатов
        calculateResults();
    });

    // Новая симуляция
    document.getElementById('newSimulation')?.addEventListener('click', function () {
        simulationAnalytics.style.display = 'none';
        startSimulationBtn.disabled = false;
    });

    // Вспомогательная функция для форматирования валюты
    function formatCurrency(amount) {
        return '$' + parseFloat(amount).toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    }

    // Инициализация графиков
    function initializeCharts() {
        // Основной график портфеля
        const portfolioCtx = document.getElementById('portfolioPerformanceChart').getContext('2d');
        new Chart(portfolioCtx, {
            type: 'line',
            data: {
                labels: Array.from({ length: 30 }, (_, i) => `День ${i + 1}`),
                datasets: [{
                    label: 'Ваш портфель',
                    data: generateRealisticData(30, 10000, 0.05),
                    borderColor: '#3b82f6',
                    backgroundColor: 'rgba(59, 130, 246, 0.1)',
                    tension: 0.1,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    }
                },
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });

        // Мини-графики для активов
        initializeMiniCharts();
    }

    // Функция для генерации реалистичных данных
    function generateRealisticData(length, initialValue, volatility) {
        let data = [initialValue];
        for (let i = 1; i < length; i++) {
            const randomChange = (Math.random() * 2 - 1) * volatility; // Случайное изменение
            const newValue = data[i - 1] * (1 + randomChange);
            data.push(newValue);
        }
        return data;
    }

    // Инициализация мини-графиков
    function initializeMiniCharts() {
        const assets = ['aapl', 'tsla', 'googl', 'amzn', 'nvda', 'msft', 'meta', 'nflx', 'adbe', 'jpm', 'xom', 'pfe', 'dis', 'v', 'nke', 'pg'];

        assets.forEach(asset => {
            const ctx = document.getElementById(`${asset}MiniChart`).getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: Array.from({ length: 7 }, (_, i) => i + 1),
                    datasets: [{
                        data: generateRealisticData(7, 100 + Math.random() * 50, 0.02),
                        borderColor: getRandomColor(),
                        borderWidth: 1,
                        pointRadius: 0,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        x: { display: false },
                        y: { display: false }
                    }
                }
            });
        });
    }

    // Функция для генерации случайного цвета
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }

    // Расчет результатов симуляции
    function calculateResults() {
        // Здесь можно добавить реальные расчеты на основе действий пользователя
        const finalReturn = (Math.random() * 20 - 5).toFixed(2);
        const finalValue = (10000 * (1 + finalReturn / 100)).toFixed(2);

        document.getElementById('finalReturn').textContent = `${finalReturn > 0 ? '+' : ''}${finalReturn}%`;
        document.getElementById('finalReturn').className = `value ${finalReturn > 0 ? 'positive' : 'negative'}`;

        // Инициализация круговой диаграммы распределения
        const allocationCtx = document.getElementById('portfolioAllocationChart').getContext('2d');
        new Chart(allocationCtx, {
            type: 'doughnut',
            data: {
                labels: ['Технологии', 'Финансы', 'Здравоохранение', 'Энергетика', 'Потребительские товары'],
                datasets: [{
                    data: [40, 25, 15, 10, 10],
                    backgroundColor: [
                        '#3b82f6',
                        '#10b981',
                        '#ef4444',
                        '#f59e0b',
                        '#6366f1'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right',
                    }
                }
            }
        });
    }

    // Обработчики для кнопок покупки/продажи
    document.querySelectorAll('.buy-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const card = this.closest('.asset-card');
            const ticker = card.querySelector('.ticker').textContent;
            const price = parseFloat(card.querySelector('.current').textContent.replace('$', ''));
            const quantity = parseInt(card.querySelector('.quantity-input').value) || 1;

            // Здесь можно добавить логику покупки
            alert(`Куплено ${quantity} акций ${ticker} по $${price.toFixed(2)} каждая`);

            // Активируем кнопку продажи
            card.querySelector('.sell-btn').disabled = false;
        });
    });

    document.querySelectorAll('.sell-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const card = this.closest('.asset-card');
            const ticker = card.querySelector('.ticker').textContent;
            const price = parseFloat(card.querySelector('.current').textContent.replace('$', ''));
            const quantity = parseInt(card.querySelector('.quantity-input').value) || 1;

           // Обработчики для кнопок покупки/продажи
document.querySelectorAll('.buy-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const card = this.closest('.asset-card');
        const ticker = card.querySelector('.ticker').textContent;
        const price = parseFloat(card.querySelector('.current').textContent.replace('$', ''));
        const quantityInput = card.querySelector('.quantity-input');
        const quantity = parseInt(quantityInput.value) || 1;

        // Получаем текущий доступный капитал
        const availableCashElement = document.getElementById('availableCash');
        let availableCash = parseFloat(availableCashElement.textContent.replace('$', '').replace(/,/g, ''));

        // Проверяем, достаточно ли средств для покупки
        const totalCost = price * quantity;
        if (totalCost > availableCash) {
            alert('Недостаточно средств для покупки.');
            return;
        }

        // Обновляем доступный капитал
        availableCash -= totalCost;
        availableCashElement.textContent = formatCurrency(availableCash);

        // Обновляем стоимость портфеля
        const portfolioValueElement = document.getElementById('portfolioValue');
        let portfolioValue = parseFloat(portfolioValueElement.textContent.replace('$', '').replace(/,/g, ''));
        portfolioValue += totalCost;
        portfolioValueElement.textContent = formatCurrency(portfolioValue);

        // Активируем кнопку продажи
        card.querySelector('.sell-btn').disabled = false;

        // Добавляем информацию о купленных акциях
        let ownedStocks = JSON.parse(localStorage.getItem('ownedStocks')) || {};
        if (!ownedStocks[ticker]) {
            ownedStocks[ticker] = { quantity: 0, totalCost: 0 };
        }
        ownedStocks[ticker].quantity += quantity;
        ownedStocks[ticker].totalCost += totalCost;
        localStorage.setItem('ownedStocks', JSON.stringify(ownedStocks));

        alert(`Куплено ${quantity} акций ${ticker} по $${price.toFixed(2)} каждая`);
    });
});

document.querySelectorAll('.sell-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        const card = this.closest('.asset-card');
        const ticker = card.querySelector('.ticker').textContent;
        const price = parseFloat(card.querySelector('.current').textContent.replace('$', ''));
        const quantityInput = card.querySelector('.quantity-input');
        const quantity = parseInt(quantityInput.value) || 1;

        // Получаем информацию о купленных акциях
        let ownedStocks = JSON.parse(localStorage.getItem('ownedStocks')) || {};
        if (!ownedStocks[ticker] || ownedStocks[ticker].quantity < quantity) {
            alert('Недостаточно акций для продажи.');
            return;
        }

        // Обновляем количество акций
        ownedStocks[ticker].quantity -= quantity;
        if (ownedStocks[ticker].quantity === 0) {
            delete ownedStocks[ticker];
        }
        localStorage.setItem('ownedStocks', JSON.stringify(ownedStocks));

        // Обновляем доступный капитал
        const availableCashElement = document.getElementById('availableCash');
        let availableCash = parseFloat(availableCashElement.textContent.replace('$', '').replace(/,/g, ''));
        const totalRevenue = price * quantity;
        availableCash += totalRevenue;
        availableCashElement.textContent = formatCurrency(availableCash);

        // Обновляем стоимость портфеля
        const portfolioValueElement = document.getElementById('portfolioValue');
        let portfolioValue = parseFloat(portfolioValueElement.textContent.replace('$', '').replace(/,/g, ''));
        portfolioValue -= totalRevenue;
        portfolioValueElement.textContent = formatCurrency(portfolioValue);

        // Деактивируем кнопку продажи, если акций больше нет
        if (!ownedStocks[ticker]) {
            this.disabled = true;
        }

        alert(`Продано ${quantity} акций ${ticker} по $${price.toFixed(2)} каждая`);
    });
});

            // Деактивируем кнопку продажи
            this.disabled = true;
        });
    });
});