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
                <img src="assets/img/<?php echo e($user->pict); ?>" class="img-fluid img-rounded" alt="">
            </div>
            <div class="col-lg-8 content">
                <h2><?php echo e($user->role); ?></h2>
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
                                <span><?php echo e($user->name); ?></span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                <a href="https://<?php echo e($user->website); ?>"><span><?php echo e($user->website); ?></span></a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                <a href="https://maps.app.goo.gl/2bWXjs7xz7pBb9Vx7 ">
                                    <span><?php echo e($user->city); ?></span>
                                </a>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                <span><?php echo e($user->age); ?> Tahun</span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                <span><?php echo e($education->short_degree); ?></span>
                            </li>
                            <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                <a href="mailto:<?php echo e($sosmed[0]->link); ?>"> <span><?php echo e($sosmed[0]->link); ?></span></a>
                            </li>

                        </ul>
                    </div>
                </div>
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
            <?php
                $chunks = collect($skills)->chunk(ceil(count($skills) / 2));
            ?>

            <?php $__currentLoopData = $chunks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-6">
                    <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="progress">
                            <span class="skill">
                                <span><?php echo e($skill['skill']); ?></span>
                                <i class="val"><?php echo e($skill['percentage']); ?>%</i>
                            </span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo e($skill['percentage']); ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e($skill['percentage']); ?>%;">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section><!-- /Skills Section -->
<?php /**PATH D:\project resume\resume\resources\views/components/pages/about.blade.php ENDPATH**/ ?>