<section class="w-11/12 my-30 flex flex-col items-center gap-8 px-2">
    <div class="w-2xl text-center flex flex-col items-center gap-4 mb-4" data-aos="fade-down">
        <h3 class="flex items-center gap-2 text-sm"><span class="w-12 h-0.5 bg-black"></span> SMK Walisongo Pecangaan
            <span class="w-12 h-0.5 bg-black"></span>
        </h3>
        <h2 class="font-semibold text-5xl">Kegiatan Seru & Edukatif</h2>
        <p class="w-xl">Berbagai kegiatan seru dan edukatif yang mengasah kreativitas serta semangat belajar siswa
            dalam suasana menyenangkan dan penuh kebersamaan.</p>
    </div>
    <x-sections.section-activities.activities-item :activities="$activities"></x-sections.section-activities.activities-item>
    <x-pagination.pagination-activity></x-pagination.pagination-activity>
</section>
