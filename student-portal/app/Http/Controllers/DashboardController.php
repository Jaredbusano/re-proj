<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Fake data for now
        $currentCourses = 5;
        $upcomingAssignments = 3;
        $unreadMessages = 2;

        return view('dashboard', compact('currentCourses', 'upcomingAssignments', 'unreadMessages'));
    }
}
