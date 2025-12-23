@if ($newses->isEmpty())
    <div class="w-full grid grid-cols-1 sm:grid-cols-3 mb-8 place-items-center gap-8 mt-10">
        @foreach ([1, 2, 3, 4, 5, 6] as $item)
            <div class="w-11/12 sm:w-[28rem] relative flex flex-col gap-2 p-6 justify-end h-50 bg-slate-200">
                <h2 class="h-5 w-11/12 bg-slate-300 rounded-md animate-pulse"></h2>
                <h2 class="h-5 w-10/12 bg-slate-300 rounded-md animate-pulse"></h2>
                <p class="h-4 w-9/12 bg-slate-300 rounded-md animate-pulse"></p>
            </div>
        @endforeach
    </div>
@else
    <div class="w-full mb-15 grid grid-cols-1 sm:grid-cols-3 place-items-center gap-5 sm:gap-8 mt-10" data-aos="fade-down"
        data-aos-delay="200"></div>
    @foreach ($newses as $news)
        <a href="/dashboard/detailBerita/{{ $news['id'] }}" class="group">
            <div class="w-full sm:w-[27.5rem] overflow-hidden shadow-sm rounded-md h-50 bg-cover relative before:size-full before:absolute before:left-0 before:bottom-0 before:bg-linear-to-t before:from-black/80 before:via-black/50 before:to-black/10 flex flex-col justify-end p-6 group-hover:underline text-white"
                style="background-image: url({{ asset('storage/' . $news['img_url']) }})">
                <div class="relative z-2">
                    <h2 class="text-xl font-semibold line-clamp-2 text-ellipsis">{{ $news['judul_berita'] }}
                    </h2>
                    <p class="text-sm font-light line-clamp-2 text-ellipsis">{{ $news['isi_berita'] }}</p>
                </div>
            </div>
        </a>
    @endforeach
    </div>
@endif
