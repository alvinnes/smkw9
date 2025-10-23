<div class="w-11/12 grid grid-cols-3 place-items-center gap-8 mt-10">
    @foreach ($newses as $news)
        <a href="/dashboard/detailBerita/{{ $news['id'] }}" class="group">
            <div data-aos="fade-down" data-aos-delay="{{ $news['id'] }}00"
                class="w-[27.5rem] overflow-hidden shadow-sm rounded-md h-60 bg-cover relative before:size-full before:absolute before:left-0 before:bottom-0 before:bg-linear-to-t before:from-black/80 before:via-black/50 before:to-black/10 flex flex-col justify-end p-6 group-hover:underline text-white"
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
