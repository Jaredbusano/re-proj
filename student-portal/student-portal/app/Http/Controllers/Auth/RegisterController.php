<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Create a new user and associated student.
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'student', // Make sure your users table has a 'role' column
        ]);

        // Generate student ID
        $studentId = 'STU' . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        Student::create([
            'user_id' => $user->id,
            'student_id' => $studentId,
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'date_of_birth' => $data['date_of_birth'],
            'gender' => $data['gender'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'parent_name' => $data['parent_name'],
            'parent_phone' => $data['parent_phone'],
            'grade_level' => $data['grade_level'],
        ]);

        return $user;
    }
}
