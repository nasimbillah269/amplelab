  <?php $__env->startSection('title'); ?>
<title><?php echo e(websiteTitle('Admin Login')); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e(general()->meta_title); ?>" />
<meta name="description" property="og:description" content="<?php echo general()->meta_description; ?>" />
<meta name="keyword" property="og:keyword" content="<?php echo e(general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(assetUrl(general()->logo())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('admin')); ?>" />
<link rel="canonical" href="<?php echo e(route('admin')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>

<style>
  .flexbox-container{ min-height: calc(100vh - 60px); }
  .flexbox-container .box-shadow-2{ box-shadow:none !important; }

  .flexbox-container .card{
    border:1px solid #e6e8ec;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 24px 60px rgba(20,30,45,.14);
  }
  .flexbox-container .card-header{ padding:28px 32px 6px; }
  .flexbox-container .card-body{ padding:20px 32px 34px; }

  .flexbox-container .card-subtitle span{ font-weight:600; color:#5a6472; }

  /* gap between the input fields */
  .flexbox-container form .form-group{ margin-bottom:18px; }
  .flexbox-container form .form-group:last-of-type{ margin-bottom:10px; }

  .flexbox-container .form-control,
  .flexbox-container .form-control-lg{
    border-radius:12px;
    border:1px solid #e3e8ef;
    background:#f5f7fb;
    padding:.85rem 1rem .85rem 3rem !important;
    min-height:52px;
    height:auto;
    line-height:1.4;
    transition:border-color .15s ease, box-shadow .15s ease, background .15s ease;
  }
  .flexbox-container .form-control:focus,
  .flexbox-container .form-control-lg:focus{
    background:#fff;
    border-color:#1cbcb4;
    box-shadow:0 0 0 3px rgba(28,188,180,.18);
  }
  /* left icon — perfectly centered inside the rounded input */
  .flexbox-container .has-icon-left .form-control-position,
  .flexbox-container .position-relative .form-control.form-control-lg ~ .form-control-position{
    top:0 !important;
    left:0 !important;
    right:auto !important;
    width:3rem !important;
    height:100% !important;
    line-height:1 !important;
    display:flex !important;
    align-items:center;
    justify-content:center;
    color:#9aa4b6;
    font-size:.95rem;
    z-index:3;
  }
  .flexbox-container .has-icon-left .form-control-position i{ line-height:1; }

  .flexbox-container .chk-remember{ margin-right:6px; vertical-align:middle; }

  .flexbox-container .btn-primary.btn-lg{
    border-radius:12px;
    padding:.85rem 1rem;
    font-weight:600;
    letter-spacing:.4px;
    margin-top:6px;
  }
</style>

<?php $__env->stopPush(); ?> 

<?php $__env->startSection('contents'); ?>


 <div class="content-header row"></div>
    <div class="content-body">
        <section class="row flexbox-container">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                    <div class="card border-grey border-lighten-3 m-0">
                        <div class="card-header border-0">
                            <div class="card-title text-center">
                                <div class="p-1"><a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(assetUrl(general()->logo())); ?>" alt="<?php echo e(general()->title); ?>" style="max-width: 100%;max-height: 50px;" /></a></div>
                            </div>
                            <h6 class="card-subtitle line-on-side text-muted text-center pt-2" style="font-size: 24px;"><span>Admin Login </span></h6>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <?php echo $__env->make(adminTheme().'.alerts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <form class="form-horizontal form-simple" action="<?php echo e(route('admin')); ?>"  method="post">
                                    <?php echo csrf_field(); ?>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="email" class="form-control form-control-lg" name="email"  value="<?php echo e(old('email')); ?>" placeholder="Your Email" required="" />
                                        <div class="form-control-position">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </fieldset>
                                    <?php if($errors->has('email')): ?>
                                        <span style="color:red;display: block;"><?php echo e($errors->first('email')); ?></span>
                                    <?php endif; ?>
                                    <fieldset class="form-group position-relative has-icon-left">
                                        <input type="password" class="form-control form-control-lg" name="password" value="<?php echo e(old('password')); ?>" placeholder="Enter Password" required="" />
                                        <div class="form-control-position">
                                            <i class="fa-solid fa-key"></i>
                                        </div>
                                    </fieldset>
                                    <?php if($errors->has('password')): ?>
                                        <span style="color:red;display: block;"><?php echo e($errors->first('password')); ?></span>
                                    <?php endif; ?>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-12 text-center text-sm-left">
                                            <fieldset>
                                                <input type="checkbox" name="remember" id="remember-me" class="chk-remember" />
                                                <label for="remember-me"> Remember Me </label>
                                            </fieldset>
                                        </div>
                                        <div class="col-sm-6 col-12 text-center text-sm-right">
                                            
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa-solid fa-unlock"></i> Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




<?php $__env->stopSection(); ?> <?php $__env->startPush('js'); ?> <?php $__env->stopPush(); ?>
<?php echo $__env->make('auth.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\amplelab\resources\views/auth/adminLogin.blade.php ENDPATH**/ ?>