    <?php $__env->startSection('content'); ?>

    <div class="breadcrumb">
        <div class="container">
            <a href="index.html">Главная</a>
            <i class="fas fa-chevron-right"></i>
            <span>Корзина</span>
        </div>
    </div>

    <!-- Main Content -->
    <main class="container">
        <h1 class="page-title">
            <i class="fas fa-shopping-cart"></i>
            Корзина покупок
        </h1>

        <div class="cart-content">
            <!-- Cart Items -->
            <div class="cart-items fade-in" id="cartItems">
                <div class="cart-header">
                    <h2>Ваши товары <span id="itemCount">(3 товара)</span></h2>
                    <div class="cart-actions">
                        <button class="btn-cart-action clear" id="clearCart">
                            <i class="fas fa-trash"></i>
                            Очистить корзину
                        </button>
                        <button class="btn-cart-action" id="updateCart">
                            <i class="fas fa-sync-alt"></i>
                            Обновить корзину
                        </button>
                    </div>
                </div>

                <!-- Cart Item 1 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <i class="fas fa-laptop" style="font-size: 2.5rem; color: var(--primary);"></i>
                    </div>
                    <div class="cart-item-details">
                        <a href="#" class="cart-item-title">Ноутбук ASUS ROG Strix G15</a>
                        <div class="cart-item-category">Ноутбуки / Игровые</div>
                        <div class="cart-item-availability">
                            <i class="fas fa-check-circle" style="color: #28a745;"></i>
                            <span class="in-stock">В наличии</span>
                        </div>
                        <div class="cart-item-actions">
                            <button class="btn-item-action">
                                <i class="far fa-heart"></i> В избранное
                            </button>
                            <button class="btn-item-action remove">
                                <i class="fas fa-trash"></i> Удалить
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-control">
                            <button class="quantity-btn minus" data-item="1">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10" data-item="1">
                            <button class="quantity-btn plus" data-item="1">+</button>
                        </div>
                        <div class="cart-item-price">
                            <div class="current-price">89 990₽</div>
                            <div class="item-total">89 990₽</div>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 2 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <i class="fas fa-headphones" style="font-size: 2.5rem; color: var(--primary);"></i>
                    </div>
                    <div class="cart-item-details">
                        <a href="#" class="cart-item-title">Наушники Sony WH-1000XM5</a>
                        <div class="cart-item-category">Аксессуары / Наушники</div>
                        <div class="cart-item-availability">
                            <i class="fas fa-check-circle" style="color: #28a745;"></i>
                            <span class="in-stock">В наличии</span>
                        </div>
                        <div class="cart-item-actions">
                            <button class="btn-item-action">
                                <i class="far fa-heart"></i> В избранное
                            </button>
                            <button class="btn-item-action remove">
                                <i class="fas fa-trash"></i> Удалить
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-control">
                            <button class="quantity-btn minus" data-item="2">-</button>
                            <input type="number" class="quantity-input" value="2" min="1" max="5" data-item="2">
                            <button class="quantity-btn plus" data-item="2">+</button>
                        </div>
                        <div class="cart-item-price">
                            <div class="current-price">29 990₽</div>
                            <div class="item-total">59 980₽</div>
                        </div>
                    </div>
                </div>

                <!-- Cart Item 3 -->
                <div class="cart-item">
                    <div class="cart-item-image">
                        <i class="fas fa-mobile-alt" style="font-size: 2.5rem; color: var(--primary);"></i>
                    </div>
                    <div class="cart-item-details">
                        <a href="#" class="cart-item-title">Чехол для iPhone 15 Pro</a>
                        <div class="cart-item-category">Аксессуары / Чехлы</div>
                        <div class="cart-item-availability">
                            <i class="fas fa-check-circle" style="color: #28a745;"></i>
                            <span class="in-stock">В наличии</span>
                        </div>
                        <div class="cart-item-actions">
                            <button class="btn-item-action">
                                <i class="far fa-heart"></i> В избранное
                            </button>
                            <button class="btn-item-action remove">
                                <i class="fas fa-trash"></i> Удалить
                            </button>
                        </div>
                    </div>
                    <div class="cart-item-controls">
                        <div class="quantity-control">
                            <button class="quantity-btn minus" data-item="3">-</button>
                            <input type="number" class="quantity-input" value="1" min="1" max="10" data-item="3">
                            <button class="quantity-btn plus" data-item="3">+</button>
                        </div>
                        <div class="cart-item-price">
                            <div class="current-price">2 990₽</div>
                            <div class="old-price">3 990₽</div>
                            <div class="item-total">2 990₽</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Empty Cart State (Hidden by default) -->
            <div class="cart-items" id="emptyCart" style="display: none;">
                <div class="empty-cart">
                    <div class="empty-cart-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h3>Ваша корзина пуста</h3>
                    <p>Добавьте товары в корзину, чтобы совершить покупку. Посмотрите наши популярные категории или воспользуйтесь поиском.</p>
                    <a href="index.html" class="btn-continue">
                        <i class="fas fa-arrow-left"></i> Вернуться к покупкам
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-summary fade-in">
                <h2>Итого</h2>

                <div class="summary-row">
                    <span class="summary-label">Товары (3)</span>
                    <span class="summary-value" id="subtotal">152 960₽</span>
                </div>

                <div class="summary-row">
                    <span class="summary-label">Скидка</span>
                    <span class="summary-value savings" id="discount">-1 000₽</span>
                </div>

                <div class="summary-row">
                    <span class="summary-label">Доставка</span>
                    <span class="summary-value" id="shipping">Бесплатно</span>
                </div>

                <div class="summary-row total">
                    <span class="summary-label">К оплате</span>
                    <span class="summary-value" id="total">151 960₽</span>
                </div>

                <div class="promo-code">
                    <h3>Промокод</h3>
                    <div class="promo-input-group">
                        <input type="text" placeholder="Введите промокод" id="promoCode">
                        <button id="applyPromo">Применить</button>
                    </div>
                </div>

                <button class="btn-checkout" id="checkoutBtn">
                    <i class="fas fa-lock"></i>
                    Перейти к оформлению
                </button>

                <div class="secure-checkout">
                    <i class="fas fa-shield-alt"></i>
                    Безопасная оплата
                </div>
            </div>
        </div>
    </main>

    <!-- Recently Viewed -->
    <section class="recently-viewed">
        <div class="container">
            <h2 class="section-title">Недавно просмотренные</h2>
            <div class="products-slider">
                <div class="product-card-small">
                    <div class="product-image-small">
                        <i class="fas fa-keyboard" style="font-size: 3rem; color: var(--primary);"></i>
                    </div>
                    <h3 class="product-title-small">Механическая клавиатура</h3>
                    <div class="product-price-small">7 990₽</div>
                </div>
                <div class="product-card-small">
                    <div class="product-image-small">
                        <i class="fas fa-desktop" style="font-size: 3rem; color: var(--primary);"></i>
                    </div>
                    <h3 class="product-title-small">Игровой монитор 27"</h3>
                    <div class="product-price-small">34 990₽</div>
                </div>
                <div class="product-card-small">
                    <div class="product-image-small">
                        <i class="fas fa-gamepad" style="font-size: 3rem; color: var(--primary);"></i>
                    </div>
                    <h3 class="product-title-small">Геймпад Xbox Series</h3>
                    <div class="product-price-small">5 990₽</div>
                </div>
                <div class="product-card-small">
                    <div class="product-image-small">
                        <i class="fas fa-server" style="font-size: 3rem; color: var(--primary);"></i>
                    </div>
                    <h3 class="product-title-small">Внешний SSD 1TB</h3>
                    <div class="product-price-small">8 990₽</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>TechShop</h3>
                    <p style="color: #adb5bd; margin-bottom: 20px;">Интернет-магазин электроники №1 в России.</p>
                </div>

                <div class="footer-column">
                    <h3>Помощь</h3>
                    <ul class="footer-links">
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Возврат товара</a></li>
                        <li><a href="#">Гарантия</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Контакты</h3>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-phone"></i> +7 (999) 123-45-67</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> info@techshop.ru</a></li>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> Москва, ул. Примерная, 123</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 TechShop. Все права защищены.</p>
            </div>
        </div>
    </footer>
    <?php $__env->stopSection(); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Элементы DOM
            const cartItems = document.getElementById('cartItems');
            const emptyCart = document.getElementById('emptyCart');
            const cartCount = document.getElementById('cartCount');
            const itemCount = document.getElementById('itemCount');
            const subtotalElement = document.getElementById('subtotal');
            const discountElement = document.getElementById('discount');
            const totalElement = document.getElementById('total');
            const clearCartBtn = document.getElementById('clearCart');
            const updateCartBtn = document.getElementById('updateCart');
            const checkoutBtn = document.getElementById('checkoutBtn');
            const applyPromoBtn = document.getElementById('applyPromo');
            const promoCodeInput = document.getElementById('promoCode');

            // Данные корзины
            let cartData = [
                { id: 1, name: 'Ноутбук ASUS ROG Strix G15', price: 89990, quantity: 1, oldPrice: 99990 },
                { id: 2, name: 'Наушники Sony WH-1000XM5', price: 29990, quantity: 2, oldPrice: null },
                { id: 3, name: 'Чехол для iPhone 15 Pro', price: 2990, quantity:

<?php echo $__env->make('app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/sorokin/Documents/Laravel12Test/resources/views/website_section/cart.blade.php ENDPATH**/ ?>