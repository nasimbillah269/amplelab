<?php
  /* Front page hero slider – data entered from Admin ▸ Sliders ("Front Page Slider" location).
     Each slide is an Attribute row: name, description, seo_title = Button Text,
     seo_description = Button Link, image() = desktop (1500x550), banner() = mobile (600x800). */
  $homeSlider = slider('Front Page Slider');
  $homeSlides = $homeSlider ? $homeSlider->subSliders : collect();

  /* Right side contact card values come from Admin ▸ General Settings (see heroContactCard) */
  $g = general();
?>

<!-- ===== Hero ===== -->
<?php if($homeSlides->count()): ?>

<style>
  <?php $__currentLoopData = $homeSlides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($slide->imageFile): ?>
    #hero-slide-<?php echo e($slide->id); ?>{ background-image:url('<?php echo e(assetUrl($slide->image())); ?>'); }
    <?php endif; ?>
    <?php if($slide->bannerFile): ?>
    @media (max-width:767.98px){ #hero-slide-<?php echo e($slide->id); ?>{ background-image:url('<?php echo e(assetUrl($slide->banner())); ?>'); } }
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</style>

<div id="heroCarousel" class="carousel slide carousel-fade hero-carousel" data-bs-ride="carousel" data-bs-interval="6000">
  <div class="carousel-inner">
    <?php $__currentLoopData = $homeSlides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="carousel-item <?php echo e($i === 0 ? 'active' : ''); ?>">
      <section class="hero" id="hero-slide-<?php echo e($slide->id); ?>">
        <div class="container">
          <div class="row align-items-center g-4">
            <div class="col-lg-5">
              <h1><?php echo e($slide->name); ?></h1>
              <?php if($slide->description): ?>
              <p class="lead-text mt-3"><?php echo nl2br(e($slide->description)); ?></p>
              <?php endif; ?>
              <div class="d-flex gap-3 mt-4 flex-wrap">
                <a href="<?php echo e(route('pageView', 'products-all')); ?>" class="btn-al-primary">Explore Products <i class="fa-solid fa-arrow-right ms-1"></i></a>
                <?php if($slide->seo_title): ?>
                <a href="<?php echo e($slide->seo_description ?: '#'); ?>" class="btn-al-outline"><?php echo e($slide->seo_title); ?> <i class="fa-solid fa-file-lines ms-1"></i></a>
                <?php endif; ?>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="hero-image-wrap">
                <?php echo $__env->make(general()->theme.'.layouts.includes.heroContactCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              </div>
            </div>
          </div>

          <?php echo $__env->make(general()->theme.'.layouts.includes.heroFeatures', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </section>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  <?php if($homeSlides->count() > 1): ?>
  <div class="carousel-indicators">
    <?php $__currentLoopData = $homeSlides; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?php echo e($i); ?>"
            class="<?php echo e($i === 0 ? 'active' : ''); ?>" <?php if($i === 0): ?> aria-current="true" <?php endif; ?>
            aria-label="Slide <?php echo e($i + 1); ?>"></button>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  <?php endif; ?>
</div>

<?php else: ?>


<section class="hero" style="background-image: url('<?php echo e(assetUrl(assetLink().'/images/ample/hero-bg.webp')); ?>');">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-5">
        <h1>Complete Laboratory <span class="line-accent">Solutions</span> for Education, Research &amp; Industry</h1>
        <p class="lead-text mt-3"><?php echo e($g->subtitle ?: 'Add a slide from Admin ▸ Sliders to control this section.'); ?></p>
        <div class="d-flex gap-3 mt-4 flex-wrap">
          <a href="<?php echo e(route('pageView', 'products-all')); ?>" class="btn-al-primary">Explore Products <i class="fa-solid fa-arrow-right ms-1"></i></a>
          <a href="<?php echo e(route('pageView', 'request-quotation')); ?>" class="btn-al-outline">Request a Quotation <i class="fa-solid fa-file-lines ms-1"></i></a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="hero-image-wrap">
          <?php echo $__env->make(general()->theme.'.layouts.includes.heroContactCard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      </div>
    </div>

    <?php echo $__env->make(general()->theme.'.layouts.includes.heroFeatures', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>
</section>

<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/layouts/slider.blade.php ENDPATH**/ ?>