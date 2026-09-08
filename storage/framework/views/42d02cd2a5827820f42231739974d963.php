<!-- ===== Top Bar ===== -->
<div class="topbar d-none d-md-block">
  <div class="container d-flex justify-content-between align-items-center flex-wrap">
    <div class="d-flex align-items-center flex-wrap">
      <span><i class="fa-solid fa-location-dot me-1"></i> House # 12, Road # 5, Mirpur DOHS, Dhaka-1216</span>
      <span class="divider">|</span>
      <a href="tel:+8801712345678"><i class="fa-solid fa-phone me-1"></i> +880 1712 345 678</a>
      <span class="divider">|</span>
      <a href="mailto:info@amplelab.com"><i class="fa-solid fa-envelope me-1"></i> info@amplelab.com</a>
      <span class="divider">|</span>
      <span><i class="fa-regular fa-clock me-1"></i> Mon - Sat: 9:00 AM - 6:00 PM</span>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
      <a href="#"><i class="fa-brands fa-youtube"></i></a>
      <a href="#"><i class="fa-brands fa-instagram"></i></a>
    </div>
  </div>
</div>


<!-- ===== Navbar ===== -->
<nav class="navbar navbar-expand-lg navbar-al sticky-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo e(route('index')); ?>">
         <img src="<?php echo e(assetUrl(general()->logo())); ?>" alt="<?php echo e(general()->title); ?>">
      <!--<div class="logo-mark"></div>-->
      <!--<div class="brand-text">-->
      <!--  <span class="brand-name">Ample Lab</span>-->
      <!--  <small>Complete Lab Solutions</small>-->
      
      <!--</div>-->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

<div class="collapse navbar-collapse" id="mainNav">
    <?php if($headerMenu = menu('Header Menus')): ?>
    <ul class="navbar-nav mx-auto my-3 my-lg-0">
        <?php $__currentLoopData = $headerMenu->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <?php if($menu->subMenus->count()): ?>
        <!-- Dropdown Menu -->
        <li class="nav-item dropdown">
            <a href="<?php echo e(assetUrl($menu->menuLink())); ?>" class="nav-link dropdown-toggle"> <?php echo e($menu->menuName()); ?> </a>
            <ul class="dropdown-menu">
                <?php $__currentLoopData = $menu->subMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subMenu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(assetUrl($subMenu->menuLink())); ?>" class="dropdown-item"> <?php echo e($subMenu->menuName()); ?> </a></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </li>
        <?php else: ?>
        <!-- Normal Menu -->
        <li class="nav-item">
            <a
                href="<?php echo e(assetUrl($menu->menuLink())); ?>"
                class="nav-link"
            >
                <?php echo e($menu->menuName()); ?>

            </a>
        </li>
        <?php endif; ?> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?> <a href="<?php echo e(url('/request-quotation')); ?>" class="btn-al-primary"> Request a Quotation </a>
</div>


  </div>
</nav>



<?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/layouts/header.blade.php ENDPATH**/ ?>