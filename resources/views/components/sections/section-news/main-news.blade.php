@if ($newses->isEmpty())
    <div class="w-11/12 sm:w-full h-100 sm:h-120 animate-pulse bg-slate-200 rounded-md overflow-hidden relative"
        data-aos-delay="400">
        <div class="absolute bottom-10 sm:bottom-20 flex flex-col gap-3 left-4 sm:left-10 z-3 w-full sm:w-7/12">
            <h2 class="h-4 w-11/12 sm:w-3xl bg-slate-300 rounded-md animate-pulse"></h2>
            <h2 class="h-4 w-11/12 sm:w-3xl bg-slate-300 rounded-md animate-pulse"></h2>
            <p class="w-10/12 sm:w-xl h-3 bg-slate-300 rounded-md animate-pulse"></p>
        </div>
    </div>
@else
    <swiper-container pagination="true" autoplay-delay="5000" pagination-dynamic-bullets="true" id="swiper"
        class="w-full h-100 sm:h-120 bg-slate-100 rounded-md overflow-hidden relative" data-aos="fade-up"
        data-aos-delay="400">
        @foreach ($newses as $news)
            <swiper-slide
                class="relative before:size-full before:absolute before:bottom-0 before:left-0 before:bg-linear-to-t before:from-black before:via-black/50 before:to-black-30">
                <a href="/">
                    <img src="{{ asset('storage/' . $news['img_url']) }}" alt="foto berita"
                        class="size-full object-cover">
                    <div class="text-white absolute bottom-20 left-4 sm:left-10 z-3 w-11/12 sm:w-7/12">
                        <h2 class="text-3xl font-semibold text-ellipsis line-clamp-2">
                            {{ $news['judul_berita'] }}
                        </h2>
                        <p class="font-light mt-2 line-clamp-3 text-ellipsis">{{ $news['isi_berita'] }}
                        </p>
                    </div>
                </a>
            </swiper-slide>
        @endforeach
    </swiper-container>
@endif
