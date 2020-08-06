@extends('layouts.user_side.default')
@section('content')
<div class="tt-breadcrumb">
    @include('includes.user_side.breedCrumb')

</div>
<div class="container-indent">
    <div class="container container-fluid-custom-mobile-padding">
        <h1 class="tt-title-subpages noborder">My Products</h1>
        <div class="row">
            <div class="col-12">
                <div class="tt-listing-post tt-half">
                    @foreach($my_products as $product)
                    <div class="tt-post">
                        <div class="tt-post-img">
                            <a href="{{route('product.show',$product->id)}}"><img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{$product->productimages->first()->image_path}}" alt=""></a>
                        </div>
                        <div class="tt-post-content">
                            <div class="tt-tag"><a href="{{route('category.show',$product->category->slug)}}">{{$product->category->name}}</a></div>
                            <h2 class="tt-title"><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></h2>
                            <div class="tt-description">
                                {{$product->description}} </div>
                            <div class="tt-meta">
                                <div class="tt-autor">
                                    {{$product->created_at->diffForHumans()}}
                                </div>

                            </div>
                            <div class="tt-btn">
                                <a href="#" class="btn bt-sm">Edit</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="tt-pagination">
                        <!-- <a href="#" class="btn-pagination btn-prev"></a> -->
                        <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                        <a href="#" class="btn-pagination btn-next"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection