 <?php $__env->startSection('title'); ?>
<title><?php echo e($page->seo_title?:websiteTitle($page->name)); ?></title>
<?php $__env->stopSection(); ?> <?php $__env->startSection('SEO'); ?>
<meta name="title" property="og:title" content="<?php echo e($page->seo_title?:websiteTitle($page->name)); ?>" />
<meta name="description" property="og:description" content="<?php echo $page->seo_description?:general()->meta_description; ?>" />
<meta name="keywords" content="<?php echo e($page->seo_keyword?:general()->meta_keyword); ?>" />
<meta name="image" property="og:image" content="<?php echo e(assetUrl($page->image())); ?>" />
<meta name="url" property="og:url" content="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>" />
<link rel="canonical" href="<?php echo e(route('pageView',$page->slug?:'no-title')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
<style>

</style>
<?php $__env->stopPush(); ?> <?php $__env->startSection('contents'); ?>




<!-- ===================== Contact Hero ===================== -->
<section class="contact-hero"   style="background-image: url('<?php echo e(assetUrl(assetLink().'/images/ample/fainal_cotact.jpeg')); ?>');background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
  <div class="container position-relative">

    <!-- ===================== Breadcrumb ===================== -->
<div class="breadcrumb-strip">
    <a href="<?php echo e(route('index')); ?>">Home</a><span class="sep">&gt;</span><span class="text-muted"><?php echo e($page->name); ?></span>
</div>

    <div class="row align-items-center">
      <div class="col-lg-7">
        <h1 class="fw-800" style="font-size:38px;font-weight:800;">Contact Us</h1>
        <p class="mb-0">We are here to help you with the best laboratory solutions.</p>
        <div class="hero-underline"></div>
      </div>
      <div class="col-lg-5 mt-4 mt-lg-0">
        <!-- <div class="contact-hero-img">
          <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?q=80&w=1200&auto=format&fit=crop" alt="Lab">
        </div> -->
      </div>
    </div>
  </div>
</section>

<!-- ===================== Form + Info ===================== -->
<section class="section-pad">
  <div class="container">
    <div class="row g-4">
      <!-- Send message -->
      <div class="col-lg-7">
        <div class="contact-card">
          <h4>Send Us a Message</h4>
          <p class="sub">Have a question or need a quotation? Fill out the form and our team will get back to you as soon as possible.</p>
          
          
                <?php if(Session::has('success')): ?>
                        <div class="alert alert-success alert-dismissable">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>Success! </strong> <?php echo e(Session::get('success')); ?>.
                        </div>
                        <?php endif; ?>

     
          <form action="<?php echo e(route('contactMail')); ?>" id="contactForm" method="post" id="contactForm">
    <?php echo csrf_field(); ?>

    <div class="row g-3">

        
        <div class="col-md-6">
            <label class="form-label small text-muted">
                Your Name *
            </label>

            <div class="input-icon-group">
                <i class="fa-solid fa-user"></i>

                <input type="text"
                       name="name"
                       value="<?php echo e(old('name')); ?>"
                       class="form-control ps-5 <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       placeholder="Enter your name"
                       required>
            </div>

            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-md-6">
            <label class="form-label small text-muted">
                Email Address *
            </label>

            <div class="input-icon-group">
                <i class="fa-solid fa-envelope"></i>

                <input type="email"
                       name="email"
                       value="<?php echo e(old('email')); ?>"
                       class="form-control ps-5 <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       placeholder="Enter your email"
                       required>
            </div>

            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-md-6">
            <label class="form-label small text-muted">
                Phone Number *
            </label>

            <div class="input-icon-group">
                <i class="fa-solid fa-phone"></i>

                <input type="text"
                       name="phone"
                       value="<?php echo e(old('phone')); ?>"
                       class="form-control ps-5 <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       placeholder="Enter your phone"
                       required>
            </div>

            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-md-6">
            <label class="form-label small text-muted">
                Subject *
            </label>

            <div class="input-icon-group">
                <i class="fa-solid fa-file-lines"></i>

                <input type="text"
                       name="subject"
                       value="<?php echo e(old('subject')); ?>"
                       class="form-control ps-5 <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                       placeholder="Enter subject"
                       required>
            </div>

            <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-12">
            <label class="form-label small text-muted">
                Select Inquiry Type *
            </label>

            <select name="inquiry_type"
                    class="form-select <?php $__errorArgs = ['inquiry_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    required>

                <option value="">Select Inquiry Type *</option>

                <option value="Product Inquiry"
                    <?php echo e(old('inquiry_type') == 'Product Inquiry' ? 'selected' : ''); ?>>
                    Product Inquiry
                </option>

                <option value="Quotation Request"
                    <?php echo e(old('inquiry_type') == 'Quotation Request' ? 'selected' : ''); ?>>
                    Quotation Request
                </option>

                <option value="Tender Support"
                    <?php echo e(old('inquiry_type') == 'Tender Support' ? 'selected' : ''); ?>>
                    Tender Support
                </option>

                <option value="After Sales Service"
                    <?php echo e(old('inquiry_type') == 'After Sales Service' ? 'selected' : ''); ?>>
                    After Sales Service
                </option>

                <option value="Other"
                    <?php echo e(old('inquiry_type') == 'Other' ? 'selected' : ''); ?>>
                    Other
                </option>

            </select>

            <?php $__errorArgs = ['inquiry_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-12">
            <label class="form-label small text-muted">
                Your Message *
            </label>

            <div class="input-icon-group">
                <i class="fa-solid fa-pen"
                   style="top:24px; transform:none;"></i>

                <textarea name="message"
                          class="form-control ps-5 <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                          rows="5"
                          placeholder="Write your message here..."
                          required><?php echo e(old('message')); ?></textarea>
            </div>

            <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>


        
        <div class="col-12">

            <button type="submit"
                    class="btn-alab submitbutton"
                   >

                Send Message
                <i class="fa-solid fa-paper-plane"></i>
            </button>

            <div class="privacy-note">
                <i class="fa-solid fa-shield-halved"></i>
                Your information is safe with us. We respect your privacy.
            </div>

        </div>
        
        <!--<div class="col-12">-->

        <!--    <button type="submit"-->
        <!--            class="g-recaptcha btn-alab submitbutton"-->
        <!--            data-sitekey="6LdTLTkrAAAAADMlQDwpl77bDA5tYg68ff5iv6Fx"-->
        <!--            data-callback="onSubmit"-->
        <!--            data-action="submit">-->

        <!--        Send Message-->
        <!--        <i class="fa-solid fa-paper-plane"></i>-->
        <!--    </button>-->

        <!--    <div class="privacy-note">-->
        <!--        <i class="fa-solid fa-shield-halved"></i>-->
        <!--        Your information is safe with us. We respect your privacy.-->
        <!--    </div>-->

        <!--</div>-->

    </div>
</form>
          
        </div>
      </div>

      <!-- Contact info -->
      <div class="col-lg-5">
        <div class="contact-card info-list">
          <h4 class="mb-4">Contact Information</h4>

          <div class="info-row">
            <div class="info-icon"><i class="fa-solid fa-location-dot"></i></div>
            <div>
              <h6>Our Office</h6>
              <p>House # 12, Road # 5, Mirpur DOHS<br>Dhaka-1216, Bangladesh</p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fa-solid fa-phone"></i></div>
            <div>
              <h6>Phone &amp; WhatsApp</h6>
              <p>+880 1712 345 678<br>+880 1912 345 678</p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
            <div>
              <h6>Email Us</h6>
              <p>info@amplelab.com<br>sales@amplelab.com</p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fa-regular fa-clock"></i></div>
            <div>
              <h6>Office Hours</h6>
              <p>Saturday - Thursday<br>9:00 AM - 6:00 PM<br>Friday: Closed</p>
            </div>
          </div>

          <div class="info-row">
            <div class="info-icon"><i class="fa-solid fa-globe"></i></div>
            <div>
              <h6>Website</h6>
              <p>www.amplelab.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Map -->
    <div class="row g-4 mt-1">
      <div class="col-lg-4">
        <div class="map-panel">
          <h4>Find Us On Map</h4>
          <p class="sub mb-4" style="font-size:14px;">Visit our office for product demonstration, technical discussion or any inquiries.</p>

          <div class="d-flex align-items-center gap-3 mb-3">
            <i class="fa-solid fa-phone text-success"></i>
            <span>+880 1712 345 678</span>
          </div>
          <div class="d-flex align-items-center gap-3 mb-3">
            <i class="fa-solid fa-envelope text-success"></i>
            <span>info@amplelab.com</span>
          </div>
          <div class="d-flex align-items-start gap-3 mb-4">
            <i class="fa-solid fa-location-dot text-success mt-1"></i>
            <span>House # 12, Road # 5, Mirpur DOHS, Dhaka-1216, Bangladesh</span>
          </div>

          <a href="#" class="btn-alab">Get Directions <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="map-embed">
          <iframe
            src="https://www.google.com/maps?q=Mirpur+DOHS,+Dhaka&output=embed"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== Mini Feature strip ===================== -->
<section class="mini-features">
  <div class="container">
    <div class="row gy-4 text-center">
      <div class="col-6 col-md-4 col-lg">
        <div class="feature-item">
          <div class="icon-circle"><i class="fa-solid fa-award"></i></div>
          <h6>Quality Products</h6>
          <p>From trusted international brands</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg">
        <div class="feature-item">
          <div class="icon-circle"><i class="fa-solid fa-headset"></i></div>
          <h6>Expert Support</h6>
          <p>Professional technical assistance</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg">
        <div class="feature-item">
          <div class="icon-circle"><i class="fa-solid fa-gear"></i></div>
          <h6>Complete Solutions</h6>
          <p>End-to-end laboratory solutions</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg">
        <div class="feature-item">
          <div class="icon-circle"><i class="fa-solid fa-truck-fast"></i></div>
          <h6>On Time Delivery</h6>
          <p>Reliable and timely delivery</p>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg">
        <div class="feature-item">
          <div class="icon-circle"><i class="fa-solid fa-headset"></i></div>
          <h6>After Sales Service</h6>
          <p>Dedicated after sales support</p>
        </div>
      </div>
    </div>
  </div>
</section>






<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
<?php $__env->stopPush(); ?>



<?php echo $__env->make(welcomeTheme().'layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/pages/contactUs.blade.php ENDPATH**/ ?>