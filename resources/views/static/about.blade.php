<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About – Luc Adams</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* Fallback */
        </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] min-h-screen flex flex-col font-sans">
    {{-- Reusable public navbar --}}
    @include('layouts.navigation')

    {{-- Main Wrapper --}}
    <main class="flex-1 flex flex-col items-center p-6 lg:p-8">

        {{-- Max Width Constraint (Matches Home/Projects 5xl) --}}
        <div class="w-full max-w-5xl space-y-12">

            {{-- SECTION 1: TECHNICAL SKILLS --}}
            <section>
                <div class="flex items-center mb-4">
                    <i class="fa-solid fa-gear text-xl text-gray-900 dark:text-white mr-2"></i>
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-slate-100">Technical Skills</h2>
                </div>

                <p class="text-sm text-gray-600 dark:text-slate-400 mb-6">
                    A quick snapshot of the tools and languages I have experience with.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4">
                    {{-- Python --}}
                    <div class="group skills-card skills-card--python relative overflow-hidden rounded-2xl bg-black">
                        {{-- 1. Image --}}
                        <img src="{{ asset('storage/codesnippets/python.png') }}" alt="Python code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />


                        <div class="skills-readability-gradient"></div>
                        <div class="skills-gradient"></div>

                        {{-- 4. Content --}}
                        {{-- Added 'relative z-10' to ensure text sits ON TOP of the dark overlay --}}
                        <div class="skills-body relative z-10">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    Python
                                </h3>

                                <p class="skills-text">
                                    Python is my strongest language—I've used it for ML, computer vision, backend APIs,
                                    and industry AI work. I use it to build practical, efficient systems supported by
                                    solid data structure knowledge.
                                </p>
                            </div>

                            <div class="skills-logo skills-logo--clip">
                                @include('icons.python-mono')
                                @include('icons.python-colour')
                            </div>
                        </div>
                    </div>

                    {{-- PHP --}}
                    <div class="group skills-card relative overflow-hidden rounded-2xl hover:border-indigo-600/40">
                        <img src="{{ asset('storage/codesnippets/php.png') }}" alt="PHP code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />

                        <div
                            class="absolute inset-0 bg-black/0 group-hover:bg-black/80 transition-colors duration-300 ease-in-out">
                        </div>
                        <div class="skills-gradient"></div>

                        <div class="skills-body">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    PHP
                                </h3>

                                <p class="skills-text">
                                    I’ve recently been using PHP with Laravel and Blade to build web applications,
                                    creating
                                    reusable components and pairing the templating system with Tailwind for clean,
                                    consistent UI.
                                </p>
                            </div>

                            <div class="skills-logo">
                                <i class="fa-brands fa-php text-slate-100 text-4xl group-hover:text-purple-600/40"></i>
                            </div>
                        </div>
                    </div>

                    {{-- Java --}}
                    <div class="group skills-card skills-card--java relative overflow-hidden rounded-2xl">
                        <img src="{{ asset('storage/codesnippets/java.png') }}" alt="Python code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />

                        <div class="skills-readability-gradient"></div>
                        <div class="skills-gradient"></div>

                        {{-- Foreground content --}}
                        <div class="skills-body">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    Java
                                </h3>
                                <p class="skills-text">
                                    Java was my first university language, and it formed the foundation of my
                                    understanding
                                    of data structures, algorithms, and object-oriented design during my studies.
                                </p>
                            </div>

                            <div class="skills-logo skills-logo--clip scale-90">
                                @include('icons.java-mono')
                                @include('icons.java-colour')
                            </div>
                        </div>
                    </div>

                    {{-- Git --}}
                    <div class="group skills-card relative overflow-hidden rounded-2xl hover:border-[#F1502F]">
                        {{-- Background image --}}
                        <img src="{{ asset('storage/codesnippets/git.png') }}" alt="Git code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />

                        <div class="skills-readability-gradient"></div>
                        <div class="skills-gradient"></div>


                        {{-- Foreground content --}}
                        <div class="skills-body">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    Git / Version Control
                                </h3>

                                <p class="skills-text">
                                    I’ve used Git extensively across multiple team projects, both as a contributor and
                                    as a
                                    project lead. I’m comfortable with branching strategies, pull request workflows,
                                    code
                                    reviews.
                                </p>
                            </div>

                            {{-- Font Awesome Git logo --}}
                            <div class="skills-logo">
                                <i
                                    class="fa-brands fa-git-alt
                                    text-slate-300 text-4xl
                                    transition-colors duration-200
                                    group-hover:text-[#F1502F]"></i>
                            </div>
                        </div>
                    </div>

                    {{-- SQL / Databases --}}
                    <div class="group skills-card relative overflow-hidden rounded-2xl hover:border-emerald-500">
                        {{-- Background image --}}
                        <img src="{{ asset('storage/codesnippets/sql.png') }}" alt="SQL code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />

                        <div class="skills-readability-gradient"></div>
                        <div class="skills-gradient"></div>

                        {{-- Foreground content --}}
                        <div class="skills-body">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    SQL / Databases
                                </h3>

                                <p class="skills-text">
                                    My database experience includes ER modelling, schema design, SQL querying, and
                                    applying
                                    relational theory. I’m currently building a
                                    database management tool for a TAFE client that integrates these ideas in practice.
                                </p>
                            </div>

                            {{-- Font Awesome DB icon --}}
                            <div class="skills-logo">
                                <i
                                    class="fa-solid fa-database
                                    text-slate-300 text-4xl
                                    transition-colors duration-200
                                    group-hover:text-emerald-500"></i>
                            </div>
                        </div>
                    </div>

                    {{-- AWS --}}
                    <div class="group skills-card relative overflow-hidden rounded-2xl hover:border-[#FF9900]">
                        {{-- Background image --}}
                        <img src="{{ asset('storage/codesnippets/aws.png') }}" alt="AWS code snippet"
                            class="absolute inset-0 h-full w-full object-cover" />

                        <div class="skills-readability-gradient"></div>
                        <div class="skills-gradient"></div>

                        {{-- Foreground content --}}
                        <div class="skills-body">
                            <div class="space-y-2">
                                <h3 class="skills-heading">
                                    Cloud Computing
                                </h3>

                                <p class="skills-text">
                                    My cloud computing background includes cloud infrastructure, service models,
                                    security,
                                    and management. I’ve applied this knowledge in industry, working with Amazon Bedrock
                                    to
                                    build and test
                                    applications powered by foundation LLMs.
                                </p>
                            </div>

                            {{-- AWS icon --}}
                            <div class="skills-logo">
                                <i
                                    class="fa-brands fa-aws
                                    text-slate-300 text-4xl
                                    transition-colors duration-200
                                    group-hover:text-[#FF9900]"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- SECTION 2: OTHER TECHNOLOGIES --}}
            <section>
                <div class="flex items-center mb-4">
                    <i class="fa-solid fa-microchip text-xl text-gray-900 dark:text-white mr-2"></i>
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-slate-100">Technologies I’ve Worked With
                    </h2>
                </div>

                <p class="text-sm text-gray-600 dark:text-slate-400 mb-6">
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
                            Used Qt to build cross-platform GUI components, developing the interface for a university
                            IDE
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
                            Built lightweight, high-performance APIs with FastAPI, including OCR endpoints, file
                            handling,
                            and backend logic for an IoT barcode reader pipeline.
                        </p>
                    </div>
                    <div class="group tech-card">
                        <h3 class="text-sm font-medium text-slate-400 group-hover:text-slate-100">
                            OpenCV
                        </h3>
                        <p class="text-xs text-slate-400 group-hover:text-slate-100">
                            Experience with OpenCV for frame extraction, image preprocessing, and computer vision
                            workflows
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
                            Used React to build both web and mobile interfaces, including a video-annotation web app and
                            an
                            Expo-based mobile application.
                        </p>
                    </div>
                </div>
            </section>

            {{-- SECTION 3: PROFESSIONAL SKILLS --}}
            <section>
                <div class="flex items-center mb-6">
                    <i class="fa-solid fa-user-tie text-xl text-gray-900 dark:text-white mr-2"></i>
                    <h2 class="text-xl font-semibold text-gray-900 dark:text-slate-100">My Professional Skills</h2>
                </div>

                <div class="space-y-6">

                    {{-- HOSPO --}}
                    <div class="lg:grid lg:grid-cols-[minmax(0,2.1fr)_minmax(0,1.1fr)] lg:gap-6 items-stretch">

                        {{-- HOSPO (left) --}}
                        <div
                            class="mb-4 lg:mb-0 group relative overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 shadow-sm transition-all duration-200 hover:shadow-md">
                            {{-- Image section --}}
                            <div class="relative h-full w-full min-h-[200px]">
                                <img src="{{ asset('storage/royals.jpg') }}" alt="training new staff "
                                    class="h-full w-full object-cover" />

                                {{-- dark gradient overlay so text is readable --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-slate-950/30 to-transparent">
                                </div>

                                {{-- Heading overlaid on image --}}
                                <h3
                                    class="absolute bottom-3 left-4 right-4 text-lg font-semibold text-slate-50 drop-shadow-sm">
                                    Teamwork & Customer Focus
                                </h3>
                            </div>
                        </div>

                        {{-- Stats panel (right) --}}
                        <aside
                            class="flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/60 p-4 sm:p-5 shadow-sm">
                            <div>
                                <h4
                                    class="text-xs font-semibold tracking-[0.18em] text-gray-500 dark:text-slate-400 uppercase">
                                    At a glance
                                </h4>

                                <dl class="mt-4 space-y-4 text-sm">
                                    {{-- Stat 1 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">👥</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Fast-paced team experience</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">8+ years
                                            </dd>
                                        </div>
                                    </div>

                                    {{-- Stat 2 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">🍔</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Consistent dedication</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">2
                                                long-term employers</dd>
                                            <dt class="text-xs font-medium text-gray-400 dark:text-slate-400 italic ">
                                                Since 2017</dt>
                                        </div>
                                    </div>

                                    {{-- Description 4 --}}
                                    <div class="flex flex-col gap-2 text-sm text-gray-600 dark:text-slate-400 mt-2">
                                        <p>• Contiually building strong communication abilities while working in a
                                            high-pressure environment</p>
                                        <p>• Comfortable working and communicating in diverse team dynamics</p>
                                        <p>• Excel in training new staff, exposed to leadership responsibilities from a
                                            young age</p>
                                        <p>• Learned to adapt to changing workplace environments and shifts in
                                            management
                                        </p>
                                    </div>

                                </dl>
                            </div>
                        </aside>
                    </div>

                    {{-- COMMS --}}
                    <div class="lg:grid lg:grid-cols-[minmax(0,1.1fr)_minmax(0,2.1fr)] lg:gap-6 items-stretch">

                        {{-- Stats panel (left) --}}
                        <aside
                            class="mb-4 lg:mb-0 flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/60 p-4 sm:p-5 shadow-sm order-2 lg:order-1">
                            <div>
                                <h4
                                    class="text-xs font-semibold tracking-[0.18em] text-gray-500 dark:text-slate-400 uppercase">
                                    At a glance
                                </h4>

                                <dl class="mt-4 space-y-4 text-sm">
                                    {{-- Stat 1 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">🎤</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">Public
                                                speaking</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">
                                                Presented software projects to
                                                large groups</dd>
                                        </div>
                                    </div>

                                    {{-- Stat 2 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">🧩</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Cross-audience communication
                                            </dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">
                                                Technical & non-technical
                                                stakeholders</dd>
                                        </div>
                                    </div>

                                    {{-- Stat 3 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">💬</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Information extraction</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">Turning
                                                non-technical input
                                                into technical tasks</dd>
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="flex flex-col gap-2 text-sm text-gray-600 dark:text-slate-400 mt-3">
                                        <p>
                                            Confident speaking in front of small and large groups, delivering
                                            demonstrations, walkthroughs,
                                            and project updates tailored to different audiences.
                                        </p>
                                        <p>
                                            Experienced communicating technical concepts clearly, and extracting
                                            technical
                                            needs from
                                            non-technical stakeholders to guide project direction.
                                        </p>
                                    </div>
                                </dl>
                            </div>
                        </aside>

                        {{-- Image (Right) --}}
                        <div
                            class="group relative overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 shadow-sm transition-all duration-200 hover:shadow-md order-1 lg:order-2">
                            {{-- Image section --}}
                            <div class="relative h-full w-full min-h-[200px]">
                                <img src="{{ asset('storage/wyspgroup.jpg') }}" alt="training new staff "
                                    class="h-full w-full object-cover" />

                                {{-- dark gradient overlay so text is readable --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-slate-950/30 to-transparent">
                                </div>

                                {{-- Heading overlaid on image --}}
                                <h3
                                    class="absolute bottom-3 left-4 right-4 text-lg font-semibold text-slate-50 drop-shadow-sm">
                                    Communication & Public Speaking
                                </h3>
                            </div>
                        </div>
                    </div>

                    {{-- COLLABORATION --}}
                    <div class="lg:grid lg:grid-cols-[minmax(0,2.1fr)_minmax(0,1.1fr)] lg:gap-6 items-stretch">

                        {{-- Image Section (Left) --}}
                        <div
                            class="mb-4 lg:mb-0 group relative overflow-hidden rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/40 shadow-sm transition-all duration-200 hover:shadow-md">
                            <div class="relative h-full w-full min-h-[200px]">
                                <img src="{{ asset('storage/wyspgroup.jpg') }}"
                                    alt="Team collaborating on software delivery"
                                    class="h-full w-full object-cover" />

                                {{-- Dark gradient overlay --}}
                                <div
                                    class="absolute inset-0 bg-linear-to-t from-slate-950/80 via-slate-950/30 to-transparent">
                                </div>

                                {{-- Heading --}}
                                <h3
                                    class="absolute bottom-3 left-4 right-4 text-lg font-semibold text-slate-50 drop-shadow-sm">
                                    Collaborative Software Delivery
                                </h3>
                            </div>
                        </div>

                        {{-- Stats Panel (Right) --}}
                        <aside
                            class="flex flex-col justify-between rounded-2xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/60 p-4 sm:p-5 shadow-sm">
                            <div>
                                <h4
                                    class="text-xs font-semibold tracking-[0.18em] text-gray-500 dark:text-slate-400 uppercase">
                                    At a glance
                                </h4>

                                <dl class="mt-4 space-y-4 text-sm">
                                    {{-- Stat 1 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">💻</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Environments</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">
                                                Industry & Academic delivery
                                            </dd>
                                        </div>
                                    </div>

                                    {{-- Stat 2 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">🧩</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">Role
                                                Flexibility</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">
                                                Team Lead & Contributor
                                            </dd>
                                        </div>
                                    </div>

                                    {{-- Stat 3 --}}
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="flex h-9 w-9 items-center justify-center rounded-xl bg-gray-100 dark:bg-slate-800/80 text-gray-700 dark:text-slate-200">
                                            <span class="text-base">🌱</span>
                                        </div>
                                        <div>
                                            <dt class="text-xs font-medium text-gray-500 dark:text-slate-400">
                                                Mentorship</dt>
                                            <dd class="text-sm font-semibold text-gray-900 dark:text-slate-50">
                                                Onboarding junior students
                                            </dd>
                                        </div>
                                    </div>

                                    {{-- Description --}}
                                    <div class="flex flex-col gap-2 text-sm text-gray-600 dark:text-slate-400 mt-3">
                                        <p>
                                            Worked across diverse teams contributing to projects using Git workflows,
                                            code reviews, and Agile
                                            methodologies.
                                        </p>
                                        <p>
                                            Comfortable stepping into different roles depending on team needs—leading,
                                            contributing, or
                                            mentoring newer developers.
                                        </p>
                                    </div>

                                </dl>
                            </div>
                        </aside>
                    </div>
                </div>
            </section>

        </div>
    </main>
</body>

</html>
