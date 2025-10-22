<div class="w-full flex justify-between gap-18">
    <div class="w-7/12 h-136 rounded-md bg-white p-4" ">
                <div class="w-full h-90 bg-cover bg-no-repeat bg-position-[0_-10rem] rounded-md" style="background-image: url('{{ asset('img/school.jpg') }}')"></div>
                <div class="ml-1 border-solid border-1 border-slate-200 h-42 p-3 rounded-md">
                    <a href="" class="flex items-center gap-2">@svg('lucide-instagram', 'size-4') smkw9jepara</a>
                </div>
            </div>
            <form action="/" method="post" class="w-5/12 h-full flex flex-col gap-5">
                @csrf
                <h2 class="text-4xl font-semibold leading-12 mb-6">Kontak untuk Kebaikan dan Kemajuan Bersama</h2>
                <x-input.input-item key="nama" placeholder="masukkan nama"
                    icon="lucide-user-circle"></x-input.input-item>
                <x-input.input-item key="email" placeholder="example@gmail.com"
                    icon="lucide-mail"></x-input.input-item>
                <x-input.input-message key="pesan" content="tulis pesan kamu"></x-input.input-message>

                <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Kirim</button>
            </form>
</div>
