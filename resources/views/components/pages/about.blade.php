<!-- Page Title -->
<div class="page-title" data-aos="fade">
    <div class="heading">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-8">
                    <h1>About</h1>
                    <p class="mb-0">An Experienced Structural Drafter delivering high-precision structural design
                        solutions
                    </p>

                </div>
            </div>
        </div>
    </div>
    <nav class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Home</a></li>
                <li class="current">About</li>
            </ol>
        </div>
    </nav>
</div><!-- End Page Title -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="assets/img/profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2>{{ $user->role }}</h2>
                <p class="fst-italic py-3">
                    I am a dedicated Structural Drafter with over nine years of experience in the architecture,
                    engineering, and construction industry. I leverage Revit, AutoCAD, and point-cloud data to deliver
                    precise, efficient, and code-compliant structural models and drawings. I work across commercial,
                    industrial, and infrastructure projects while reporting directly to BIM leadership.
                </p>
                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Name:</strong>
                                <span>{{ $user->name }}</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <a href="https://{{ $user->website }}"><span>{{ $user->website }}</span></a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                <a href="https://maps.app.goo.gl/2bWXjs7xz7pBb9Vx7 ">
                                    <span>{{ $user->city }}</span>
                                </a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                <span>{{ $user->age }} Tahun</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor</span></li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <a href="mailto:{{ $sosmed[0]->link }}"> <span>{{ $sosmed[0]->link }}</span></a>
                            </li>

                        </ul>
                    </div>
                </div>
                {{-- <p class="py-3">
                    Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci
                    omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                    Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque
                    neque.
                </p> --}}
            </div>
        </div>
    </div>
</section><!-- /About Section -->


<!-- Skills Section -->
<section id="skills" class="skills section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <div><span>My</span> <span class="description-title">Skills</span></div>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation g-5">
            @php
                $chunks = collect($skills)->chunk(ceil(count($skills) / 2));
            @endphp

            @foreach ($chunks as $chunk)
                <div class="col-lg-6">
                    @foreach ($chunk as $skill)
                        <div class="progress">
                            <span class="skill">
                                <span>{{ $skill['skill'] }}</span>
                                <i class="val">{{ $skill['percentage'] }}%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill['percentage'] }}"
                                    aria-valuemin="0" aria-valuemax="100" style="width: {{ $skill['percentage'] }}%;">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach

        </div>

    </div>

</section><!-- /Skills Section -->
