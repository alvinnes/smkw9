<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-4xl ml-8 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Ubah isi berita disini</h2>
        <p class="w-2xl">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate?
            Consectetur repellat
            neque in!</p>
    </div>
    <div class="flex items-center h-118">
        <form action="/dashboard/ubahBerita/{{ $oldNews['id'] }}" method="post" enctype="multipart/form-data"
            class="w-4xl rounded-sm p-4 flex gap-4">
            @csrf
            @method('patch')
            <div class="flex flex-col gap-4 w-7/12 text-[#1d1d1d]">
                <x-input.input-item-profile key="judul_berita" placeholder="Ubah judul berita" icon="lucide-user"
                    value="{{ old('judul_berita', $oldNews['judul_berita']) }}" autofocus></x-input.input-item-profile>
                <x-input.input-item-profile key="kategori" placeholder="Ubah kategori" icon="lucide-user"
                    value="{{ old('kategori', $oldNews['kategori']) }}"></x-input.input-item-profile>
                <x-input.input-file height="h-50" key="img_url" key="Upload gambar berita">
                    <img src="{{ asset('storage/' . $oldNews['img_url']) }}" id="img-preview"
                        class="size-full absolute rounded-md object-cover">
                </x-input.input-file>

                <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Buat
                    Berita</button>
            </div>
            <x-input.input-textarea key="isi_berita" content="{{ $oldNews['isi_berita'] }}"></x-input.input-textarea>
        </form>
    </div>
</x-layout.form-layout>
