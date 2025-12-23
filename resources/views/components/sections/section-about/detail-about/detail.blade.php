<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/swiper.js', 'resources/js/app.js'])

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body class="w-full min-h-screen font-['Montserrat'] flex flex-col items-center overflow-x-hidden">
    <main class="w-11/12">
        <h1 data-aos="fade-down" data-aos-delay="200"
            class="text-4xl mb-6 w-3xl leading-11 font-extrabold text-shadow-2xs">Kenali Sekolah SMK Walisongo
            Pecangaan
            Lebih Dekat</h1>
        <swiper-container data-aos="fade-down" pagination="true" pagination-dynamic-bullets="true" autoplay-delay="4000"
            id="swiper" class="w-full h-140 rounded-xl bg-slate-200 overflow-hidden">
            @foreach ($slides as $slide)
                <swiper-slide
                    class="relative before:absolute before:size-full before:left-0 before:bottom-0 before:bg-linear-to-t before:from-black/80 before:via-black/50 before:z-1 before:to-transparent">
                    <img src="{{ asset($slide) }}" alt="foto-sekolah" class="size-full object-cover">
                </swiper-slide>
            @endforeach
        </swiper-container>
        <div class="w-11/12 mx-auto">
            <x-sections.section-about.detail-about.history></x-sections.section-about.detail-about.history>
            <x-sections.section-about.detail-about.profile></x-sections.section-about.detail-about.profile>
            <x-sections.section-about.detail-about.vimi></x-sections.section-about.detail-about.vimi>
            <x-sections.section-about.detail-about.facility></x-sections.section-about.detail-about.facility>
        </div>
    </main>
</body>

</html>
