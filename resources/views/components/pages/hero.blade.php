    <!-- Hero Section -->

    {{-- @dd($sosmed[1]->link) --}}

    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h2>{{ $user->name }}</h2>
            <p>I'm <span class="typed" data-typed-items="{{ $user->role }}"></span><span
                    class="typed-cursor typed-cursor--blink"></span></p>
            <div class="social-links">
                <a href="mailto:{{ $sosmed[0]->link }}"><i class="{{ $sosmed[0]->icon }}"></i></a>
                <a href="{{ $sosmed[1]->link }}"><i class="{{ $sosmed[1]->icon }}"></i></a>
            </div>
        </div>

    </section><!-- /Hero Section -->
