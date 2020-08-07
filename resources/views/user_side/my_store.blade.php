
@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>


        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding">
                <div class="row">
                    <div class="col-xs-12 col-md-11 col-lg-9">
                        <div class="tt-about-box-02">
                            <h1 class="tt-title">
                                Wokiee is a global fashion destination for 20-somethings.
                                We sell cutting-edge fashion and offer a wide variety
                                of fashion-related content.
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container-fluid-custom">
                <div class="tt-col-img">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/custom/about2-img-01.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/custom/about2-img-02.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ asset('user_side/images/custom/about2-img-03.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container container-fluid-custom-mobile-padding ">
                <div class="tt-about02-col-list">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="tt-title">OUR STORES</h5>
                            <div class="width-90">
                                Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h5 class="tt-title">CONTACTS</h5>
                            <div class="tt-box-info">
                                <p>
                                    <span class="tt-base-dark-color">Address:</span> 2548 Broaddus Maple Court Avenue, Madisonville KY 4783,<br>
                                    United States of America
                                </p>
                                <p>
                                    <span class="tt-base-dark-color">Phone:</span> +777 2345 7885:  +777 2345 7886
                                </p>
                                <p>
                                    <span class="tt-base-dark-color">Hours:</span> 7 Days a week from 10 am to 6 pm
                                </p>
                                <p>
                                    <span class="tt-base-dark-color">E-mail:</span> <a class="link" href="mailto:info@mydomain.com">info@mydomain.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div class="container-indent">
    <div class="container-fluid-custom">
        <h1 class="tt-title-subpages noborder">Store Name</h1>
        <div class="tt-portfolio-masonry">
            <div class="tt-filter-nav">
                <div class="button active" data-filter="*">ALL</div>

                <div class="button" data-filter=".1">WOMEN</div>
                <div class="button" data-filter=".2">MEN </div>

            </div>
            <div class="tt-portfolio-content layout-default tt-grid-col-3  tt-add-item">
                @foreach($products as $product)
                <div class="element-item {{$product->category->id}}">
                    <figure>
                        <img src="{{ $product->productimages->first()->image_path}}" alt="">
                        <figcaption>
                            <h6 class="tt-title"><a href="#">{{$product->title}}</a></h6>
                            <p>
                                {!!  $product->description !!}
                            </p>
                            <a href="{{ $product->productimages->first()->image_path}}" class="tt-btn-zomm"></a>
                        </figcaption>
                    </figure>
                </div>
                @endforeach

            </div>
            <div class="text-center isotop_showmore_js">
                <a href="#" class="btn btn-border">LOAD MORE</a>
            </div>
        </div>
    </div>
</div>
@endsection
