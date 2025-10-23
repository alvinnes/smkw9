<div class="bg-slate-100/50 group relative cursor-pointer p-2 rounded-sm">@svg('lucide-ellipsis-vertical', 'size-4')
    <div
        class="absolute w-35 py-1 opacity-0 group-hover:opacity-100 transition-all duration-500 px-1.5 bg-white shadow-sm rounded-md right-0 top-10">
        <button type="button"
            class=" cursor-pointer rounded-sm py-2.5 px-3 text-sm text-blue-500 hover:bg-blue-100/30 w-full"><a
                class="flex items-center gap-2" href="/dashboard/ubahBerita/{{ $activity['id'] }}">
                @svg('lucide-pencil', 'size-3') Ubah
            </a>
        </button>
        <button
            class="btn-delete flex items-center cursor-pointer rounded-sm py-2.5 px-3 text-sm gap-2 text-red-500 hover:bg-red-100/30 w-full">@svg('lucide-trash', 'size-3')
            Hapus</button>
    </div>
    <div
        class="modal-warn w-md h-50 rounded-md opacity-0 transition-all duration-400 fixed top-1/2 p-4 left-1/2 -translate-1/2 bg-white shadow-sm">
        <h2 class="font-bold text-xl">Yakin mau hapus kegiatan ini?</h2>
        <hr class="border-slate-300 my-3">
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, praesentium.</p>
        <div class="flex gap-4 mt-6">
            <button
                class="cancel py-3 px-8 rounded-md border-solid border-[#1d1d1d] border-1 cursor-pointer font-semibold text-sm">
                Batalkan</button>
            <button type="button" onclick="deleteActivity({{ $activity['id'] }})"
                class="py-3 px-6 rounded-md bg-[#1d1d1d] text-white font-semibold text-sm cursor-pointer">Hapus</button>
        </div>
    </div>
</div>
