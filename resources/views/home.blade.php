<x-layout.layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="w-11/12 flex justify-between my-25">
        <div class="w-2xl h-123,5 bg-slate-300 rounded-xl overflow-hidden" data-aos="fade-right">
            <iframe src="https://www.youtube.com/embed/UlYzBaH7dBg?si=-lQNULhfLl0QEDos" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen class="size-full"></iframe>
        </div>
        <div class="flex flex-col w-[38rem] gap-6" data-aos="fade-left" data-aos-delay="200">
            <h2 class="text-2xl font-semibold">SMK Walisongo Pecangaan</h2>
            <h3 class="font-semibold flex gap-4 -mt-4"><span>#SMKBisa</span> <span>#SMKHebat</span>
                <span>#SMKW9SantunDanMandiri</span>
            </h3>
            <p>SMK Walisongo Pecangaan merupakan sekolah menengah kejuruan swasta yang berdiri pada tahun 2005 di bawah
                naungan Yayasan Walisongo Pecangaan, Jepara. Sekolah ini hadir sebagai bagian dari upaya yayasan untuk
                mengembangkan pendidikan vokasi di wilayah Jepara. Dengan dukungan tenaga pendidik berpengalaman dan
                fasilitas modern, SMK Walisongo berkomitmen memberikan pendidikan berbasis keterampilan agar lulusannya
                siap bersaing di dunia industri dan dunia kerja.
            </p>
            <p> Saat ini, SMK Walisongo Pecangaan memiliki empat program keahlian utama: Desain Dan Produksi Kriya, Teknik
                Otomotif, Akuntansi Dan Keuangan Lembaga, dan Teknik Jaringan Komputer Dan Telekomunikasi. Sekolah ini telah terakreditasi B serta tersertifikasi ISO 9001:2008, menjadikannya lembaga
                pendidikan yang memiliki standar mutu tinggi. Dengan nilai disiplin, kerja keras, dan karakter islami
                yang kuat, SMK Walisongo terus mencetak generasi terampil dan berakhlak mulia untuk masa depan bangsa.
            </p>
            <button class="font-semibold text-white bg-[#1d1d1d] py-3 px-2 rounded-md w-[15rem]">Baca
                Selengkapnya</button>
        </div>
    </section>
    <x-sections.section-majors.majors :majors="$majors"></x-sections.section-majors.majors>
    <x-sections.section-activities.activities :activities="$activities"></x-sections.section-activities.activities>
    <x-sections.section-news.news :newses="$newses"></x-sections.section-news.news>

    <section class="w-11/12 flex flex-col items-center gap-18 my-30" id="hubungi">
        <x-sections.section-contact.location></x-sections.section-contact.location>
        @if (session()->has('successMessage'))
            <div id="flash"
                class="bg-green-100/50 w-lg rounded-sm flex justify-between items-center text-green-700 p-4 self-start font-semibold ml-3 -mb-13">
                {{ session('successMessage') }} <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
            </div>
        @endif
        <x-sections.section-contact.contact-form></x-sections.section-contact.contact-form>
    </section>

</x-layout.layout>
