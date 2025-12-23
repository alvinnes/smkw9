<div class="w-full flex flex-col sm:flex-row justify-between gap-8">
    <div class="w-full sm:w-7/12 h-fit sm:h-136 rounded-md bg-white p-4" data-aos="fade-right">
        <div class="w-full h-80 sm:h-85 mb-5 bg-cover bg-no-repeat sm:bg-position-[0_-10rem] rounded-md"
            style="background-image: url('{{ asset('img/school.jpg') }}')"></div>
        <div class="ml-1 bg-primary text-white h-42 p-10 rounded-md text-sm">
            <div class="flex flex-col gap-2.5 font-semibold">
                <p class="flex items-center gap-2">@svg('lucide-map-pin', 'size-4') Jl. Kauman No. 01 Pecangaan Jepara
                    59462</p>
                <p class="flex items-center gap-2">@svg('lucide-phone', 'size-4') (0291) 7510124 </p>
                <p class="flex items-center gap-2">@svg('lucide-mail', 'size-4') info@smkwalisongo.sch.id </p>
            </div>
        </div>
    </div>
    <form action="/" method="post" class="w-11/12 mx-auto sm:mx-0 sm:w-5/12 h-full flex flex-col gap-5"
        data-aos="fade-left" data-aos-delay="200">
        @csrf
        <h2 class="text-4xl font-semibold leading-12 mb-6">Kontak untuk Kebaikan dan Kemajuan Bersama</h2>
        <x-input.input-item key="nama" placeholder="masukkan nama" icon="lucide-user-circle"></x-input.input-item>
        <x-input.input-item key="email" placeholder="example@gmail.com" icon="lucide-mail"></x-input.input-item>
        <x-input.input-message key="pesan" content="tulis pesan kamu"></x-input.input-message>

        <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Kirim</button>
    </form>
</div>
