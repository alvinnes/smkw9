<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="beranda"
        class="w-full h-screen bg-slate-300 relative before:size-full before:absolute before:left-0 before:bottom-0 before:bg-linear-to-t before:from-black/80 before:via-black/60 before:to-black/30">
        <img src="{{ asset('/img/gedung_smk.webp') }}" alt="" class="size-full object-cover">
        <div
            class="xs:w-full w-11/12 sm:w-3xl absolute top-1/2 left-1/2 -translate-1/2 flex flex-col items-center text-center text-white z-3">
            <h1 class="font-bold text-4xl xs:text-5xl sm:text-6xl my-6 leading-10 xs:leading-13 sm:leading-17"
                data-aos-delay="300" data-aos="fade-down">Selamat Datang Di
                Website <span class="font-extrabold text-text text-shadow-2xs">SMK
                    Walisongo Pecangaan</span></h1>
            <p class="sm:w-xl w-11/12 text-sm sm:text-base" data-aos="fade-down">SMK kami menghadirkan lingkungan
                belajar yang religius, suportif, dan
                berorientasi pada keterampilan agar setiap siswa bisa mengembangkan potensinya.</p>
            <div class="mt-8 flex xs:gap-6 gap-4" data-aos="fade-up">
                <button
                    class="sm:px-6 py-3 px-4 text-sm sm:text-base bg-white text-black font-semibold rounded-md cursor-pointer">Daftar
                    Sekarang!</button>
                <button
                    class="sm:px-6 py-3 px-4 text-sm sm:text-base bg-white text-black font-semibold rounded-md cursor-pointer">Tentang
                    Kami!</button>
            </div>
        </div>
    </section>

    <x-sections.section-about.about></x-sections.section-about.about>
    <x-sections.section-majors.majors :majors="$majors"></x-sections.section-majors.majors>
    <x-sections.section-activities.activities :activities="$activities"
        :pagesActivities="$pagesActivities"></x-sections.section-activities.activities>
    <x-sections.section-news.news :newses="$newses" :pagesNewses="$pagesNewses"></x-sections.section-news.news>
    <x-sections.section-registration.registration></x-sections.section-registration.registration>
    <x-sections.section-gallery.gallery :galleries="$galleries"></x-sections.section-gallery.gallery>

    <section id="hubungi" class="w-full mx-2 sm:w-11/12 flex flex-col items-center gap-6 sm:gap-18 my-35"
        id="hubungi">
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
