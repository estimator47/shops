@extends('back.layout')
@section('css')
<style>
#back-pannel img {
width: 120px; 
}
</style>
@endsection

@section('main')  
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                        @if (session('product-updated'))
                          @component('back.components.alert')
                              @slot('type')
                                  success
                              @endslot
                              {!! session('product-updated') !!}
                          @endcomponent
                        @endif
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
                             @include('back.brick-standard')
                             
                         </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>         
@endsection

@section('js')
<script src="{{ asset('public/js/mine.js') }}"></script>
<script>
 $(document).ready(function(){
   $('.listbuttonremove').click(function(){
     BaseRecord.destroy($(this).attr('id'));
     return false;
   });
 });
</script>

@endsection