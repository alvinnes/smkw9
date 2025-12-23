<section id="kegiatan" class="w-11/12 py-20 sm:py-30 flex flex-col items-center gap-8 px-2">
    <div class="sm:w-2xl w-full text-center flex flex-col items-center gap-4 mb-4" data-aos="fade-down">
        <h3 class="flex items-center gap-2 text-sm"><span class="w-12 h-0.5 bg-black"></span> SMK Walisongo Pecangaan
            <span class="w-12 h-0.5 bg-black"></span>
        </h3>
        <h2 class="font-semibold text-5xl">Kegiatan Seru & Edukatif</h2>
        <p class="sm:w-xl w-full">Berbagai kegiatan seru dan edukatif yang mengasah kreativitas serta semangat belajar
            siswa
            dalam suasana menyenangkan dan penuh kebersamaan.</p>
    </div>
    @if ($activities->isEmpty())
        <div class="w-11/12 sm:w-full grid grid-cols-1 sm:grid-cols-3 place-items-center gap-8 mt-10">
            @foreach ([1, 2, 3, 4, 5, 6] as $item)
                <div class="w-full sm:w-[28rem] flex flex-col gap-2 h-80">
                    <p class="w-20 rounded-md bg-slate-200 h-5 animate-pulse"></p>
                    <div class="w-full h-40 rounded-md bg-slate-200 animate-pulse"></div>
                    <h2 class="h-5 w-11/12 bg-slate-200 rounded-md animate-pulse"></h2>
                    <h2 class="h-5 w-10/12 bg-slate-200 rounded-md animate-pulse"></h2>
                    <p class="h-4 w-9/12 bg-slate-200 rounded-md animate-pulse"></p>
                </div>
            @endforeach
        </div>
    @else
        <x-sections.section-activities.activities-item
            :activities="$activities"></x-sections.section-activities.activities-item>
    @endif
    <x-pagination.pagination :pagesItem="$activities" :pages="$pagesActivities" name="Kegiatan"
        hash="#kegiatan"></x-pagination.pagination>
</section>
