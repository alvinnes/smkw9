<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-10/12 rounded-md bg-white h-[80vh]">
        <div class="w-11/12 mx-auto p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-4 mt-15">
                    <img src="{{ asset('storage/' . $news['img_url']) }}" alt="foto profil"
                        class="size-15 rounded-full p-1 bg-slate-100 object-cover">
                    <div>
                        <h3 class="font-semibold">{{ $news['author']['nama_lengkap'] }}</h3>
                        <p class="text-[0.8em]">{{ $news['author']['status'] }}</p>
                    </div>
                </div>
                <span
                    class="bg-indigo-200/30 text-indigo-500 text-[0.7em] rounded-sm p-2">{{ Str::title($news['kategori']) }}</span>
            </div>
            <hr class="w-full border-solid border-1 border-slate-100 my-8">
            <h1 class="text-4xl font-extrabold">{{ $news['judul_berita'] }}</h1>
            <div class="flex justify-between items-center mt-4 text-[grey]">
                <p class="text-[0.8em]">Dikirm dari : {{ $news['author']['email'] }}</p>
                <p class="text-[0.8em] flex items-center gap-2">@svg('lucide-calendar', 'size-3 -mt-0.5')
                    {{ $news['created_at']->diffForHumans() }}</p>
            </div>
            <img src="{{ asset('storage/' . $news['img_url']) }}" alt="foto berita"
                class="w-full h-150 mt-4 rounded-md object-cover">
            @foreach ($news['isi_berita'] as $paraghrap)
                <p class="my-8">{{ $paraghrap }}</p>
            @endforeach
        </div>
    </div>
</x-layout.form-layout>
