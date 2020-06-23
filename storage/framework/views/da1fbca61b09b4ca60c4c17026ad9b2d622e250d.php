<?php $__env->startSection('css'); ?>
<style>
#back-pannel img {
width: 120px; 
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main'); ?>  
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                        <?php if(session('product-updated')): ?>
                          <?php $__env->startComponent('back.components.alert'); ?>
                              <?php $__env->slot('type'); ?>
                                  success
                              <?php $__env->endSlot(); ?>
                              <?php echo session('product-updated'); ?>

                          <?php echo $__env->renderComponent(); ?>
                        <?php endif; ?>
                      <table>
                         <thead>
                          <tr>
                            <td class="widthbutton">&nbsp;</td>
                            <td class="widthbutton">&nbsp;</td>
                            <td>Image</td>
                            <td>Name</td>                            
                            <td>Price</td>
                            <td>top9</td>
                          </tr>  
                          </thead>
                          <tbody id="back-pannel">
                             <?php echo $__env->make('back.brick-standard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                             
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>         
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('public/js/mine.js')); ?>"></script>
<script>
 $(document).ready(function(){
   $('.listbuttonremove').click(function(){
     BaseRecord.destroy($(this).attr('id'));
     return false;
   });
 });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('back.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/estimator47/www/laravel-shops/resources/views/back/index.blade.php ENDPATH**/ ?>