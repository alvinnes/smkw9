<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-4xl ml-8 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Tambahkan Kegiatan</h2>
        <p class="w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate?
            Consectetur repellat
            neque in!</p>
    </div>
    <div class="flex items-center h-118">
        <form action="/dashboard/tambahKegiatan" method="post" enctype="multipart/form-data"
            class="w-4xl rounded-sm p-4 flex gap-4">
            @csrf
            <div class="flex flex-col gap-4 w-7/12">
                <x-input.input-item key="judul_kegiatan" placeholder="buat judul berita" icon="lucide-user"
                    autofocus="aautofocus"></x-input.input-item>
                <x-input.input-file height="h-68" key="img_url" text="Upload gambar kegiatan">
                    <img id="img-preview" class="size-full absolute rounded-md object-cover">
                </x-input.input-file>
                <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Tambah
                    Kegiatan</button>
            </div>
            <x-input.input-textarea key="desk_kegiatan"
                content="tulis deskripsi kegiatan disini"></x-input.input-textarea>
        </form>
    </div>
</x-layout.form-layout>
