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

    <section class="home" id="home">

        <div class="home-img">
            <img src="{{('img/download (2).png') }}" alt="">
        </div>

        <div class="home-content">
            <h1>It's me <span>Ahmad</span></h1>
            <h3 class="text-animation">
                I'm a <span></span>
            </h3>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eum sapiente, veniam totam dolorum assumenda. Fugiat eos saepe dolorum suscipit beatae molestias, inventore dignissimos corrupti commodi consectetur maiores nulla porro.</p>

            <div class="social-icons">
                <a href="https://www.linkedin.com/in/ahmad-syakarudin-7386aa2b8/"><i class='bx bxl-linkedin-square'></i></a>
                <a href="http://www.instagram.com/syaka.png"><i class='bx bxl-instagram-alt' ></i></a>
                <a href="#"><i class='bx bxl-facebook-square'></i></a>
                <a href="#"><i class='bx bxl-twitter'></i></a>
            </div>

            <a href="#" class="btn">Hire Me</a>
        </div>
    </section>
</body>
</html>
