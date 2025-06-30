<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DevScribe</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Figtree:wght@400;600;700&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            {{-- Top Navigation --}}
            <div class="flex justify-between items-center px-6 py-4 border-b border-gray-200 dark:border-gray-700">
                <!-- Left: Logo & Brand -->
                <div class="flex items-center space-x-3">
                    <img src="{{ asset('images/undraw_ideas_vn7a.svg') }}" alt="DevScribe Logo" class="w-12 h-12">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white tracking-tight">DevScribe</h1>
                </div>


                <!-- Right: Auth Links -->
                <div class="space-x-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ms-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            </div>

            {{-- Main Content --}}
            <div class="max-w-7xl mx-auto p-6 lg:p-8">

                <!-- Intro Text -->
                <div class="mt-4 text-center">
                    <p class="text-gray-600 dark:text-gray-300 text-lg">
                        A clean and simple blog to share thoughts, tutorials, and stories from developers like you.
                    </p>
                </div>

                <!-- Card Grid for Posts -->
                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($posts as $item)
                        <div class="bg-white dark:bg-gray-800 shadow-md hover:shadow-xl hover:scale-[1.02] transition-all duration-300 ease-in-out rounded-lg p-5 border border-gray-200 dark:border-gray-700 flex flex-col">

                            <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mb-2">{{ $item->title }}</h2>
                            <p class="text-gray-600 dark:text-gray-300 text-sm mb-4">
                                {{ $item->content }}
                            </p>
                            <div class="mt-auto text-gray-500 dark:text-gray-400 text-xs pt-4 border-t border-gray-700">
                                <p>By <span class="font-medium">{{ $item->user->name }}</span></p>
                                <p class="mt-1">{{ $item->created_at->format('M d, Y h:i A') }}</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="mt-8 flex justify-center">
                        {{ $posts->links() }}
                    </div>

                </div>

            </div>
        </div>
    </body>
</html>
