<section id="pendaftaran" class="w-11/12 flex flex-col gap-20 mt-20">
    <div>
        <h3 data-aos="fade-down" data-aos-delay="200" class="flex w-11/12 mb-4 items-center gap-2 text-sm"><span
                class="w-12 h-0.5 bg-black"></span>
            SMK Walisongo
            Pecangaan
            <span class="w-12 h-0.5 bg-black"></span>
        </h3>
        <h2 class="font-bold text-4xl mb-10 text-[#1d1d1d]" data-aos="fade-down">Wujudkan Mimpimu Bersama Sekolah
            Kami</h2>
        <div class="w-full h-170" data-aos="fade-up">
            <img src="{{ asset('img/ppdb.webp') }}" alt="brosur pendaftaran" class="size-full">
        </div>
        <h3 class="font-semibold text-2xl flex justify-center my-10" data-aos="fade-up">Persyaratan Pendaftaran</h3>
        <x-sections.section-registration.requirement></x-sections.section-registration.requirement>
    </div>
    <div class="w-full h-170" data-aos="fade-up">
        <h2 class="font-bold text-4xl mb-10 text-[#1d1d1d]">Alur Pendaftaran</h2>
        <img src="{{ asset('img/alur-ppdb.webp') }}" alt="alur pendaftaran" class="size-full">
    </div>
</section>
