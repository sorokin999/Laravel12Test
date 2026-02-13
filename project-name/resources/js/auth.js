// ===========================================
// МОДУЛЬ АВТОРИЗАЦИИ И РЕГИСТРАЦИИ
// ===========================================


document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, находимся ли мы на странице авторизации
    if (!document.querySelector('.auth-container')) return;

    console.log('Auth module loaded');

    // ===========================================
    // 1. ИНИЦИАЛИЗАЦИЯ ПЕРЕМЕННЫХ И ЭЛЕМЕНТОВ DOM
    // ===========================================
    const elements = {
        // Формы
        loginForm: document.getElementById('loginForm'),
        registerForm: document.getElementById('registerForm'),
        forgotPasswordForm: document.getElementById('forgotPasswordForm'),

        // Кнопки отправки
        loginBtn: document.getElementById('loginBtn'),
        registerBtn: document.getElementById('registerBtn'),
        resetPasswordBtn: document.getElementById('resetPasswordBtn'),

        // Вкладки и формы
        tabs: document.querySelectorAll('.auth-tab'),
        forms: document.querySelectorAll('.auth-form'),

        // Уведомления
        successAlert: document.getElementById('successAlert'),
        errorAlert: document.getElementById('errorAlert'),

        // Ссылки переключения
        forgotPasswordLink: document.getElementById('forgotPassword'),
        backToLoginLink: document.getElementById('backToLogin'),

        // Элементы паролей
        passwordToggles: document.querySelectorAll('.password-toggle'),
        registerPassword: document.getElementById('registerPassword'),
        registerConfirm: document.getElementById('registerConfirm'),

        // Вспомогательные элементы
        passwordMatchHint: document.querySelector('.password-match'),
        registerEmail: document.getElementById('registerEmail'),
        emailHint: document.querySelector('.email-hint'),
        phoneInput: document.getElementById('registerPhone'),

        // Поля формы логина
        loginEmail: document.getElementById('loginEmail'),
        loginPassword: document.getElementById('loginPassword'),
        rememberMe: document.getElementById('rememberMe'),

        // Поля формы регистрации
        registerName: document.getElementById('registerName'),
        acceptTerms: document.getElementById('acceptTerms'),

        // Поле восстановления
        forgotEmail: document.getElementById('forgotEmail'),

        // Социальные кнопки
        socialButtons: document.querySelectorAll('.social-btn')
    };

    // ===========================================
    // 2. ВСПОМОГАТЕЛЬНЫЕ ФУНКЦИИ
    // ===========================================

    /**
     * Показать уведомление
     */
    function showAlert(alertElement, message = '', duration = 5000) {
        if (!alertElement) return;

        if (message) {
            alertElement.querySelector('span').textContent = message;
        }

        alertElement.style.display = 'block';

        setTimeout(() => {
            hideAlerts();
        }, duration);
    }

    /**
     * Скрыть все уведомления
     */
    function hideAlerts() {
        if (elements.successAlert) elements.successAlert.style.display = 'none';
        if (elements.errorAlert) elements.errorAlert.style.display = 'none';
    }

    /**
     * Проверка совпадения паролей при регистрации
     */
    function checkPasswordMatch() {
        if (!elements.registerPassword || !elements.registerConfirm) return true;

        const password = elements.registerPassword.value;
        const confirm = elements.registerConfirm.value;

        if (password && confirm) {
            if (password !== confirm) {
                // Пароли не совпадают
                if (elements.passwordMatchHint) {
                    elements.passwordMatchHint.style.display = 'block';
                }
                if (elements.registerConfirm) {
                    elements.registerConfirm.classList.add('error');
                    elements.registerConfirm.classList.remove('success');
                }
                return false;
            } else {
                // Пароли совпадают
                if (elements.passwordMatchHint) {
                    elements.passwordMatchHint.style.display = 'none';
                }
                if (elements.registerConfirm) {
                    elements.registerConfirm.classList.remove('error');
                    elements.registerConfirm.classList.add('success');
                }
                return true;
            }
        }
        return true;
    }

    /**
     * Маска для телефона
     */
    function formatPhoneNumber(value) {
        let numbers = value.replace(/\D/g, '');

        if (numbers.length === 0) return '';

        // Формат: +7 (XXX) XXX-XX-XX
        let formatted = '+7';

        if (numbers.length > 1) {
            formatted += ' (' + numbers.substring(1, 4);
        }
        if (numbers.length >= 5) {
            formatted += ') ' + numbers.substring(4, 7);
        }
        if (numbers.length >= 8) {
            formatted += '-' + numbers.substring(7, 9);
        }
        if (numbers.length >= 10) {
            formatted += '-' + numbers.substring(9, 11);
        }

        return formatted;
    }

    // ===========================================
    // 3. ПЕРЕКЛЮЧЕНИЕ МЕЖДУ ФОРМАМИ (ОСНОВНАЯ ФУНКЦИЯ)
    // ===========================================

    /**
     * Показать конкретную форму и скрыть остальные
     */
    function showForm(formId, activateTab = true) {
        // Скрываем все формы
        elements.forms.forEach(form => {
            form.classList.remove('active');
        });

        // Показываем нужную форму
        const targetForm = document.getElementById(formId);
        if (targetForm) {
            targetForm.classList.add('active');
        }

        // Управляем видимостью вкладок
        const authTabs = document.querySelector('.auth-tabs');
        if (formId === 'forgotPasswordForm') {
            // Для формы восстановления скрываем вкладки
            if (authTabs) {
                authTabs.classList.add('hidden');
            }
        } else {
            // Для других форм показываем вкладки
            if (authTabs) {
                authTabs.classList.remove('hidden');
            }
        }

        // Активируем соответствующую вкладку
        if (activateTab && formId !== 'forgotPasswordForm') {
            const tabId = formId.replace('Form', 'Tab');
            const targetTab = document.getElementById(tabId);

            if (targetTab) {
                elements.tabs.forEach(tab => tab.classList.remove('active'));
                targetTab.classList.add('active');
            }
        }
    }

    // ===========================================
    // 4. ИНИЦИАЛИЗАЦИЯ КОМПОНЕНТОВ
    // ===========================================

    /**
     * Инициализация переключения вкладок
     */
    function initTabs() {
        if (!elements.tabs.length || !elements.forms.length) return;

        elements.tabs.forEach(tab => {
            tab.addEventListener('click', function() {
                const tabId = this.getAttribute('data-tab');
                const formId = tabId + 'Form';

                showForm(formId, true);
                hideAlerts();
            });
        });
    }

    /**
     * Инициализация переключателей видимости пароля
     */
    function initPasswordToggles() {
        if (!elements.passwordToggles.length) return;

        elements.passwordToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const targetId = this.getAttribute('data-target');
                const input = document.getElementById(targetId);
                const icon = this.querySelector('i');

                if (!input || !icon) return;

                if (input.type === 'password') {
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
    }

    /**
     * Инициализация проверки email на доступность
     */
    function initEmailValidation() {
        if (!elements.registerEmail || !elements.emailHint) return;

        elements.registerEmail.addEventListener('blur', function() {
            if (this.value && this.value.includes('@')) {
                // Простая проверка на корректность email
                const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.value);

                if (isValid) {
                    this.classList.remove('error');
                    this.classList.add('success');
                    if (elements.emailHint) {
                        elements.emailHint.innerHTML = '<i class="fas fa-check"></i> Email корректный';
                        elements.emailHint.style.display = 'block';
                    }
                } else {
                    this.classList.add('error');
                    this.classList.remove('success');
                    if (elements.emailHint) {
                        elements.emailHint.innerHTML = '<i class="fas fa-times"></i> Неверный формат email';
                        elements.emailHint.style.display = 'block';
                    }
                }
            } else {
                this.classList.remove('error', 'success');
                if (elements.emailHint) {
                    elements.emailHint.style.display = 'none';
                }
            }
        });
    }

    /**
     * Инициализация маски телефона
     */
    function initPhoneMask() {
        if (!elements.phoneInput) return;

        elements.phoneInput.addEventListener('input', function(e) {
            this.value = formatPhoneNumber(this.value);
        });

        // Устанавливаем начальное значение, если поле пустое
        if (!elements.phoneInput.value.trim()) {
            elements.phoneInput.value = '+7 (';
        }
    }

    /**
     * Инициализация переключения на форму восстановления пароля
     */
    function initForgotPasswordToggle() {
        // Переход к восстановлению пароля
        if (elements.forgotPasswordLink) {
            elements.forgotPasswordLink.addEventListener('click', function(e) {
                e.preventDefault();
                showForm('forgotPasswordForm', false);
                hideAlerts();
            });
        }

        // Возврат к форме входа
        if (elements.backToLoginLink) {
            elements.backToLoginLink.addEventListener('click', function(e) {
                e.preventDefault();
                showForm('loginForm', true);
                hideAlerts();
            });
        }
    }

    /**
     * Инициализация социальных кнопок (демо)
     */
    function initSocialButtons() {
        if (!elements.socialButtons.length) return;

        elements.socialButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const provider = this.classList.contains('google') ? 'Google' :
                    this.classList.contains('vk') ? 'VK' : 'Facebook';

                // Эмуляция загрузки
                const originalText = this.innerHTML;
                this.innerHTML = '<div class="loading"></div>';
                this.disabled = true;

                setTimeout(() => {
                    showAlert(elements.successAlert, `Вход через ${provider} успешен!`);
                    this.innerHTML = originalText;
                    this.disabled = false;
                    console.log(`Вход через ${provider}`);
                }, 1500);
            });
        });
    }

    // ===========================================
    // 5. ОБРАБОТКА ФОРМ (ВАЛИДАЦИЯ)
    // ===========================================

    /**
     * Валидация формы входа
     */
    function initLoginValidation() {
        if (!elements.loginForm) return;

        elements.loginForm.addEventListener('submit', function(e) {
            const email = elements.loginEmail ? elements.loginEmail.value : '';
            const password = elements.loginPassword ? elements.loginPassword.value : '';

            if (!email || !password) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пожалуйста, заполните все поля');
                return false;
            }

            if (!email.includes('@')) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пожалуйста, введите корректный email');
                return false;
            }

            return true;
        });
    }

    /**
     * Валидация формы регистрации
     */
    function initRegisterValidation() {
        if (!elements.registerForm) return;

        // Слушатели для проверки паролей
        if (elements.registerPassword && elements.registerConfirm) {
            elements.registerPassword.addEventListener('input', checkPasswordMatch);
            elements.registerConfirm.addEventListener('input', checkPasswordMatch);
        }

        elements.registerForm.addEventListener('submit', function(e) {
            const name = elements.registerName ? elements.registerName.value : '';
            const email = elements.registerEmail ? elements.registerEmail.value : '';
            const phone = elements.phoneInput ? elements.phoneInput.value : '';
            const password = elements.registerPassword ? elements.registerPassword.value : '';
            const acceptTerms = elements.acceptTerms ? elements.acceptTerms.checked : false;

            // Валидация
            if (!name || !email || !phone || !password) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пожалуйста, заполните все поля');
                return false;
            }

            if (!checkPasswordMatch()) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пароли не совпадают');
                return false;
            }

            if (!acceptTerms) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Необходимо согласиться с условиями');
                return false;
            }

            if (password.length < 8) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пароль должен содержать минимум 8 символов');
                return false;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пожалуйста, введите корректный email');
                return false;
            }

            // Проверка телефона
            const phoneRegex = /^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
            if (!phoneRegex.test(phone)) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Введите телефон в формате: +7 (XXX) XXX-XX-XX');
                return false;
            }

            return true;
        });
    }

    /**
     * Валидация формы восстановления пароля
     */
    function initForgotPasswordValidation() {
        if (!elements.forgotPasswordForm) return;

        elements.forgotPasswordForm.addEventListener('submit', function(e) {
            const email = elements.forgotEmail ? elements.forgotEmail.value : '';

            if (!email) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Введите email');
                return false;
            }

            if (!email.includes('@')) {
                e.preventDefault();
                showAlert(elements.errorAlert, 'Пожалуйста, введите корректный email');
                return false;
            }

            return true;
        });
    }

    // ===========================================
    // 6. ДЕМО-ФУНКЦИИ (можно удалить в продакшене)
    // ===========================================

    /**
     * Демо-автозаполнение для тестирования
     */
    function initDemoAutofill() {
        if (!elements.loginEmail) return;

        elements.loginEmail.addEventListener('dblclick', function() {
            this.value = 'demo@example.com';
            if (elements.loginPassword) {
                elements.loginPassword.value = 'password123';
            }
        });
    }

    // ===========================================
    // 7. ИНИЦИАЛИЗАЦИЯ ВСЕХ КОМПОНЕНТОВ
    // ===========================================
    function initAll() {
        // Проверяем, что все необходимые элементы существуют
        if (!elements.loginForm || !elements.registerForm || !elements.forgotPasswordForm) {
            console.error('Не найдены необходимые формы!');
            return;
        }

        // Инициализация компонентов
        initTabs();
        initPasswordToggles();
        initEmailValidation();
        initPhoneMask();
        initForgotPasswordToggle();
        initSocialButtons();

        // Демо-функции (можно удалить)
        initDemoAutofill();

        // Инициализация валидации форм
        initLoginValidation();
        initRegisterValidation();
        initForgotPasswordValidation();

        // Скрываем уведомления при загрузке
        hideAlerts();

        // Устанавливаем активную форму по умолчанию
        const activeForm = document.querySelector('.auth-form.active');
        if (!activeForm) {
            showForm('loginForm', true);
        }

        console.log('All auth components initialized successfully');
    }

    // Запуск инициализации с обработкой ошибок
    try {
        initAll();
    } catch (error) {
        console.error('Ошибка при инициализации модуля авторизации:', error);
    }
});

// ===========================================
// 8. ГЛОБАЛЬНЫЕ ФУНКЦИИ (если нужны)
// ===========================================

/**
 * Функция для быстрого переключения форм из других скриптов
 */
window.showAuthForm = function(formId) {
    const form = document.getElementById(formId);
    if (!form) return;

    // Скрываем все формы
    document.querySelectorAll('.auth-form').forEach(f => f.classList.remove('active'));

    // Показываем нужную форму
    form.classList.add('active');

    // Управляем вкладками
    const authTabs = document.querySelector('.auth-tabs');
    if (formId === 'forgotPasswordForm') {
        if (authTabs) authTabs.classList.add('hidden');
    } else {
        if (authTabs) authTabs.classList.remove('hidden');
    }
};

/**
 * Функция для показа/скрытия пароля (глобальная)
 */
window.togglePasswordVisibility = function(inputId) {
    const input = document.getElementById(inputId);
    if (!input) return;

    const toggleBtn = document.querySelector(`[data-target="${inputId}"]`);
    if (!toggleBtn) return;

    const icon = toggleBtn.querySelector('i');
    if (!icon) return;

    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
};

