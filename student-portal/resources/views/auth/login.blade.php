<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #3b82f6; /* Blue background */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        .home-button {
            position: absolute;
            top: 20px;
            right: 20px;
            background: white;
            padding: 8px 16px;
            border-radius: 20px;
            color: #3b82f6;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .home-button:hover {
            background: #f0f0f0;
            color: #2563eb;
            transform: translateY(-1px);
        }
        .login-container {
            background: white;
            width: 400px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .login-container img {
            width: 80px;
            margin-bottom: 20px;
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #1e3a8a;
            font-weight: 700;
        }
        .login-container form {
            display: flex;
            flex-direction: column;
        }
        .login-container input {
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
        }
        .login-container button {
            background-color: #3b82f6;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }
        .login-container button:hover {
            background-color: #2563eb;
        }
        .login-container .divider {
            margin: 20px 0;
            font-size: 14px;
            color: #9ca3af;
            position: relative;
        }
        .login-container .divider::before,
        .login-container .divider::after {
            content: "";
            height: 1px;
            width: 40%;
            background: #d1d5db;
            position: absolute;
            top: 50%;
        }
        .login-container .divider::before {
            left: 0;
        }
        .login-container .divider::after {
            right: 0;
        }
        .login-container a {
            text-decoration: none;
            color: #3b82f6;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <!-- Home Button - Placed outside the login container -->
    <a href="/" class="home-button">Home</a>

    <!-- Login Container -->
    <div class="login-container">
        <img src="{{ asset('img/umlogo.png') }}" alt="Logo">
        <h2>Student Portal Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Email Address" required autofocus>
            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

            <div class="divider">OR</div>

            <a href="{{ route('register') }}">Create New Account</a><br>
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </form>
    </div>
</body>
</html>