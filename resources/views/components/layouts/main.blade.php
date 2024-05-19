<?php
$lang = \Illuminate\Support\Facades\App::getLocale()
?>

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Ilm-u ziyo maktab</title>
    <meta content="Ilm-u ziyo tibbiyot kolleji web-sayti. Bizning hamshiralik ishi va boshqa qo'shimcha yo'nalishlarimiz haqida ma'lumot oling." name="description">
    <meta content="Ilm-u ziyo, tibbiyot kolleji, hamshiralik, psixologiya, logopediya, bolalar massaji" name="keywords">

    <!-- Favicons -->
    <link href="/assets/img/Logo_maktab.png" rel="icon">
    <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="./assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="./assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="./assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="./assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="./assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/after.css" rel="stylesheet">
</head>

<body>

<header id="header" class="fixed-top">
    <div class="mx-3 d-flex align-items-center">

        <a href="/uz" class="logo me-auto"><img src="assets/img/Logo_maktab%20(2).png" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">{{__('words.home')}}</a></li>
                <li><a class="nav-link scrollto" href="#why_us">{{ __('words.educational') }}</a></li>
                <li><a class="nav-link scrollto" href="#haqida">{{ __('words.about') }}</a></li>
                <li><a class="nav-link scrollto" href="#contact">{{ __('words.con') }}</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <div class="dropdown mx-3">
            <button class="btn btn dropdown-toggle" style="border-radius: 50px;border: 1px solid #F59902;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                @if($lang == 'en') English @endif
                @if($lang == 'ru') Русский @endif
                @if($lang == 'uz') Uzbek @endif

            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item " href="/uz">Uzbek</a></li>
                <li><a class="dropdown-item" href="/ru">Русский</a></li>
                <li><a class="dropdown-item" href="/en">English</a></li>
            </ul>
        </div>


    </div>
</header>

{{ $slot }}


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const navbarToggler = document.querySelector(".mobile-nav-toggle");
        const navbarMenu = document.querySelector("#navbar ul");

        navbarToggler.addEventListener("click", () => {
            navbarMenu.classList.toggle("active");
        });
    });
</script>

</body>
