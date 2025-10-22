@props(['key'])

@if (session()->has($key))
    <div id="flash"
        class="bg-green-100/50 w-sm rounded-sm flex justify-between items-center text-green-700 p-4 self-start font-semibold -mt-8">
        {{ session($key) }} <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
    </div>
@endif
