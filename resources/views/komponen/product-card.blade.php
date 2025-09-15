<div class="bg-white border shadow rounded-lg overflow-hidden">
    <img src="{{ $img }}" class="w-full h-52 object-cover">
    <div class="p-4">
        <h3 class="font-bold">{{ $name }}</h3>
        <p class="text-orange-600 font-semibold">Rp. {{ number_format($price, 0, ',', '.') }}</p>
        <button class="mt-2 w-full bg-orange-500 text-white py-2 rounded">Tambah ke Keranjang</button>
    </div>
</div>