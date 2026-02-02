<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Интернет-магазин электроники</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, sans-serif;
        }

        :root {
            --primary: #4361ee;
            --primary-dark: #3a56d4;
            --secondary: #7209b7;
            --accent: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --success: #4cc9f0;
            --border-radius: 12px;
            --shadow: 0 10px 20px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        body {
            color: var(--dark);
            background-color: #f5f7ff;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-bar {
            background: var(--primary);
            color: white;
            padding: 10px 0;
            font-size: 0.9rem;
        }

        .top-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-main {
            padding: 20px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
        }

        .logo i {
            color: var(--accent);
        }

        .search-bar {
            flex: 0 1 500px;
            display: flex;
            margin: 0 30px;
        }

        .search-bar input {
            flex: 1;
            padding: 14px 20px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-size: 1rem;
            outline: none;
            transition: var(--transition);
        }

        .search-bar input:focus {
            border-color: var(--primary);
        }

        .search-bar button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .search-bar button:hover {
            background: var(--primary-dark);
        }

        .header-actions {
            display: flex;
            gap: 25px;
            align-items: center;
        }

        .action-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-decoration: none;
            color: var(--dark);
            transition: var(--transition);
            position: relative;
        }

        .action-item:hover {
            color: var(--primary);
        }

        .action-item i {
            font-size: 1.4rem;
            margin-bottom: 5px;
        }

        .action-item span {
            font-size: 0.85rem;
            font-weight: 500;
        }

        .cart-count {
            position: absolute;
            top: -5px;
            right: -5px;
            background: var(--accent);
            color: white;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: bold;
        }

        nav {
            background: var(--light);
            border-top: 1px solid var(--light-gray);
        }

        .nav-list {
            display: flex;
            list-style: none;
            padding: 15px 0;
        }

        .nav-list li {
            margin-right: 30px;
        }

        .nav-list a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            padding: 8px 0;
            position: relative;
            transition: var(--transition);
        }

        .nav-list a:hover {
            color: var(--primary);
        }

        .nav-list a:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-list a:hover:after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
            border-radius: 0 0 var(--border-radius) var(--border-radius);
        }

        .hero-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text {
            flex: 1;
            padding-right: 40px;
        }

        .hero-text h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-image {
            flex: 1;
            text-align: center;
        }

        .hero-image img {
            max-width: 100%;
            border-radius: var(--border-radius);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .btn {
            display: inline-block;
            padding: 14px 32px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--transition);
            text-decoration: none;
        }

        .btn:hover {
            background: #e11570;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid white;
            margin-left: 15px;
        }

        .btn-outline:hover {
            background: white;
            color: var(--primary);
        }

        /* Categories */
        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            text-align: center;
            color: var(--dark);
        }

        .categories {
            padding: 60px 0;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .category-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            padding: 30px 20px;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 30px rgba(0,0,0,0.15);
        }

        .category-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .category-icon i {
            font-size: 2rem;
            color: white;
        }

        .category-card h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
        }

        .category-card p {
            color: var(--gray);
            font-size: 0.9rem;
        }

        /* Featured Products */
        .featured-products {
            padding: 60px 0;
            background: var(--light);
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
        }

        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--accent);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 1;
        }

        .product-image {
            height: 200px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
        }

        .product-image img {
            max-height: 80%;
            transition: var(--transition);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 20px;
        }

        .product-category {
            color: var(--gray);
            font-size: 0.85rem;
            margin-bottom: 5px;
        }

        .product-title {
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .product-rating {
            color: #ffc107;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }

        .product-price {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 15px;
        }

        .price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .old-price {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 1rem;
            margin-left: 10px;
        }

        .add-to-cart {
            background: var(--primary);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .add-to-cart:hover {
            background: var(--primary-dark);
            transform: scale(1.1);
        }

        /* Banner */
        .banner {
            padding: 60px 0;
        }

        .banner-content {
            background: linear-gradient(135deg, var(--secondary) 0%, #4361ee 100%);
            border-radius: var(--border-radius);
            padding: 60px;
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .banner-content h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .banner-content p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 60px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .footer-newsletter p {
            margin-bottom: 20px;
            color: #adb5bd;
        }

        .footer-newsletter form {
            display: flex;
        }

        .footer-newsletter input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            outline: none;
        }

        .footer-newsletter button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .footer-newsletter button:hover {
            background: var(--primary-dark);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }

        .social-icons a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            text-decoration: none;
            transition: var(--transition);
        }

        .social-icons a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .hero-content {
                flex-direction: column;
            }

            .hero-text {
                padding-right: 0;
                margin-bottom: 40px;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 2.5rem;
            }

            .search-bar {
                flex: 0 1 400px;
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-wrap: wrap;
            }

            .search-bar {
                order: 3;
                flex: 1 0 100%;
                margin: 20px 0 0;
            }

            .nav-list {
                overflow-x: auto;
                padding-bottom: 10px;
            }

            .banner-content {
                padding: 40px 20px;
            }

            .banner-content h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .header-actions {
                gap: 15px;
            }

            .action-item span {
                display: none;
            }

            .hero {
                padding: 50px 0;
            }

            .hero-text h1 {
                font-size: 2rem;
            }

            .btn {
                padding: 12px 24px;
                display: block;
                margin-bottom: 10px;
                text-align: center;
            }

            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
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
                    <a href="#" class="logo">
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

    <script>
        // Простой JavaScript для демонстрации
        document.addEventListener('DOMContentLoaded', function() {
            // Добавление товара в корзину
            const addToCartButtons = document.querySelectorAll('.add-to-cart');
            const cartCount = document.querySelector('.cart-count');

            addToCartButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Анимация кнопки
                    this.style.transform = 'scale(1.2)';
                    this.style.backgroundColor = '#4cc9f0';

                    setTimeout(() => {
                        this.style.transform = '';
                        this.style.backgroundColor = '';
                    }, 300);

                    // Увеличиваем счетчик корзины
                    let currentCount = parseInt(cartCount.textContent);
                    cartCount.textContent = currentCount + 1;

                    // Анимация счетчика
                    cartCount.style.transform = 'scale(1.5)';
                    setTimeout(() => {
                        cartCount.style.transform = '';
                    }, 300);

                    // Уведомление
                    alert('Товар добавлен в корзину!');
                });
            });

            // Поиск
            const searchInput = document.querySelector('.search-bar input');
            const searchButton = document.querySelector('.search-bar button');

            searchButton.addEventListener('click', function() {
                if(searchInput.value.trim() !== '') {
                    alert('Поиск: ' + searchInput.value);
                }
            });

            searchInput.addEventListener('keypress', function(e) {
                if(e.key === 'Enter' && this.value.trim() !== '') {
                    alert('Поиск: ' + this.value);
                }
            });

            // Обновление года в футере
            const yearSpan = document.querySelector('footer p:first-of-type');
            if(yearSpan) {
                yearSpan.innerHTML = yearSpan.innerHTML.replace('2024', new Date().getFullYear());
            }
        });
    </script>
</body>
</html>
