<x-layout.form-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-xl ml-8.5 mb-8">
        <h2 class="text-4xl font-semibold mb-3">Lupa Password</h2>
        <p>Masukkan email yang terdaftar, kami akan mengirim tautan untuk mengatur ulang kata sandi Anda.!</p>
    </div>

    @if (session()->has('message'))
        <div id="flash" class="w-[34rem] p-4 text-green-700 bg-green-100/50 flex justify-between items-center">
            {{ session('message') }}
            <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
        </div>
    @endif

    @if (session()->has('errorForgot'))
        <div id="flash" class="w-[34rem] p-4 text-red-700 bg-red-100/50 flex justify-between items-center">
            {{ session('errorForgot') }}
            <span id="btnClose">@svg('lucide-x', 'size-4 cursor-pointer')</span>
        </div>
    @endif

    <form action="/lupa-password" method="post" class="w-xl rounded-sm p-4 flex flex-col gap-4">
        @csrf
        <x-input.input-item key="email" placeholder="example@gmail.com" icon="lucide-mail"
            autofocus=""></x-input.input-item>

        <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Kirim Tautan</button>
    </form>
</x-layout.form-layout>
