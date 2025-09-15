<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coklat Lung Anai</title>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-black bg-white antialiased">

    {{-- Navbar --}}
    <nav class="bg-white fixed top-0 left-0 w-full z-50 shadow-md rounded-b-[50px]">
        <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4">
            {{-- Logo & Title --}}
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-[#5C2600] rounded-full"></div>
                <span class="text-xl font-extrabold text-black">COKLAT LUNG ANAI</span>
            </div>

            {{-- Desktop Menu --}}
            <ul class="hidden md:flex space-x-8 font-semibold text-[#5C2600] tracking-wide text-[15px]">
                <li><a href="{{ url('/#hero') }}" class="hover:text-orange-500 transition">HOME</a></li>
                <li><a href="{{ url('/#about') }}" class="hover:text-orange-500 transition">TENTANG</a></li>
                <li><a href="{{ url('/#contact') }}" class="hover:text-orange-500 transition">KONTAK</a></li>
                <li><a href="{{ route('shop') }}" class="hover:text-orange-500 transition">BELANJA</a></li>
            </ul>

            {{-- Mobile Button --}}
            <div class="md:hidden">
                <button id="mobile-menu-btn" class="text-[#5C2600] focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>

        {{-- Mobile Menu Dropdown --}}
        <div id="mobile-menu" class="md:hidden hidden px-6 pb-4">
            <ul class="space-y-2 text-[#5C2600] font-medium">
                <li><a href="{{ url('/#hero') }}" class="block py-2 hover:text-orange-500">HOME</a></li>
                <li><a href="{{ url('/#about') }}" class="block py-2 hover:text-orange-500">TENTANG</a></li>
                <li><a href="{{ url('/#contact') }}" class="block py-2 hover:text-orange-500">KONTAK</a></li>
                <li><a href="{{ route('shop') }}" class="block py-2 hover:text-orange-500">BELANJA</a></li>
            </ul>
        </div>
    </nav>

    {{-- Spacer to push content below navbar --}}
    <div class="pt-24"></div>

    {{-- Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer Section --}}
    @yield('footer')

    {{-- Script Toggle Mobile Menu --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('mobile-menu-btn');
            const menu = document.getElementById('mobile-menu');

            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        });
    </script>
    @include('komponen.footer')
</body>
</html>
