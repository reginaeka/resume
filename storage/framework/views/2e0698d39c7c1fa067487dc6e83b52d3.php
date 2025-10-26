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
            </div>
        </div>

    </section><!-- /Hero Section -->
<?php /**PATH D:\project resume\resume\resources\views/components/pages/hero.blade.php ENDPATH**/ ?>