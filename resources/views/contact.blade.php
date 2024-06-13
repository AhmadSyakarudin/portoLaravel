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
        <a href="/" class="active">Home</a>
        <a href="/about">About</a>
        <a href="/service">Service</a>
        <a href="/contact">Contact</a>
    </nav>
</header>

<section class="contact" id="contact">

    <h2 class="heading">Contact <span>Me</span></h2>

    <form action="#">

        <div class="input-box">
            <input type="text" placeholder="Full Name">
            <input type="email"
            placeholder="email">
        </div>
        <div class="input-box">
            <input type="number"
            placeholder="Phone Number">
            <input type="text"
            placeholder="Subject">
        </div>

        <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
</section>

<footer class="footer">
    <div class="social">
        <a href="https://www.linkedin.com/in/ahmad-syakarudin-7386aa2b8/"><i class='bx bxl-linkedin-square'></i></a>
        <a href="http://www.instagram.com/syaka.png"><i class='bx bxl-instagram-alt' ></i></a>
        <a href="#"><i class='bx bxl-facebook-square'></i></a>
        <a href="#"><i class='bx bxl-twitter'></i></a>
    </div>
    <ul class="list">
        <li>
            <a href="#">FAQ</a>
        </li>
        <li>
            <a href="#">Services</a>
        </li>
        <li>
            <a href="#">About Me</a>
        </li>
        <li>
            <a href="#">Privacy Policy</a>
        </li>
    </ul>
    <p class="copyright">
        @ Ahmad Syakarudin | 2024 Since
    </p>
</footer>
</body>
