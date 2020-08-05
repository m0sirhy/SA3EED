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
                            <span class="new-price">{{$product->price}} $</span>
                        </div>
                        <div class="tt-review">
                            <div class="tt-rating">
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star-half"></i>
                                <i class="icon-star-empty"></i>
                            </div>
                            <a class="product-page-gotocomments-js" href="#">(1 Customer Review)</a>
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
                                    <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
                                </div>
                            </div>
                        </div>


                        <div class="tt-collapse-block">

                            <div class="tt-item">
                                <div class="tt-collapse-title">CONTACT INFORMATION</div>
                                <div class="tt-collapse-content">
                                    <table class="tt-table-03">
                                        <tbody>
                                        <tr>
                                            <td>Color:</td>
                                            <td>Blue, Purple, White</td>
                                        </tr>
                                        <tr>
                                            <td>Size:</td>
                                            <td>20, 24</td>
                                        </tr>
                                        <tr>
                                            <td>Material:</td>
                                            <td>100% Polyester</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tt-item">
{{--                                <div class="tt-collapse-title tt-poin-comments">REVIEWS (3)</div>--}}
{{--                                <div class="tt-collapse-content">--}}
{{--                                    <div class="tt-review-block">--}}
{{--                                        <div class="tt-row-custom-02">--}}
{{--                                            <div class="col-item">--}}
{{--                                                <h2 class="tt-title">--}}
{{--                                                    1 REVIEW FOR VARIABLE PRODUCT--}}
{{--                                                </h2>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-item">--}}
{{--                                                <a href="#">Write a review</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tt-review-comments">--}}
{{--                                            <div class="tt-item">--}}
{{--                                                <div class="tt-avatar">--}}
{{--                                                    <a href="#"><img src="{{ asset('user_side/images/product/single/review-comments-img-01.jpg') }}" alt=""></a>--}}
{{--                                                </div>--}}
{{--                                                <div class="tt-content">--}}
{{--                                                    <div class="tt-rating">--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star-half"></i>--}}
{{--                                                        <i class="icon-star-empty"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-info">--}}
{{--                                                        <span class="username">by <span>ADRIAN</span></span>--}}
{{--                                                        <span class="time">on January 14, 2017</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-title">Very Good!</div>--}}
{{--                                                    <p>--}}
{{--                                                        Ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="tt-item">--}}
{{--                                                <div class="tt-avatar">--}}
{{--                                                    <a href="#"><img src="{{ asset('user_side/images/product/single/review-comments-img-02.jpg') }}" alt=""></a>--}}
{{--                                                </div>--}}
{{--                                                <div class="tt-content">--}}
{{--                                                    <div class="tt-rating">--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star-half"></i>--}}
{{--                                                        <i class="icon-star-empty"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-info">--}}
{{--                                                        <span class="username">by <span>JESICA</span></span>--}}
{{--                                                        <span class="time">on January 14, 2017</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-title">Bad!</div>--}}
{{--                                                    <p>--}}
{{--                                                        Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="tt-item">--}}
{{--                                                <div class="tt-avatar">--}}
{{--                                                    <a href="#"></a>--}}
{{--                                                </div>--}}
{{--                                                <div class="tt-content">--}}
{{--                                                    <div class="tt-rating">--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star"></i>--}}
{{--                                                        <i class="icon-star-half"></i>--}}
{{--                                                        <i class="icon-star-empty"></i>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-info">--}}
{{--                                                        <span class="username">by <span>ADAM</span></span>--}}
{{--                                                        <span class="time">on January 14, 2017</span>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="tt-comments-title">Very Good!</div>--}}
{{--                                                    <p>--}}
{{--                                                        Diusmod tempor incididunt ut labore et dolore magna aliqua.--}}
{{--                                                    </p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="tt-review-form">--}}
{{--                                            <div class="tt-message-info">--}}
{{--                                                BE THE FIRST TO REVIEW <span>“BLOUSE WITH SHEER &AMP; SOLID PANELS”</span>--}}
{{--                                            </div>--}}
{{--                                            <p>Your email address will not be published. Required fields are marked *</p>--}}
{{--                                            <div class="tt-rating-indicator">--}}
{{--                                                <div class="tt-title">--}}
{{--                                                    YOUR RATING *--}}
{{--                                                </div>--}}
{{--                                                <div class="tt-rating">--}}
{{--                                                    <i class="icon-star"></i>--}}
{{--                                                    <i class="icon-star"></i>--}}
{{--                                                    <i class="icon-star"></i>--}}
{{--                                                    <i class="icon-star-half"></i>--}}
{{--                                                    <i class="icon-star-empty"></i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <form class="form-default">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="inputName" class="control-label">YOUR NAME *</label>--}}
{{--                                                    <input type="email" class="form-control" id="inputName" placeholder="Enter your name">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="inputEmail" class="control-label">COUPONE E-MAIL *</label>--}}
{{--                                                    <input type="password" class="form-control" id="inputEmail" placeholder="Enter your e-mail">--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label for="textarea" class="control-label">YOUR REVIEW *</label>--}}
{{--                                                    <textarea class="form-control"  id="textarea" placeholder="Enter your review" rows="8"></textarea>--}}
{{--                                                </div>--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <button type="submit" class="btn">SUBMIT</button>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
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

@endsection
