<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- footer.php -->
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-info">
            <p>&copy; <?php echo date("Y"); ?> Nedev Дитейлинг. Всички права запазени.</p>
        </div>

        <!-- Two columns under the text -->
        <div class="footer-columns">
            <div class="footer-column">
                <h4>Навигация</h4>
                <ul>
                    <li><a href="index.php">Начало</a></li>
                    <li><a href="#">За нас</a></li>
                    <li><a href="#">Услуги</a></li>
                    <li><a href="#">Продукти</a></li>
                    <li><a href="#">Контакт</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h4>За връзка с нас</h4>
                <p>Телефон: <a href="tel:+359123456789">+359 123 456 789</a></p>
                <p>Email: <a href="mailto:info@nedev.bg">info@nedev.bg</a></p>
                <p>Instagram: <a href="https://instagram.com/nedev" target="_blank">@nedev</a></p>
            </div>
        </div>
    </div>
</footer>


</body>
</html>