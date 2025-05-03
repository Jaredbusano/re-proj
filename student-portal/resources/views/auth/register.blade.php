<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal Register</title>
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
        }
        .register-container {
            background: white;
            width: 450px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .register-container img {
            width: 80px;
            margin-bottom: 20px;
        }
        .register-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #1e3a8a;
            font-weight: 700;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input {
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
        }
        button {
            background-color: #3b82f6;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #2563eb;
        }
        .link {
            text-decoration: none;
            color: #3b82f6;
            font-size: 14px;
            margin-top: 10px;
            display: inline-block;
        }
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="register-container">
    <img src="{{ asset('img/umlogo.png') }}" alt="Logo">
    <h2>Create Your Account</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <input id="name" type="text" name="name" value="{{ old('name') }}" required placeholder="Full Name" autofocus autocomplete="name">
        @error('name') <div class="error">{{ $message }}</div> @enderror

        <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="Email Address" autocomplete="email">
        @error('email') <div class="error">{{ $message }}</div> @enderror

        <input id="password" type="password" name="password" required placeholder="Password" autocomplete="new-password">
        @error('password') <div class="error">{{ $message }}</div> @enderror

        <input id="password_confirmation" type="password" name="password_confirmation" required placeholder="Confirm Password" autocomplete="new-password">
        @error('password_confirmation') <div class="error">{{ $message }}</div> @enderror

        <!-- Additional Student Information Fields -->
        <input id="student_id" type="text" name="student_id" value="{{ old('student_id') }}" required placeholder="Student ID">
        @error('student_id') <div class="error">{{ $message }}</div> @enderror

        <input id="age" type="number" name="age" value="{{ old('age') }}" required placeholder="Age">
        @error('age') <div class="error">{{ $message }}</div> @enderror

        <input id="course" type="text" name="course" value="{{ old('course') }}" required placeholder="Course of Study">
        @error('course') <div class="error">{{ $message }}</div> @enderror

        <textarea id="address" name="address" rows="4" placeholder="Address" required>{{ old('address') }}</textarea>
        @error('address') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Register</button>

        <a href="{{ route('login') }}" class="link">Already registered? Login here</a>
    </form>
</div>

</body>
</html>
