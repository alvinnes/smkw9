<section id="berita" class="w-11/12 flex flex-col items-center my-30">
    <h3 data-aos="fade-down" class="flex w-full mb-4 items-center gap-2 text-[0.8em] xs:text-sm"><span
            class="w-12 h-0.5 bg-black"></span>
        SMK Walisongo
        Pecangaan
        <span class="w-12 h-0.5 bg-black"></span>
    </h3>
    <h2 data-aos="fade-down" data-aos-delay="100" class="font-extrabold text-4xl sm:text-5xl mb-8 self-start w-full">Berita
        Dan Pengumuman</h2>
    <x-sections.section-news.main-news :newses="$newses"></x-sections.section-news.main-news>
    <x-sections.section-news.news-cards :newses="$newses"></x-sections.section-news.news-cards>

    <x-pagination.pagination :pagesItem="$newses" :pages="$pagesNewses" name="Berita" hash="#berita"></x-pagination.pagination>
</section>
