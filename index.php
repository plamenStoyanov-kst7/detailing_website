<!DOCTYPE html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nedev Дитейлинг</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include('header.php'); ?>  <!-- This includes the header.php file -->

    <section class="hero">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="videos/intro_video.mp4" type="video/mp4">
        Вашият браузър не поддържа видеоклипове.
    </video>
    <div class="hero-content">
        <h1>Специалисти в професионалното полиране</h1>
        <p>Оставете автомобила си да блести като нов.</p>
        <a href="#" class="btn">Свържете се с нас</a>
    </div>
</section>


    <section class="product-gallery">
    <div class="container">
        <h2>Нашите продукти</h2>
        <div class="gallery-grid">
            <div class="gallery-item">
            <a href="#">
                <img src="images/pochistvane_na_exteroiora.png" alt="Продукти за почистване на екстериора"> 
                <p>Почистване на екстериора</p>
            </a>
            </div>
            <div class="gallery-item">
            <a href="#">
                <img src="images/pochistvane_na_interiora.png" alt="Продукти за почистване на интериора">
                <p>Почистване на интериора</p>
            </a>
            </div>
            <div class="gallery-item">
            <a href="#">
                <img src="images/polirane_na_lakovoto_pokritie.png" alt="Продукти за полиране на лаковото покритие">
                <p>Полиране на лаковото покритие</p>
            </a>
            </div>
            <div class="gallery-item">
            <a href="#">
                <img src="images/zashtiti_pokritiq.png" alt="Продукти за защита на покритие">
                <p>Защитни покрития</p>
            </a>
            </div>
            <div class="gallery-item">
            <a href="#">
                <img src="images/paketi.png" alt="Продукти пакети">
                <p>Пакети</p>
            </a>
            </div>
            <div class="gallery-item">
            <a href="#">
                <img src="images/aksesoari.png" alt="Продукти аксесоари">
                <p>Аксесоари</p>
            </a>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2>Нашите услуги</h2>
        <div class="service-boxes">
            <div class="service">
                <img src="images/pochistvane_na_kojen_salon.jpg" alt="Почистване на кожен салон" class="service-image">
            </div>
            <div class="service">
                <img src="images/prane_na_tekstilen_salon.jpg" alt="Пране на текстилен салон" class="service-image">
            </div>
            <div class="service">
                <img src="images/polirane_na_avtomobil.jpg" alt="Полиране на автомобила" class="service-image">
            </div>
        </div>
        <a href="services.html" class="btn-more-services">Повече услуги</a>
    </div>
</section>


    <section class="product-banner">
    <div class="container">
        <a href="ultracoat.php" class="banner-link">
            <img src="images/ultracoat.png" alt="Ultracoat Product Banner">
            <div class="banner-content">
            </div>
        </a>
    </div>
</section>  

<?php include('footer.php'); ?>  <!-- This includes the footer.php file -->

</body>
</html>
