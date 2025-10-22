<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-4xl ml-8 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Daftar sekarang juga!</h2>
        <p class="w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate?
            Consectetur repellat
            neque in!</p>
    </div>
    <div class="flex items-center h-118">
        <form action="/dashboard/buatBerita" method="post" enctype="multipart/form-data"
            class="w-4xl rounded-sm p-4 flex gap-4">
            @csrf
            <div class="flex flex-col gap-4 w-7/12">
                <x-input.input-item key="judul_berita" placeholder="buat judul berita"
                    icon="lucide-user"></x-input.input-item>
                <x-input.input-item key="kategori" placeholder="kategori berita"
                    icon="lucide-user-circle"></x-input.input-item>
                <x-input.input-file height="h-50" key="img_url" text="Upload gambar berita">
                    <img id="img-preview" class="size-full absolute rounded-md object-cover">
                </x-input.input-file>
                <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Buat
                    Berita</button>
            </div>
            <x-input.input-textarea key="isi_berita" content="tulis isi berita disini"></x-input.input-textarea>
        </form>
    </div>
</x-layout.form-layout>
