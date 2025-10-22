<div class="flex flex-col gap-2">
    <label class="border-solid border-1 border-slate-200 relative flex items-center rounded-sm pl-4">
        @svg('lucide-lock', 'size-4 text-[grey]')
        <input type="password" name="password" id="password" placeholder="********"
            class="outline-0 py-4.5 text-sm px-4 w-full">
        <span class="size-5 absolute top-1/2 -translate-y-1/2 right-4 cursor-pointer">@svg('lucide-eye')</span>
    </label>
    @error('password')
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
