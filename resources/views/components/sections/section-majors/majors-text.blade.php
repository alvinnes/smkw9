<swiper-container effect="fade" effect-cross-fade="true" speed="1500" autoplay-delay="4000" data-aos="fade-up"
    data-aos-delay="400" class="swiper-bg size-full">
    @foreach ($majors as $major)
        <swiper-slide
            class="relative before:size-full before:absolute before:bottom-0 before:left-0 before:bg-linear-to-t before:from-black/80 before:via-black/50 before:to-black-30">
            <img src="{{ asset('storage/' . $major['bg_img']) }}" alt="background jurusan"
                class="bg-img size-full object-cover">
            <div class="absolute top-1/2 w-[46rem] -translate-y-1/2 text-white z-2 left-20">
                <h2 class="font-bold text-6xl leading-18">{{ $major['nama'] }}</h2>
                <p class="w-xl mt-4">{{ $major['deskripsi'] }}</p>
                <button
                    class="border-solid border-3 mt-6 cursor-pointer relative before:absolute before:size-full before:left-0 before:top-0 before:bg-white before:scale-x-0 hover:before:scale-x-100 before:transition-all before:duration-500 hover:text-black before:-z-1 transition-all duration-400 delay-100 before:origin-left border-white rounded-md py-3 px-4 ">Baca
                    Selengkapnya</button>
            </div>
            <x-sections.section-majors.majors-item :major="$major"></x-sections.section-majors.majors-item>
        </swiper-slide>
    @endforeach
</swiper-container>
