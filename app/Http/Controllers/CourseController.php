<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        // Later, pull from database
        $courses = [
            [
                'name' => 'Advanced Web Development',
                'code' => 'CS-401',
                'professor' => 'Prof. Smith',
                'schedule' => 'Mon & Wed, 10:00 AM - 11:30 AM',
                'status' => 'Active'
            ],
        ];

        return view('courses.index', compact('courses'));
    }
}
