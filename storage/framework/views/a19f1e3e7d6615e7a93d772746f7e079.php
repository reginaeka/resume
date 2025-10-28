  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
      <div class="heading">
          <div class="container">
              <div class="row d-flex justify-content-center text-center">
                  <div class="col-lg-8">
                      <h1>Resume</h1>
                      <p class="mb-0">
                          Results-oriented Structural Drafter skilled in translating complex engineering requirements
                          into buildable Revit and AutoCAD designs, backed by advanced Point Cloud integration. Adept at
                          maintaining compliance with industry standards, optimizing workflows, and supporting
                          multidisciplinary teams on both local and international assignments.
                      </p>
                  </div>
              </div>
          </div>
      </div>
      <nav class="breadcrumbs">
          <div class="container">
              <ol>
                  <li><a href="/">Home</a></li>
                  <li class="current">Resume</li>
              </ol>
          </div>
      </nav>
  </div><!-- End Page Title -->

  <!-- Resume Section -->
  <section id="resume" class="resume section">
      <div class="container">
          <div class="row">
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <h3 class="resume-title">Sumary</h3>
                  <div class="resume-item pb-0">
                      <h4><?php echo e($user->name); ?></h4>
                      <p><em><?php echo e($user->summary); ?>

                          </em>
                      </p>

                      <div class="d-flex flex-column">
                          <div class="pb-4 d-flex flex-column">
                              <a class="p-2" href="https://maps.app.goo.gl/kdCB9gXErsdMsmR1A">
                                  <i class="icon bi bi-geo-alt"> <?php echo e($user->city); ?></i>
                              </a>
                              <?php $__currentLoopData = $sosmeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sosmed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php
                                      $sosmedType =
                                          $sosmed->type === 'email' ? 'mailto:' . $sosmed->href : $sosmed->href;
                                  ?>
                                  <a class="p-2" href="<?php echo e($sosmedType); ?>">
                                      <i class="icon <?php echo e($sosmed->icon); ?>"> <?php echo e($sosmed->label); ?></i>
                                  </a>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </div>
                      </div>
                  </div><!-- Edn Resume Item -->

                  
                  <h3 class="resume-title">Education</h3>
                  <?php $__currentLoopData = $educations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $edu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="resume-item">
                          <h4><?php echo e($edu->degree); ?></h4>
                          <p><em><?php echo e($edu->school); ?></em></p>
                          <h5><?php echo e($edu->startYear); ?> - <?php echo e($edu->endYear); ?></h5>
                          <p><?php echo e($edu->thesis); ?></p>
                      </div><!-- Edn Resume Item -->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>

              
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                  <h3 class="resume-title">Professional Experience</h3>
                  <?php $__currentLoopData = $experiences; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      
                      <div class="resume-item">
                          <h4><?php echo e($exp->company); ?> | <?php echo e($exp->location); ?> </h4>
                          <h5><?php echo e($exp->startDate); ?> - <?php echo e($exp->endDate); ?></h5>
                          <ul>
                              <?php $__currentLoopData = $exp->projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <li>
                                      <?php echo e($project->projectLocation); ?>


                                      <?php
                                          $startDate = $project->startDate
                                              ? \Carbon\Carbon::parse($project->startDate)->format('M')
                                              : null;
                                          $endDate = $project->endDate ? $project->endDate : null;
                                      ?>

                                      <?php if($startDate && $endDate): ?>
                                          | <?php echo e($startDate); ?> - <?php echo e($endDate); ?>

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
                      </div><!-- Edn Resume Item -->
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
          </div>
      </div>
  </section><!-- /Resume Section -->
<?php /**PATH D:\project resume\resume\resources\views/components/pages/resume.blade.php ENDPATH**/ ?>