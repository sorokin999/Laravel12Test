<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Вход и регистрация</title>
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
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
            --transition: all 0.3s ease;
        }

        body {
            color: var(--dark);
            background: linear-gradient(135deg, #f5f7ff 0%, #eef1ff 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
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

        .back-to-home {
            color: var(--gray);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .back-to-home:hover {
            color: var(--primary);
        }

        .back-to-home i {
            margin-right: 8px;
        }

        /* Auth Container */
        .auth-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
        }

        .auth-wrapper {
            width: 100%;
            max-width: 1000px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            display: flex;
            min-height: 600px;
        }

        /* Left Panel */
        .auth-left {
            flex: 1;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: white;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .auth-left:before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 200px;
            height: 200px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
        }

        .auth-left:after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -10%;
            width: 150px;
            height: 150px;
            background: rgba(255,255,255,0.05);
            border-radius: 50%;
        }

        .auth-left h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        .auth-left p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
            position: relative;
            z-index: 1;
            line-height: 1.6;
        }

        .features-list {
            list-style: none;
            position: relative;
            z-index: 1;
        }

        .features-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .features-list i {
            margin-right: 12px;
            background: rgba(255,255,255,0.2);
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        /* Right Panel */
        .auth-right {
            flex: 1;
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
        }

        .auth-tabs {
            display: flex;
            border-bottom: 2px solid var(--light-gray);
            margin-bottom: 40px;
        }

        .auth-tab {
            padding: 15px 30px;
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--gray);
            background: none;
            border: none;
            cursor: pointer;
            position: relative;
            transition: var(--transition);
        }

        .auth-tab.active {
            color: var(--primary);
        }

        .auth-tab.active:after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background: var(--primary);
        }

        .auth-tab:hover:not(.active) {
            color: var(--dark);
        }

        /* Forms */
        .auth-form {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .auth-form.active {
            display: block;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .auth-form h3 {
            font-size: 1.8rem;
            margin-bottom: 30px;
            color: var(--dark);
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--dark);
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        .input-with-icon input {
            width: 100%;
            padding: 15px 15px 15px 45px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-size: 1rem;
            transition: var(--transition);
            outline: none;
        }

        .input-with-icon input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.1);
        }

        .input-with-icon input.error {
            border-color: #ff4757;
        }

        .input-with-icon input.success {
            border-color: var(--success);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: var(--gray);
            cursor: pointer;
            font-size: 1rem;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .remember-me input {
            width: 18px;
            height: 18px;
            accent-color: var(--primary);
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: var(--transition);
        }

        .forgot-password:hover {
            color: var(--primary-dark);
            text-decoration: underline;
        }

        .btn-auth {
            width: 100%;
            padding: 16px;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            margin-bottom: 25px;
        }

        .btn-auth:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(67, 97, 238, 0.2);
        }

        .btn-auth:active {
            transform: translateY(0);
        }

        .social-auth {
            margin-top: 30px;
        }

        .social-auth p {
            text-align: center;
            color: var(--gray);
            margin-bottom: 20px;
            position: relative;
        }

        .social-auth p:before,
        .social-auth p:after {
            content: '';
            position: absolute;
            top: 50%;
            width: 30%;
            height: 1px;
            background: var(--light-gray);
        }

        .social-auth p:before {
            left: 0;
        }

        .social-auth p:after {
            right: 0;
        }

        .social-buttons {
            display: flex;
            gap: 15px;
        }

        .social-btn {
            flex: 1;
            padding: 14px;
            border: 2px solid var(--light-gray);
            border-radius: var(--border-radius);
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .social-btn:hover {
            border-color: var(--gray);
            transform: translateY(-2px);
        }

        .social-btn.google {
            color: #DB4437;
        }

        .social-btn.facebook {
            color: #4267B2;
        }

        .social-btn.vk {
            color: #4C75A3;
        }

        /* Alert Messages */
        .alert {
            padding: 15px;
            border-radius: var(--border-radius);
            margin-bottom: 25px;
            display: none;
            animation: slideIn 0.3s ease;
        }

        @keyframes slideIn {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .alert.success {
            background: rgba(76, 201, 240, 0.1);
            border: 1px solid var(--success);
            color: #0a58ca;
        }

        .alert.error {
            background: rgba(255, 71, 87, 0.1);
            border: 1px solid #ff4757;
            color: #dc3545;
        }

        .alert i {
            margin-right: 10px;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 30px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-links {
            display: flex;
            gap: 25px;
            list-style: none;
        }

        .footer-links a {
            color: #adb5bd;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        /* Responsive */
        @media (max-width: 900px) {
            .auth-wrapper {
                flex-direction: column;
                max-width: 500px;
            }

            .auth-left {
                padding: 40px;
            }

            .auth-left h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            .auth-left, .auth-right {
                padding: 30px 20px;
            }

            .auth-tabs {
                flex-direction: column;
                border-bottom: none;
            }

            .auth-tab {
                text-align: center;
                border-bottom: 2px solid var(--light-gray);
            }

            .auth-tab.active:after {
                width: 50%;
                left: 25%;
            }

            .social-buttons {
                flex-direction: column;
            }

            .footer-content {
                flex-direction: column;
                gap: 20px;
            }

            .footer-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }

        /* Loading Animation */
        .loading {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <a href="/" class="logo">
                    <i class="fas fa-laptop"></i>
                    TechShop
                </a>
                <a href="index.html" class="back-to-home">
                    <i class="fas fa-arrow-left"></i> Вернуться в магазин
                </a>
            </div>
        </div>
    </header>

    <!-- Auth Container -->
    <main class="auth-container">
        <div class="auth-wrapper">
            <!-- Left Panel -->
            <div class="auth-left">
                <h2>Добро пожаловать в TechShop!</h2>
                <p>Присоединяйтесь к более чем 100 000 довольных клиентов. Создайте аккаунт, чтобы получить доступ ко всем преимуществам:</p>
                <ul class="features-list">
                    <li><i class="fas fa-check"></i> Быстрое оформление заказов</li>
                    <li><i class="fas fa-check"></i> Отслеживание доставки</li>
                    <li><i class="fas fa-check"></i> История покупок</li>
                    <li><i class="fas fa-check"></i> Специальные предложения</li>
                    <li><i class="fas fa-check"></i> Бонусные баллы</li>
                    <li><i class="fas fa-check"></i> Возврат товаров онлайн</li>
                </ul>
            </div>

            <!-- Right Panel -->
            <div class="auth-right">
                <!-- Tabs -->
                <div class="auth-tabs">
                    <button class="auth-tab active" data-tab="login">Вход</button>
                    <button class="auth-tab" data-tab="register">Регистрация</button>
                </div>

                <!-- Alert Messages -->
                <div class="alert success" id="successAlert">
                    <i class="fas fa-check-circle"></i> Регистрация прошла успешно! Теперь вы можете войти.
                </div>

                <div class="alert error" id="errorAlert">
                    <i class="fas fa-exclamation-circle"></i> Неправильный email или пароль. Попробуйте еще раз.
                </div>

                <!-- Login Form -->
                <form class="auth-form active" id="loginForm">
                    <h3>Вход в аккаунт</h3>

                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="loginEmail" placeholder="ваш@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Пароль</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="loginPassword" placeholder="Введите пароль" required>
                            <button type="button" class="password-toggle" data-target="loginPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="form-options">
                        <label class="remember-me">
                            <input type="checkbox" id="rememberMe">
                            Запомнить меня
                        </label>
                        <a href="#" class="forgot-password" id="forgotPassword">Забыли пароль?</a>
                    </div>

                    <button type="submit" class="btn-auth" id="loginBtn">
                        <span>Войти</span>
                    </button>

                    <div class="social-auth">
                        <p>Или войдите через</p>
                        <div class="social-buttons">
                            <button type="button" class="social-btn google">
                                <i class="fab fa-google"></i> Google
                            </button>
                            <button type="button" class="social-btn vk">
                                <i class="fab fa-vk"></i> VK
                            </button>
                            <button type="button" class="social-btn facebook">
                                <i class="fab fa-facebook"></i> Facebook
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Register Form -->
                <form class="auth-form" id="registerForm">
                    <h3>Создать аккаунт</h3>

                    <div class="form-group">
                        <label for="registerName">Имя</label>
                        <div class="input-with-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" id="registerName" placeholder="Ваше имя" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="registerEmail" placeholder="ваш@email.com" required>
                        </div>
                        <small class="email-hint" style="display: none; color: var(--success); margin-top: 5px;">
                            <i class="fas fa-check"></i> Email доступен
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="registerPhone">Телефон</label>
                        <div class="input-with-icon">
                            <i class="fas fa-phone"></i>
                            <input type="tel" id="registerPhone" placeholder="+7 (999) 123-45-67" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerPassword">Пароль</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="registerPassword" placeholder="Не менее 8 символов" required>
                            <button type="button" class="password-toggle" data-target="registerPassword">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <small style="color: var(--gray); margin-top: 5px; display: block;">
                            Пароль должен содержать минимум 8 символов, включая цифры и буквы
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="registerConfirm">Подтверждение пароля</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="registerConfirm" placeholder="Повторите пароль" required>
                            <button type="button" class="password-toggle" data-target="registerConfirm">
                                <i class="fas fa-eye"></i>
                            </button>
                        </div>
                        <small class="password-match" style="display: none; color: #ff4757; margin-top: 5px;">
                            <i class="fas fa-times"></i> Пароли не совпадают
                        </small>
                    </div>

                    <div class="form-group">
                        <label class="remember-me" style="cursor: pointer;">
                            <input type="checkbox" id="acceptTerms" required>
                            Я согласен с <a href="#" style="color: var(--primary);">Условиями использования</a> и <a href="#" style="color: var(--primary);">Политикой конфиденциальности</a>
                        </label>
                    </div>

                    <button type="submit" class="btn-auth" id="registerBtn">
                        <span>Зарегистрироваться</span>
                    </button>
                </form>

                <!-- Forgot Password Form (Hidden by default) -->
                <form class="auth-form" id="forgotPasswordForm" style="display: none;">
                    <h3>Восстановление пароля</h3>
                    <p style="color: var(--gray); margin-bottom: 25px;">Введите email, указанный при регистрации. Мы вышлем инструкцию для сброса пароля.</p>

                    <div class="form-group">
                        <label for="forgotEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="forgotEmail" placeholder="ваш@email.com" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-auth" id="resetPasswordBtn">
                        <span>Отправить инструкцию</span>
                    </button>

                    <div style="text-align: center; margin-top: 20px;">
                        <a href="#" class="forgot-password" id="backToLogin">Вернуться к входу</a>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    &copy; 2024 TechShop. Все права защищены.
                </div>
                <ul class="footer-links">
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Условия использования</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Элементы DOM
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            const forgotPasswordForm = document.getElementById('forgotPasswordForm');
            const loginBtn = document.getElementById('loginBtn');
            const registerBtn = document.getElementById('registerBtn');
            const resetPasswordBtn = document.getElementById('resetPasswordBtn');
            const tabs = document.querySelectorAll('.auth-tab');
            const forms = document.querySelectorAll('.auth-form');
            const successAlert = document.getElementById('successAlert');
            const errorAlert = document.getElementById('errorAlert');
            const forgotPasswordLink = document.getElementById('forgotPassword');
            const backToLoginLink = document.getElementById('backToLogin');
            const passwordToggles = document.querySelectorAll('.password-toggle');

            // Пароли для демонстрации (в реальном проекте это будет на сервере)
            const demoAccounts = [
                { email: 'user@example.com', password: 'password123', name: 'Демо пользователь' },
                { email: 'test@test.com', password: 'test123', name: 'Тестовый аккаунт' }
            ];

            // Переключение между вкладками
            tabs.forEach(tab => {
                tab.addEventListener('click', function() {
                    const tabId = this.getAttribute('data-tab');

                    // Обновляем активную вкладку
                    tabs.forEach(t => t.classList.remove('active'));
                    this.classList.add('active');

                    // Показываем соответствующую форму
                    forms.forEach(form => {
                        form.classList.remove('active');
                        if(form.id === `${tabId}Form`) {
                            form.classList.add('active');
                        }
                    });

                    // Скрываем алерты при переключении
                    hideAlerts();
                });
            });

            // Переключение видимости пароля
            passwordToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const input = document.getElementById(targetId);
                    const icon = this.querySelector('i');

                    if(input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('fa-eye');
                        icon.classList.add('fa-eye-slash');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('fa-eye-slash');
                        icon.classList.add('fa-eye');
                    }
                });
            });

            // Проверка совпадения паролей при регистрации
            const registerPassword = document.getElementById('registerPassword');
            const registerConfirm = document.getElementById('registerConfirm');
            const passwordMatchHint = document.querySelector('.password-match');

            function checkPasswordMatch() {
                if(registerPassword.value && registerConfirm.value) {
                    if(registerPassword.value !== registerConfirm.value) {
                        passwordMatchHint.style.display = 'block';
                        registerConfirm.classList.add('error');
                        return false;
                    } else {
                        passwordMatchHint.style.display = 'none';
                        registerConfirm.classList.remove('error');
                        registerConfirm.classList.add('success');
                        return true;
                    }
                }
                return true;
            }

            registerPassword.addEventListener('input', checkPasswordMatch);
            registerConfirm.addEventListener('input', checkPasswordMatch);

            // Проверка email на доступность (демо)
            const registerEmail = document.getElementById('registerEmail');
            const emailHint = document.querySelector('.email-hint');

            registerEmail.addEventListener('blur', function() {
                if(this.value) {
                    // Демо проверка - считаем email доступным, если он не в списке demoAccounts
                    const isTaken = demoAccounts.some(account => account.email === this.value);

                    if(isTaken) {
                        this.classList.add('error');
                        this.classList.remove('success');
                        emailHint.style.display = 'none';
                    } else {
                        this.classList.remove('error');
                        this.classList.add('success');
                        emailHint.style.display = 'block';
                    }
                }
            });

            // Показать/скрыть алерты
            function showAlert(alertElement, message = '') {
                if(message) {
                    alertElement.querySelector('span')?.remove();
                    const span = document.createElement('span');
                    span.textContent = message;
                    alertElement.appendChild(span);
                }
                alertElement.style.display = 'block';
                setTimeout(() => {
                    hideAlerts();
                }, 5000);
            }

            function hideAlerts() {
                successAlert.style.display = 'none';
                errorAlert.style.display = 'none';
            }

            // Форма восстановления пароля
            forgotPasswordLink.addEventListener('click', function(e) {
                e.preventDefault();
                forms.forEach(form => form.classList.remove('active'));
                forgotPasswordForm.classList.add('active');
                tabs.forEach(tab => tab.classList.remove('active'));
                hideAlerts();
            });

            backToLoginLink.addEventListener('click', function(e) {
                e.preventDefault();
                forms.forEach(form => form.classList.remove('active'));
                loginForm.classList.add('active');
                tabs[0].classList.add('active');
                hideAlerts();
            });

            // Обработка формы входа
            loginForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('loginEmail').value;
                const password = document.getElementById('loginPassword').value;
                const rememberMe = document.getElementById('rememberMe').checked;

                // Демо аутентификация
                const account = demoAccounts.find(acc => acc.email === email && acc.password === password);

                if(account) {
                    // Эмуляция загрузки
                    loginBtn.innerHTML = '<div class="loading"></div>';
                    loginBtn.disabled = true;

                    setTimeout(() => {
                        showAlert(successAlert, `Добро пожаловать, ${account.name}!`);
                        loginBtn.innerHTML = '<span>Войти</span>';
                        loginBtn.disabled = false;

                        // В реальном проекте здесь будет редирект
                        console.log('Вход успешен:', account);
                        // window.location.href = 'profile.html';
                    }, 1500);
                } else {
                    showAlert(errorAlert, 'Неправильный email или пароль. Попробуйте еще раз.');
                }
            });

            // Обработка формы регистрации
            registerForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const name = document.getElementById('registerName').value;
                const email = document.getElementById('registerEmail').value;
                const phone = document.getElementById('registerPhone').value;
                const password = document.getElementById('registerPassword').value;
                const confirmPassword = document.getElementById('registerConfirm').value;
                const acceptTerms = document.getElementById('acceptTerms').checked;

                // Валидация
                if(!checkPasswordMatch()) {
                    showAlert(errorAlert, 'Пароли не совпадают');
                    return;
                }

                if(!acceptTerms) {
                    showAlert(errorAlert, 'Необходимо согласиться с условиями');
                    return;
                }

                if(password.length < 8) {
                    showAlert(errorAlert, 'Пароль должен содержать минимум 8 символов');
                    return;
                }

                // Эмуляция загрузки
                registerBtn.innerHTML = '<div class="loading"></div>';
                registerBtn.disabled = true;

                setTimeout(() => {
                    // В реальном проекте здесь будет запрос к серверу
                    console.log('Регистрация:', { name, email, phone, password });

                    showAlert(successAlert, 'Регистрация прошла успешно! Теперь вы можете войти.');

                    // Переключаемся на форму входа
                    tabs[0].click();

                    // Заполняем форму входа для удобства
                    document.getElementById('loginEmail').value = email;
                    document.getElementById('loginPassword').value = password;

                    registerBtn.innerHTML = '<span>Зарегистрироваться</span>';
                    registerBtn.disabled = false;

                    // Очищаем форму регистрации
                    registerForm.reset();
                }, 2000);
            });

            // Обработка формы восстановления пароля
            forgotPasswordForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('forgotEmail').value;

                // Эмуляция загрузки
                resetPasswordBtn.innerHTML = '<div class="loading"></div>';
                resetPasswordBtn.disabled = true;

                setTimeout(() => {
                    showAlert(successAlert, `Инструкция по восстановлению отправлена на ${email}`);

                    resetPasswordBtn.innerHTML = '<span>Отправить инструкцию</span>';
                    resetPasswordBtn.disabled = false;

                    // Переключаемся на форму входа
                    tabs[0].click();

                    console.log('Восстановление пароля для:', email);
                }, 1500);
            });

            // Социальные кнопки
            document.querySelectorAll('.social-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const provider = this.classList.contains('google') ? 'Google' :
                                   this.classList.contains('vk') ? 'VK' : 'Facebook';

                    // Эмуляция загрузки
                    const originalText = this.innerHTML;
                    this.innerHTML = '<div class="loading"></div>';
                    this.disabled = true;

                    setTimeout(() => {
                        showAlert(successAlert, `Вход через ${provider} успешен!`);
                        this.innerHTML = originalText;
                        this.disabled = false;
                        console.log(`Вход через ${provider}`);
                    }, 1500);
                });
            });

            // Маска для телефона
            const phoneInput = document.getElementById('registerPhone');
            phoneInput.addEventListener('input', function(e) {
                let value = this.value.replace(/\D/g, '');

                if(value.length > 0) {
                    if(value.length <= 1) {
                        value = '+7 (' + value;
                    } else if(value.length <= 4) {
                        value = '+7 (' + value.substring(1, 4);
                    } else if(value.length <= 7) {
                        value = '+7 (' + value.substring(1, 4) + ') ' + value.substring(4, 7);
                    } else if(value.length <= 9) {
                        value = '+7 (' + value.substring(1, 4) + ') ' + value.substring(4, 7) + '-' + value.substring(7, 9);
                    } else {
                        value = '+7 (' + value.substring(1, 4) + ') ' + value.substring(4, 7) + '-' + value.substring(7, 9) + '-' + value.substring(9, 11);
                    }
                }

                this.value = value;
            });

            // Автозаполнение демо аккаунта по двойному клику на поле email
            document.getElementById('loginEmail').addEventListener('dblclick', function() {
                this.value = 'user@example.com';
                document.getElementById('loginPassword').value = 'password123';
            });
        });
    </script>
</body>
</html>
