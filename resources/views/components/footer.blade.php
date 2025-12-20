 <footer class="w-full text-white py-14 px-10 bg-primary flex justify-around">
     <div class="w-100 flex gap-4">
         <img src="{{ asset('/img/logo-smk.jpeg') }}" alt="logo-smk" class="size-30">
         <div>
             <h2 class="font-bold text-xl">SMK Walisongo Pecangaan Jepara</h2>
             <p class="text-sm mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, perspiciatis.</p>
             <div class="flex items-center gap-4 mt-3">
                 <a href="" class="hover:-translate-y-1 transition-all duration-500">@svg('lucide-instagram', 'size-6')</a>
                 <a href="" class="hover:-translate-y-1 transition-all duration-500">@svg('lucide-facebook', 'size-6')</a>
                 <a href="" class="hover:-translate-y-1 transition-all duration-500">@svg('lucide-youtube', 'size-8')</a>
             </div>
         </div>
     </div>
     <ul class="text-sm flex flex-col gap-1.5 w-60">
         <h2 class="font-bold text-2xl mb-1">Kontak</h2>
         <li class="flex gap-2">@svg('lucide-map-pin', 'size-4 mt-0.5') Jl. Kauman No. 01 Pecangaan Jepara
             59462</li>
         <li class="flex gap-2">@svg('lucide-phone', 'size-4 mt-0.5') (0291) 7510124 </li>
         <li class="flex gap-2">@svg('lucide-mail', 'size-4 mt-0.5') info@smkwalisongo.sch.id </li>
     </ul>
     <div class="flex flex-col gap-1.5 w-50">
         <h2 class="font-bold text-2xl mb-1">Navigasi</h2>
         <ul class="text-sm grid grid-cols-2 gap-y-2">
             @foreach ($navbarItems as $item)
                 <li class="hover:translate-x-1 hover:font-semibold transition-all duration-300"><a
                         href={{ $item['link'] }}>{{ $item['name'] }}</a></li>
             @endforeach
         </ul>
     </div>
     <ul class="text-sm flex flex-col gap-1.5 w-60">
         <h2 class="font-bold text-2xl mb-1">Tautan</h2>
         <li class="hover:underline"><a href="https://ppdb.smkw9jepara.sch.id/"
                 class="flex gap-2 items-center">@svg('lucide-mail', 'size-4 mt-0.5')
                 ppdb.smkw9jepara.sch.id</a></li>
         <li class="hover:underline"><a href="https://ebooktjkt.smkw9jepara.sch.id/"
                 class="flex gap-2 items-center">@svg('lucide-mail', 'size-4 mt-0.5')
                 ebooktjkt.smkw9jepara.sch.id</a></li>
         <li class="hover:underline"><a href="https://nilai.smkw9jepara.sch.id/"
                 class="flex gap-2 items-center">@svg('lucide-mail', 'size-4 mt-0.5')
                 nilai.smkw9jepara.sch.id/</a></li>
         <li class="hover:underline"><a href="https://smkw9jepara.sch.id/"
                 class="flex gap-2 items-center">@svg('lucide-mail', 'size-4 mt-0.5')
                 smkw9jepara.sch.id</a></li>
     </ul>
 </footer>
 <div class="w-full py-5 bg-[#4A9782] flex flex-col items-center text-white">
     <p>© 2025 SMK Walisongo Pecangaan.</p>
     <p>Dibuat Oleh Alvinnes</p>
 </div>
