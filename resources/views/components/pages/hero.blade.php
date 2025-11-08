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

                <button type="button" id="download-resume" class="btn btn-primary btn-sm"
                    data-url="{{ asset('assets/resume/Regina-Resume.pdf') }}">
                    <i class="bi bi-download"></i> <span>Download CV</span>
                </button>
            </div>
        </div>
    </section><!-- /Hero Section -->

    @push('script')
        <script>
            document.getElementById('download-resume').addEventListener('click', function() {
                const button = this;
                const span = button.querySelector('span');
                const originalText = span.textContent;

                // Optional: loading state
                span.textContent = 'Downloading...';
                button.disabled = true;

                // Buat link sementara dan klik otomatis
                const link = document.createElement('a');
                const url = button.getAttribute('data-url');
                link.href = url;

                console.log('href:', link.href);

                link.download = 'resume.pdf'; // paksa download
                console.log(link.download)
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);

                // Kembalikan teks (opsional)
                setTimeout(() => {
                    span.textContent = originalText;
                    button.disabled = false;
                }, 1000);
            });
        </script>
    @endpush
