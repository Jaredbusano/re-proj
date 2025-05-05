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
            background-color: #3b82f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-container {
            background: white;
            width: 900px;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
        }

        .register-container img {
            width: 80px;
            margin-bottom: 20px;
            align-self: center;
        }

        .register-container h2 {
            font-size: 24px;
            color: #1e3a8a;
            font-weight: 700;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            width: 100%;
        }

        .form-grid {
            display: flex;
            gap: 30px;
        }

        .form-column {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input, select, textarea {
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            width: 100%;
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
            width: 100%;
            margin-top: 20px;
        }

        button:hover {
            background-color: #2563eb;
        }

        .link {
            text-decoration: none;
            color: #3b82f6;
            font-size: 14px;
            margin-top: 15px;
            display: block;
            text-align: center;
        }

        .terms-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            white-space: nowrap;
        }

        .terms-label {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0;
        }

        @media (max-width: 768px) {
            .form-grid {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

<div class="register-container">
    <img src="{{ asset('img/umlogo.png') }}" alt="Logo">
    <h2>Create Your Account</h2>

    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf

        <div class="form-grid">
            <!-- LEFT COLUMN -->
            <div class="form-column">
                <input type="text" name="name" value="{{ old('name') }}" required placeholder="Full Name">
                <input type="email" name="email" value="{{ old('email') }}" required placeholder="Email Address">
                <input type="password" name="password" required placeholder="Password">
                <input type="password" name="password_confirmation" required placeholder="Confirm Password">
                <input type="text" name="student_id" value="{{ old('student_id') }}" required placeholder="Student ID">
                <input type="text" name="course" value="{{ old('course') }}" required placeholder="Course of Study">
                <select name="year_level" required>
                    <option value="" disabled selected>Year Level</option>
                    <option value="1st Year">1st Year</option>
                    <option value="2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="form-column">
                <input type="date" name="dob" value="{{ old('dob') }}" required placeholder="Date of Birth">
                <select name="gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <input type="text" name="phone" value="{{ old('phone') }}" required placeholder="Phone Number">
                <input type="text" name="guardian_name" value="{{ old('guardian_name') }}" required placeholder="Guardian Full Name">
                <input type="text" name="guardian_phone" value="{{ old('guardian_phone') }}" required placeholder="Guardian Contact Number">
                <textarea name="address" rows="3" required placeholder="Address">{{ old('address') }}</textarea>
                <input type="file" name="profile_photo" accept="image/*">
            </div>
        </div>

        <div class="terms-container">
            <label class="terms-label">
                <input type="checkbox" name="agree_terms" required>
                <span>I agree to the Terms and Conditions</span>
            </label>
        </div>

        <button type="submit">Register</button>

        <a href="{{ route('login') }}" class="link">Already registered? Login here</a>
    </form>
</div>

</body>
</html>