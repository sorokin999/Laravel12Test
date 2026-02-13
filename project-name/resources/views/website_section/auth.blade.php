@extends('app')
    @section('content')

    <!-- Auth Container -->
    <main class="auth-container">
        <div class="auth-wrapper">
            <!-- Left Panel -->
            <div class="auth-left">
                <h2>Добро пожаловать в Epulse.Pro!</h2>
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
                    <button class="auth-tab active" data-tab="login" id="loginTab">
                        Вход
                    </button>
                    <button class="auth-tab" data-tab="register" id="registerTab">
                        Регистрация
                    </button>
                </div>

                <!-- Alert Messages -->
                <div class="alert success" id="successAlert">
                    <i class="fas fa-check-circle"></i>
                    <span></span>
                </div>

                <div class="alert error" id="errorAlert">
                    <i class="fas fa-exclamation-circle"></i>
                    <span></span>
                </div>

                <!-- Login Form -->
                <form action="{{ route('login') }}" method="post" class="auth-form active" id="loginForm">
                    @csrf
                    <h3>Вход в аккаунт</h3>

                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" id="loginEmail" placeholder="ваш@email.com" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="loginPassword">Пароль</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" id="loginPassword" placeholder="Введите пароль" name="password" required>
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
                <form action="{{route('login')}}" method="post" class="auth-form" id="registerForm">
                   @csrf
                    <h3>Создать аккаунт</h3>
                    <div class="form-group">
                        <label for="registerName">Имя</label>
                        <div class="input-with-icon">
                            <i class="fas fa-user"></i>
                            <input type="text" name="name" id="registerName" placeholder="Ваше имя" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" id="registerEmail" placeholder="ваш@email.com" required>
                        </div>
                        <small class="email-hint" style="display: none; color: var(--success); margin-top: 5px;">
                            <i class="fas fa-check"></i> Email доступен
                        </small>
                    </div>

                    <div class="form-group">
                        <label for="registerPhone">Телефон</label>
                        <div class="input-with-icon">
                            <i class="fas fa-phone"></i>
                            <input type="tel" name="number" id="registerPhone" placeholder="+7 (999) 123-45-67" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="registerPassword">Пароль</label>
                        <div class="input-with-icon">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password" id="registerPassword" placeholder="Не менее 8 символов" required>
                            <button type="submit" class="password-toggle" data-target="registerPassword">
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
                            <input type="checkbox" name="checkbox" id="acceptTerms" required>
                            Я согласен с <a href="#" style="color: var(--primary);">Условиями использования</a> и <a href="#" style="color: var(--primary);">Политикой конфиденциальности</a>
                        </label>
                    </div>

                    <button type="submit" class="btn-auth" id="registerBtn">
                        <span>Зарегистрироваться</span>
                    </button>
                </form>

                <!-- Forgot Password Form -->
                <form class="auth-form" method="post"  id="forgotPasswordForm">
                    @csrf
                    <h3>Восстановление пароля</h3>
                    <p style="color: var(--gray); margin-bottom: 25px;">Введите email, указанный при регистрации. Мы вышлем инструкцию для сброса пароля.</p>

                    <div class="form-group">
                        <label for="forgotEmail">Email</label>
                        <div class="input-with-icon">
                            <i class="fas fa-envelope"></i>
                            <input type="email" name="email" id="forgotEmail" placeholder="ваш@email.com" required>
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
    @endsection
</body>

</html>
