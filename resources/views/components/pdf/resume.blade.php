<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- Bootstrpa Icons -->
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> --}}
        <link rel="stylesheet" href="{{ public_path('assets/css/resume/bootstrap-icons.css') }}">

        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="{{ public_path('assets/css/resume/resume2.css') }}">

        {{-- <style>
            @page {
                size: A4;
            }

            .light-mode {
                background: #fff;
                color: #354765;
                box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.05);
            }

            body {
                color: #a5b3ce;
                background: #19202e;
                font-family: "Inter", sans-serif;
            }

            body {
                margin: 0;
                font-family: system-ui, -apple-system, "Segoe UI", Roboto,
                    "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif,
                    "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol",
                    "Noto Color Emoji";
                font-size: 16px;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                /* text-align: var(--bs-body-text-align); */
                background-color: #fff;
                -webkit-text-size-adjust: 100%;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            }

            .container-fluid {
                --bs-gutter-y: 0;
                width: 180mm;
                padding-right: 12px;
                padding-left: 12px;
                margin-right: auto;
                margin-left: auto;
            }

            .light-mode .resume-wrapper {
                background: #fff;
                box-shadow: 0 2 4 rgba(0, 0, 0, 0.05);
            }

            .resume-wrapper {
                /* margin-top: 90px; */
                position: relative;
                /* padding-top: 91px; */
                background: #1e2738;
            }

            .rounded-2 {
                border-radius: 6px !important;
            }

            .mx-auto {
                margin-right: auto !important;
                margin-left: auto !important;
            }

            .px-lg-5 {
                padding-right: 3rem !important;
                padding-left: 3rem !important;
            }

            .p-lg-5 {
                padding: 3rem !important;
            }

            .px-4 {
                padding-right: 1.5rem !important;
                padding-left: 1.5rem !important;
            }

            .p-4 {
                padding: 1.5rem !important;
            }

            *,
            *::before,
            *::after {
                box-sizing: border-box;
            }
        </style> --}}

        <title>Resume-Regina</title>
    </head>

    <body>
        <div class="light-mode">
            <div class="container-fluid">
                <div class="main-content-wrapper">
                    <div class="container-fluid">
                        <div class="resume-wrapper mx-auto rounded-2">
                            <div class="resume-header px-4 px-lg-5">
                                <div class="resume-profile-holder text-center">
                                    <img class="resume-profile-pic rounded-circle"
                                        src="{{ public_path("assets/img/$user->pict") }}" alt="{{ $user->pict }}">
                                    <h2 class="resume-name text-uppercase">{{ $user->name }} </h2>
                                    <div class="resume-role-title text-uppercase">BIM Modeler</div>
                                    <div class="resume-contact mt-4">
                                        <ul
                                            class="resume-contact-list list-unstyled list-inline mb-0 justify-content-between">

                                            @foreach ($sosmeds as $sosmed)
                                                @php
                                                    $sosmedType =
                                                        $sosmed->type === 'email'
                                                            ? 'mailto:' . $sosmed->href
                                                            : $sosmed->href;
                                                @endphp
                                                <a href="{{ $sosmedType }}">
                                                    <li class="list-inline-item me-md-3 me-lg-5"><i
                                                            class="resume-contact-icon {{ $sosmed->icon }} me-2"></i>
                                                        {{ $sosmed->label }}</li>
                                                </a>
                                            @endforeach
                                            <a href="http://{{ $user->website }}">
                                                <li class="list-inline-item me-lg-5"><i
                                                        class="resume-contact-icon bi bi-globe me-2"></i>
                                                    {{ $user->website }}
                                                </li>
                                            </a>
                                        </ul>
                                    </div><!--//resume-contact-->
                                </div><!--//profile-holder-->
                            </div>

                            <div class="resume-body p-4 p-lg-5">
                                <main>
                                    <div class="row">
                                        <div class="col-main col-12 col-lg-8 pe-lg-4">
                                            <section class="resume-summary-section resume-section">
                                                <h3
                                                    class="resume-section-heading text-uppercase py-2 py-lg-3 py-2 py-lg-3">
                                                    <i class="resume-section-heading-icon bi bi-person me-2"></i>About
                                                    Me
                                                </h3>
                                                <div class="resume-summary-desc">
                                                    {{ $user->summary }}
                                                </div>
                                            </section>

                                            <hr>

                                            <section class="resume-experience-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-briefcase me-2"></i>Work
                                                    Experience</h3>
                                                <div class="resume-timeline position-relative">
                                                    @foreach ($experiences as $exp)
                                                        <article class="resume-timeline-item position-relative pb-5"
                                                            style="page-break-inside: avoid;">
                                                            <div class="resume-timeline-item-header mb-2">
                                                                <div
                                                                    class="resume-position-meta d-flex justify-content-between mb-1">
                                                                    <div class="resume-position-time">
                                                                        {{ $exp->startDate }}
                                                                        -
                                                                        {{ $exp->endDate }}</div>
                                                                    <div class="resume-company-name">
                                                                        {{ $exp->company }}
                                                                    </div>
                                                                </div>
                                                                <h3 class="resume-position-title mb-1">
                                                                    {{ $exp->role }}
                                                                </h3>
                                                            </div><!--//resume-timeline-item-header-->
                                                            <div class="resume-timeline-item-desc">
                                                                <ul class="resume-timeline-list">
                                                                    @foreach ($exp->projects as $project)
                                                                        <li>
                                                                            {{ $project->projectLocation }}

                                                                            @php
                                                                                $startDate = $project->startDate
                                                                                    ? \Carbon\Carbon::parse(
                                                                                        $project->startDate,
                                                                                    )->format('M')
                                                                                    : null;
                                                                                $endDate = $project->endDate
                                                                                    ? $project->endDate
                                                                                    : null;
                                                                            @endphp

                                                                            @if ($startDate && $endDate)
                                                                                | {{ $startDate }} -
                                                                                {{ $endDate }}
                                                                            @else
                                                                            @endif

                                                                            <ul>
                                                                                @foreach (explode('.', $project->description) as $sentence)
                                                                                    @if (trim($sentence) !== '')
                                                                                        <li>{{ trim($sentence) }}.</li>
                                                                                    @endif
                                                                                @endforeach

                                                                            </ul>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </article>
                                                    @endforeach
                                                </div>
                                            </section>
                                        </div>

                                        <div class="col-12 col-lg-4 ps-lg-4">
                                            <section class="resume-educate-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-book me-2"></i>Education
                                                </h3>
                                                <ul class="list-unstyled">
                                                    @foreach ($educations as $edu)
                                                        <li class="mb-2">
                                                            <div class="resume-degree font-weight-bold">
                                                                {{ $edu->degree }}
                                                            </div>
                                                            <div class="resume-degree-org">{{ $edu->school }}</div>
                                                            <div class="resume-degree-time">{{ $edu->startYear }} -
                                                                {{ $edu->endYear }}</div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </section><!--//resume-section-->

                                            <hr>

                                            <section class="resume-skills-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-gear me-2"></i>Skills
                                                </h3>

                                                <ul class="list-unstyled">
                                                    @foreach ($skills as $skill)
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name">{{ $skill->skill }}</div>
                                                            <div class="progress resume-progress" role="progressbar"
                                                                aria-label="Basic example"
                                                                aria-valuenow="{{ $skill->percentage }}"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar resume-progress-bar"
                                                                    style="width: {{ $skill->percentage }}%">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </section>

                                            <hr>

                                            <section class="resume-lang-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-translate me-2"></i>Languages
                                                </h3>
                                                <ul class="list-unstyled resume-lang-list">
                                                    <li class="mb-2">
                                                        <div class="resume-lang-name">Bahasa Indonesia</div>
                                                        <div class="resume-level-indicator row gx-0 flex-nowrap">
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                        </div><!--//resume-level-indicator-->
                                                    </li>

                                                    <li class="mb-2">
                                                        <div class="resume-lang-name">English</div>
                                                        <div class="resume-level-indicator row gx-0 flex-nowrap">
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item"></span></div>
                                                        </div><!--//resume-level-indicator-->
                                                    </li>
                                                </ul>
                                            </section>
                                        </div><!--//col-side-->
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
