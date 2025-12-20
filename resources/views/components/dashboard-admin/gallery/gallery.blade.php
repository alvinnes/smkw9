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
            class="form-img fixed top-1/2 left-1/2 -translate-1/2 w-xl rounded-xl p-5 bg-slate-100/50 shadow-sm opacity0 transition-all duration-400 -mt-8 invisibe">
            @csrf
            <h3 class="text-3xl font-extrabold mb-4">Tambahkan Gambar</h3>
            <div class="h-77 flex justify-center items-center rounded-md bg-white w-full relative overflow-hidden">
                <span>@svg('lucide-image-plus', 'size-20')</span>
                <input type="file" name="img_url" id="img_url"
                    class="size-full opacity-0 absolute cursor-pointer z-2">
                <img id="img-preview" class="size-full absolute rounded-md object-cover">
            </div>
            <div class="w-full p-6 rounded-md bg-white">Pilih Ukuran Gambar</div>

            @error('img_url')
                <p class="text-sm text-red-500 -mt-2">{{ $message }}</p>
            @enderror
            <div class="flex gap-4 mt-4">
                <button type="button" class="py-3 px-6 bg-[#1d1d1d] rounded-md cursor-pointer text-white font-semibold"
                    onclick="cancelAddImg()">Batal</button>
                <button type="submit"
                    class="py-3 px-8 bg-[#1d1d1d] cursor-pointer rounded-md text-white font-semibold">Tambah</button>
            </div>
        </form>
    </main>
</x-layout.dashboard-layout>
