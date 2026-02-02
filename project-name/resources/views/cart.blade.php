<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Корзина</title>
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

        /* Breadcrumb */
        .breadcrumb {
            padding: 20px 0;
            background: var(--light);
            margin-bottom: 30px;
        }

        .breadcrumb .container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .breadcrumb a {
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb i {
            color: var(--gray);
            font-size: 0.8rem;
        }

        /* Page Title */
        .page-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: var(--dark);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .page-title i {
            color: var(--primary);
        }

        /* Cart Content */
        .cart-content {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 40px;
            margin-bottom: 60px;
        }

        @media (max-width: 992px) {
            .cart-content {
                grid-template-columns: 1fr;
            }
        }

        /* Cart Items */
        .cart-items {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
        }

        .cart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--light-gray);
        }

        .cart-header h2 {
            font-size: 1.8rem;
            color: var(--dark);
        }

        .cart-actions {
            display: flex;
            gap: 15px;
        }

        .btn-cart-action {
            padding: 10px 20px;
            background: var(--light-gray);
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .btn-cart-action:hover {
            background: #dee2e6;
        }

        .btn-cart-action.clear {
            color: #dc3545;
        }

        .btn-cart-action.clear:hover {
            background: #f8d7da;
        }

        .cart-item {
            display: grid;
            grid-template-columns: 100px 1fr auto;
            gap: 20px;
            padding: 25px 0;
            border-bottom: 1px solid var(--light-gray);
            align-items: center;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item-image {
            width: 100px;
            height: 100px;
            background: var(--light);
            border-radius: var(--border-radius);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .cart-item-image img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
        }

        .cart-item-details {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .cart-item-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark);
            text-decoration: none;
            transition: var(--transition);
        }

        .cart-item-title:hover {
            color: var(--primary);
        }

        .cart-item-category {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .cart-item-availability {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
        }

        .in-stock {
            color: #28a745;
            font-weight: 600;
        }

        .out-of-stock {
            color: #dc3545;
        }

        .cart-item-actions {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .btn-item-action {
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
            font-size: 0.9rem;
            transition: var(--transition);
            padding: 5px 0;
        }

        .btn-item-action:hover {
            color: var(--primary);
        }

        .btn-item-action.remove:hover {
            color: #dc3545;
        }

        .cart-item-controls {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 20px;
        }

        .quantity-control {
            display: flex;
            align-items: center;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            overflow: hidden;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            background: var(--light-gray);
            border: none;
            cursor: pointer;
            font-size: 1.2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: var(--transition);
        }

        .quantity-btn:hover {
            background: #dee2e6;
        }

        .quantity-input {
            width: 60px;
            height: 40px;
            border: none;
            text-align: center;
            font-size: 1rem;
            font-weight: 600;
            outline: none;
        }

        .cart-item-price {
            text-align: right;
        }

        .current-price {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .old-price {
            text-decoration: line-through;
            color: var(--gray);
            font-size: 1rem;
            margin-left: 8px;
        }

        .item-total {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
            margin-top: 5px;
        }

        /* Empty Cart */
        .empty-cart {
            text-align: center;
            padding: 60px 20px;
        }

        .empty-cart-icon {
            font-size: 5rem;
            color: var(--light-gray);
            margin-bottom: 20px;
        }

        .empty-cart h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .empty-cart p {
            color: var(--gray);
            margin-bottom: 30px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }

        .btn-continue {
            display: inline-block;
            padding: 15px 40px;
            background: var(--primary);
            color: white;
            border-radius: var(--border-radius);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .btn-continue:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: var(--shadow);
        }

        /* Cart Summary */
        .cart-summary {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            padding: 30px;
            height: fit-content;
            position: sticky;
            top: 100px;
        }

        .cart-summary h2 {
            font-size: 1.8rem;
            margin-bottom: 25px;
            padding-bottom: 20px;
            border-bottom: 2px solid var(--light-gray);
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed var(--light-gray);
        }

        .summary-row.total {
            border-bottom: none;
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--dark);
            margin-top: 20px;
            padding-top: 20px;
            border-top: 2px solid var(--light-gray);
        }

        .summary-label {
            color: var(--gray);
        }

        .summary-value {
            font-weight: 600;
        }

        .summary-value.savings {
            color: #28a745;
        }

        .promo-code {
            margin: 25px 0;
        }

        .promo-code h3 {
            font-size: 1.1rem;
            margin-bottom: 15px;
        }

        .promo-input-group {
            display: flex;
        }

        .promo-input-group input {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius) 0 0 var(--border-radius);
            font-size: 0.7rem;
            outline: none;
        }

        .promo-input-group input:focus {
            border-color: var(--primary);
        }

        .promo-input-group button {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0 20px;
            border-radius: 0 var(--border-radius) var(--border-radius) 0;
            cursor: pointer;
            transition: var(--transition);
        }

        .promo-input-group button:hover {
            background: var(--primary-dark);
        }

        .btn-checkout {
            width: 100%;
            padding: 18px;
            background: var(--accent);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1.2rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .btn-checkout:hover {
            background: #e11570;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(247, 37, 133, 0.2);
        }

        .secure-checkout {
            text-align: center;
            margin-top: 15px;
            color: var(--gray);
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .secure-checkout i {
            color: #28a745;
        }

        /* Recently Viewed */
        .recently-viewed {
            padding: 60px 0;
            background: var(--light);
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .products-slider {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 30px;
        }

        .product-card-small {
            background: white;
            border-radius: var(--border-radius);
            padding: 20px;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }

        .product-card-small:hover {
            transform: translateY(-5px);
        }

        .product-image-small {
            height: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }

        .product-image-small img {
            max-height: 80%;
            max-width: 80%;
        }

        .product-title-small {
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 1rem;
        }

        .product-price-small {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.2rem;
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

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #adb5bd;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .cart-item {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .cart-item-image {
                margin: 0 auto;
            }

            .cart-item-controls {
                align-items: center;
            }

            .cart-item-actions {
                justify-content: center;
            }

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
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .fade-in {
            animation: fadeIn 0.5s ease;
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
                            <div class="cart-count" id="cartCount">3</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Навигация -->
        <nav>
            <div class="container">
                <ul class="nav-list">
                    <li><a href="index.html"><i class="fas fa-home"></i> Главная</a></li>
                    <li><a href="#"><i class="fas fa-laptop"></i> Ноутбуки</a></li>
                    <li><a href="#"><i class="fas fa-mobile-alt"></i> Смартфоны</a></li>
                    <li><a href="#"><i class="fas fa-headphones"></i> Аксессуары</a></li>
                    <li><a href="#"><i class="fas fa-tv"></i> Телевизоры</a></li>
                    <li><a href="#"><i class="fas fa-gamepad"></i> Игры</a></li>
                    <li><a href="#"><i class="fas fa-tag"></i> Акции</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Breadcrumb -->
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
