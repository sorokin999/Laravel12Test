<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechShop - Интернет-магазин электроники</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
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

<?php echo $__env->make('include.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('include.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH /Users/sorokin/Documents/Laravel12Test/resources/views/app.blade.php ENDPATH**/ ?>