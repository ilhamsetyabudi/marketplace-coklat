@extends('layouts.app')

@section('content')
<section id="hero" class="relative text-center bg-gradient-to-br from-orange-200 to-yellow-300 py-32 mt-16">
    <h1 class="text-4xl font-extrabold mb-2">Selamat Datang di Coklat Lung Anai</h1>
    <p class="text-lg text-gray-800 mb-4">Nikmati kelezatan coklat lokal dari Kalimantan Timur.</p>
    <div class="mt-6">
        <img src="{{ asset('assets/hero-choco.png') }}" class="mx-auto max-w-xl rounded-lg shadow-lg">
    </div>
</section>

<section id="about" class="bg-white py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-4">Tentang Kami</h2>
        <div class="grid md:grid-cols-2 gap-6 items-center">
            <img src="{{ asset('assets/about/tree.png') }}" class="rounded-lg">
            <div>
                <p class="mb-4 text-lg">Coklat Lung Anai berdiri sejak 2020 sebagai inisiatif lokal untuk mengangkat potensi kakao desa dari Lung Anai...</p>
                <blockquote class="italic text-sm text-gray-700">"Kami percaya, setiap biji kakao memiliki cerita..."</blockquote>
            </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6 items-center mt-12">
            <ul class="space-y-4 text-lg">
                <li>🍫 100% Kakao Lokal</li>
                <li>🎁 Rasa Premium</li>
                <li>🌍 Dukung UMKM</li>
            </ul>
            <img src="{{ asset('assets/about/keunggulan.png') }}" class="rounded-lg">
        </div>
    </div>
</section>

<section class="bg-brown-900 text-white py-16 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Jenis Varian</h2>
        <div class="grid md:grid-cols-3 gap-6">
            <div class="bg-white text-black p-4 rounded-lg shadow">
                <img src="{{ asset('assets/produk/batangan.png') }}" class="mx-auto h-24">
                <h4 class="text-xl font-semibold mt-2">Coklat Batangan</h4>
            </div>
            <div class="bg-white text-black p-4 rounded-lg shadow">
                <img src="{{ asset('assets/produk/permen.png') }}" class="mx-auto h-24">
                <h4 class="text-xl font-semibold mt-2">Permen Coklat</h4>
            </div>
            <div class="bg-white text-black p-4 rounded-lg shadow">
                <img src="{{ asset('assets/produk/bubuk.png') }}" class="mx-auto h-24">
                <h4 class="text-xl font-semibold mt-2">Bubuk Coklat</h4>
            </div>
        </div>
    </div>
</section>

<section id="gallery" class="bg-white py-12 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl font-bold mb-6">Galeri Produk</h2>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($galleryImages as $image)
                <img src="{{ asset('assets/shop/' . $image->getFilename()) }}"
                     alt="Galeri Produk"
                     class="rounded-lg shadow w-full object-cover">
            @endforeach
        </div>
    </div>
</section>


<section id="contact" class="bg-white py-16 px-6">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-6 items-start">
        <div>
            <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
            <ul class="text-lg space-y-2">
                <li>📷 Instagram: @coklatlunganai</li>
                <li>📞 WhatsApp: +62 812-3456-7890</li>
                <li>📧 Email: lunganaichoco@gmail.com</li>
            </ul>
        </div>
        <iframe src="https://maps.google.com/maps?q=lung%20anai&t=&z=13&ie=UTF8&iwloc=&output=embed" class="w-full h-72 rounded-lg border-2" allowfullscreen></iframe>
    </div>
</section>
@endsection
