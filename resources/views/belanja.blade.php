@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center text-yellow-900 mb-4">Belanja Coklat Favoritmu</h1>
        <p class="text-lg text-center text-gray-600 mb-12">Sekarang Juga!</p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($chocolates as $chocolate)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="{{ asset('storage/' . $chocolate->gambar) }}" alt="{{ $chocolate->nama }}" class="w-full h-56 object-cover">
                <div class="p-6">
                    <span class="text-sm text-gray-500">{{ $chocolate->kategori }}</span>
                    <h3 class="text-xl font-bold text-yellow-900 mt-2">{{ $chocolate->nama }}</h3>
                    <p class="text-lg font-semibold text-yellow-800 mt-4">
                        Rp {{ number_format($chocolate->harga, 0, ',', '.') }}
                    </p>
                    <button class="w-full mt-6 bg-orange-500 text-white py-2 rounded-md hover:bg-orange-600">
                        Tambah ke Keranjang
                    </button>
                </div>
            </div>
            @endforeach

        </div>
    </div>
@endsection