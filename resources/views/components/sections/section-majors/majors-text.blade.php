@if ($majors->isEmpty())
    <div class="w-full sm:w-11/12 h-full relative" data-aos="fade-up" data-aos-delay="400">
        <div class="text-black flex justify-between flex-col sm:flex-row items-center px-5 sm:px-20">
            <div class="w-full sm:w-[40rem] mb-8 sm:mb-0 flex flex-col gap-3">
                <div class="h-10 sm:h-14 w-80 sm:w-96 bg-slate-200 rounded-lg animate-pulse"></div>
                <div class="h-10 sm:h-14 w-60 sm:w-72 bg-slate-200 rounded-lg animate-pulse"></div>

                <div class="flex flex-col gap-2 mt-4">
                    <div class="h-4 w-full sm:w-lg bg-slate-200 rounded-md animate-pulse"></div>
                    <div class="h-4 w-11/12 sm:w-md bg-slate-200 rounded-md animate-pulse"></div>
                    <div class="h-4 w-10/12 sm:w-sm bg-slate-200 rounded-md animate-pulse"></div>
                </div>

                <div class="h-12 w-44 bg-slate-200 rounded-md animate-pulse mt-6"></div>
            </div>

            <div
                class="w-full sm:w-80 h-80 sm:h-90 rounded-xl bg-slate-200 shadow-sm flex items-center justify-center animate-pulse">
                <svg class="w-20 h-20 text-slate-300" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
        </div>
    </div>

    <div class="w-full hidden sm:flex justify-between items-center z-2 absolute top-1/2 mt-18 -translate-y-1/2">
        <div class="size-16 bg-slate-200 rounded-full animate-pulse"></div>
        <div class="size-16 bg-slate-200 rounded-full animate-pulse"></div>
    </div>

    <div class="w-full sm:hidden flex justify-center items-center mt-2 gap-6">
        <div class="size-16 bg-slate-200 rounded-full animate-pulse"></div>
        <div class="size-16 bg-slate-200 rounded-full animate-pulse"></div>
    </div>
@else
    <swiper-container speed="1500" autoplay-delay="5000" data-aos="fade-up" data-aos-delay="400"
        class="swiper-bg w-full sm:w-11/12 h-full relative" navigation="true" pagination="true"
        navigation-next-el=".btn-next" navigation-prev-el=".btn-prev">
        @foreach ($majors as $major)
            <swiper-slide class="text-black flex justify-between flex-col sm:flex-row items-center px-5 sm:px-20">

                <div class="w-full sm:w-[40rem] mb-8 sm:mb-0">
                    <h2 class="font-bold text-3xl sm:text-5xl text-[#6A9C89] text-shadow-xs leading-10 sm:leading-14">
                        {{ $major['nama'] }}</h2>
                    <p class="w-full sm:w-lg mt-4">{{ $major['deskripsi'] }}</p>
                    <button
                        class="border-solid border-2 mt-6 cursor-pointer relative before:absolute before:size-full before:left-0 before:top-0 before:bg-primary before:scale-x-0 hover:before:scale-x-100 before:transition-all before:duration-500 hover:text-black before:-z-1 transition-all duration-400 delay-100 before:origin-left border-black rounded-md py-3 px-4 ">Baca
                        Selengkapnya</button>
                </div>
                <div
                    class="w-full sm:w-80 h-80 sm:h-90 rounded-xl bg-slate-200 shadow-sm flex items-center justify-center">
                    <img src="{{ asset('storage/' . $major['img_url']) }}" class="w-7/12 sm:w-10/12 object-cover"
                        alt="">
                </div>
            </swiper-slide>
        @endforeach
    </swiper-container>
    <div class="w-full hidden sm:flex justify-between items-center z-2 absolute top-1/2 mt-18 -translate-y-1/2">
        <button class="btn-prev">@svg('lucide-circle-chevron-left', 'size-16 cursor-pointer stroke-1 hover:text-primary transition-all duration-400')</button>
        <button class="btn-next">@svg('lucide-circle-chevron-right', 'size-16 cursor-pointer stroke-1 hover:text-primary transition-all duration-400')</button>
    </div>
    <div class="w-full sm:hidden flex justify-center items-center mt-2 gap-6">
        <button class="btn-prev">@svg('lucide-circle-chevron-left', 'size-16 cursor-pointer stroke-1 hover:text-primary transition-all duration-400')</button>
        <button class="btn-next">@svg('lucide-circle-chevron-right', 'size-16 cursor-pointer stroke-1 hover:text-primary transition-all duration-400')</button>
    </div>
@endif
