<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-4xl ml-8 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Daftar sekarang juga!</h2>
        <p class="w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate?
            Consectetur repellat
            neque in!</p>
    </div>
    <div class="flex items-center h-118">
        <form action="/dashboard/tambahJurusan" method="post" enctype="multipart/form-data"
            class="w-4xl rounded-sm p-4 flex gap-4">
            @csrf
            <div class="flex flex-col gap-4 w-7/12">
                <x-input.input-item key="nama" placeholder="isi nama jurusan"
                    icon="lucide-user"></x-input.input-item>
                <div class="flex gap-2">
                    <x-input.input-file key="img_url" height="h-68.5" text="Upload gambar jurusan">
                        <img id="img-preview" class="size-full absolute rounded-md object-cover">
                    </x-input.input-file>
                    <x-input.input-file height="h-68.5" key="bg_img" text="Upload gambar background">
                        <img id="bg-img-preview" class="size-full absolute rounded-md object-cover">
                    </x-input.input-file>
                </div>
                <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Tambah
                    Jurusan</button>
            </div>
            <x-input.input-textarea key="deskripsi" content="isi deskripsi jurusan"></x-input.input-textarea>
        </form>
    </div>
</x-layout.form-layout>
