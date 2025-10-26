    <!-- Hero Section -->

    {{-- @dd($sosmed[1]->link) --}}

    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h2>{{ $user->name }}</h2>
            <p>I'm <span class="typed" data-typed-items="{{ $user->role }}"></span><span
                    class="typed-cursor typed-cursor--blink"></span></p>
            <div class="social-links">
                @foreach ($sosmeds as $sosmed)
                    @php
                        $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                    @endphp

                    <a href="{{ $sosmedType }}"><i class="{{ $sosmed->icon }}"></i></a>
                @endforeach
            </div>
        </div>

    </section><!-- /Hero Section -->
