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

    <section id="skills" class="px-4 sm:px-6 lg:px-8 py-12 border-t border-slate-800">
        <div class="max-w-4xl mx-auto">

            <div class = "flex">
                <i class="fa-solid fa-gear text-xl text-white mb-2 mr-1"></i>
                <h2 class="text-xl font-semibold text-slate-100 mb-2">Technical Skills</h2>
            </div>

            <p class="text-sm text-slate-400 mb-8">
                A quick snapshot of the tools and languages I have experience with.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                {{-- Python --}}
                <div class="group skills-card skills-card--python">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        @include('icons.python-mono')
                        @include('icons.python-colour')
                    </div>
                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">Python</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100 ">
                            Python is my strongest language, I've used it for ML, computer vision, backend APIs, and
                            industry AI work. I use it to build practical, efficient systems supported by solid data
                            structure knowledge.
                        </p>
                    </div>
                </div>

                {{-- PHP --}}
                <div class="group skills-card hover:border-indigo-400/40">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        <i
                            class="fa-brands fa-php
                                  text-slate-300 text-4xl
                                    transition-colors duration-200
                                  group-hover:text-[#777BB4]"></i>
                    </div>

                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">PHP</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                            I’ve recently been using PHP with Laravel and Blade to build web applications, creating
                            reusable components and pairing the templating system with Tailwind for clean, consistent
                            UI.
                        </p>
                    </div>
                </div>

                {{-- Java --}}
                <div class="group skills-card skills-card--java">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        @include('icons.java-mono')
                        @include('icons.java-colour')
                    </div>

                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">Java</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                            Java was my first university language, and it formed the foundation of my understanding of
                            data structures, algorithms, and object-oriented design during my studies.
                        </p>
                    </div>
                </div>




                {{-- Add more tiles: React, FastAPI, Laravel, SQL, Git/GitHub, Docker, Linux, etc. --}}
            </div>
        </div>
    </section>


</body>

</html>
