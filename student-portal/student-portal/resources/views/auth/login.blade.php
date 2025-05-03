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
            background: #0d1117;
            font-family: 'Inter', sans-serif;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            width: 400px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        .login-card-header {
            background: #2563eb;
            padding: 2rem;
            text-align: center;
        }
        .login-card-header img {
            height: 60px;
            margin-bottom: 10px;
        }
        .login-card-header h2 {
            color: #fff;
            margin: 0;
            font-weight: 600;
            font-size: 1.5rem;
        }
        .login-card-body {
            padding: 2rem;
        }
        .login-card-body input {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-card-body button {
            width: 100%;
            padding: 0.75rem;
            background: #2563eb;
            border: none;
            color: #fff;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 1rem;
        }
        .login-card-body .link {
            text-align: center;
            display: block;
            margin-top: 1rem;
            font-size: 0.9rem;
            color: #2563eb;
            text-decoration: none;
        }
        .login-card-body .divider {
            text-align: center;
            margin: 1rem 0;
            color: #999;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>

<div class="login-card">
    <div class="login-card-header">
        <img src="{{ asset('img/umlogo.png') }}" alt="Logo">
        <h2>Student Portal</h2>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="login-card-body">
            <input type="email" name="email" placeholder="Enter your email" required autofocus>
            <input type="password" name="password" placeholder="Enter your password" required>

            <button type="submit">Log In</button>

            <div class="divider">OR</div>

            <a href="{{ route('register') }}" class="link">Create New Account</a>
            <a href="{{ route('password.request') }}" class="link">Forgot your password?</a>
        </div>
    </form>
</div>

</body>
</html>
