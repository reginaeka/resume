    <!-- Hero Section -->

    

    <section id="hero" class="hero section dark-background">

        <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

        <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h2><?php echo e($user->name); ?></h2>
            <p>I'm <span class="typed" data-typed-items="<?php echo e($user->role); ?>"></span><span
                    class="typed-cursor typed-cursor--blink"></span></p>
            <div class="social-links">
                <a href="mailto:<?php echo e($sosmed[0]->link); ?>"><i class="<?php echo e($sosmed[0]->icon); ?>"></i></a>
                <a href="<?php echo e($sosmed[1]->link); ?>"><i class="<?php echo e($sosmed[1]->icon); ?>"></i></a>
            </div>
        </div>

    </section><!-- /Hero Section -->
<?php /**PATH D:\project resume\resume\resources\views/components/pages/hero.blade.php ENDPATH**/ ?>