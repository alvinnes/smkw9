<aside class="w-[20rem] p-4 shadow-sm h-full bg-[#62A388] -ml-5">
    <div class="mt-4 flex items-center gap-4">
        @svg('lucide-school', 'size-10 text-white')
        <h3 class="text-4xl font-bold text-white"><a href="/">SMKW9</a></h3>
    </div>
    <ul class="mt-14">
        @foreach ($sidebarItem as $item)
            <li class="w-full py-3 {{ request()->is($item['active']) ? 'bg-white/40' : '' }} rounded-sm pl-4">
                <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
            </li>
        @endforeach
    </ul>
</aside>
