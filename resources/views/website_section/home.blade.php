<body>

    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <i class="fas fa-phone"></i> +7 (999) 123-45-67 | <i class="fas fa-clock"></i> Пн-Пт 9:00-20:00
            </div>
            <div class="top-bar-right">
                <a href="#" style="color: white; text-decoration: none; margin-right: 15px;"><i class="fas fa-truck"></i> Бесплатная доставка от 3000₽</a>
                <a href="#" style="color: white; text-decoration: none;"><i class="fas fa-user"></i> Войти</a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="header-main">
            <div class="container">
                <div class="header-content">
                    <!-- Логотип -->
                    <a href="/" class="logo">
                        <i class="fas fa-laptop"></i>
                        TechShop
                    </a>

                    <!-- Поиск -->
                    <div class="search-bar">
                        <input type="text" placeholder="Поиск товаров...">
                        <button><i class="fas fa-search"></i></button>
                    </div>

                    <!-- Действия -->
                    <div class="header-actions">
                        <a href="#" class="action-item">
                            <i class="far fa-heart"></i>
                            <span>Избранное</span>
                        </a>
                        <a href="/register" class="action-item">
                            <i class="fas fa-user"></i>
                            <span>Профиль</span>
                        </a>
                        <a href="/cart" class="action-item">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Корзина</span>
                            <div class="cart-count">3</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Навигация -->
        <nav>
            <div class="container">
                <ul class="nav-list">
                    <li><a href="#"><i class="fas fa-home"></i> Главная</a></li>
                    <li><a href="#"><i class="fas fa-laptop"></i> Ноутбуки</a></li>
                    <li><a href="#"><i class="fas fa-mobile-alt"></i> Смартфоны</a></li>
                    <li><a href="#"><i class="fas fa-headphones"></i> Аксессуары</a></li>
                    <li><a href="#"><i class="fas fa-tv"></i> Телевизоры</a></li>
                    <li><a href="#"><i class="fas fa-gamepad"></i> Игры</a></li>
                    <li><a href="#"><i class="fas fa-tag"></i> Акции</a></li>
                    <li><a href="#"><i class="fas fa-info-circle"></i> О нас</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i> Контакты</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Новейшие технологии по лучшим ценам</h1>
                    <p>Более 10 000 товаров от ведущих мировых брендов. Бесплатная доставка по всей России. Гарантия до 3 лет.</p>
                    <a href="#" class="btn">Смотреть каталог</a>
                    <a href="#" class="btn btn-outline">Акционные товары</a>
                </div>
                <div class="hero-image">
                    <!-- Здесь можно вставить изображение -->
                    <div style="background: rgba(255,255,255,0.1); padding: 30px; border-radius: var(--border-radius);">
                        <i class="fas fa-laptop" style="font-size: 8rem; opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Категории -->
    <section class="categories">
        <div class="container">
            <h2 class="section-title">Популярные категории</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>Ноутбуки</h3>
                    <p>Более 500 моделей для работы и игр</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Смартфоны</h3>
                    <p>Флагманы и бюджетные модели</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <h3>Наушники</h3>
                    <p>Проводные и беспроводные</p>
                </div>
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tablet-alt"></i>
                    </div>
                    <h3>Планшеты</h3>
                    <p>Для учебы и развлечений</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="featured-products">
        <div class="container">
            <h2 class="section-title">Популярные товары</h2>
            <div class="products-grid">
                <div class="product-card">
                    <div class="product-badge">Хит продаж</div>
                    <div class="product-image">
                        <!-- Изображение товара -->
                        <i class="fas fa-laptop" style="font-size: 4rem; color: var(--primary);"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Ноутбуки</div>
                        <h3 class="product-title">Ноутбук ASUS ROG Strix G15</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span style="color: var(--gray); margin-left: 5px;">4.5</span>
                        </div>
                        <div class="product-price">
                            <div>
                                <span class="price">89 990₽</span>
                                <span class="old-price">99 990₽</span>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-badge" style="background: var(--success);">Новинка</div>
                    <div class="product-image">
                        <i class="fas fa-mobile-alt" style="font-size: 4rem; color: var(--primary);"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Смартфоны</div>
                        <h3 class="product-title">iPhone 15 Pro 256GB</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                            <span style="color: var(--gray); margin-left: 5px;">4.0</span>
                        </div>
                        <div class="product-price">
                            <div>
                                <span class="price">124 990₽</span>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-badge" style="background: var(--accent);">-20%</div>
                    <div class="product-image">
                        <i class="fas fa-headphones" style="font-size: 4rem; color: var(--primary);"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Наушники</div>
                        <h3 class="product-title">Sony WH-1000XM5</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <span style="color: var(--gray); margin-left: 5px;">5.0</span>
                        </div>
                        <div class="product-price">
                            <div>
                                <span class="price">29 990₽</span>
                                <span class="old-price">34 990₽</span>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image">
                        <i class="fas fa-tablet-alt" style="font-size: 4rem; color: var(--primary);"></i>
                    </div>
                    <div class="product-info">
                        <div class="product-category">Планшеты</div>
                        <h3 class="product-title">Samsung Galaxy Tab S9</h3>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span style="color: var(--gray); margin-left: 5px;">4.5</span>
                        </div>
                        <div class="product-price">
                            <div>
                                <span class="price">64 990₽</span>
                            </div>
                            <button class="add-to-cart">
                                <i class="fas fa-cart-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Баннер -->
    <section class="banner">
        <div class="container">
            <div class="banner-content">
                <h2>Скидка 25% на все аксессуары</h2>
                <p>Только до конца месяца! Успейте купить чехлы, наушники, зарядные устройства и другие аксессуары со скидкой.</p>
                <a href="#" class="btn" style="background: white; color: var(--primary);">Купить сейчас</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>TechShop</h3>
                    <p style="color: #adb5bd; margin-bottom: 20px;">Интернет-магазин электроники №1 в России. Более 10 лет на рынке.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-column">
                    <h3>Категории</h3>
                    <ul class="footer-links">
                        <li><a href="#">Ноутбуки</a></li>
                        <li><a href="#">Смартфоны</a></li>
                        <li><a href="#">Планшеты</a></li>
                        <li><a href="#">Телевизоры</a></li>
                        <li><a href="#">Аксессуары</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Помощь</h3>
                    <ul class="footer-links">
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Гарантия</a></li>
                        <li><a href="#">Возврат товара</a></li>
                        <li><a href="#">Вопросы и ответы</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>

                <div class="footer-column footer-newsletter">
                    <h3>Рассылка</h3>
                    <p>Подпишитесь на рассылку и получайте информацию о скидках первыми!</p>
                    <form>
                        <input type="email" placeholder="Ваш email">
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 TechShop. Все права защищены.</p>
                <p>Политика конфиденциальности | Пользовательское соглашение</p>
            </div>
        </div>
    </footer>
</body>
</html>
