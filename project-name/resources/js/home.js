// Логика для главной страницы
document.addEventListener('DOMContentLoaded', function() {
    // Только если находимся на главной странице
    if (!document.querySelector('.hero-section')) return;

    console.log('Home page scripts loaded');

    // Пример: слайдер товаров
    const initProductSlider = () => {
        const sliders = document.querySelectorAll('.products-slider');
        // ваша логика слайдера
    };

    // Пример: обработка "В корзину" на главной
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const productId = this.dataset.productId;
            console.log('Add to cart:', productId);
            // вызов API для добавления в корзину
        });
    });

    initProductSlider();
});
