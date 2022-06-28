<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/all.js') }}"></script>

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased bg-gray-50 text-gray-900">
        <header class="py-4 w-full items-center flex justify-between px-6 md:px-12 bg-white ">
            <div class="gap-x-1 flex items-center">
                <img src="{{ asset('img/lasu.png') }}" class="md:w-12 w-10 h-auto" alt="Logo">
                <h1 class="font-black text-2xl md:text-4xl text-gray-900">Facility</h1>
            </div>
                <div class="gap-x-9 hidden md:flex items-center">
                    <a href="/" class="text-lg">Home</a>
                    <a href="" class="text-lg">About</a>
                    <a href="/contact" class="text-lg">Contact</a>
                    <a href="/#" class="text-lg">Facilities</a>
                    <a href="/login" class="text-lg py-3 px-7 font-bold bg-green-500 rounded-md text-white font-medium">Sign in</a>
                </div>
            <i id="nav" onclick="showMenu()" class="fa fa-bars md:hidden text-green-500 fa-2x"></i>
        </header>
        @yield('content')
        <div id="menuu" class="hidden bg-green-500 fixed w-3/4 h-screen top-0 right-0 text-white py-12">
            <div class="mb-4 flex justify-end px-10">
                <i onclick="clsMenu()" class="fa fa-times fa-2x text-white"></i>
            </div>
            <div class="flex font-bold flex-col gap-y-5 px-6">
                <a href="/" class="text-lg hover:bg-white hover:text-green-500 py-3 px-4">Home</a>
                <a href="" class="text-lg hover:bg-white hover:text-green-500 py-3 px-4">About</a>
                <a href="/contact" class="text-lg hover:bg-white hover:text-green-500 py-3 px-4">Contact</a>
                <a href="/#" class="text-lg hover:bg-white hover:text-green-500 py-3 px-4">Facilities</a>
                <a href="/login" class="text-lg hover:bg-white hover:text-green-500 py-3 px-4 text-white">Sign in</a>
            </div>
        </div>
    </body>
    <script>
        function showMenu(){
            document.querySelector("#menuu").classList.remove("hidden");
        }
        function clsMenu(){
            document.querySelector("#menuu").classList.add("hidden");
        }
    </script>
</html>
