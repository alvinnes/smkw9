@props(['type' => 'text', 'icon', 'key', 'placeholder'])

<div class="flex flex-col gap-2">
    <label class="border-solid border-1 border-slate-200 flex items-center rounded-sm pl-4">
        @svg($icon, 'size-4 text-[grey]')
        <input type="{{ $type }}" name="{{ $key }}" id="{{ $key }}"
            placeholder="{{ $placeholder }}" value="{{ old($key) }}" class="outline-0 py-4.5 text-sm px-4 w-full"
            {{ $attributes }}>
    </label>
    @error($key)
        <p class="text-sm text-red-500">{{ $message }}</p>
    @enderror
</div>
