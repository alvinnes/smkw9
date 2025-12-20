<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="home"
        class="w-full h-screen bg-slate-300 relative before:size-full before:absolute before:left-0 before:bottom-0 before:bg-linear-to-t before:from-black/80 before:via-black/60 before:to-black/30">
        {{-- <video src="{{ asset('/video/video-profil-smk.mp4') }}" muted autoplay width="100%" height="100%"></video> --}}
        <img src="{{ asset('/img/gedung_smk.webp') }}" alt="" class="size-full">
        <div
            class="w-3xl absolute top-1/2 left-1/2 -translate-1/2 flex flex-col items-center text-center text-white z-3">
            <h1 class="font-bold text-6xl my-4" data-aos-delay="300" data-aos="fade-down">Selamat Datang Di Sekolah SMK
                Walisongo Pecangaan</h1>
            <p class="w-xl" data-aos="fade-down">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit
                laborum, quos quas
                repudiandae maiores
                repellat.</p>
            <div class="mt-6 flex gap-4" data-aos="fade-up">
                <button class="px-6 py-3 bg-white text-black font-semibold rounded-md cursor-pointer">Daftar
                    Sekarang!</button>
                <button class="px-6 py-3 bg-white text-black font-semibold rounded-md cursor-pointer">Tentang
                    Kami!</button>
            </div>
        </div>
    </section>

    <x-sections.section-about.about></x-sections.section-about.about>
    <x-sections.section-majors.majors :majors="$majors"></x-sections.section-majors.majors>
    <x-sections.section-activities.activities :activities="$activities"></x-sections.section-activities.activities>
    <x-sections.section-news.news :newses="$newses"></x-sections.section-news.news>
    <x-sections.section-registration.registration></x-sections.section-registration.registration>

    <section class="w-11/12 my-25 mt-40 flex flex-col">
        <h3 data-aos="fade-down" class="flex w-11/12 mb-4 items-center gap-2 text-sm"><span
                class="w-12 h-0.5 bg-black"></span>
            SMK Walisongo Pecangaan
            <span class="w-12 h-0.5 bg-black"></span>
        </h3>
        <h2 data-aos="fade-down" data-aos-delay="100" class="font-extrabold text-5xl mb-8 w-11/12">Gallery & Prestasi
            SMKW9
        </h2>
        <swiper-container class="mb-4 w-full h-140 rounded-md overflow-hidden" thumbs-swiper=".mySwiper2"
            space-between="10" parallax="true" speed="1000">
            @foreach ($galleries as $gallery)
                <swiper-slide class="w-full">
                    <img src="{{ asset('storage/' . $gallery['img_url']) }}" class="size-full bg-black object-cover"
                        data-swiper-parallax-opacity="0.5" data-swiper-parallax="-300" />
                </swiper-slide>
            @endforeach
        </swiper-container>

        <swiper-container class="mySwiper2" space-between="15" slides-per-view="4" free-mode="true"
            watch-slides-progress="true">
            @foreach ($galleries as $gallery)
                <swiper-slide class="rounded-md h-40 overflow-hidden cursor-pointer">
                    <img src="{{ asset('storage/' . $gallery['img_url']) }}" />
                </swiper-slide>
            @endforeach
        </swiper-container>

        <div class="flex justify-between items-center mt-6">
            <p class="flex items-center gap-2">@svg('lucide-image', 'size-4') Total Foto 200</p>
            <a href="" class="flex items-center gap-2">Lihat Semua @svg('lucide-move-right', 'size-6')</a>
        </div>

        <div class="w-full grid grid-cols-4 gap-4 place-items-center auto-rows-[17rem]">
            <div class="size-full rounded-md bg-slate-200">a</div>
            <div class="size-full rounded-md bg-slate-200">a</div>
            <div class="size-full rounded-md bg-slate-200 col-span-2">a</div>
            <div class="size-full rounded-md bg-slate-200 col-span-2">a</div>
            <div class="size-full rounded-md bg-slate-200">a</div>
            <div class="size-full rounded-md bg-slate-200">a</div>
        </div>
    </section>

    <section id="hubungi" class="w-11/12 flex flex-col items-center gap-18 my-35" id="hubungi">
        <x-sections.section-contact.location></x-sections.section-contact.location>
        @if (session()->has('successMessage'))
            <div id="flash"
                class="bg-green-100/50 w-lg rounded-sm flex justify-between items-center text-green-700 p-4 self-start font-semibold ml-3 -mb-13">
                {{ session('successMessage') }} <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
            </div>
        @endif
        <x-sections.section-contact.contact-form></x-sections.section-contact.contact-form>
    </section>

    <x-footer :navbarItems="$navbarItems"></x-footer>
</x-layout.layout>
