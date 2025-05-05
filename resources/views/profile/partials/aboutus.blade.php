<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Student Registration</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #3b82f6;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background: white;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #e5e7eb;
        }
        header a {
            margin: 0 15px;
            text-decoration: none;
            color: #2563eb;
            font-weight: 600;
        }
        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
        }
        .content {
            background: white;
            color: #3b82f6;
            padding: 40px;
            border-radius: 20px;
            max-width: 800px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
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
        <a href="/">Home</a>
        <a href="/about">About Us</a>
    </nav>
</header>

<main>
    <div class="content">
        <h1>About Us</h1>
        <p>Welcome to our Student Registration platform! We are dedicated to providing an easy and efficient way for students to enroll and access educational resources. Our mission is to make online education accessible, user-friendly, and impactful for learners everywhere.</p>
    </div>
</main>

<footer>
    Designed by Jared Busano, Cyra Mamparo | Powered by Laravel
</footer>

</body>
</html>
