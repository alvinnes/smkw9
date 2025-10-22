<aside class="w-3/12 -ml-5 p-4 shadow-sm h-full bg-white rounded-md">
    <div class="mt-4 flex items-center gap-4">
        @svg('lucide-school', 'size-10')
        <h3 class="text-4xl font-bold"><a href="/">SMKW9</a></h3>
    </div>
    <ul class="mt-14">
        @foreach ($sidebarItem as $item)
            <li class="w-full py-3 {{ request()->is($item['active']) ? 'bg-green-300/30' : '' }} rounded-sm pl-4">
                <a href="{{ $item['link'] }}">{{ $item['name'] }}</a>
            </li>
        @endforeach
    </ul>
</aside>
