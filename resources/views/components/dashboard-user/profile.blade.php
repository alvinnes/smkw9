<x-layout.dashboard-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-10/12 bg-white h-full rounded-md p-8 flex flex-col items-center gap-14">
        <h2 class="text-6xl w-2xl font-extrabold">Profil Akun</h2>
        <form action="" class="w-2xl flex flex-col gap-8 text-[grey]">
            <x-input.input-item-profile key="nama_lengkap" placeholder="Masukkan nama lengkap anda" icon="lucide-user"
                value="{{ $user['nama_lengkap'] }}" disabled></x-input.input-item-profile>
            <x-input.input-item-profile key="nama_pengguna" placeholder="Masukkan nama " icon="lucide-user-circle"
                value="{{ $user['nama_pengguna'] }}" disabled></x-input.input-item-profile>
            <x-input.input-item-profile key="email" placeholder="Masukkan email" icon="lucide-mail"
                value="{{ $user['email'] }}" disabled></x-input.input-item-profile>
            <x-input.input-item-profile key="password" placeholder="*******" icon="lucide-lock" value="Ubah password"
                disabled></x-input.input-item-profile>
            <button class="bg-[#1d1d1d] text-white cursor-pointer font-semibold py-3 rounded-md">Ubah</button>
        </form>
    </div>
</x-layout.dashboard-layout>
