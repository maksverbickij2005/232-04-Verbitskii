document.addEventListener('DOMContentLoaded', function() {
    const canvas = document.getElementById('matrix-canvas');
    const ctx = canvas.getContext('2d');
    
    // Установка размеров canvas
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
    
    // Символы для матрицы
    const katakana = 'アァカサタナハマヤャラワガザダバパイィキシチニヒミリヰギジヂビピウゥクスツヌフムユュルグズブヅプエェケセテネヘメレヱゲゼデベペオォコソトノホモヨョロヲゴゾドボポヴッン';
    const latin = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    const nums = '0123456789';
    const symbols = '!"#$%&\'()*+,-./:;<=>?@[\\]^_`{|}~';
    const alphabet = katakana + latin + nums + symbols;
    
    const fontSize = 16;
    const columns = canvas.width / fontSize;
    const rainDrops = Array(columns).fill(1);
    
    // Отрисовка матрицы
    const draw = () => {
        ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
        ctx.fillRect(0, 0, canvas.width, canvas.height);
        
        ctx.fillStyle = '#f00';
        ctx.font = fontSize + 'px monospace';
        
        for (let i = 0; i < rainDrops.length; i++) {
            const text = alphabet.charAt(Math.floor(Math.random() * alphabet.length));
            ctx.fillText(text, i * fontSize, rainDrops[i] * fontSize);
            
            if (rainDrops[i] * fontSize > canvas.height && Math.random() > 0.975) {
                rainDrops[i] = 0;
            }
            rainDrops[i]++;
        }
    };
    
    // Имитация прогресса загрузки
    let progress = 0;
    const progressElem = document.getElementById('progress');
    const progressInterval = setInterval(() => {
        progress += Math.floor(Math.random() * 10);
        if (progress > 100) progress = 100;
        progressElem.textContent = progress + '%';
        
        if (progress === 100) {
            clearInterval(progressInterval);
            setTimeout(() => {
                window.location.href = '../lk/startup_hub.php';
            }, 1000);
        }
    }, 100);
    
    // Запуск анимации
    setInterval(draw, 30);
    
    // Обработчик изменения размера окна
    window.addEventListener('resize', () => {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    });
});