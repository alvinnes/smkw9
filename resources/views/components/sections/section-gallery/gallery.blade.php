  <section class="w-11/12 my-25 mt-40 flex flex-col">
      <h3 data-aos="fade-down" class="flex w-11/12 mb-4 items-center gap-2 text-sm"><span
              class="w-12 h-0.5 bg-black"></span>
          SMK Walisongo Pecangaan
          <span class="w-12 h-0.5 bg-black"></span>
      </h3>
      <h2 data-aos="fade-down" data-aos-delay="100" class="font-extrabold text-5xl mb-8 w-11/12">Gallery & Prestasi
          SMKW9
      </h2>
      <div class="flex justify-between items-center my-6">
          <p class="flex items-center gap-2">@svg('lucide-image', 'size-4') Total Foto 200</p>
          <a href="" class="flex items-center gap-2">Lihat Semua @svg('lucide-move-right', 'size-6')</a>
      </div>

      <div class="w-full grid grid-cols-2 sm:grid-cols-4 gap-4 place-items-center sm:auto-rows-[17rem]">
          @if ($galleries->isEmpty())
              <x-sections.section-gallery.skeleton-gallery></x-sections.section-gallery.skeleton-gallery>
          @endif

          @foreach ($galleries as $gallery)
              @if ($gallery->size_img == 'standar')
                  <div class="sm:size-full h-55 rounded-md bg-slate-200 overflow-hidden">
                      <img src="{{ asset('storage/' . $gallery['img_url']) }}" alt="foto gallery"
                          class="size-full object-cover">
                  </div>
              @elseif ($gallery->size_img == 'panjang')
                  <div class="sm:size-full h-55 rounded-md bg-slate-200 overflow-hidden sm:col-span-2">
                      <img src="{{ asset('storage/' . $gallery['img_url']) }}" alt="foto gallery"
                          class="size-full object-cover">
                  </div>
              @elseif ($gallery->size_img == 'besar')
                  <div class="sm:size-full h-55 rounded-md bg-slate-200 overflow-hidden sm:col-span-2 sm:row-span-2">
                      <img src="{{ asset('storage/' . $gallery['img_url']) }}" alt="foto gallery"
                          class="size-full object-cover">
                  </div>
              @elseif ($gallery->size_img == 'tinggi')
                  <div class="sm:size-full h-55 rounded-md bg-slate-200 overflow-hidden sm:row-span-2">
                      <img src="{{ asset('storage/' . $gallery['img_url']) }}" alt="foto gallery"
                          class="size-full object-cover">
                  </div>
              @endif
          @endforeach
      </div>
  </section>
