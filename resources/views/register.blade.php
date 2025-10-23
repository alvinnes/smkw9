<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-xl ml-8.5 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Daftar sekarang juga!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate? Consectetur repellat
            neque in!</p>
    </div>
    <form action="/daftar" method="post" class="w-xl rounded-sm p-4 flex flex-col gap-4">
        @csrf
        <x-input.input-item key="nama_lengkap" placeholder="Masukkan nama lengkap anda" icon="lucide-user"
            autofocus="autofocus"></x-input.input-item>
        <x-input.input-item key="nama_pengguna" placeholder="Masukkan nama anda" icon="lucide-user-circle"
            autofocus=""></x-input.input-item>
        <x-input.input-item key="email" placeholder="example@gmail.com" icon="lucide-mail"
            autofocus=""></x-input.input-item>
        <x-input.input-password></x-input.input-password>

        <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Daftar</button>
    </form>
</x-layout.form-layout>
