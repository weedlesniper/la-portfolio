{{-- resources/views/projects/index.blade.php --}}
<x-app-layout>
    {{-- Page header (renders inside app.blade’s white header bar) --}}
    <x-slot name="header">
        <div class="flex items-baseline justify-between">
            <h1 class="text-2xl font-semibold text-gray-900 ">
                {{ __('Projects') }}
            </h1>
        </div>
    </x-slot>

    <section class="px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/multimodal-pipeline.mp4') }}" type="video/mp4">
                    </video>

                </div>

                <div class="project-card__body">
                    <h3 class="project-card__title">Multimodal AI - <italic>Woodside Energy</italic>
                    </h3>
                    <p class="project-card__desc">
                        Improving LLM responses to Multimodal data input through document encoding methods.
                    </p>

                    <div class="project-card__meta">
                        <span class="project-card__tag">Amazon Bedrock</span>
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">HTML</span>
                        <span class="project-card__tag">Industry</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <button class="project-card__button">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/wysp-demo.mp4') }}" type="video/mp4">
                    </video>

                </div>

                <div class="project-card__body">
                    <h3 class="project-card__title">Wysp: A Splitscreen IDE - Curtin University</h3>
                    <p class="project-card__desc">
                        Collaborative project creating a coding tool for Computer Science Students. Based on UC
                        Berkley's Pacman Project.
                    </p>

                    <div class="project-card__meta">
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">Java</span>
                        <span class="project-card__tag">Agile</span>
                        <span class="project-card__tag">Version Control</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <button class="project-card__button">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </button>
                </div>


            </div>

            <div class="project-card">
                <div class="project-card__media">
                    <img src="/storage/projects/my-app-cover.jpg" alt="My App cover">
                </div>

                <div class="project-card__body">
                    <h3 class="project-card__title">Computer Vision Pipeline: Barcode Reader - Curtin University</h3>
                    <p class="project-card__desc">
                        Built a pipeline to detect barcodes, extract digits, and recognise them via SVM; robust to
                        rotation and some affine distortion.
                    </p>

                    <div class="project-card__meta">
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">YOLO</span>
                        <span class="project-card__tag">scikit-learn (SVM)</span>
                        <span class="project-card__tag">OpenCV</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <button class="project-card__button">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </section>


</x-app-layout>
