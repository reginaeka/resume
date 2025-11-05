<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- Bootstrpa Icons -->
        
        <link rel="stylesheet" href="<?php echo e(public_path('assets/css/resume/bootstrap-icons.css')); ?>">

        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="<?php echo e(public_path('assets/css/resume/resume2.css')); ?>">

        

        <title>Resume-Regina</title>
    </head>

    <body>
        <div class="light-mode">
            <div class="container-fluid">
                <div class="main-content-wrapper">
                    <div class="container-fluid">
                        <div class="resume-wrapper mx-auto rounded-2">
                            <div class="resume-header px-4 px-lg-5">
                                <div class="resume-profile-holder text-center">
                                    <img class="resume-profile-pic rounded-circle"
                                        src="<?php echo e(public_path("assets/img/$user->pict")); ?>" alt="<?php echo e($user->pict); ?>">
                                    <h2 class="resume-name text-uppercase"><?php echo e($user->name); ?> </h2>
                                    <div class="resume-role-title text-uppercase">BIM Modeler</div>
                                    <div class="resume-contact mt-4">
                                        <ul
                                            class="resume-contact-list list-unstyled list-inline mb-0 justify-content-between">

                                            <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $sosmedType =
                                                        $sosmed->type === 'email'
                                                            ? 'mailto:' . $sosmed->href
                                                            : $sosmed->href;
                                                ?>
                                                <a href="<?php echo e($sosmedType); ?>">
                                                    <li class="list-inline-item me-md-3 me-lg-5"><i
                                                            class="resume-contact-icon <?php echo e($sosmed->icon); ?> me-2"></i>
                                                        <?php echo e($sosmed->label); ?></li>
                                                </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <a href="http://<?php echo e($user->website); ?>">
                                                <li class="list-inline-item me-lg-5"><i
                                                        class="resume-contact-icon bi bi-globe me-2"></i>
                                                    <?php echo e($user->website); ?>

                                                </li>
                                            </a>
                                        </ul>
                                    </div><!--//resume-contact-->
                                </div><!--//profile-holder-->
                            </div>

                            <div class="resume-body p-4 p-lg-5">
                                <main>
                                    <div class="row">
                                        <div class="col-main col-12 col-lg-8 pe-lg-4">
                                            <section class="resume-summary-section resume-section">
                                                <h3
                                                    class="resume-section-heading text-uppercase py-2 py-lg-3 py-2 py-lg-3">
                                                    <i class="resume-section-heading-icon bi bi-person me-2"></i>About
                                                    Me
                                                </h3>
                                                <div class="resume-summary-desc">
                                                    <?php echo e($user->summary); ?>

                                                </div>
                                            </section>

                                            <hr>

                                            <section class="resume-experience-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-briefcase me-2"></i>Work
                                                    Experience</h3>
                                                <div class="resume-timeline position-relative">
                                                    <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <article class="resume-timeline-item position-relative pb-5"
                                                            style="page-break-inside: avoid;">
                                                            <div class="resume-timeline-item-header mb-2">
                                                                <div
                                                                    class="resume-position-meta d-flex justify-content-between mb-1">
                                                                    <div class="resume-position-time">
                                                                        <?php echo e($exp->startDate); ?>

                                                                        -
                                                                        <?php echo e($exp->endDate); ?></div>
                                                                    <div class="resume-company-name">
                                                                        <?php echo e($exp->company); ?>

                                                                    </div>
                                                                </div>
                                                                <h3 class="resume-position-title mb-1">
                                                                    <?php echo e($exp->role); ?>

                                                                </h3>
                                                            </div><!--//resume-timeline-item-header-->
                                                            <div class="resume-timeline-item-desc">
                                                                <ul class="resume-timeline-list">
                                                                    <?php $__currentLoopData = $exp->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li>
                                                                            <?php echo e($project->projectLocation); ?>


                                                                            <?php
                                                                                $startDate = $project->startDate
                                                                                    ? \Carbon\Carbon::parse(
                                                                                        $project->startDate,
                                                                                    )->format('M')
                                                                                    : null;
                                                                                $endDate = $project->endDate
                                                                                    ? $project->endDate
                                                                                    : null;
                                                                            ?>

                                                                            <?php if($startDate && $endDate): ?>
                                                                                | <?php echo e($startDate); ?> -
                                                                                <?php echo e($endDate); ?>

                                                                            <?php else: ?>
                                                                            <?php endif; ?>

                                                                            <ul>
                                                                                <?php $__currentLoopData = explode('.', $project->description); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sentence): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if(trim($sentence) !== ''): ?>
                                                                                        <li><?php echo e(trim($sentence)); ?>.</li>
                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                            </ul>
                                                                        </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </article>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </section>
                                        </div>

                                        <div class="col-12 col-lg-4 ps-lg-4">
                                            <section class="resume-educate-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-book me-2"></i>Education
                                                </h3>
                                                <ul class="list-unstyled">
                                                    <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="mb-2">
                                                            <div class="resume-degree font-weight-bold">
                                                                <?php echo e($edu->degree); ?>

                                                            </div>
                                                            <div class="resume-degree-org"><?php echo e($edu->school); ?></div>
                                                            <div class="resume-degree-time"><?php echo e($edu->startYear); ?> -
                                                                <?php echo e($edu->endYear); ?></div>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </section><!--//resume-section-->

                                            <hr>

                                            <section class="resume-skills-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-gear me-2"></i>Skills
                                                </h3>

                                                <ul class="list-unstyled">
                                                    <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="mb-2">
                                                            <div class="resume-skill-name"><?php echo e($skill->skill); ?></div>
                                                            <div class="progress resume-progress" role="progressbar"
                                                                aria-label="Basic example"
                                                                aria-valuenow="<?php echo e($skill->percentage); ?>"
                                                                aria-valuemin="0" aria-valuemax="100">
                                                                <div class="progress-bar resume-progress-bar"
                                                                    style="width: <?php echo e($skill->percentage); ?>%">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </section>

                                            <hr>

                                            <section class="resume-lang-section resume-section">
                                                <h3 class="resume-section-heading text-uppercase py-2 py-lg-3 py-3"><i
                                                        class="resume-section-heading-icon bi bi-translate me-2"></i>Languages
                                                </h3>
                                                <ul class="list-unstyled resume-lang-list">
                                                    <li class="mb-2">
                                                        <div class="resume-lang-name">Bahasa Indonesia</div>
                                                        <div class="resume-level-indicator row gx-0 flex-nowrap">
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                        </div><!--//resume-level-indicator-->
                                                    </li>

                                                    <li class="mb-2">
                                                        <div class="resume-lang-name">English</div>
                                                        <div class="resume-level-indicator row gx-0 flex-nowrap">
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item item-full"></span>
                                                            </div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item "></span></div>
                                                            <div class="col"><span class="item"></span></div>
                                                        </div><!--//resume-level-indicator-->
                                                    </li>
                                                </ul>
                                            </section>
                                        </div><!--//col-side-->
                                    </div>
                                </main>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>
<?php /**PATH D:\project resume\resume\resources\views/components/pdf/resume.blade.php ENDPATH**/ ?>