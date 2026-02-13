<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Интернет-магазин электроники</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
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
                    <a href="/auth" class="action-item">
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

