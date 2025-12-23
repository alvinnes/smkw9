<nav id="navbar"
    class="fixed top-0 left-0 right-0 py-4 px-[5%] flex bg-transparent transition-all duration-500 z-9999 justify-between items-center text-white">
    <div class="flex sm:gap-10 gap-2 -mt-1 sm:mt-0 items-center">
        <img src="{{ asset('/img/logo-smk.png') }}" alt="logo-smk" class="size-15 sm:size-17 bg-none">
        <span>@svg('lucide-menu', 'size-10 flex sm:hidden cursor-pointer')</span>
        <ul class="sm:flex gap-8 mt-1 hidden">
            <x-navbar.navbar-item link="#beranda">Beranda</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#tentang">Tentang</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#jurusan">Jurusan</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#kegiatan">Kegiatan</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#berita">Berita</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#pendaftaran">Pendaftaran</x-navbar.navbar-item>
            <x-navbar.navbar-item link="#hubungi">Hubungi</x-navbar.navbar-item>
        </ul>
    </div>
    @auth
        <div class="size-14 bg-slate-100 rounded-full p-1 cursor-pointer relative group">
            <img src="{{ asset('img/profile.jpg') }}" alt="foto profile"
                class="size-full bg-white rounded-full object-cover">
            <form action="/keluar" method="post"
                class="absolute w-35  bg-white text-sm group-hover:top-15 top-13 group-hover:opacity-100 transition-all duration-500 opacity-0 p-1.5 shadow-sm rounded-md sm:left-1/2 right-0 sm:-translate-x-1/2">
                @csrf
                @can('is-admin')
                    <button type="button"
                        class="w-full py-3 border-solid text-black border-b-1 hover:bg-slate-100/50 border-slate-200 rounded-md"><a
                            href="/dashboard/admin/news" class="flex gap-2 pl-2 items-center">@svg('lucide-user', 'size-3.5')
                            Dashboard</a></button>
                @else
                    <button type="button"
                        class="w-full py-3 border-solid border-b-1 hover:bg-slate-100/50 border-slate-200 rounded-md"><a
                            href="/dashboard/user" class="flex gap-2 pl-2 items-center">@svg('lucide-user', 'size-3.5')
                            Dashboard</a></button>
                @endcan
                <button
                    class="w-full py-3 flex gap-2 cursor-pointer items-center pl-2 rounded-md hover:bg-red-200/50 text-red-500">
                    @svg('lucide-log-out', 'size-3.5') Keluar</button>
            </form>
        </div>
    @else
        <div class="flex gap-4 sm:gap-6">
            <button
                class="border-solid border-1 text-sm sm:text-base border-slate-200 font-semibold py-2.5 rounded-sm px-4 sm:px-6"><a
                    href="/masuk">Masuk</a></button>
            <button
                class="bg-[#1d1d1d] text-white text-sm sm:text-base font-semibold py-2.5 rounded-sm shadow-sm px-4 sm:px-6"><a
                    href="/daftar">Daftar</a></button>
        </div>
    @endauth
</nav>
