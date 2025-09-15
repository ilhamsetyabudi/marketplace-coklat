<section class="relative text-center bg-gradient-to-br from-orange-200 to-yellow-300 py-16">
    <h1 class="text-4xl font-extrabold mb-2">{{ $title }}</h1>
    @isset($subtitle)
        <p class="text-lg text-gray-800 mb-4">{{ $subtitle }}</p>
    @endisset
    @isset($btnLink)
        <a href="{{ $btnLink }}" class="inline-block bg-brown-700 text-white px-6 py-2 rounded-full">{{ $btnText }}</a>
    @endisset
    <div class="mt-6">
        <img src="{{ $image }}" class="mx-auto max-w-xl rounded-lg shadow-lg">
    </div>
</section>
