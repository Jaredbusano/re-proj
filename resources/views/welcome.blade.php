<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #3b82f6; /* Blue background */
        }
        header {
            background: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
        }
        .hero {
            background: white;
            margin: 40px auto;
            padding: 60px;
            border-radius: 20px;
            width: 90%;
            max-width: 1200px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        .hero-text {
            max-width: 600px;
        }
        .hero-text h1 {
            font-size: 2.5rem;
            color: #1e3a8a;
            margin-bottom: 20px;
        }
        .hero-text p {
            color: #4b5563;
            margin-bottom: 30px;
        }
        .hero-buttons a {
            display: inline-block;
            margin-right: 15px;
            padding: 12px 24px;
            background-color: #3b82f6;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s;
        }
        .hero-buttons a.secondary {
            background-color: white;
            color: #3b82f6;
            border: 2px solid #3b82f6;
        }
        .hero-buttons a:hover {
            background-color: #2563eb;
            color: white;
        }
        .read-more {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
            color: #2563eb;
            cursor: pointer;
        }
        .hero-img {
            max-width: 100%;
            max-height: 300px;
            object-fit: contain;
        }
        footer {
            text-align: center;
            padding: 20px;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <div class="logo" style="font-weight: bold; font-size: 20px; color: #2563eb;">
        Student Register
    </div>
    <nav>
        <a href="#">Home</a>
        <a href="{{ url('/about') }}">About Us</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>Online <span style="color: #3b82f6;">Education</span></h1>
        <p>Learn something new anytime, anywhere. Join us and unlock your potential with easy access to quality education.</p>
        <div class="hero-buttons">
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}" class="secondary">Register</a>
        </div>
    </div>
    <div>
        <img src="{{ asset('img/welcomelogo.png') }}" alt="Logo" class="hero-img">
    </div>
</section>

<footer>
    Designed by Jared Busano, Cyra Mamparo | Powered by Laravel
</footer>

</body>
</html>
