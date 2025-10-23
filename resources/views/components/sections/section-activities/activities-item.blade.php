<div class="w-full grid grid-cols-3 place-items-center gap-8 mt-10">
    @foreach ($activities as $activity)
        <div class="w-[28rem] rounded-sm border-solid border-1 p-4 border-slate-200" data-aos="fade-up"
            data-aos-delay="{{ $activity['id'] }}00">
            <p class="text-[0.7em] flex items-center gap-2 text-[grey]">@svg('lucide-calendar', 'size-3 -mt-0.5')
                {{ $activity['created_at']->diffForHumans() }}</p>
            <img src="{{ asset('storage/' . $activity['img_url']) }}" alt="foto berita"
                class="w-full rounded-md h-40 object-top my-2 object-cover">
            <a href="/dashboard/detailBerita" class="group">
                <h2 class="font-semibold text-lg group-hover:underline mb-1 line-clamp-2 text-ellipsis">
                    {{ $activity['judul_kegiatan'] }}
                </h2>
                <p class="text-sm text-nowrap overflow-hidden group-hover:underline text-ellipsis">
                    {{ $activity['desk_kegiatan'] }}
                </p>
            </a>
        </div>
    @endforeach
</div>
