<x-layout.dashboard-layout :sidebarItem="$sidebarItem">
    <x-slot:title>{{ $title }}</x-slot:title>
    <main class="w-full bg-slate-100 h-full overflow-y-auto p-8 flex flex-col items-center gap-14">
        <div class="w-full p-3 bg-green-100 rounded-md flex justify-between items-center">
            <label class="w-sm flex">
                <input type="text" name="search" id="search" placeholder="cari berita hot"
                    class="outline-0 bg-white rounded-sm py-3.5 w-full px-4 text-sm" />
            </label>
            <div>
                <button class="bg-white rounded-md p-3"><a href="/dashboard/buatBerita">@svg('lucide-plus', 'size-4')</a></button>
            </div>
        </div>
        <x-modal.modal-succes key="successNews"></x-modal.modal-succes>
        <x-modal.modal-succes key="successDelete"></x-modal.modal-succes>
        <x-modal.modal-succes key="successUpdate"></x-modal.modal-succes>

        <div class="grid grid-cols-3 cursor-pointer place-items-center gap-8 ">
            @foreach ($newses as $news)
                <x-dashboard-admin.news.news-item :news="$news"></x-dashboard-admin.news.news-item>
            @endforeach
        </div>
        <div class="w-full flex justify-between">
            <p class="text-[#808080]">Halaman 1 dari 10</p>
            <div class="flex items-center gap-3">
                @if ($newses->onFirstPage())
                    <button disabled
                        class="p-2 bg-primary rounded-sm shadow-sm text-white cursor-not-allowed">@svg('lucide-arrow-left', 'size-6')</button>
                @else
                    <button class="p-2 bg-primary rounded-sm shadow-sm text-white"><a
                            href="{{ $newses->previousPageUrl() }}">@svg('lucide-arrow-left', 'size-6')</a></button>
                @endif
                @foreach ($pages as $page => $url)
                    <button class="size-10 bg-primary text-white rounded-sm shadow-sm"><a
                            href="{{ $url }}">{{ $page }}</a></button>
                @endforeach
                @if ($newses->onLastPage())
                    <button disabled
                        class="p-2 bg-primary rounded-sm shadow-sm text-white cursor-not-allowed">@svg('lucide-arrow-right', 'size-6')</button>
                @else
                    <button class="p-2 bg-primary text-white rounded-sm shadow-sm"><a
                            href="{{ $newses->nextPageUrl() }}">@svg('lucide-arrow-right', 'size-6')</a></button>
                @endif
            </div>
        </div>

        @if (blank($newses))
            <div>
                <h4 class="text-5xl font-bold text-[#1d1d1d]">Belum ada berita</h4>
            </div>
        @endif
    </main>
</x-layout.dashboard-layout>
