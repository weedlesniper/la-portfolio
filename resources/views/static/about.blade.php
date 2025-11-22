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
                <div class="group skills-card hover:border-indigo-600/40">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        <i
                            class="fa-brands fa-php
                                  text-slate-300 text-4xl
                                    transition-colors duration-200
                                  group-hover:text-indigo-400/40"></i>
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

                {{-- Git --}}
                <div class="group skills-card hover:border-[#F1502F]">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        <i
                            class="fa-brands fa-git-alt
                                  text-slate-300 text-4xl
                                    transition-colors duration-200
                                  group-hover:text-[#F1502F]"></i>
                    </div>
                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">Git</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                            I’ve used Git extensively across multiple team projects, both as a contributor and as a
                            project lead. I’m comfortable with branching strategies, pull request workflows, code
                            reviews, and keeping repos organised through clear commit messages and branch naming
                            conventions.
                        </p>
                    </div>
                </div>

                {{-- SQL / Databases --}}
                <div class="group skills-card hover:border-emerald-500">
                    <div
                        class="relative mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        <i
                            class="fa-solid fa-database
                                  text-slate-300 text-4xl
                                    transition-colors duration-200
                                  group-hover:text-emerald-500"></i>
                    </div>
                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">SQL / Databases</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                            My database experience includes ER modelling, schema design, SQL querying, and applying
                            relational theory such as normalisation and relational algebra. I’m currently building a
                            database management tool for a TAFE client that
                            integrates these ideas in practice.
                        </p>
                    </div>
                </div>

                {{-- AWS --}}
                <div class="group skills-card hover:border-[#FF9900]">
                    <div
                        class="relative
                    mx-1 flex size-16 items-center justify-center rounded-xl bg-slate-800 overflow-hidden">
                        <i
                            class="fa-brands fa-aws
                                  text-slate-300 text-4xl
                                    transition-colors duration-200
                                  group-hover:text-[#FF9900]"></i>
                    </div>
                    <div class = "w-3/4">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">Cloud Computing</h3>
                        <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                            My cloud computing background includes cloud infrastructure, service models, security, and
                            management, as well as the ethical and practical considerations of cloud adoption. I’ve
                            applied this knowledge in industry, working with Amazon Bedrock to build and test
                            applications powered by foundation LLMs.
                        </p>
                    </div>
                </div>
            </div>

            <div class = "flex mt-4">
                <i class="fa-solid fa-microchip text-xl text-white mb-2 mr-1"></i>
                <h2 class="text-xl font-semibold text-slate-100 mb-2">Technologies I’ve Worked With</h2>
            </div>

            <p class="text-sm text-slate-400 mb-8">
                A selection of other tools, libraries, and platforms I’ve had exposure to.
            </p>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-2">

                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        C++
                    </h3>
                    <p class="text-xs leading-relaxed opacity-80 text-slate-400 group-hover:text-slate-100">
                        Used C++ for embedded and IoT development, including programming ESP32 devices.
                    </p>
                </div>

                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        Qt
                    </h3>
                    <p class="text-xs leading-relaxed opacity-80 text-slate-400 group-hover:text-slate-100">
                        Used Qt to build cross-platform GUI components, developing the interface for a university IDE
                        project
                    </p>
                </div>

                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        TensorFlow
                    </h3>
                    <p class="text-xs leading-relaxed opacity-80 text-slate-400 group-hover:text-slate-100">
                        Used TensorFlow for building and experimenting with machine learning models, training and
                        evaluation.
                    </p>
                </div>

                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        FastAPI
                    </h3>
                    <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                        Built lightweight, high-performance APIs with FastAPI, including OCR endpoints, file handling,
                        and backend logic for an IoT barcode reader pipeline.
                    </p>
                </div>
                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        OpenCV
                    </h3>
                    <p class="text-xs text-slate-400 group-hover:text-slate-100">
                        Experience with OpenCV for frame extraction, image preprocessing, and computer vision workflows
                        in ML/OCR projects.
                    </p>
                </div>
                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        Linux
                    </h3>
                    <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                        Worked with Linux through VMware and Ubuntu Server, using it for development, scripting, and
                        backend tooling.
                    </p>
                </div>
                <div class="group tech-card">
                    <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                        React
                    </h3>
                    <p class="mt-1 text-xs text-slate-400 group-hover:text-slate-100">
                        Used React to build both web and mobile interfaces, including a video-annotation web app and an
                        Expo-based mobile application.
                    </p>
                </div>
            </div>

            <div class = "flex mt-4">
                <i class="fa-solid fa-user-tie text-xl text-white mb-2 mr-1"></i>
                <h2 class="text-xl font-semibold text-slate-100 mb-2">Professional Skills</h2>
            </div>

            <p class="text-sm text-slate-400 mb-8">
                Teamwork & Customer Focus – Built strong communication and collaboration skills through long-term work
                in hospitality, working in fast-paced, customer-facing teams and handling competing priorities calmly
                and professionally.
            </p>

            <div class="max-w-xl">
                <div
                    class="group relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/40 shadow-sm transition-all duration-200 hover:bg-slate-900/70 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black/30">
                    {{-- Image section --}}
                    <div class="relative h-full w-full">
                        <img src="{{ asset('storage/wyspgroup.jpg') }}" alt="Team collaborating on software delivery"
                            class="h-full w-full object-cover" />

                        {{-- dark gradient overlay so text is readable --}}
                        <div class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-slate-950/30 to-transparent">
                        </div>

                        {{-- Heading overlaid on image --}}
                        <h3 class="absolute bottom-3 left-4 right-4 text-lg font-semibold text-slate-50 drop-shadow-sm">
                            Communication & Public Speaking
                        </h3>
                    </div>

                    {{-- Description panel, visually attached to image --}}
                    <div class="px-4 pb-4 pt-3">
                        <p class="text-sm text-slate-400 group-hover:text-slate-100">
                            Confident presenting technical work to both technical and
                            non-technical stakeholders, including demonstrations, walkthroughs, and project updates
                            tailored to the
                            audience.
                        </p>
                    </div>
                </div>

                <div class="max-w-xl">
                    <div
                        class="group relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/40 shadow-sm transition-all duration-200 hover:bg-slate-900/70 hover:-translate-y-0.5 hover:shadow-lg hover:shadow-black/30">
                        {{-- Image section --}}
                        <div class="relative h-full w-full">
                            <img src="{{ asset('storage/wyspgroup.jpg') }}"
                                alt="Team collaborating on software delivery" class="h-full w-full object-cover" />

                            {{-- dark gradient overlay so text is readable --}}
                            <div
                                class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-slate-950/30 to-transparent">
                            </div>

                            {{-- Heading overlaid on image --}}
                            <h3
                                class="absolute bottom-3 left-4 right-4 text-lg font-semibold text-slate-50 drop-shadow-sm">
                                Collaborative Software Delivery
                            </h3>
                        </div>

                        {{-- Description panel, visually attached to image --}}
                        <div class="px-4 pb-4 pt-3">
                            <p class="text-sm text-slate-400 group-hover:text-slate-100">
                                Experienced working in a variety of team development environments in both academia
                                and industry, contributing as both a team member and project lead using Git-based
                                workflows, code reviews, and Agile practices.
                            </p>
                        </div>
                    </div>
                </div>

            </div>


    </section>


</body>

</html>
