<div
    class="modal-delete fixed z-1000 bg-slate-100/10 invisible opacity-0 transition-all duration-500 w-full h-screen flex-col left-0 top-0 backdrop-blur-sm flex pt-35 items-center ">
    <div
        class="modal-success w-md rounded-md bg-white flex items-center p-2 gap-5 invisible opacity-0 shadow-sm text-xl font-semibold mb-4 transition-all duration-400 absolute top-12">
        <img src="{{ asset('img/success.gif') }}" alt="" class="size-14">
        <p>Berhasil menghapus data!</p>
    </div>

    <div class="w-md p-6 h-50 absolute top-1/2 left-1/2 -translate-1/2 rounded-md bg-white shadow-lg">
        <h2 class="font-bold text-xl">Yakin mau hapus {{ $name }} ini?</h2>
        <hr class="border-slate-300 my-3">
        <p class="text-sm w-xs">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, praesentium.</p>
        <div class="flex gap-4 mt-6">
            <button onclick="closeModal()"
                class="py-3 px-8 rounded-md border-solid border-[#1d1d1d] border-1 cursor-pointer font-semibold text-sm">
                Batalkan</button>
            <button type="button" onclick="{{ $clicked }}"
                class="py-3 px-6 rounded-md bg-[#1d1d1d] text-white font-semibold text-sm cursor-pointer">Hapus</button>
        </div>
    </div>
</div>
