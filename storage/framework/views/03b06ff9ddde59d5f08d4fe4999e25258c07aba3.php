        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="cart-pic first-row"><img src="<?php echo e(asset('public/img/products/' .$cart->image)); ?>" alt=""></td>
                <td class="cart-title first-row">
                    <h5><?php echo e($cart->name); ?></h5>
                </td>
                <td class="p-price first-row"><?php echo e($cart->price); ?></td>
                <td class="qua-col first-row">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="text" value="1">
                        </div>
                    </div>
                </td>
                <td class="total-price first-row"><?php echo e($cart->price); ?></td>
                <td class="user-name first-row"><?php echo e($cart->user->name); ?></td>
                <td class="close-td first-row"><button class="btn btn-danger listbuttonremove" id="<?php echo e($cart->id); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></button></td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/cart-standard.blade.php ENDPATH**/ ?>