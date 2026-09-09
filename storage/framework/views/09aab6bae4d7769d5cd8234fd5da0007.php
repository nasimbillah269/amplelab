
                
                 
            
            
            <div class="product-card">
          <a href="<?php echo e(route('productView',$product->slug?:Str::slug($product->name))); ?>" class="thumb">
            <span class="badge-status badge-ready">READY STOCK</span>
            <img src="<?php echo e(assetUrl($product->image())); ?>" alt="Computer Workstation">
          </a>
          <div class="body">
            <a href="<?php echo e(route('productView',$product->slug?:Str::slug($product->name))); ?>" class="title"><?php echo e($product->name); ?></a>
          </div>
          <div class="link-row">
            <a href="#">Specification</a>
            <a href="#">Catalog</a>
          </div>
          <button class="price-btn">Request Price <i class="fa-solid fa-file-lines"></i></button>
        </div><?php /**PATH D:\xampp\htdocs\amplelab\resources\views/welcome/products/includes/productCard.blade.php ENDPATH**/ ?>