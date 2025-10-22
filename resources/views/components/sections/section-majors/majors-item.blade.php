<swiper-container effect="coverflow" coverflow-effect-depth="100" coverflow-effect-rotate="0" space-between="50"
    slides-per-view="1" class="swiper-card absolute right-15 top-1/2 -translate-y-1/2 w-80 flex gap-8">
    @foreach ($majors as $major)
        <swiper-slide class="w-80 h-90 rounded-md bg-white ">
            <img src="{{ asset('storage/' . $major['img_url']) }}" alt=""
                class="size-full object-contain shadow-sm cursor-pointer p-4">
        </swiper-slide>
    @endforeach
</swiper-container>
