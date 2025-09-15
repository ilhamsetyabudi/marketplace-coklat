@extends('layouts.app')

@section('content')
{{-- HERO --}}
<section id="hero-belanja" class="relative text-center bg-gradient-to-br from-orange-200 to-yellow-300 py-24">
    <h1 class="text-4xl font-extrabold mb-6">Belanja Coklat Favoritmu<br> Sekarang Juga!</h1>
    
    <div class="relative w-full max-w-3xl mx-auto rounded-xl overflow-hidden shadow-lg">
        <img id="heroImage"
             src="{{ asset('assets/shop/heros/hero1.png') }}"
             alt="Hero Berganti"
             class="w-full object-cover duration-500 transition-opacity rounded-xl h-72 sm:h-96" />
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const imageList = [
            '{{ asset('assets/shop/heros/hero1.png') }}',
            '{{ asset('assets/shop/heros/hero2.png') }}',
            '{{ asset('assets/shop/heros/hero3.png') }}',
            '{{ asset('assets/shop/heros/hero4.png') }}',
            '{{ asset('assets/shop/heros/hero5.png') }}'
        ];

        let index = 0;
        const img = document.getElementById('heroImage');

        setInterval(() => {
            index = (index + 1) % imageList.length;
            img.src = imageList[index];
        }, 1000);
    });
</script>

{{-- VARIAN --}}
<section class="py-12 bg-yellow-50">
    <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6 px-4">
        <div class="bg-orange-300 p-6 rounded-lg text-center">
            <img src="{{ asset('assets/produk/batangan.png') }}" alt="Coklat Batangan" class="h-20 mx-auto mb-4">
            <h3 class="font-bold text-lg">Coklat Batangan</h3>
            <p>Karakter kuat, cocok untuk penyuka coklat pekat</p>
        </div>
        <div class="bg-orange-200 p-6 rounded-lg text-center">
            <img src="{{ asset('assets/produk/permen.png') }}" alt="Permen Coklat" class="h-20 mx-auto mb-4">
            <h3 class="font-bold text-lg">Permen Coklat</h3>
            <p>Lumer, cocok untuk camilan santai</p>
        </div>
        <div class="bg-yellow-300 p-6 rounded-lg text-center">
            <img src="{{ asset('assets/produk/bubuk.png') }}" alt="Bubuk Coklat" class="h-20 mx-auto mb-4">
            <h3 class="font-bold text-lg">Bubuk Coklat</h3>
            <p>Cocok untuk campuran minuman</p>
        </div>
    </div>
</section>

{{-- PRODUK & CHECKOUT --}}
<section class="py-16 bg-white">
    <div class="max-w-6xl mx-auto px-4 flex flex-col gap-10">
        {{-- Produk Grid --}}
        <div class="grid md:grid-cols-3 gap-6">
            @foreach (['produk1.png','produk2.png','produk3.png','produk4.png','produk5.png','produk6.png'] as $img)
                <div class="bg-white border shadow rounded-lg overflow-hidden">
                    <img src="{{ asset('assets/shop/' . $img) }}" class="w-full h-52 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold">Coklat Batangan</h3>
                        <p class="text-orange-600 font-semibold">Rp. 40.000</p>
                        <button class="mt-2 w-full bg-orange-500 text-white py-2 rounded hover:bg-orange-600 transition-all">
                            Tambah ke Keranjang
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Tombol Checkout --}}
        <div class="text-center pt-6">
            <a href="#"
               class="inline-block bg-[#5C2E05] hover:bg-[#3e1a01] text-white text-lg font-semibold py-4 px-10 rounded-full shadow-lg transition-all">
                Checkout Sekarang →
            </a>
        </div>
    </div>
</section>
@endsection
