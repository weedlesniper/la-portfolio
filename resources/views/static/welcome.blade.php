<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Luc Adams – Portfolio') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ... your fallback styles ... */
        </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen flex flex-col">
    {{-- Reusable public navbar --}}
    @include('layouts.navigation')

    <main class="flex-1 flex flex-col items-center p-6 lg:p-8">
        <section class="w-full max-w-5xl grid lg:grid-cols-2 gap-6">
            <!-- Intro -->
            <div
                class="relative overflow-hidden p-6 lg:p-8 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] rounded-lg
           shadow-[inset_0_0_0_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0_0_0_1px_#fffaed2d]">
                <!-- soft accent glow -->
                <div
                    class="pointer-events-none absolute -right-10 -top-10 h-32 w-32 rounded-full bg-[#ffecd5] blur-3xl opacity-60 dark:bg-[#f97316]/20">
                </div>

                <div class="relative flex flex-col h-full space-y-4">
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-[#e4dfd4] dark:border-[#3E3E3A] px-3 py-1 text-[11px] uppercase tracking-[0.16em] text-[#706f6c] dark:text-[#A1A09A]">
                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                        <span>Developer · Perth</span>
                    </div>

                    <div>
                        <h1 class="text-2xl lg:text-3xl font-semibold leading-snug">
                            Hey, I’m Luc
                        </h1>
                        <ul class="list-disc list-inside mt-4 t-2 text-sm text-[#706f6c] dark:text-[#A1A09A] space-y-4">

                            <li>I’ve been studying software and computer science since 2021 and have industry experience
                                working in AI. </li>
                            <li>I'm an <strong> Advanced Programming Diploma Student </strong> who has just completed
                                Semester 1.
                            </li>
                            <li>I graduated from Curtin in 2024 with a <strong>Bachelors in Computing</strong></li>

                            </span>
                    </div>

                    <div
                        class="flex flex-wrap justify-center gap-2 text-[11px] pt-3 border-t border-[#eee7da] dark:border-[#272723]">
                        <span
                            class="rounded-full bg-[#f4f1ea] px-3 py-1 dark:bg-[#232320] text-[#4b4a45] dark:text-[#d4d4cf]">
                            Laravel · Livewire · Tailwind
                        </span>
                        <span
                            class="rounded-full bg-[#f4f1ea] px-3 py-1 dark:bg-[#232320] text-[#4b4a45] dark:text-[#d4d4cf]">
                            Python · FastAPI · OCR
                        </span>
                        <span
                            class="rounded-full bg-[#f4f1ea] px-3 py-1 dark:bg-[#232320] text-[#4b4a45] dark:text-[#d4d4cf]">
                            AI & multimodal tooling
                        </span>
                        <span
                            class="rounded-full bg-[#f4f1ea] px-3 py-1 dark:bg-[#232320] text-[#4b4a45] dark:text-[#d4d4cf]">
                            ML + Computer Vision pipelines
                        </span>
                        <a href="{{ route('about') }}"
                            class="inline-block rounded-full bg-[#f4f1ea] px-3 py-1 dark:bg-[#232320] text-[#4b4a45] dark:text-[#d4d4cf] hover:bg-[#ece6dd] dark:hover:bg-[#2a2a28] transition">
                            See my technologies and skills here →
                        </a>

                    </div>
                    <div class="pt-3 pb-3 border-t border-b border-[#eee7da] dark:border-[#272723]">
                        <p
                            class="justify-center text-[11px] uppercase tracking-[0.16em] text-[#9a9485] dark:text-[#86837a] mb-2">
                            Studied & worked with
                        </p>
                        <div class="flex flex-wrap justify-start mt-6 mb-6 gap-4">
                            {{-- Curtin --}}
                            <div class="h-7 flex items-center">
                                <img src="{{ asset('storage/logos/curtin.png') }}" alt="Curtin University"
                                    class="h-14 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity" />
                            </div>

                            {{-- Woodside --}}
                            <div class="h-7 flex items-center">
                                <img src="{{ asset('storage/logos/woodside.png') }}" alt="Woodside Energy"
                                    class="h-14 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity" />
                            </div>

                            {{-- TAFE --}}
                            <div class="h-7 flex items-center">
                                <img src="{{ asset('storage/logos/tafe.png') }}" alt="North Metropolitan TAFE"
                                    class="h-14 w-auto object-contain opacity-80 hover:opacity-100 transition-opacity" />
                            </div>
                        </div>
                    </div>


                    <div class="flex gap-3 pt-2 mt-auto">
                        <a href="{{ route('projects.index') }}"
                            class="inline-flex items-center justify-center px-5 py-2 text-sm bg-[#1b1b18] text-white border border-black rounded-sm hover:bg-black">
                            View Projects
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center justify-center px-5 py-2 text-sm border border-[#e4dfd4] dark:border-[#3E3E3A] hover:bg-[#faf7ef] dark:hover:bg-[#1f1f1c] rounded-sm">
                            Get in touch
                        </a>
                    </div>

                </div>
            </div>


            <!-- Visual / Image Carousel -->
            <div class="relative bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg overflow-hidden aspect-[16/20]"
                data-carousel>
                <!-- Slides -->
                <div class="h-full w-full relative">
                    {{-- Slide 1 --}}
                    <div class="carousel-slide h-full w-full" data-carousel-slide>
                        <img src="{{ asset('storage/landing/headshot.jpg') }}" alt="Luc headshot"
                            class="h-full w-full object-cover" />
                    </div>

                    {{-- Slide 2 --}}
                    <div class="carousel-slide h-full w-full hidden" data-carousel-slide>
                        <img src="{{ asset('storage/landing/boat.jpg') }}" alt="Luc on a boat"
                            class="h-full w-full object-cover" />
                    </div>

                    {{-- Slide 3 --}}
                    <div class="carousel-slide h-full w-full hidden" data-carousel-slide>
                        <img src="{{ asset('storage/landing/museum.jpg') }}" alt="museum"
                            class="h-full w-full object-cover" />
                    </div>

                    <div class="carousel-slide h-full w-full hidden" data-carousel-slide>
                        <img src="{{ asset('storage\landing\tori.jpg') }}" alt="luc at tori gate"
                            class="h-full w-full object-cover" />
                    </div>
                </div>

                <!-- Controls -->
                <button type="button"
                    class="absolute left-2 top-1/2 -translate-y-1/2 rounded-full bg-black/40 hover:bg-black/70 text-white p-1.5 text-xs"
                    data-carousel-prev aria-label="Previous slide">
                    ‹
                </button>
                <button type="button"
                    class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full bg-black/40 hover:bg-black/70 text-white p-1.5 text-xs"
                    data-carousel-next aria-label="Next slide">
                    ›
                </button>

                <!-- Dots -->
                <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex gap-2 bg-black/30 backdrop-blur-sm px-3 py-1.5 rounded-full"
                    data-carousel-dots>
                    <button class="h-1.5 w-3 rounded-full bg-white" data-carousel-dot
                        aria-label="Go to slide 1"></button>
                    <button class="h-1.5 w-1.5 rounded-full bg-white/50" data-carousel-dot
                        aria-label="Go to slide 2"></button>
                    <button class="h-1.5 w-1.5 rounded-full bg-white/50" data-carousel-dot
                        aria-label="Go to slide 3"></button>
                    <button class="h-1.5 w-1.5 rounded-full bg-white/50" data-carousel-dot
                        aria-label="Go to slide 4"></button>
                </div>
            </div>
        </section>
        <section class="w-full max-w-5xl mt-6">
            <div class="grid gap-4 md:grid-cols-2">
                {{-- Card 1 – GitHub --}}
                <div
                    class="rounded-lg bg-white dark:bg-[#161615] shadow-sm border border-[#e7dfcf]/60 dark:border-[#262520] relative overflow-hidden">
                    <div class="px-4 pt-6 pb-10 text-center relative z-10">
                        <h4 class="text-xs uppercase text-gray-500 dark:text-gray-400 tracking-[0.16em]">
                            GitHub
                        </h4>
                        <i
                            class ="fa-brands fa-github text-xl uppercase text-gray-500 dark:text-gray-400 tracking-[0.16em]"></i>
                        <h3 class="text-2xl text-gray-800 dark:text-gray-50 font-semibold my-2">
                            535+
                        </h3>
                        <p class="text-[11px] text-emerald-500 leading-tight">
                            ▲ contributions in 2025
                        </p>
                    </div>
                    <div class="absolute bottom-0 inset-x-0">
                        <canvas id="codingChart1" height="70"></canvas>
                    </div>
                </div>


                {{-- Card 3 – Projects --}}
                <div
                    class="rounded-lg bg-white dark:bg-[#161615] shadow-sm border border-[#e7dfcf]/60 dark:border-[#262520] relative overflow-hidden">
                    <div class="px-4 pt-6 pb-10 text-center relative z-10">
                        <h4 class="text-xs uppercase text-gray-500 dark:text-gray-400 tracking-[0.16em]">
                            Projects
                        </h4>
                        <h3 class="text-2xl text-gray-800 dark:text-gray-50 font-semibold my-2">
                            10+
                        </h3>
                        <p class="text-[11px] text-emerald-500 leading-tight">
                            ▲ shipped & documented
                        </p>
                    </div>
                    <div class="absolute bottom-0 inset-x-0">
                        <canvas id="codingChart3" height="70"></canvas>
                    </div>
                </div>
            </div>

        </section>
        @if ($snapshotDate)
            <section class="mt-8">
                <div class="flex items-baseline justify-between mb-3">
                    <div>
                        <h2 class="text-sm font-semibold tracking-wide text-slate-400 uppercase">
                            Weekly Coding Activity
                        </h2>
                        <p class="text-xs text-slate-500">
                            Week ending <span class="font-medium text-slate-300">{{ $snapshotDate }}</span>
                        </p>
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-4">
                    @foreach ($wakaCards as $card)
                        <div
                            class="group rounded-2xl border border-slate-800 bg-slate-900/60 px-4 py-3 shadow-sm
                           hover:border-sky-500/70 hover:bg-slate-900 hover:-translate-y-0.5 transition">
                            <div class="mb-2 flex items-center justify-between">
                                <h3 class="text-sm font-medium text-slate-200">
                                    {{ $card['title'] }}
                                </h3>
                            </div>

                            <ul class="space-y-1">
                                @forelse ($card['items'] as $item)
                                    <li class="flex items-center justify-between text-xs text-slate-300">
                                        <span class="truncate pr-2">
                                            {{ $item['name'] }}
                                        </span>
                                        <span class="font-mono text-[11px] text-slate-400">
                                            {{ $item['formatted_time'] }}
                                        </span>
                                    </li>
                                @empty
                                    <li class="text-xs text-slate-500">
                                        No data yet for this week.
                                    </li>
                                @endforelse
                            </ul>
                        </div>
                    @endforeach
                </div>
            </section>
        @else
            {{-- Optional: message when there is no CSV data yet --}}
            <p class="mt-8 text-xs text-slate-500">
                WakaTime stats will appear here once data is available.
            </p>
        @endif

    </main>

</body>

</html>
