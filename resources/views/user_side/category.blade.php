@extends('layouts.user_side.default')
@section('content')
<div class="tt-breadcrumb">
    @include('includes.user_side.breedCrumb')

</div>
<div class="container-indent">
    <div class="container">
        <div class="row flex-sm-row-reverse">
            <div class="col-md-4 col-lg-3 col-xl-3 leftColumn rightColumn aside">
                <div class="tt-btn-col-close">
                    <a href="#">Close</a>
                </div>
                <div class="tt-collapse open tt-filter-detach-option">
                    <div class="tt-collapse-content">
                        <div class="filters-mobile">
                            <div class="filters-row-select">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="tt-collapse open">
                    <h3 class="tt-collapse-title">SORT BY</h3>
                    <div class="tt-collapse-content">
                        <ul class="tt-filter-list">
                            <li class="active">
                                <a href="#">Shirts &amp; Tops</a>
                            </li>
                            <li>
                                <a href="#">XS</a>
                            </li>
                            <li>
                                <a href="#">White</a>
                            </li>
                        </ul>
                        <a href="#" class="btn-link-02">Clear All</a>
                    </div>
                </div>
                <div class="tt-collapse open">
                    <h3 class="tt-collapse-title">PRODUCT CATEGORIES</h3>
                    <div class="tt-collapse-content">
                        <ul class="tt-list-row">
                            <li class="active"><a href="#">Dresses</a></li>
                            <li><a href="#">Shirts &amp; Tops</a></li>
                            <li><a href="#">Polo Shirts</a></li>
                            <li><a href="#">Sweaters</a></li>
                            <li><a href="#">Blazers &amp; Vests</a></li>
                            <li><a href="#">Jackets &amp; Outerwear</a></li>
                            <li><a href="#">Activewear</a></li>
                            <li><a href="#">Pants</a></li>
                            <li><a href="#">Jumpsuits &amp; Shorts</a></li>
                            <li><a href="#">Jeans</a></li>
                            <li><a href="#">Skirts</a></li>
                            <li><a href="#">Swimwear</a></li>
                        </ul>
                    </div>
                </div>
                <div class="tt-collapse open">
                    <h3 class="tt-collapse-title">FILTER BY PRICE</h3>
                    <div class="tt-collapse-content">
                        <ul class="tt-list-row">
                            <li class="active"><a href="#">$0 — $50</a></li>
                            <li><a href="#">$50 — $100</a></li>
                            <li><a href="#">$100 — $150</a></li>
                            <li><a href="#">$150 — $200</a></li>
                        </ul>
                    </div>
                </div> -->


                <div class="tt-content-aside">
                    <a href="listing-left-column.html" class="tt-promo-03">
                        <!-- <img src="{{ asset('user_side/images/custom/listing_promo_img_07.jpg') }}" alt=""> -->
                    </a>
                </div>
            </div>
            <div class="col-md-12 col-lg-9 col-xl-9">
                <div class="content-indent container-fluid-custom-mobile-padding-02">
                    <div class="tt-filters-options">
                        <h1 class="tt-title">
                            {{$category->name}}<span class="tt-title-total">({{$category->products->count()}})</span>
                        </h1>
                        <div class="tt-btn-toggle">
                            <a href="#">FILTER</a>
                        </div>
                        <div class="tt-sort">

                            <form action="{{ route('category.show',$category->slug) }}" method="get">

                                <div class="row">

                                    <div class="col-md-2">
                                        <input type="text" name="search" class="form-control" placeholder="SEARCH" value="search">
                                    </div>

                                    <div class="col-md-3">
                                        <select name="color" class="form-control">
                                            <option value="">Color</option>

                                            <option value="red">Red</option>
                                            <option value="pink">Pink</option>
                                            <option value="orange">Orange</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="purple">Purple</option>
                                            <option value="green">Green</option>
                                            <option value="blue">Blue</option>
                                            <option value="brown">Brown</option>
                                            <option value="white">White</option>
                                            <option value="gray">Gray</option>
                                        </select>
                                    </div>

                                    <div class="col-md-3">
                                        <select name="brand" class="form-control">
                                            <option value="">Brand</option>

                                            <option value="bmw">bmw</option>
                                            <option value="renu">renu</option>

                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="model" class="form-control">
                                            <option value="">Model</option>

                                            <option value="1990">1990</option>
                                            <option value="2000">2000</option>

                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> SEARCH</button>

                                    </div>

                                </div>
                            </form><!-- end of form -->

                        </div>
                        <div class="tt-quantity">
                            <a href="#" class="tt-col-one" data-value="tt-col-one"></a>
                            <a href="#" class="tt-col-two" data-value="tt-col-two"></a>
                            <a href="#" class="tt-col-three" data-value="tt-col-three"></a>
                            <a href="#" class="tt-col-four" data-value="tt-col-four"></a>
                            <a href="#" class="tt-col-six" data-value="tt-col-six"></a>
                        </div>
                    </div>
                    <div class="tt-product-listing row">

                        @foreach($products as $product)
                        <div class="col-6 col-md-4 tt-col-item">
                            <div class="tt-product thumbprod-center">
                                <div class="tt-image-box">

                                    <a href="{{route('product.show',$product->id)}}">
                                        <span class="tt-img-roll-over"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ $product->productimages->first()->image_path  }}" alt=""></span>

                                        <span class="tt-img"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ $product->productimages->first()->image_path  }}" alt=""></span>

                                    </a>
                                </div>
                                <div class="tt-description">

                                    <h2 class="tt-title"><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></h2>
                                    <div class="tt-price">
                                        {{$product->color}}
                                    </div>
                                    <div class="tt-product-inside-hover">
                                        <div class="tt-row-btn">
                                            <a href="{{route('product.show',$product->id)}}" class="btn btn-sm"><i class="icon-e-46"></i>More Details</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="text-center tt_product_showmore">
                        <a href="#" class="btn btn-border">LOAD MORE</a>
                        <div class="tt_item_all_js">
                            <a href="#" class="btn btn-border01">NO MORE ITEM TO SHOW</a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<script>


</script>
@endsection