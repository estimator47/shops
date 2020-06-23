   <?php $__env->startSection('main'); ?>

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            <?php if($errors->any()): ?>
                    <?php $__env->startComponent('front.components.alert'); ?>
                        <?php $__env->slot('type'); ?>
                            danger
                        <?php $__env->endSlot(); ?>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php echo e($error); ?><br>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->renderComponent(); ?>
                <?php endif; ?>
            <div class="row">
              
<?php
/*
if($errors->any()){
    $errors_str = '';
    foreach ($errors->all() as $error){
    $errors_str .= $error . '\n';
}
echo '<script>alert("'.$errors_str.'")</script>';
}
*/
?> 
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pt active" data-imgbigurl="<?php echo e(asset('public/img/product-single/product-1.jpg')); ?>">
                                <img src="<?php echo e(asset('public/img/products/' .$product->image)); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3><?php echo e($product->name); ?></h3>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                        sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                                    <h4><?php echo e($product->price); ?></h4>
                                </div>
                                <div class="pd-color">
                                    <h6>Color</h6>
                                    <div class="pd-color-choose">
                                        <div class="cc-item">
                                            <input type="radio" id="cc-black">
                                            <label for="cc-black"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-yellow">
                                            <label for="cc-yellow" class="cc-yellow"></label>
                                        </div>
                                        <div class="cc-item">
                                            <input type="radio" id="cc-violet">
                                            <label for="cc-violet" class="cc-violet"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                        <form name="cart_form" style="display: none;" method="post" action="<?php echo e(route('tocart')); ?>">
                                                <?php echo e(csrf_field()); ?>

                          <input type="hidden" name="name" value="<?php echo e($product->name); ?>" />
                          <input type="hidden" name="price" value="<?php echo e($product->price); ?>" />
                          <input type="hidden" name="image" value="<?php echo e($product->image); ?>" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('js'); ?>
<script>
$(document).ready(function(){
   $('.primary-btn.pd-cart').click(function(){
      cart_form.submit();
      return false;   
   });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/product.blade.php ENDPATH**/ ?>