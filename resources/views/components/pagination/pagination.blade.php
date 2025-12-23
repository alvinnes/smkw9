<div class="flex justify-between flex-col gap-4 sm:gap-0 sm:flex-row sm:items-center w-full" data-aos="fade-up">
    <div class="flex items-center gap-4">
        @if ($pagesItem->onFirstpage())
            <button disabled class="bg-slate-200 rounded-md p-3 cursor-not-allowed shadow-sm">
                @svg('lucide-arrow-left', 'size-6')</button>
        @else
            <button class="bg-slate-100 rounded-md p-3 cursor-pointer shadow-sm"><a
                    href="{{ $pagesItem->previousPageUrl() . $hash }} ">@svg('lucide-arrow-left', 'size-6')</a></button>
        @endif
        @foreach ($pages as $page => $link)
            <button class="bg-text text-white text-lg font-semibold rounded-md py-2.5 px-5 shadow-sm cursor-pointer"><a
                    href="{{ $link . $hash }}">{{ $page }}</a></button>
        @endforeach
        @if ($pagesItem->onLastPage())
            <button disabled class="bg-slate-200 rounded-md p-3 cursor-not-allowed shadow-sm">
                @svg('lucide-arrow-right', 'size-6')</button>
        @else
            <button class="bg-slate-100 rounded-md p-3 cursor-pointer shadow-sm"><a
                    href="{{ $pagesItem->nextPageUrl() . $hash }}">@svg('lucide-arrow-right', 'size-6')</a></button>
        @endif
    </div>
    <a href="" class="flex items-center gap-2">Lihat Semua {{ $name }} @svg('lucide-move-right', 'size-5')</a>
</div>
