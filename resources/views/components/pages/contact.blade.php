    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="heading">
            <div class="container">
                <div class="row d-flex justify-content-center text-center">
                    <div class="col-lg-8">
                        <h1>Contact</h1>
                        <p class="mb-0">Reach out — whether it’s a project, a question, or just to say hello.</p>
                    </div>
                </div>
            </div>
        </div>
        <nav class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Contact</li>
                </ol>
            </div>
        </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-md-4 responsive-col">
                    <a href="https://maps.app.goo.gl/kdCB9gXErsdMsmR1A">
                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                            <i class="icon bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>{{ $user->city }}</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Info Item -->

                @foreach ($sosmeds as $sosmed)
                    @php
                        $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                        $label = $sosmed->type === 'email' ? 'Email Us' : 'LinkedIn';
                    @endphp

                    {{-- @dd($sosmedType) --}}

                    <div class="col-md-4 responsive-col">
                        <a href="{{ $sosmedType }}">
                            <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                                <i class="icon {{ $sosmed->icon }} flex-shrink-0"></i>
                                <div>
                                    <h3>{{ $label }}</h3>
                                    <p>{{ $sosmed->label }}</p>
                                </div>
                            </div>
                        </a>
                    </div><!-- End Info Item -->
                @endforeach

                {{-- <div class="col-md-4 responsive-col">
                    <a href="https://www.linkedin.com/in/regina-septianad/">
                        <div class="info-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                            <i class="icon bi bi-linkedin flex-shrink-0"></i>
                            <div>
                                <h3>LinkedIn</h3>
                                <p>Regina Eka Septianadrah</p>
                            </div>
                        </div>
                    </a>
                </div><!-- End Info Item --> --}}


                <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="600">
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" placeholder="Your Name"
                                required="">
                        </div>

                        <div class="col-md-6 ">
                            <input type="email" class="form-control" name="email" placeholder="Your Email"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject"
                                required="">
                        </div>

                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message</button>
                        </div>

                    </div>
                </form><!-- End Contact Form -->

            </div>

    </section><!-- /Contact Section -->
