 <header id="header" class="header d-flex align-items-center fixed-top">
     <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

         <a href="/" class="logo d-flex align-items-center">
             <!-- Uncomment the line below if you also wish to use an image logo -->
             <!-- <img src="assets/img/logo.webp" alt=""> -->
             <h1 class="sitename">Resume</h1>
         </a>

         

         


         <nav id="navmenu" class="navmenu">
             <ul>
                 <li><a href="/" class="<?php echo e(Request::is('/') ? 'active' : ''); ?>">Home</a></li>
                 <li><a href="/about" class="<?php echo e(Request::is('about') ? 'active' : ''); ?>">About</a></li>
                 <li><a href="/resume" class="<?php echo e(Request::is('resume') ? 'active' : ''); ?>">Resume</a></li>
                 <li><a href="/contact" class="<?php echo e(Request::is('contact') ? 'active' : ''); ?>">Contact</a></li>
             </ul>
             <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
         </nav>

     </div>
 </header>
<?php /**PATH D:\project resume\resume\resources\views/components/partials/header.blade.php ENDPATH**/ ?>