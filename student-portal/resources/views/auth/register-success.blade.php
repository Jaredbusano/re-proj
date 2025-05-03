<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            background-color: #3b82f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }
        .success-card {
            background: white;
            color: #1e3a8a;
            padding: 50px 30px;
            border-radius: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }
        .success-card h1 {
            font-size: 28px;
            margin-bottom: 20px;
        }
        .success-card p {
            font-size: 16px;
            margin-bottom: 30px;
        }
        .success-card a {
            display: inline-block;
            background-color: #3b82f6;
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .success-card a:hover {
            background-color: #2563eb;
        }
    </style>
</head>
<body>

<div class="success-card">
    <h1>Registration Successful!</h1>
    <p>Your account has been created. You can now log in.</p>
    <a href="{{ route('login') }}">Go to Login</a>
</div>

</body>
</html>
