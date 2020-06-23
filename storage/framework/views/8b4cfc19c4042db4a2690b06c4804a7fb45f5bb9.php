            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="<?php echo e(asset('public/img/products/' . $product->image)); ?>" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            
                                            <li class="quick-view"><a href="<?php echo e(route('product', [$product->id])); ?>">+ Quick View</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <a href="#">
                                            <h5><?php echo e($product->name); ?></h5>
                                        </a>
                                        <div class="product-price">
                                            <?php echo e($product->price); ?>

                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/brick-standard.blade.php ENDPATH**/ ?>