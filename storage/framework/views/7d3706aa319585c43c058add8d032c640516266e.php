<?php $__env->startSection('css'); ?>
<style>
img {width: 50%;}
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('main'); ?>

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
<?php
//print_r($carts);
?>                      
                           
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th class="p-name">Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>User</th>
                                    <th>Remove one</th>
                                </tr>
                            </thead>
                            <tbody class="tbody-cart">
                             <?php echo $__env->make('front.cart-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn up-cart">Clear All</a>
                            </div>
                            <form name="form_clearall" method="post" action="<?php echo e(url('/clearall')); ?>">
                                           <?php echo e(csrf_field()); ?>

                            </form>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>

<script>
$(document).ready(function(){
   $('.primary-btn.up-cart').click(function(){
      //form_clearall.submit();
      BaseRecord.clearall(); 
   });
$('.listbuttonremove').click(function(){
    BaseRecord.clearone($(this).attr('id'));
     return false;
   });   

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/cart.blade.php ENDPATH**/ ?>