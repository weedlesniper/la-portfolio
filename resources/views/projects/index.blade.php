{{-- resources/views/projects/index.blade.php --}}
<x-app-layout>
    {{-- Page header (renders inside app.blade’s white header bar) --}}

    <div class="flex justify-start py-4 px-4 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 ">
            {{ __(' Recent Projects') }}
        </h1>
    </div>

    <section class="px-4 sm:px-6 lg:px-8">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Industry Project --}}
            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/multimodal-pipeline.mp4') }}" type="video/mp4">
                    </video>

                </div>

                <div class="project-card__body">
                    <div class="project-card__badge">
                        <img src="{{ asset('storage/logos/woodside.png') }}" alt="Woodside Energy logo"
                            class="project-card__badge-logo">
                        <span class="project-card__badge-text">
                            Woodside Energy
                        </span>
                    </div>
                    <h3 class="project-card__title">Multimodal AI</h3>
                    <p class="project-card__desc">
                        Developed a custom multimodal document encoding pipeline for Amazon Bedrock models,
                        enabling efficient interpretation of images and tables within DOCX and PDF files while
                        significantly reducing token usage.
                    </p>


                    <div class="project-card__meta">
                        <span class="project-card__tag">Amazon Bedrock</span>
                        <span class="project-card__tag">Claude Sonnet 3.0</span>
                        <span class="project-card__tag">Document Encoding</span>
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">HTML</span>
                        <span class="project-card__tag">Industry</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <button class="project-card__button ">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Curtin Capstone --}}
            <div class="project-card">

                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/wysp-demo.mp4') }}" type="video/mp4">
                    </video>

                </div>

                <div class="project-card__body">
                    <div class="project-card__badge">
                        <img src="{{ asset('storage/logos/curtin.png') }}" alt="Curtin University logo"
                            class="project-card__badge-logo">
                        <span class="project-card__badge-text">
                            Curtin University
                        </span>
                    </div>
                    <h3 class="project-card__title">Wysp: A Splitscreen IDE</h3>
                    <p class="project-card__desc">
                        Collaborative capstone project developing an educational coding environment for Computer Science
                        students,
                        inspired by <a href="https://inst.eecs.berkeley.edu/~cs188/fa24/projects/" target="_blank"
                            rel="noopener noreferrer" class="underline hover:opacity-80">
                            UC Berkeley’s Pacman AI project
                        </a>. Delivered a cross-platform IDE with project management, autosaving, syntax checking, and
                        integrated
                        Java/Python execution to support teaching search and agent-based algorithms.
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

            {{-- Machine Perception --}}
            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/mp-demo-vid.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="project-card__body">
                    <div class="project-card__badge">
                        <img src="{{ asset('storage/logos/curtin.png') }}" alt="Curtin University logo"
                            class="project-card__badge-logo">
                        <span class="project-card__badge-text">
                            Curtin University
                        </span>
                    </div>
                    <h3 class="project-card__title">Computer Vision Pipeline: Barcode Reader</h3>
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
                    <a href="https://github.com/weedlesniper/barcode-reader-2024-MP"
                        class="project-card__button inline-flex items-center gap-2" target="_blank"
                        rel="noopener noreferrer">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Machine Learning --}}
            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/ml-demo.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="project-card__body">
                    <div class="project-card__badge">
                        <img src="{{ asset('storage/logos/curtin.png') }}" alt="Curtin University logo"
                            class="project-card__badge-logo">
                        <span class="project-card__badge-text">
                            Curtin University
                        </span>
                    </div>
                    <h3 class="project-card__title">BLEVE Peak Pressure Prediction</h3>
                    <p class="project-card__desc">
                        Data-driven ML project to predict peak blast pressure around an obstacle during LPG BLEVEs using
                        27 wall-mounted sensors and thermofluid variables. Implemented cleaning, feature engineering,
                        and scaling;
                        compared diverse models (SVR, Random Forest, XGBoost) with MAPE and R².
                    </p>

                    <div class="project-card__meta">
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">scikit-learn</span>
                        <span class="project-card__tag">XGBoost</span>
                        <span class="project-card__tag">Random Forest</span>
                        <span class="project-card__tag">SVR</span>
                        <span class="project-card__tag">Pandas</span>
                        <span class="project-card__tag">Kaggle</span>
                        <span class="project-card__tag">Google Colab</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <a href="https://github.com/weedlesniper/machine-learning-2024"
                        class="project-card__button inline-flex items-center gap-2" target="_blank"
                        rel="noopener noreferrer">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- OCR Accessibility Tool --}}
            <div class="project-card">
                <div class="project-card__media">
                    <video autoplay loop muted playsinline preload="metadata"
                        class="w-full h-full object-cover block">
                        <source src="{{ asset('storage/projects/ocr-demo.mp4') }}" type="video/mp4">
                    </video>
                </div>

                <div class="project-card__body">
                    <div class="project-card__badge">
                        <img src="{{ asset('storage/logos/tafe.png') }}" alt="North Metropolitan TAFE logo"
                            class="project-card__badge-logo">
                        <span class="project-card__badge-text">
                            North Metropolitan TAFE
                        </span>
                    </div>
                    <h3 class="project-card__title">OCR Accessibility Tool</h3>
                    <p class="project-card__desc">
                        A custom-built accessibility system designed to support students with visual
                        impairments—particularly
                        screen-reader users such as those using JAWS—when learning software development. Coding tutorial
                        videos
                        often present key information visually, creating barriers for blind or low-vision learners. This
                        tool
                        solves that problem by enabling students to pause any video and instantly generate accurate,
                        screen-reader-friendly text from the paused frame using OCR (Optical Character Recognition).
                    </p>

                    <div class="project-card__meta">
                        <span class="project-card__tag">Python</span>
                        <span class="project-card__tag">FastAPI</span>
                        <span class="project-card__tag">React</span>
                        <span class="project-card__tag">OCR</span>
                        <span class="project-card__tag">Accessibility</span>
                    </div>
                </div>

                <div class="project-card__divider"></div>

                <div class="project-card__actions">
                    <a href="https://github.com/weedlesniper/ocrroo-advp-project"
                        class="project-card__button inline-flex items-center gap-2" target="_blank"
                        rel="noopener noreferrer">
                        View project
                        <svg class="size-4" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path
                                d="M12.293 3.293a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L14 6.414V17a1 1 0 11-2 0V6.414l-2.293 2.293A1 1 0 018.293 7.293l4-4z" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>

    </section>


</x-app-layout>
