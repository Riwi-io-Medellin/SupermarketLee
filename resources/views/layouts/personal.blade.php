<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="there is the descripcion" />
    <meta name="keywords" content="CRUD, Laravel, Modularization">
    <meta name="sitedomain" content="https://riwi.io">
    <meta name="organization" content="Riwi">
    <meta name="author" content="Javier Cómbita Téllez">
    <meta name="designer" content="Javier Cómbita Téllez">
    <meta name="copyright" content="© 2024 Riwi. All rights reserved">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="revisit-after" content="15days">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- component -->
    <nav
        class="bg-white border border-gray-200 dark:border-gray-700 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-800 shadow">
        <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="/" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">
                    Home
                </span>
            </a>

            <div class="flex items-center">
                <button id="menu-toggle" type="button"
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600 md:hidden">
                    <span class="sr-only">Open main menu</span>
                    <!-- Hamburger icon -->
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <div class="w-full md:block md:w-auto hidden" id="mobile-menu">
                <ul class="flex flex-col mt-4 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                    <li>
                        <a href="{{ route('categories.index')}}"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">
                            Categories
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('products.index')}}"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 dark:text-white"
                            aria-current="page">
                            Products
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- component -->
    <main class="mt-10">
        <div class="container mx-auto px-4 sm:px-6">
            @yield('content')
        </div>
    </main>

    <!-- component -->
    <footer class="bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-400 py-6 px-4">
        <div class="container mx-auto flex flex-wrap justify-between">
            <div class="flex items-center">
                <span class="flex-shrink-0 text-sm font-semibold">
                    {{ config('app.name', 'Laravel') }} © {{ date('Y') }}. All rights reserved.
                </span>
            </div>
        </div>
    </footer>
</html>

</body>

</html>
