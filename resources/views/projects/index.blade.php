{{-- resources/views/projects/index.blade.php --}}
<x-app-layout>
    {{-- Page header (renders inside app.blade’s white header bar) --}}
    <x-slot name="header">
        <div class="flex items-baseline justify-between">
            <h1 class="text-2xl font-semibold text-gray-900 ">
                {{ __('Projects') }}
            </h1>
            @if(method_exists($projects, 'total'))
                <span class="text-sm text-gray-600 dark:text-gray-400">
                    {{ $projects->total() ?? $projects->count() }} {{ __('items') }}
                </span>
            @endif
        </div>
    </x-slot>

    {{-- Content --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @forelse ($projects as $project)
            {{-- Card --}}
            <a href="{{ route('projects.show', $project) }}"
               class="group block rounded-xl p-4 shadow bg-white border border-gray-200
                      hover:shadow-md hover:border-gray-300 transition
                      dark:bg-[#111213] dark:border-gray-800 dark:hover:border-gray-700">
                @if($project->cover_image)
                    <img
                        class="rounded-lg mb-3 aspect-[4/3] w-full object-cover"
                        src="{{ Str::startsWith($project->cover_image, ['http','/'])
                                ? $project->cover_image
                                : Storage::url($project->cover_image) }}"
                        alt="{{ $project->title }} cover">
                @endif

                <h2 class="font-semibold text-lg text-gray-900 dark:text-gray-100 group-hover:underline">
                    {{ $project->title }}
                </h2>

                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400 line-clamp-3">
                    {{ $project->summary }}
                </p>

                <span class="mt-3 inline-flex items-center text-sm text-gray-800 dark:text-gray-200">
                    {{ __('View project') }}
                    <svg class="ms-1 h-4 w-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M10.293 3.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 11-1.414-1.414L12.586 11H4a1 1 0 110-2h8.586l-2.293-2.293a1 1 0 010-1.414z"
                              clip-rule="evenodd" />
                    </svg>
                </span>
            </a>

            {{-- Grid spacing: wrap every 1,2,3 columns via CSS grid --}}
            @empty
                <div class="rounded-xl p-8 text-center
                            bg-white border border-dashed border-gray-300 text-gray-600
                            dark:bg-[#111213] dark:border-gray-800 dark:text-gray-400">
                    {{ __('No projects yet. Check back soon!') }}
                </div>
        @endforelse

        {{-- Grid wrapper (placed around the loop via CSS utility) --}}
        <style>
            /* Turn the list of cards into a responsive grid without changing PHP loop */
            [x-data] ~ main .cards { display: grid; gap: 1.5rem; }
            @media (min-width: 640px) { [x-data] ~ main .cards { grid-template-columns: repeat(2, minmax(0,1fr)); } }
            @media (min-width: 1024px){ [x-data] ~ main .cards { grid-template-columns: repeat(3, minmax(0,1fr)); } }
        </style>
        <script>
            // No JS needed; style rule above targets this container class.
        </script>
    </div>

    {{-- Optional pagination --}}
    @if(method_exists($projects, 'links'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-12">
            {{ $projects->links() }}
        </div>
    @endif
</x-app-layout>
