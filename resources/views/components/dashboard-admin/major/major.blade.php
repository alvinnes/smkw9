<x-layout.dashboard-layout :sidebarItem="$sidebarItem">
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="w-10/12 bg-white h-full overflow-y-auto rounded-md p-8 flex flex-col items-center gap-14">
        <div class="w-full">
            <h1 class="text-4xl font-bold">Program Studi Dan Jurusan SMKW9</h1>
            <p class="mt-2">Berikut Pilihan Jurusan Yang ada pada SMK Walisongo Pecangaan</p>
        </div>
        <div class="w-full p-3 bg-green-100 rounded-md flex justify-between items-center">
            <div>
                <button class="bg-white rounded-md p-3"><a href="/dashboard/tambahJurusan">@svg('lucide-plus', 'size-4')</a></button>
            </div>
        </div>

        <x-modal.modal-succes key="successMajor"></x-modal.modal-succes>
        <x-modal.modal-succes key="successDelete"></x-modal.modal-succes>
        <x-modal.modal-succes key="successUpdate"></x-modal.modal-succes>

        <div class="cursor-pointer w-full flex flex-wrap justify-center gap-8">
            @foreach ($majors as $major)
                <div class="w-lg border-solid border-1 border-slate-200 p-6 rounded-md">
                    <a href="" class="flex gap-6 items-center group">
                        <img src="{{ asset('storage/' . $major['img_url']) }}" alt="foto jurusan" class="size-40">
                        <div>
                            <h2 class="text-2xl line-clamp-2 text-ellipsis group-hover:underline font-semibold">
                                {{ $major['nama'] }}</h2>
                            <p class="text-ellipsis group-hover:underline line-clamp-3">{{ $major['deskripsi'] }}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </main>
</x-layout.dashboard-layout>
