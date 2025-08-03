<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coklat Lung Anai</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">

    <header class="bg-white shadow-md sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="font-bold text-xl text-yellow-900">COKLAT LUNG ANAI</a>
            <div class="space-x-8">
                <a href="/#home" class="text-gray-700 hover:text-yellow-900">Home</a>
                <a href="/#tentang" class="text-gray-700 hover:text-yellow-900">Tentang</a>
                <a href="/#kontak" class="text-gray-700 hover:text-yellow-900">Kontak</a>
                <a href="{{ route('belanja') }}" class="bg-yellow-800 text-white px-4 py-2 rounded-md hover:bg-yellow-900">Belanja</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-yellow-950 text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; {{ date('Y') }} Coklat Lung Anai. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>