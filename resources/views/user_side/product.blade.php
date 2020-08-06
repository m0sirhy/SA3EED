@extends('layouts.user_side.default')
@section('content')
    <div class="container-indent">
        <!-- mobile product slider  -->
        <div class="tt-mobile-product-layout visible-xs">
            <div class="tt-mobile-product-slider arrow-location-center slick-animated-show-js">
                @foreach($product->productimages as $image)
                <div><img src="{{ $image->image_path}}" alt=""></div>
                @endforeach
            </div>
        </div>
        <!-- /mobile product slider  -->
        <div class="container container-fluid-mobile">
            <div class="row">
                <div class="col-6 hidden-xs">
                    <div class="tt-product-vertical-layout">
                        <div class="tt-product-single-img">
                            <div>
                                <button class="tt-btn-zomm tt-top-right"><i class="icon-f-86"></i></button>
                                <img class="zoom-product" src='{{ $product->productimages->first()->image_path }}' data-zoom-image="{{$product->productimages->first()->image_path}}" alt="">
                            </div>
                        </div>
                        <div class="tt-product-single-carousel-vertical">
                            <ul id="smallGallery" class="tt-slick-button-vertical  slick-animated-show-js">
                               <li><a class="zoomGalleryActive" href="#" data-image="{{$product->productimages->first()->image_path}}" data-zoom-image="{{$product->productimages->first()->image_path}}"><img src="{{$product->productimages->first()->image_path}}" alt=""></a></li>

                            @foreach($product->productimages as $image)

                                <li><a href="#" data-image="{{ $image->image_path }}" data-zoom-image="{{ $image->image_path }}"><img src="{{ $image->image_path }}" alt=""></a></li>

                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="tt-product-single-info">
                        <div class="tt-add-info">
                            <ul>
                                <li><span>SKU:</span> 001</li>
                                <li><span>Availability:</span> {{$product->quantity}} in Stock</li>
                            </ul>
                        </div>
                        <h1 class="tt-title">{{$product->title}}</h1>
                        <div class="tt-price">
                            <span class="new-price">{{$product->price}} ₪</span>
                        </div>
                  
                        <div class="tt-wrapper">
                            {{$product->description}}                        </div>

                        <div class="tt-wrapper">
                            <div class="tt-row-custom-01">
                                <div class="col-item">
                                    <div class="tt-input-counter style-01">
                                        <span class="minus-btn"></span>
                                        <input type="text" value="1" size="{{$product->quantity}}">
                                        <span class="plus-btn"></span>
                                    </div>
                                </div>
                                <div class="col-item">
                                @guest
                                    <a href="#" class="btn btn-lg"  data-toggle="modal" data-target="#ModalLogin"><i class="icon-f-93"></i>Contact the advertiser</a>
                               @else
                                    <a href="#" class="btn btn-lg"  data-toggle="modal" data-target="#ModalView"><i class="icon-f-93"></i>Contact the advertiser</a>
@endguest
                                </div>
                            </div>
                        </div>


                        <div class="tt-collapse-block">

                            <div class="tt-item">
                                <div class="tt-collapse-title">CONTACT INFORMATION</div>
                             
                                <div class="tt-collapse-content">
                                @auth
                                    <table class="tt-table-03">
                                        <tbody>
                                        
                                        <tr>
                                            <td>Mobile:</td>
                                            <td>{{$product->user->user_info->phone}}</td>
                                        </tr>
                                        <tr>
                                            <td>Address:</td>
                                            <td>{{$product->user->user_info->address_1}}</td>
                                        </tr>
                                        <tr>
                                            <td>City:</td>
                                            <td>{{$product->user->user_info->city}}</td>
                                        </tr>
                                      
                                        </tbody>
                                    </table>
                                    @else
                                  
                                    <div class="col-item">
                                    <a href="{{route('login')}}" class="btn btn-lg"><i class="icon-f-94"></i> Login First </a>
                                </div>
                                    @endauth
                                </div>
                              

                            
                            </div>
                           
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-indent wrapper-social-icon">
        <div class="container">
            <ul class="tt-social-icon justify-content-center">
                <li><a class="icon-g-64" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-h-58" href="http://www.facebook.com/"></a></li>
                <li><a class="icon-g-66" href="http://www.twitter.com/"></a></li>
                <li><a class="icon-g-67" href="http://www.google.com/"></a></li>
                <li><a class="icon-g-70" href="https://instagram.com/"></a></li>
            </ul>
        </div>
    </div>
    <div class="container-indent">
        <div class="container container-fluid-custom-mobile-padding">
            <div class="tt-block-title text-left">
                <h3 class="tt-title-small">RELATED PRODUCT</h3>
            </div>
            <div class="tt-carousel-products row arrow-location-right-top tt-alignment-img tt-layout-product-item slick-animated-show-js">
              @foreach($related as $product)
                <div class="col-2 col-md-4 col-lg-3">
                    <div class="tt-product thumbprod-center">
                        <div class="tt-image-box">

                            <a href="{{route('product.show',$product->id)}}">

                                <span class="tt-img"><img src="{{ $product->productimages->first()->image_path  }}" alt=""></span>
                                <span class="tt-img-roll-over"><img src="{{ $product->productimages->first()->image_path  }}" alt=""></span>

                            </a>
                        </div>
                        <div class="tt-description">
                            <div class="tt-row">
                                <ul class="tt-add-info">
                                    <li><a href="#">{{$product->category->name}}</a></li>
                                </ul>
                            </div>
                            <h2 class="tt-title"><a href="{{route('product.show',$product->id)}}}">{{$product->title}}</a></h2>
                            <div class="tt-price">
                                ${{$product->price}}
                            </div>
                            <div class="tt-product-inside-hover">
                                <div class="tt-row-btn">
                                    <a href="#" class="tt-btn-addtocart thumbprod-button-bg" data-toggle="modal" data-target="#modalAddToCartProduct">ADD TO CART</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
<!-- modal (quickViewModal) -->
<div class="modal  fade"  id="ModalView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-quickview ">
                    <div class="row">
                      
                        <div class="col-12 ">
                            <div class="tt-product-single-info">

                                <h2 class="tt-title">User Name : {{$product->user->user_name}}</h2>
                                <h2 class="tt-title">Mobile Numper : {{$product->user->user_info->phone}}</h2>
                                <h2 class="tt-title">Address : {{$product->user->user_info->address_1}}</h2>
                                <h2 class="tt-title">City: {{$product->user->user_info->city}}</h2>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
