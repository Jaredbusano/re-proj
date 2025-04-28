<x-app-layout>
    <div class="flex min-h-screen bg-gray-50">
        <!-- Sidebar Navigation -->
        <div class="w-64 bg-blue-700 text-white shadow-lg">
            <div class="px-6 py-8">
                <h2 class="text-xl font-bold text-white">Student Portal</h2>
                <p class="text-blue-100 text-sm mt-2">Welcome, {{ Auth::user()->name }}</p>
            </div>
            
            <nav class="mt-2">
                <div class="px-6 py-3 bg-blue-800">
                    <span class="text-blue-200 text-xs font-semibold">MAIN NAVIGATION</span>
                </div>
                
                <ul class="space-y-1">
                    <!-- Dashboard Link -->
                    <li class="px-6 py-3 hover:bg-blue-600 transition duration-200">
                        <a href="{{ route('dashboard') }}" class="flex items-center text-white text-sm">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    
                    <!-- Profile Link -->
                    <li class="px-6 py-3 hover:bg-blue-600 transition duration-200">
                        <a href="{{ route('profile.edit') }}" class="flex items-center text-white text-sm">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            My Profile
                        </a>
                    </li>
                    
                    <!-- Courses Link -->
                    <li class="px-6 py-3 hover:bg-blue-600 transition duration-200">
                        <a href="#" class="flex items-center text-white text-sm">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            My Courses
                        </a>
                    </li>
                    
                    <!-- Grades Link -->
                    <li class="px-6 py-3 hover:bg-blue-600 transition duration-200">
                        <a href="#" class="flex items-center text-white text-sm">
                            <svg class="w-4 h-4 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            Grades
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-y-auto p-8">
            <div class="bg-white rounded-lg shadow-md border border-gray-200 p-6">
                <!-- Header -->
                <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6">
                    <div>
                        <h1 class="text-xl font-bold text-blue-700 mb-1">Dashboard</h1>
                        <p class="text-gray-500 text-sm">Welcome back, <span class="font-semibold text-gray-700">{{ Auth::user()->name }}</span>! 👋</p>
                    </div>

                    <div class="mt-4 md:mt-0">
                        <a href="{{ route('profile.edit') }}" class="inline-flex items-center bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm text-sm transition duration-300">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12-3v6a9 9 0 11-18 0V9a9 9 0 0118 0z" />
                            </svg>
                            Edit Profile
                        </a>
                    </div>
                </div>

                <!-- Student Details Section -->
                @if (!Auth::user()->student)
                    <div class="p-4 bg-yellow-50 border-l-4 border-yellow-400 text-yellow-800 rounded-lg mt-6 text-center">
                        <p class="text-sm font-semibold">No student information found. Please complete your profile.</p>
                        <a href="#" class="mt-3 inline-block bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg shadow-sm text-sm transition duration-300">
                            Complete Profile
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                        <!-- Personal Info Card -->
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 shadow-sm">
                            <h2 class="text-lg font-bold text-blue-700 mb-4">Student Information</h2>
                            <div class="space-y-3 text-gray-700 text-sm">
                                <div><span class="font-semibold">Student ID:</span> {{ Auth::user()->student->student_id }}</div>
                                <div><span class="font-semibold">First Name:</span> {{ Auth::user()->student->first_name }}</div>
                                <div><span class="font-semibold">Last Name:</span> {{ Auth::user()->student->last_name }}</div>
                                <div><span class="font-semibold">Date of Birth:</span> {{ Auth::user()->student->date_of_birth }}</div>
                                <div><span class="font-semibold">Gender:</span> {{ Auth::user()->student->gender }}</div>
                                <div><span class="font-semibold">Grade Level:</span> {{ Auth::user()->student->grade_level }}</div>
                            </div>
                        </div>

                        <!-- Contact Info Card -->
                        <div class="bg-blue-50 p-6 rounded-lg border border-blue-200 shadow-sm">
                            <h2 class="text-lg font-bold text-blue-700 mb-4">Contact Information</h2>
                            <div class="space-y-3 text-gray-700 text-sm">
                                <div><span class="font-semibold">Address:</span> {{ Auth::user()->student->address }}</div>
                                <div><span class="font-semibold">Phone:</span> {{ Auth::user()->student->phone }}</div>
                                <div><span class="font-semibold">Parent Name:</span> {{ Auth::user()->student->parent_name }}</div>
                                <div><span class="font-semibold">Parent Phone:</span> {{ Auth::user()->student->parent_phone }}</div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>