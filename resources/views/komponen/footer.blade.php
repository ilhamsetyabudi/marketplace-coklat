<footer class="bg-[#1E0D04] text-white py-14 px-6 md:px-16 font-raleway">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-12 gap-x-16">
        <!-- Brand & Deskripsi -->
        <div class="space-y-4">
            <h2 class="text-2xl font-bold">Coklat Lung Anai</h2>
            <p class="text-sm leading-relaxed text-white/80">
                Nikmati kelezatan coklat lokal dengan cita rasa istimewa dari Bumi Kalimantan Timur.
            </p>

            <ul class="space-y-3 text-sm">
                <li class="flex items-start gap-3">
                    <i class="fab fa-instagram text-white/80 mt-1 w-5"></i>
                    <span>
                        Instagram: 
                        <a href="https://instagram.com/coklatlunganai" target="_blank" class="underline">@coklatlunganai</a>
                    </span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fab fa-whatsapp text-white/80 mt-1 w-5"></i>
                    <span>WhatsApp: +62 812-3456-7890</span>
                </li>
                <li class="flex items-start gap-3">
                    <i class="fas fa-envelope text-white/80 mt-1 w-5"></i>
                    <span>Email: lunganaichoco@gmail.com</span>
                </li>
            </ul>
        </div>

        <!-- Spacer -->
        <div class="hidden lg:block"></div>

        <!-- Akses Cepat -->
        <div>
            <h3 class="text-lg font-semibold mb-4">Akses Cepat</h3>
            <ul class="space-y-3 text-sm">
                <li><a href="{{ url('/') }}" class="hover:underline">Home</a></li>
                <li><a href="{{ url('/#about') }}" class="hover:underline">Tentang Kami</a></li>
                <li><a href="{{ url('/#contact') }}" class="hover:underline">Kontak</a></li>
                <li><a href="{{ route('shop') }}" class="hover:underline">Belanja</a></li>
            </ul>
        </div>
    </div>

    <!-- Copyright -->
    <div class="border-t border-white/20 mt-12 pt-4 text-sm text-center text-white/60">
        © {{ date('Y') }} Coklat Lung Anai. All Rights Reserved.
    </div>
</footer>
