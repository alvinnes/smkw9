<div class="w-[25rem] rounded-sm border-solid border-1 p-4 border-slate-200">
    <div class="flex justify-between items-center">
        <p class="text-[0.7em] flex items-center gap-2 text-[grey]">@svg('lucide-calendar', 'size-3 -mt-0.5')
            {{ $activity['created_at']->diffForHumans() }}</p>
        <x-dashboard-admin.activity.activity-item-action
            :activity="$activity"></x-dashboard-admin.activity.activity-item-action>
    </div>
    <img src="{{ asset('storage/' . $activity['img_url']) }}" alt="foto berita"
        class="w-full rounded-md h-40 object-top my-2 object-cover">
    <a href="/dashboard/detailBerita/{{ $activity['id'] }}" class="group">
        <h2 class="font-semibold text-lg group-hover:underline mb-1 line-clamp-2 text-ellipsis">
            {{ $activity['judul_kegiatan'] }}
        </h2>
        <p class="text-sm text-nowrap overflow-hidden group-hover:underline text-ellipsis">
            {{ $activity['desk_kegiatan'] }}
        </p>
    </a>
</div>
