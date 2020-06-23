<?php $__env->startSection('form-open'); ?>
    <form method="post" action="<?php echo e(route('products.store')); ?>">
                    <?php echo e(csrf_field()); ?>

                <?php echo e(method_field('POST')); ?>   
<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.products.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/back/products/create.blade.php ENDPATH**/ ?>