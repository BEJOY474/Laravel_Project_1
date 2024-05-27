<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex justify-center min-h-screen py-4 bg-gray-100 items-top dark:bg-gray-900 sm:items-center sm:pt-0">
            <!-- @if (Route::has('login'))
                <div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline dark:text-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline dark:text-gray-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif -->

            <h1>This is my home page</h1>

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                   <ul class="list">
                        <li class="listitem"> <a href="{{ route('about.us') }}">About Us</a> </li>
                        <li class="listitem"> <a href="{{ route('contact.us') }}">Contact Us</a> </li>
                        <li class="listitem"> <a href="{{ route('uiu.us') }}">About UIU</a> </li>
                        <li class="listitem"> <a href="{{ route('faculty.us') }}">Faculty</a> </li>
                        <li class="listitem"> <a href="{{ route('laravel') }}">Laravel</a> </li>
                        <li class="listitem"> <a href="{{ route('game') }}">Game</a> </li>
                   </ul>
                </div>
            </div>
        </div>
    </body>
</html>
