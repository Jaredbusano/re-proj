<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Dashboard</title>
</head>
<body>
<div class="min-h-screen bg-gray-50">
    <!-- Modern Header -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 text-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-3xl font-bold">Dashboard</h1>
                    <p class="text-blue-100 mt-1">Welcome back, {{ Auth::user()->name }}!</p>
                </div>
                <div class="flex flex-col md:flex-row items-start md:items-center space-y-2 md:space-y-0 md:space-x-4">
                    <nav class="flex space-x-1 bg-white/10 rounded-lg p-1">
                        <a href="#" class="px-4 py-2 text-sm font-medium rounded-md hover:bg-white/20 transition-colors">Profile</a>
                    </nav>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 text-sm font-medium rounded-md bg-white/10 hover:bg-white/20 transition-colors">
                            Log Out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Vibrant Stats Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Current Courses Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Current Courses</p>
                            <h2 class="text-2xl font-bold text-blue-800">{{ $currentCourses }}</h2>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-50 px-6 py-3">
                    <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-800 flex items-center">
                        View all courses
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Upcoming Assignments Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Upcoming Assignments</p>
                            <h2 class="text-2xl font-bold text-purple-800">{{ $upcomingAssignments }}</h2>
                        </div>
                    </div>
                </div>
                <div class="bg-purple-50 px-6 py-3">
                    <a href="#" class="text-sm font-medium text-purple-600 hover:text-purple-800 flex items-center">
                        View assignments
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Unread Messages Card -->
            <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 hover:shadow-lg transition-shadow">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Unread Messages</p>
                            <h2 class="text-2xl font-bold text-green-800">{{ $unreadMessages }}</h2>
                        </div>
                    </div>
                </div>
                <div class="bg-green-50 px-6 py-3">
                    <a href="#" class="text-sm font-medium text-green-600 hover:text-green-800 flex items-center">
                        Check messages
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Student Profile Section -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100">
            <div class="px-6 py-5 border-b border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800">Student Information</h2>
            </div>

            <!-- <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-100 mb-6">
    <div class="px-6 py-5 border-b border-gray-100">
        <h2 class="text-xl font-semibold text-gray-800">User Information</h2>
    </div>
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h3 class="text-lg font-medium text-gray-700 mb-4 pb-2 border-b border-gray-100">Account Details</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-500">Name</p>
                        <p class="font-medium">{{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-medium">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <div>
                <h3 class="text-lg font-medium text-gray-700 mb-4 pb-2 border-b border-gray-100">Status</h3>
                <div class="space-y-4">
                    <div>
                        <p class="text-sm text-gray-500">Student Profile</p>
                        <p class="font-medium">
                            {{ Auth::user()->student ? 'Completed' : 'Not Completed' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
            @if(Auth::user()->student)
                @php $student = Auth::user()->student; @endphp
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Personal Info -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-700 mb-4 pb-2 border-b border-gray-100">Personal Information</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="text-sm text-gray-500">Student ID</p>
                                    <p class="font-medium">{{ $student->student_id }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Full Name</p>
                                    <p class="font-medium">{{ $student->first_name }} {{ $student->last_name }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Date of Birth</p>
                                    <p class="font-medium">{{ $student->date_of_birth }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Gender</p>
                                    <p class="font-medium">{{ $student->gender }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Contact & Academic Info -->
                        <div>
                            <h3 class="text-lg font-medium text-gray-700 mb-4 pb-2 border-b border-gray-100">Contact & Academic Information</h3>
                            <div class="space-y-4">
                                <div>
                                    <p class="text-sm text-gray-500">Email</p>
                                    <p class="font-medium">{{ Auth::user()->email }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Phone</p>
                                    <p class="font-medium">{{ $student->phone }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Grade Level</p>
                                    <p class="font-medium">{{ $student->grade_level }}</p>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Course</p>
                                    <p class="font-medium">{{ $student->course }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="p-8 text-center">
                    <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">Profile Incomplete</h3>
                    <p class="mt-2 text-gray-600">No student information found. Please complete your profile to access all features.</p>
                    <div class="mt-6">
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            Complete Profile
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
