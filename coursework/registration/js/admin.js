document.addEventListener('DOMContentLoaded', function() {
    const moneyButton = document.getElementById('moneyRainButton');
    
    // Анимация при наведении на кнопку
    moneyButton.addEventListener('mouseenter', function() {
        createMoneyRain();
    });
    
    // Обработчик клика на кнопку
    moneyButton.addEventListener('click', function() {
        if (confirm('Точно устроить денежный апокалипсис? Это действие нельзя отменить!')) {
            alert('💸 Все деньги пользователей успешно депнуты в казино! 💸\nКазино благодарит вас за щедрость!');
            createMoneyRain(50);
        }
    });
    
    // Функция создания анимации падающих денег
    function createMoneyRain(count = 20) {
        const buttonRect = moneyButton.getBoundingClientRect();
        
        for (let i = 0; i < count; i++) {
            const money = document.createElement('div');
            money.innerHTML = '💸';
            money.style.position = 'fixed';
            money.style.left = `${buttonRect.left + Math.random() * buttonRect.width}px`;
            money.style.top = `${buttonRect.top - 50}px`;
            money.style.fontSize = `${20 + Math.random() * 20}px`;
            money.style.animation = `moneyFall ${2 + Math.random() * 3}s linear forwards`;
            money.style.zIndex = '1000';
            money.style.userSelect = 'none';
            money.style.pointerEvents = 'none';
            
            document.body.appendChild(money);
            
            // Удаление элемента после анимации
            setTimeout(() => {
                money.remove();
            }, 5000);
        }
    }
    
    // Периодическая анимация для привлечения внимания
    setInterval(() => {
        if (Math.random() > 0.7) {
            createMoneyRain(3);
        }
    }, 5000);
});

/* Генерация частиц денег */
const button = document.getElementById('moneyRainButton');
for (let i = 0; i < 20; i++) {
    const particle = document.createElement('div');
    particle.className = 'money-particle';
    particle.innerHTML = ['💰','💵','💎','🏦','💴','💶'][Math.floor(Math.random()*6)];
    particle.style.left = Math.random() * 100 + '%';
    particle.style.animationDuration = 3 + Math.random() * 5 + 's';
    particle.style.animationDelay = Math.random() * 5 + 's';
    button.querySelector('.money-animation').appendChild(particle);
}