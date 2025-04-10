const catalogImages = document.querySelectorAll('.img_container img');
const fullScreenModal = document.getElementById('fullScreenModal');
const fullScreenImage = document.getElementById('fullScreenImage');
const fullScreenCaption = document.getElementById('fullScreenCaption');
const closeFullScreenBtn = document.querySelector('.close-full-screen');
const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');

let currentImageIndex = 0;

function showImage(index) {
    if (index < 0) {
        index = catalogImages.length - 1;
    } else if (index >= catalogImages.length) {
        index = 0;
    }
    currentImageIndex = index;
    fullScreenImage.src = catalogImages[index].src;
    fullScreenCaption.textContent = catalogImages[index].alt;
}

catalogImages.forEach((img, index) => {
    img.addEventListener('click', () => {
        showImage(index);
        fullScreenModal.style.display = 'block';
        document.body.classList.add('modal-open');
    });
});

closeFullScreenBtn.addEventListener('click', () => {
    fullScreenModal.style.display = 'none';
    document.body.classList.remove('modal-open');
});

arrowLeft.addEventListener('click', () => {
    showImage(currentImageIndex - 1);
});

arrowRight.addEventListener('click', () => {
    showImage(currentImageIndex + 1);
});

// Обработчик событий для клавиатуры
document.addEventListener('keydown', (event) => {
    if (fullScreenModal.style.display === 'block') { // Проверяем, открыто ли модальное окно
        if (event.key === 'ArrowLeft') {
            showImage(currentImageIndex - 1);
        } else if (event.key === 'ArrowRight') {
            showImage(currentImageIndex + 1);
        } else if (event.key === 'Escape') { // Закрытие по Escape
            fullScreenModal.style.display = 'none';
            document.body.classList.remove('modal-open');
        }
    }
});

// Закрытие по клику вне окна
window.addEventListener('click', (event) => {
    if (event.target === fullScreenModal) {
        fullScreenModal.style.display = 'none';
        document.body.classList.remove('modal-open');
    }
});