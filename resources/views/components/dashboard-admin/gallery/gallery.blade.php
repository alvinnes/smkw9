<x-layout.dashboard-layout :sidebarItem="$sidebarItem">
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="w-9/12 bg-white h-full overflow-y-auto rounded-md p-8 flex flex-col items-center gap-14">
        <div class="w-full p-3 bg-green-100 rounded-md flex justify-between items-center">
            <div>
                <button onclick="showAddImg()"
                    class="bg-white cursor-pointer cursorpointer rounded-md p-3">@svg('lucide-plus', 'size-4')</button>
            </div>
        </div>
        <x-modal.modal-succes key="successGallery"></x-modal.modal-succes>

        <form action="/dashboard/admin/gallery" method="post" enctype="multipart/form-data"
            class="form-img fixed top-1/2 left-1/2 -translate-1/2 w-xl rounded-xl p-5 bg-primary shadow-sm opacity0 transition-all duration-400 -mt-8 invisibe">
            @csrf
            <input type="hidden" name="size_img" id="size_img">
            <h3 class="text-3xl font-extrabold mb-4">Tambahkan Gambar</h3>
            <div class="h-77 flex justify-center items-center rounded-md bg-white w-full relative overflow-hidden">
                <span>@svg('lucide-image-plus', 'size-20')</span>
                <input type="file" name="img_url" id="img_url"
                    class="size-full opacity-0 absolute cursor-pointer z-2">
                <img id="img-preview" class="size-full absolute rounded-md object-cover">
                @error('img_url')
                    <p class="text-sm text-red-500 -mt-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex gap-4 items-center justify-between mt-2">
                <div class="w-1/2 relative rounded-md flex items-center pl-4  bg-white group h-15">
                    <p id="img-size">Pilih Ukuran Gambar</p>
                    <ul id="options"
                        class="absolute top-17 left-0 w-full group-hover:opacity-100 opacity-0 transition-all duration-600 rounded-md bg-white shadow-sm overflow-hidden">
                        <li data-value="standar"
                            class="py-3 px-4 hover:bg-slate-200 transition-all duration-400 cursor-pointer">Standar</li>
                        <li data-value="panjang"
                            class="py-3 px-4 hover:bg-slate-200 transition-all duration-400 cursor-pointer">Panjang</li>
                        <li data-value="besar"
                            class="py-3 px-4 hover:bg-slate-200 transition-all duration-400 cursor-pointer">Besar</li>
                        <li data-value="tinggi"
                            class="py-3 px-4 hover:bg-slate-200 transition-all duration-400 cursor-pointer">Tinggi</li>
                    </ul>
                </div>
                <div class="flex gap-2">
                    <button type="button"
                        class="py-4.5 px-6 bg-[#1d1d1d] rounded-md cursor-pointer text-white font-semibold"
                        onclick="cancelAddImg()">Batal</button>
                    <button type="submit"
                        class="py-4.5 px-8 bg-[#1d1d1d] cursor-pointer rounded-md text-white font-semibold">Tambah</button>
                </div>
            </div>


        </form>
    </main>
</x-layout.dashboard-layout>

@vite('resources/js/gallery.js')
