@extends('front.layout')
@section('css')
<style>
img {width: 50%;}
</style>

@endsection
@section('main')

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
@php
//print_r($carts);
@endphp                      
                           
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
                             @include('front.cart-standard')
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                                <a href="#" class="primary-btn up-cart">Clear All</a>
                            </div>
                            <form name="form_clearall" method="post" action="{{url('/clearall')}}">
                                           {{ csrf_field() }}
                            </form>  
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

@endsection
@section('js')

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
@endsection