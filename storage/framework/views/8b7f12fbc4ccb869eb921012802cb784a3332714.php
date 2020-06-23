<?php $__env->startSection('css'); ?>
<style>
.product-item {opacity: 0.7;}
.product-item:hover {opacity: 1}
</style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('main'); ?>

<!-- Product -->

                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">

<?php
//print_r($products);
?>
                          
                          <?php echo $__env->make('front.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          
                        </div>
                        <div class="btn-success load_more ml-auto mr-auto"><a href="#" class="link_again">more</a>
                        </div><br>
                      </div>
                   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

    $(document).ready(function(){
      /*
   $('.product').css('opacity', 0.7)
   .mouseover(function(){
      $(this).css('opacity', 1);  
   })
   .mouseout(function(){
      $(this).css('opacity', 0.7);  
   }); */
  // header search 
   $('.search-but').click(function(){
BaseRecord.search($('.search_input').val());
return false;
});  
   
$('.load_more').click(function(){
BaseRecord.more();
return false;
});

}); 
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/front/index.blade.php ENDPATH**/ ?>