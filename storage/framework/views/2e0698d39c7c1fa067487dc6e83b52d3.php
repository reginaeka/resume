    <!-- Hero Section -->
    
    <section id="hero" class="hero section dark-background">
        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h2><?php echo e($user->name); ?></h2>
            <p>I'm <span class="typed" data-typed-items="<?php echo e($user->role); ?>"></span><span
                    class="typed-cursor typed-cursor--blink"></span></p>
            <div class="social-links">
                <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $sosmedType = $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                    ?>
                    <a href="<?php echo e($sosmedType); ?>"><i class="<?php echo e($sosmed->icon); ?>"></i></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <button type="button" id="download-resume" class="btn btn-primary btn-sm"
                    data-url="<?php echo e(route('resume.download')); ?>">
                    <i class="bi bi-download"></i> <span>Download CV</span>
                </button>
            </div>
        </div>
    </section><!-- /Hero Section -->

    <?php $__env->startPush('script'); ?>
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

                // const link = "<?php echo e(route('resume.download')); ?>";
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
    <?php $__env->stopPush(); ?>
<?php /**PATH D:\project resume\resume\resources\views/components/pages/hero.blade.php ENDPATH**/ ?>