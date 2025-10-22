<div
    class="w-full border-dashed rounded-md flex relative justify-center items-center border-1 p-2 border-slate-200 {{ $height }}">
    <div class="flex flex-col items-center gap-1">
        @svg('lucide-image', 'size-15')
        <h2 class="text-xl font-bold text-center">{{ $text }}</h2>
    </div>
    {{ $slot }}
    <label class="size-full opacity-0 absolute">
        <input type="file" name="{{ $key }}" id="{{ $key }}" class="size-full cursor-pointer">
    </label>
</div>
@error($key)
    <p class="text-sm text-red-500 -mt-2">{{ $message }}</p>
@enderror
