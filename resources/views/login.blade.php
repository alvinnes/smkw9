<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-lg ml-8.5 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Masuk ke SMKW9!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, temporibus voluptate? Consectetur repellat
            neque in!</p>
    </div>

    @if (session()->has('success'))
        <div id="flash" class="w-[34rem] p-4 text-green-700 bg-green-100/50 flex justify-between items-center">
            {{ session('success') }}
            <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
        </div>
    @endif

    <form action="/masuk" method="post" class="w-lg rounded-sm p-4 flex flex-col gap-4">
        @csrf
        <x-input.input-item key="email" placeholder="example@gmail.com" icon="lucide-mail"
            autofocus="autofocus"></x-input.input-item>
        <x-input.input-password></x-input.input-password>

        <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Masuk Sekarang</button>
        <p class="text-sm text-center">Tidak punya akun? <a href="/daftar" class="text-blue-500">buat akun</a> sekarang!
        </p>
    </form>
</x-layout.form-layout>
