<section class="w-full flex flex-col items-center my-20">
    <h2 class="font-extrabold text-5xl mb-8 w-11/12">Berita Dan Pengumuman</h2>
    <x-sections.section-news.main-news :newses="$newses"></x-sections.section-news.main-news>
    <x-sections.section-news.news-cards :newses="$newses"></x-sections.section-news.news-cards>

    <div class="w-11/12 flex justify-between items-center mt-8">
        <p style="word-spacing: .8rem" class="font-semibold text-[#1d1d1d]">#BeritaHot #BeritaTerkini #UpdateBerita
            #InfoTerkini
            #TrendingNews
        </p>
        <button><a href="" class="flex items-center gap-2">Lihat Semua Berita @svg('lucide-move-right', 'size-5')</a></button>
    </div>
</section>
