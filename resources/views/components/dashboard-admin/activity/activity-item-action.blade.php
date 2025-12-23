<div class="bg-slate-100/50 group relative cursor-pointer p-2 rounded-sm">@svg('lucide-ellipsis-vertical', 'size-4')
    <div
        class="absolute w-35 py-1 opacity-0 group-hover:opacity-100 transition-all duration-500 px-1.5 bg-white shadow-sm rounded-md right-0 top-10">
        <button type="button"
            class=" cursor-pointer rounded-sm py-2.5 px-3 text-sm text-blue-500 hover:bg-blue-100/30 w-full"><a
                class="flex items-center gap-2" href="/dashboard/ubahBerita/{{ $activity['id'] }}">
                @svg('lucide-pencil', 'size-3') Ubah
            </a>
        </button>
        <button data-id="{{ $activity['id'] }}"
            class="btn-delete flex items-center cursor-pointer rounded-sm py-2.5 px-3 text-sm gap-2 text-red-500 hover:bg-red-100/30 w-full">@svg('lucide-trash', 'size-3')
            Hapus</button>
    </div>
</div>

<x-modal.modal-delete name="kegiatan" clicked="deleteActivities()"></x-modal.modal-delete>
