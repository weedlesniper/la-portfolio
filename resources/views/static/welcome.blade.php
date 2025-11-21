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

    <main class="flex-1 flex items-center lg:justify-center p-6 lg:p-8">
        <section class="w-full max-w-4xl grid lg:grid-cols-2 gap-6">
            <!-- Intro -->
            <div
                class="p-6 lg:p-10 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg">
                <h1 class="text-2xl font-semibold mb-3">Hey, I’m Luc — developer & tinkerer in Perth</h1>
                <p class="text-[#706f6c] dark:text-[#A1A09A] mb-6">
                    I build practical tools and learning projects across Python, FastAPI, and Laravel.
                    Lately I’ve been exploring OCR on video frames, OAuth flows, and accessible UX patterns.
                </p>

                <div class="space-y-4">
                    <div>
                        <h2 class="font-medium mb-1">What I care about</h2>
                        <ul class="list-disc ml-5 space-y-1 text-sm">
                            <li>Clean, accessible interfaces</li>
                            <li>APIs that are easy to test and extend</li>
                            <li>Fast feedback loops: ship → learn → iterate</li>
                        </ul>
                    </div>

                    <div>
                        <h2 class="font-medium mb-1">Stack & tools</h2>
                        <p class="text-sm">Laravel, Livewire/Blade, Tailwind • Python, FastAPI • SQLite/Postgres • Git &
                            CI</p>
                    </div>
                </div>

                <div class="flex gap-3 mt-6">
                    <a href="{{ route('projects.index') }}"
                        class="inline-block px-5 py-2 bg-[#1b1b18] text-white border border-black rounded-sm hover:bg-black">
                        View Projects
                    </a>
                    <a href="#contact"
                        class="inline-block px-5 py-2 border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm">
                        Get in touch
                    </a>
                </div>
            </div>

            <!-- Visual / Placeholder -->
            <div class="bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg overflow-hidden min-h-[260px]">
                {{-- Replace with an <img> or component as you like --}}
                <div class="h-full w-full grid place-items-center text-sm opacity-80 dark:opacity-90">
                    <span class="px-4 py-2 bg-white/70 dark:bg-black/30 rounded">
                        Add a headshot or project collage here
                    </span>
                </div>
            </div>
        </section>
    </main>

    <!-- Contact -->
    <section id="contact" class="w-full max-w-4xl mx-auto px-6 lg:px-8 pb-14">
        <h2 class="text-xl font-semibold mb-3">Contact</h2>
        <p class="text-sm mb-3">Keen to collaborate or chat?</p>
        <a href="mailto:hello@example.com"
            class="inline-block px-5 py-2 border border-gray-300 rounded-md hover:bg-gray-50">
            hello@example.com
        </a>
    </section>
</body>

</html>
