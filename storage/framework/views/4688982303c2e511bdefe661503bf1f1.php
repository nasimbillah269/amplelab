<?php
  /* Dynamic footer – data from Admin ▸ General Settings + Admin ▸ Menus
     Menu locations used: "Footer Three", "Footer Two", "Footer Five" */
  $g        = general();
  $waNumber = preg_replace('/\D+/', '', (string) $g->mobile);
  $isLink   = fn ($v) => filled($v) && trim($v) !== '#';

  $footerMenus = collect(['Footer Three', 'Footer Two', 'Footer Five'])
      ->map(fn ($loc) => menu($loc))
      ->filter()
      ->map(function ($m) {
          $m->items = $m->subMenus->filter(fn ($i) => trim((string) $i->menuName()) !== '');
          return $m;
      })
      ->filter(fn ($m) => $m->items->count());
?>

<!-- ===== Footer ===== -->
<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 foot-about">
        <a class="navbar-brand d-inline-block mb-3" href="<?php echo e(route('index')); ?>">
          <img src="<?php echo e(assetUrl($g->footerLogo())); ?>" alt="<?php echo e($g->title); ?>" style="max-height:48px; width:auto;">
        </a>
        <p><?php echo e($g->copyright_text ?: 'Ample Lab is a trusted supplier of laboratory equipment for educational institutions, industries and research organizations.'); ?></p>
        <div class="foot-social mt-3">
          <a href="<?php echo e($g->facebook_link ?: '#'); ?>" <?php if($isLink($g->facebook_link)): ?> target="_blank" rel="noopener" <?php endif; ?>><i class="fa-brands fa-facebook-f"></i></a>
          <a href="<?php echo e($g->linkedin_link ?: '#'); ?>" <?php if($isLink($g->linkedin_link)): ?> target="_blank" rel="noopener" <?php endif; ?>><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="<?php echo e($g->youtube_link ?: '#'); ?>" <?php if($isLink($g->youtube_link)): ?> target="_blank" rel="noopener" <?php endif; ?>><i class="fa-brands fa-youtube"></i></a>
          <a href="<?php echo e($g->instagram_link ?: '#'); ?>" <?php if($isLink($g->instagram_link)): ?> target="_blank" rel="noopener" <?php endif; ?>><i class="fa-brands fa-instagram"></i></a>
          <?php if($g->mobile): ?><a href="https://wa.me/<?php echo e($waNumber); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i></a><?php endif; ?>
        </div>
      </div>

      <?php $__currentLoopData = $footerMenus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="col-6 col-md-3 col-lg">
        <h6><?php echo e($fm->name); ?></h6>
        <?php $__currentLoopData = $fm->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(assetUrl($item->menuLink())); ?>"><?php echo e($item->menuName()); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="col-6 col-md-6 col-lg-3">
        <h6>Contact Us</h6>
        <?php if($g->address_one): ?>
        <div class="contact-row"><i class="fa-solid fa-location-dot"></i><span><?php echo e($g->address_one); ?></span></div>
        <?php endif; ?>
        <?php if($g->mobile): ?>
        <div class="contact-row"><i class="fa-solid fa-phone"></i><span><?php echo e($g->mobile); ?></span></div>
        <?php endif; ?>
        <?php if($g->email): ?>
        <div class="contact-row"><i class="fa-solid fa-envelope"></i><span><?php echo e($g->email); ?></span></div>
        <?php endif; ?>
        <?php if($g->website): ?>
        <div class="contact-row"><i class="fa-solid fa-globe"></i><span><?php echo e(preg_replace('#^https?://#', '', $g->website)); ?></span></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="foot-bottom">
      &copy; <?php echo e(date('Y')); ?> <?php echo e($g->title ?: 'Ample Lab'); ?>. All Rights Reserved.
    </div>
  </div>
</footer>
<?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/layouts/footer.blade.php ENDPATH**/ ?>