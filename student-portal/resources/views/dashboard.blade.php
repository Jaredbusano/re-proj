<x-app-layout>
    <div class="p-6 lg:p-8 bg-white border-b border-gray-200 rounded-xl shadow-md">
        <h1 class="text-2xl font-bold text-blue-600">Student Dashboard</h1>
        <p class="mt-4 text-gray-600">Welcome, {{ Auth::user()->name }}! 🎉</p>

        <div class="mt-8">
            <a href="{{ route('profile.edit') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">
                Edit Profile
            </a>
        </div>
    </div>
</x-app-layout>
