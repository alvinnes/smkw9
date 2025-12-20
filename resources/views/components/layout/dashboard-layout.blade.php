<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="@vite('resources/js/app.js')"></script>
</head>

<body class="w-full h-screen font-['Montserrat'] bg-slate-100 flex justify-between">
    @can('is-admin')
        <x-sidebar.sidebar-admin :sidebarItem="$sidebarItem"></x-sidebar.sidebar-admin>
    @else
        <x-sidebar.sidebar></x-sidebar.sidebar>
    @endcan
    {{ $slot }}
</body>

</html>
