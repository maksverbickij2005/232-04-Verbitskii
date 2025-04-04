document.addEventListener('DOMContentLoaded', function() {
    console.log('Startup Hub page loaded');

    // Пример обработчика событий
    document.querySelector('header').addEventListener('click', function() {
        alert('Добро пожаловать в Startup Hub!');
    });
});
// Анимация при наведении на карточку спонсора
const sponsorCards = document.querySelectorAll('.sponsor-card');

