// Логика для страницы корзины
document.addEventListener('DOMContentLoaded', function() {
    // Только если находимся на странице корзины
    if (!document.querySelector('.cart-items')) return;

    console.log('Cart page scripts loaded');

    // Управление количеством товаров
    document.querySelectorAll('.quantity-btn').forEach(button => {
        button.addEventListener('click', function() {
            const input = this.parentElement.querySelector('.quantity-input');
            let value = parseInt(input.value);

            if (this.classList.contains('plus')) {
                value++;
            } else if (this.classList.contains('minus') && value > 1) {
                value--;
            }

            input.value = value;
            updateCartItem(this.closest('.cart-item'), value);
        });
    });

    // Обновление цены товара
    function updateCartItem(itemElement, quantity) {
        const price = parseFloat(itemElement.querySelector('.current-price').textContent.replace(/[^\d.]/g, ''));
        const total = price * quantity;
        itemElement.querySelector('.item-total').textContent = total.toFixed(2) + ' ₽';
        updateCartSummary();
    }

    // Обновление итоговой суммы
    function updateCartSummary() {
        let subtotal = 0;
        document.querySelectorAll('.item-total').forEach(element => {
            subtotal += parseFloat(element.textContent.replace(/[^\d.]/g, ''));
        });

        document.querySelector('.summary-value.subtotal').textContent = subtotal.toFixed(2) + ' ₽';
        // и т.д.
    }
});
