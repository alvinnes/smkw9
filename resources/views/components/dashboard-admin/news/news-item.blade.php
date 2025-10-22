 <div class="w-[31rem] rounded-sm border-solid border-1 p-4 border-slate-200">
     <div class="flex justify-between">
         <x-dashboard-admin.news.header-news-item :news="$news"></x-dashboard-admin.news.header-news-item>
         <p class="text-[0.7em] flex items-center gap-2 text-[grey]">@svg('lucide-calendar', 'size-3 -mt-0.5')
             {{ $news['created_at']->diffForHumans() }}</p>
     </div>
     <a href="/dashboard/detailBerita/{{ $news['id'] }}" class="group">
         <img src="{{ asset('storage/' . $news['img_url']) }}" alt="foro berita"
             class="w-full rounded-md h-30 object-top my-2 object-cover">
         <h2 class="font-semibold text-lg group-hover:underline mb-1 line-clamp-2 text-ellipsis">
             {{ $news['judul_berita'] }}
         </h2>
         <p class="text-sm line-clamp-2 group-hover:underline text-ellipsis">{{ $news['isi_berita'] }}
         </p>
         <div class="flex items-center gap-4 mt-5">
             <img src="{{ asset('storage/' . $news['img_url']) }}" alt="foto profil"
                 class="size-12 rounded-full bg-slate-100 object-cover p-1">
             <div>
                 <h3 class="font-semibold">{{ $news['author']['nama_lengkap'] }}</h3>
                 <p class="text-sm">{{ $news['author']['status'] }}</p>
             </div>
         </div>
     </a>
 </div>
