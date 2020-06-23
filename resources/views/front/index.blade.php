@extends('front.layout')

@section('css')
<style>
.product-item {opacity: 0.7;}
.product-item:hover {opacity: 1}
</style>

@endsection


@section('main')

<!-- Product -->

                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
                        <div class="row">

@php
//print_r($products);
@endphp
                          
                          @include('front.brick-standard')
                          
                        </div>
                        <div class="btn-success load_more ml-auto mr-auto"><a href="#" class="link_again">more</a>
                        </div><br>
                      </div>
                   </div>
@endsection

@section('js')

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
@endsection
