<x-layout.dashboard-layout :sidebarItem="$sidebarItem">
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="w-9/12 bg-white h-full overflow-y-auto rounded-md p-8 flex flex-col items-center gap-14">
        <div class="w-full p-3 bg-green-100 rounded-md flex justify-between items-center">
            <label class="w-sm flex">
                <input type="text" name="search" id="search" placeholder="cari berita hot"
                    class="outline-0 bg-white rounded-sm py-3.5 w-full px-4 text-sm" />
            </label>
            <div>
                <button class="bg-white rounded-md p-3"><a href="/dashboard/tambahKegiatan">@svg('lucide-plus', 'size-4')</a></button>
            </div>
        </div>
        <x-modal.modal-succes key="successNews"></x-modal.modal-succes>
        <x-modal.modal-succes key="successDelete"></x-modal.modal-succes>
        <x-modal.modal-succes key="successUpdate"></x-modal.modal-succes>
        <x-modal.modal-succes key="successActivity"></x-modal.modal-succes>

        <div class="grid grid-cols-2 cursor-pointer place-items-center gap-10">
            @foreach ($activities as $activity)
                <x-dashboard-admin.activity.activity-item :activity="$activity"></x-dashboard-admin.activity.activity-item>
            @endforeach
        </div>

        @if (blank($activities))
            <div>
                <h4 class="text-5xl font-bold text-[#1d1d1d]">Belum ada berita</h4>
            </div>
        @endif
    </main>
</x-layout.dashboard-layout>
