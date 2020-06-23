@extends('front.layout')
   @section('main')

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad page-details">
        <div class="container">
            @if ($errors->any())
                    @component('front.components.alert')
                        @slot('type')
                            danger
                        @endslot
                      @foreach ($errors->all() as $error)
                          {{ $error }}<br>
                      @endforeach
                    @endcomponent
                @endif
            <div class="row">
              
@php
/*
if($errors->any()){
    $errors_str = '';
    foreach ($errors->all() as $error){
    $errors_str .= $error . '\n';
}
echo '<script>alert("'.$errors_str.'")</script>';
}
*/
@endphp 
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="pt active" data-imgbigurl="{{ asset('public/img/product-single/product-1.jpg') }}">
                                <img src="{{ asset('public/img/products/' .$product->image) }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <h3>{{$product->name}}</h3>
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
                                    <h4>{{$product->price}}</h4>
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
                        <form name="cart_form" style="display: none;" method="post" action="{{route('tocart')}}">
                                                {{ csrf_field() }}
                          <input type="hidden" name="name" value="{{$product->name}}" />
                          <input type="hidden" name="price" value="{{$product->price}}" />
                          <input type="hidden" name="image" value="{{$product->image}}" />
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

  @endsection
  @section('js')
<script>
$(document).ready(function(){
   $('.primary-btn.pd-cart').click(function(){
      cart_form.submit();
      return false;   
   });
});
</script>
@endsection