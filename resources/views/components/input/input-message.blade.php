<div class="w-full">
    <label
        class="flex gap-3 border-solid border-1 {{ $errors->has($key) ? 'h-48' : 'h-45' }} p-4 rounded-md border-slate-200">
        @svg('lucide-newspaper', 'size-4 mt-1')
        <textarea rows="15" name="{{ $key }}" id="{{ $key }}" autocomplete="off"
            class="outline-0 w-full self-start">{{ $content }}</textarea>
    </label>
    @error($key)
        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
    @enderror
</div>
