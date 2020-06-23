            @foreach($products as $product)
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="{{ asset('public/img/products/' . $product->image) }}" alt="">
                                        <div class="icon">
                                            <i class="icon_heart_alt"></i>
                                        </div>
                                        <ul>
                                            
                                            <li class="quick-view"><a href="{{route('product', [$product->id])}}">+ Quick View</a></li>
                                        </ul>
                                    </div>
                                    <div class="pi-text">
                                        <a href="#">
                                            <h5>{{ $product->name }}</h5>
                                        </a>
                                        <div class="product-price">
                                            {{ $product->price }}
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
            @endforeach