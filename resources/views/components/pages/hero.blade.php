    <!-- Hero Section -->

    {{-- @dd($user->name); --}}

    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h2>{{ $user->name }}</h2>
            <p>I'm <span class="typed" data-typed-items="{{ $user->role }}"></span><span
                    class="typed-cursor typed-cursor--blink"></span></p>
            <div class="social-links">
                <a href="mailto:{{ $user->email }}"><i class="bi bi-envelope"></i></a>
                <a href="https://www.linkedin.com/in/regina-septianad/"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>

    </section><!-- /Hero Section -->
