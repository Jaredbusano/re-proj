<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    /**
     * Validate the incoming registration data.
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'date_of_birth' => ['required', 'date'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string', 'max:500'],
            'phone' => ['required', 'string', 'max:15'],
            'parent_name' => ['required', 'string', 'max:255'],
            'parent_phone' => ['required', 'string', 'max:15'],
            'grade_level' => ['required', 'string', 'max:50'],
        ]);
    }

    /**
     * Create a new user and associated student.
     */
    protected function create(array $data)
    {
        // First, validate the data
        $this->validator($data)->validate();

        // Create the User
        $user = User::create([
            'name' => $data['first_name'] . ' ' . $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'student', // Make sure your users table has a 'role' column
        ]);

        // Generate a random student ID
        $studentId = 'STU' . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        // Create the associated Student record
        $student = new Student([
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

        // Link student to the user
        $user->student()->save($student);

        return $user;
    }
}
