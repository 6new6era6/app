// Массив с данными для каждого слайда
const slides = [
    {
        image: 'images/1.png',
        textTop: '1320.65$ - средний заработок в первый день',
        textBottom: '(При минимальной инвестиции 250$)',
        buttonText: 'ДАЛЕЕ ⏵'
    },
    {
        image: 'images/2.png',
        textTop: 'Сопровождение от личного менеджера',
        textBottom: 'Решение всех вопросов без надоедливых чатов',
        buttonText: 'ДАЛЕЕ ⏵'
    },
    {
        image: 'images/3.png',
        textTop: 'Высокотехнологичная защита средств',
        textBottom: 'Шифрование данных современными web3 и blockchain технологиями',
        buttonText: 'ДАЛЕЕ ⏵'
    },
    {
        image: 'images/4.png',
        textTop: 'Высокоскоростной вывод средств',
        textBottom: 'Ускоренная процедура международных переводов',
        buttonText: 'ЗАРЕГИСТРИРОВАТЬСЯ ⏵'
    }
];

let currentSlide = 0;

const sliderImage = document.getElementById('slider-image');
const sliderTextTop = document.getElementById('slider-text-top');
const sliderTextBottom = document.getElementById('slider-text-bottom');
const sliderButton = document.getElementById('slider-button');

// Функция для смены слайда
function changeSlide(event) {
    if (currentSlide < slides.length - 1) {
        currentSlide++;
        const slide = slides[currentSlide];
        sliderImage.src = slide.image;
        sliderTextTop.textContent = slide.textTop;
        sliderTextBottom.textContent = slide.textBottom;
        sliderButton.textContent = slide.buttonText;

        if (currentSlide === slides.length - 1) {
            // Активируем кнопку на последнем слайде
            sliderButton.classList.add('active');
            sliderButton.removeAttribute('disabled');
        }
    } else {
        // На останньому слайді дозволяємо перейти за посиланням
        return; // Дозволяємо перехід по посиланню
    }

    event.preventDefault(); // Зупиняємо перехід по посиланню до активації
}

sliderButton.addEventListener('click', changeSlide);
