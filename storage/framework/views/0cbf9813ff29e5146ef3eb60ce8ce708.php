<?php
  $g         = general();
  $waNumber  = preg_replace('/\D+/', '', (string) $g->mobile);
  $telNumber = preg_replace('/[^\d+]/', '', (string) $g->mobile);
?>
<div class="contact-float-card">

  <?php if($g->mobile): ?>
  <a class="item" href="https://wa.me/<?php echo e($waNumber); ?>" target="_blank" rel="noopener">
    <div class="icon-circle"><i class="fa-brands fa-whatsapp"></i></div>
    <div>
      <span class="label">WhatsApp</span>
      <span class="sub">Chat Now</span>
    </div>
  </a>

  <a class="item" href="tel:<?php echo e($telNumber); ?>">
    <div class="icon-circle"><i class="fa-solid fa-phone"></i></div>
    <div>
      <span class="label">Call Now</span>
      <span class="sub"><?php echo e($g->mobile); ?></span>
    </div>
  </a>
  <?php endif; ?>

  <?php if($g->email): ?>
  <a class="item" href="mailto:<?php echo e($g->email); ?>">
    <div class="icon-circle"><i class="fa-solid fa-envelope"></i></div>
    <div>
      <span class="label">Email Us</span>
      <span class="sub"><?php echo e($g->email); ?></span>
    </div>
  </a>
  <?php endif; ?>

  <a class="item" href="<?php echo e(route('pageView', 'catalogs')); ?>">
    <div class="icon-circle"><i class="fa-solid fa-download"></i></div>
    <div>
      <span class="label">Download Catalog</span>
      <span class="sub">View Catalogs</span>
    </div>
  </a>

</div>
<?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/layouts/includes/heroContactCard.blade.php ENDPATH**/ ?>