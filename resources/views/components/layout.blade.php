<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    
</head>

<body>

    <div class="navbar bg-gray-800 shadow-sm px-12">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <img src="{{ asset('images/laravel.svg') }}" alt="Logo">
                </div>
                <ul
                    tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                         <nav class="text-white ">
                    <x-nav-link href="/" :active="request()-> is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()-> is('about')">About</x-nav-link>
                    <x-nav-link href="/contact" :active="request()-> is('contact')">Contact</x-nav-link>
                </nav>
                </ul>
            </div>
            <img src="{{ asset('images/laravel.svg.png') }}" width="40px" alt="Logo">
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <nav class="text-white ">
                    <x-nav-link href="/" :active="request()-> is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()-> is('about')">About</x-nav-link>
                    <x-nav-link href="/contact" :active="request()-> is('contact')">Contact</x-nav-link>
                </nav>

            </ul>
        </div>
        <div class="navbar-end">
            <a class="btn">Button</a>
        </div>
    </div>
    <h2 class="text-xl font-bold">{{$heading}}</h2>

    
    {{$slot}}
</body>

</html>