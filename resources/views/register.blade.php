<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="flex flex-col md:flex-row w-full min-h-screen bg-gradient-to-br from-slate-50 to-white">
        <div
            class="w-full md:w-5/12 min-h-screen flex flex-col items-center justify-center px-4 py-8 sm:px-6 md:px-8 relative order-2 md:order-1">
            <div class="absolute top-4 left-4 right-4 flex items-center justify-between md:hidden">
                <div class="flex items-center gap-2">
                    <img src="{{ asset('/img/logo-smk.png') }}" alt="logo-smk" class="w-10 h-10 sm:w-12 sm:h-12">
                    <h3 class="font-bold text-sm sm:text-base leading-tight text-[#1d1d1d]">SMK Walisongo<br>Pecangaan
                    </h3>
                </div>
                <a href="/"
                    class="flex items-center gap-1.5 text-xs sm:text-sm font-medium text-primary hover:text-primary/80 transition-colors">
                    @svg('lucide-circle-arrow-left', 'size-4 sm:size-5')
                    <span>Beranda</span>
                </a>
            </div>

            @if (session()->has('success'))
                <div id="flash"
                    class="w-full max-w-sm sm:max-w-md p-3 sm:p-4 text-green-700 bg-green-100/80 backdrop-blur-sm flex justify-between items-center rounded-lg shadow-sm mb-4">
                    <span class="text-sm sm:text-base">{{ session('success') }}</span>
                    <span id="btnClose" class="ml-2">@svg('lucide-x', 'size-4 cursor-pointer hover:text-green-900 transition-colors')</span>
                </div>
            @endif

            <form action="/daftar" method="post"
                class="w-full max-w-[320px] sm:max-w-sm md:max-w-md p-5 sm:p-6 md:p-8 flex flex-col gap-4 sm:gap-5 rounded-2xl bg-white/80 backdrop-blur-sm shadow-xl shadow-slate-200/50 border border-slate-100 mt-12 md:mt-0"
                data-aos="fade-up" data-aos-delay="200">
                @csrf

                <div class="mb-2 sm:mb-4">
                    <h2 class="text-xl sm:text-2xl md:text-3xl text-[#1d1d1d] font-bold mb-2">Daftar Sekarang!</h2>
                </div>

                <x-input.input-item key="nama_lengkap" placeholder="Masukkan nama lengkap anda" icon="lucide-user"
                    autofocus="autofocus"></x-input.input-item>
                <x-input.input-item key="nama_pengguna" placeholder="Masukkan nama anda" icon="lucide-user-circle"
                    autofocus=""></x-input.input-item>
                <x-input.input-item key="email" placeholder="example@gmail.com" icon="lucide-mail"
                    autofocus=""></x-input.input-item>
                <x-input.input-password></x-input.input-password>

                <button
                    class="bg-primary hover:bg-primary/90 text-white cursor-pointer font-semibold py-3 sm:py-3.5 rounded-xl transition-all duration-300 shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 text-sm sm:text-base mt-2">
                    Daftar Sekarang
                </button>

                <p class="text-xs sm:text-sm text-center text-slate-600">
                    Sudah punya akun?
                    <a href="/masuk" class="text-primary font-semibold hover:underline transition-all">masuk</a>
                    sekarang!
                </p>
            </form>
        </div>

        <div class="hidden md:block w-7/12 min-h-screen bg-primary relative overflow-hidden order-1 md:order-2">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/50 to-black/30 z-10"></div>
            <img src="{{ asset('/img/gedung_smk.webp') }}" alt="Gedung SMK Walisongo"
                class="w-full h-full object-cover object-bottom">

            <div class="absolute top-4 lg:top-6 left-4 lg:left-6 right-4 lg:right-6 flex justify-between items-center z-20"
                data-aos="fade-down">
                <div class="flex items-center gap-2 lg:gap-3 text-white">
                    <img src="{{ asset('/img/logo-smk.png') }}" alt="logo-smk" class="w-14 h-14 lg:w-20 lg:h-20">
                    <h3 class="font-bold text-base lg:text-xl leading-tight lg:leading-snug">SMK Walisongo<br>Pecangaan
                    </h3>
                </div>
                <a href="/"
                    class="group font-semibold border-2 border-white text-white py-2.5 lg:py-3 px-4 lg:px-6 text-xs lg:text-sm rounded-full relative overflow-hidden transition-all duration-300 hover:text-black flex items-center gap-1.5 lg:gap-2">
                    <span
                        class="absolute inset-0 bg-white transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></span>
                    <span class="relative z-10 flex items-center gap-1.5">
                        @svg('lucide-circle-arrow-left', 'size-4 lg:size-5')
                        Kembali Ke Beranda
                    </span>
                </a>
            </div>

            <div
                class="absolute bottom-16 lg:bottom-24 left-1/2 -translate-x-1/2 text-white text-center w-[90%] lg:w-[80%] max-w-2xl flex flex-col items-center z-20">
                <h2 class="text-2xl lg:text-4xl xl:text-5xl leading-tight lg:leading-tight mb-3 lg:mb-4 font-bold"
                    data-aos="fade-down">
                    Selamat Datang Calon Anggota Keluarga SMK
                </h2>
                <p class="font-light text-sm lg:text-base text-white/90 max-w-md lg:max-w-lg" data-aos="fade-up"
                    data-aos-delay="300">
                    Isi data pendaftaranmu dengan santai, lalu gunakan akun ini untuk mengikuti info terbaru, kegiatan
                    seru, dan layanan digital yang kami sediakan untuk warga SMK.
                </p>
            </div>

            <div class="absolute top-1/4 right-10 w-32 h-32 bg-white/5 rounded-full blur-3xl z-10"></div>
            <div class="absolute bottom-1/3 left-10 w-40 h-40 bg-primary/20 rounded-full blur-3xl z-10"></div>
        </div>
        <div class="block md:hidden w-full h-50 sm:h-56 relative order-1">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/60 to-transparent z-10"></div>
            <img src="{{ asset('/img/gedung_smk.webp') }}" alt="Gedung SMK Walisongo"
                class="w-full h-full object-cover object-center">
            <div class="absolute bottom-4 left-4 right-4 text-white z-20 w-9/12">
                <h2 class="text-lg sm:text-xl font-bold mb-1" data-aos="fade-up">Selamat Datang Calon Anggota Keluarga
                    SMK
                </h2>
                <p class="text-xs w-full sm:text-sm text-white/80" data-aos="fade-up" data-aos-delay="100">
                    Isi data pendaftaranmu dengan santai, lalu gunakan akun ini untuk mengikuti info terbaru.</p>
            </div>
        </div>
    </main>
</x-layout.form-layout>
