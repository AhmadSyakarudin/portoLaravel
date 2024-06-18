<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome || My Portofolio</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<header class="header">
    <a href="#home" class="logo">Aka<span>rin</span></a>

    <i class='bx bx-menu' id="menu-icon"></i>

    <nav class="navbar">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/service">Service</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<section class="about" id="about">
    <div class="about-content">
        <h2 class = "heading">About <span>Me</span></h2>
        <h3 class="text-animation">
            <span></span>
        </h3>
        <p>Hallo semuanya, perkenalkan nama saya Ahmad Syakarudin, saya merupakan siswa dari SMK Wikrama Bogor. Saya siswa jurusan Pengembangan Perangkat Lunak dan Gim(PPLG)</p>
        <a href="#" class="btn">Read More</a>
    </div>
    <div class="about-img">
        <img src="{{('img/download (2).png') }}" alt="">
    </div>
</section>
</body>
