<nav x-data="{ open: false }" class="navbar">
    <!-- Primary Navigation Menu -->
    <div class="navbar__inner">
        <div class="navbar__row">
            <div class="flex">
                <!-- Logo -->
                <div class="navbar__brand">
                    <a href="{{ route('home') }}" aria-label="Go to home">
                        {{-- Uses your custom logo component (currentColor-aware) --}}
                        <x-application-logo class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="navbar__links">
                    @php
                        $isHome = request()->routeIs('home');
                        $isProjects = request()->routeIs('projects.*');
                    @endphp

                    <a href="{{ route('home') }}" @class(['nav-link', 'nav-link--active' => $isHome])>
                        {{ __('Home') }}
                    </a>

                    <a href="{{ route('projects.index') }}" @class(['nav-link', 'nav-link--active' => $isProjects])>
                        {{ __('Projects') }}
                    </a>

                    <a href="{{ route('about') }}" class="nav-link">
                        {{ __('About') }}
                    </a>

                    <a href="{{ route('contact') }}" class="nav-link">
                        {{ __('Contact') }}
                    </a>
                </div>
            </div>



            <!-- Hamburger -->
            <div class="navbar__hamburger">
                <button @click="open = ! open" class="hamburger-btn" aria-label="Toggle menu">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24" aria-hidden="true">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
