  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
      <div class="heading">
          <div class="container">
              <div class="row d-flex justify-content-center text-center">
                  <div class="col-lg-8">
                      <h1>Resume</h1>
                      <p class="mb-0">
                          Results-oriented Structural Drafter skilled in translating complex engineering requirements
                          into buildable Revit and AutoCAD designs, backed by advanced Point Cloud integration. Adept at
                          maintaining compliance with industry standards, optimizing workflows, and supporting
                          multidisciplinary teams on both local and international assignments.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <nav class="breadcrumbs">
          <div class="container">
              <ol>
                  <li><a href="/">Home</a></li>
                  <li class="current">Resume</li>
              </ol>
          </div>
      </nav>
  </div><!-- End Page Title -->

  <!-- Resume Section -->
  <section id="resume" class="resume section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <h3 class="resume-title">Sumary</h3>
                  <div class="resume-item pb-0">
                      <h4>{{ $user->name }}</h4>
                      <p><em>{{ $user->summary }}
                          </em>
                      </p>

                      <div class="d-flex flex-column">
                          <div class="pb-4 d-flex flex-column">
                              <a class="p-2" href="https://maps.app.goo.gl/kdCB9gXErsdMsmR1A">
                                  <i class="icon bi bi-geo-alt"> {{ $user->city }}</i>
                              </a>
                              @foreach ($sosmeds as $sosmed)
                                  @php
                                      $sosmedType =
                                          $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                                  @endphp
                                  <a class="p-2" href="{{ $sosmedType }}">
                                      <i class="icon {{ $sosmed->icon }}"> {{ $sosmed->label }}</i>
                                  </a>
                              @endforeach
                          </div>
                      </div>
                  </div><!-- Edn Resume Item -->

                  {{-- Education --}}
                  <h3 class="resume-title">Education</h3>
                  @foreach ($educations as $edu)
                      <div class="resume-item">
                          <h4>{{ $edu->degree }}</h4>
                          <p><em>{{ $edu->school }}</em></p>
                          <h5>{{ $edu->startYear }} - {{ $edu->endYear }}</h5>
                          <p>{{ $edu->thesis }}</p>
                      </div><!-- Edn Resume Item -->
                  @endforeach
              </div>

              {{-- Professional Experience --}}
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                  <h3 class="resume-title">Professional Experience</h3>
                  @foreach ($experiences as $exp)
                      {{-- @dd($exp->projects) --}}
                      <div class="resume-item">
                          <h4>{{ $exp->company }} | {{ $exp->location }} </h4>
                          <h5>{{ $exp->startDate }} - {{ $exp->endDate }}</h5>
                          <ul>
                              @foreach ($exp->projects as $project)
                                  <li>
                                      {{ $project->projectLocation }}

                                      @php
                                          $startDate = $project->startDate
                                              ? \Carbon\Carbon::parse($project->startDate)->format('M')
                                              : null;
                                          $endDate = $project->endDate ? $project->endDate : null;
                                      @endphp

                                      @if ($startDate && $endDate)
                                          | {{ $startDate }} - {{ $endDate }}
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
                      </div><!-- Edn Resume Item -->
                  @endforeach
              </div>
          </div>
      </div>
  </section><!-- /Resume Section -->
