@extends('layouts.user_side.default')
@section('content')
<div class="tt-breadcrumb">
    @include('includes.user_side.breedCrumb')

</div>


<div class="container-indent">
    <div class="container">
        <h1 class="tt-title-subpages noborder">MY PRODUCTS</h1>
        <div class="tt-wishlist-box" id="js-wishlist-removeitem">
            <div class="tt-wishlist-list">
                @foreach($my_products as $product)
                <div class="tt-item">
                    <div class="tt-col-description">
                        <div class="tt-img">
                            <img src="{{$product->productimages->first()->image_path}}" alt="">
                        </div>
                        <div class="tt-description">
                            <h2 class="tt-title"><a href="{{route('product.show',$product->id)}}">{{$product->title}}</a></h2>
                            <div class="tt-price">
                                <span class="new-price">{{$product->price}} </span>
                            </div>
                        </div>
                    </div>
                    <div class="tt-col-btn">
                        <a class="btn-link" href="{{route('product.show',$product->id)}}" ><i class="icon-f-73"></i>SEE PRODUCT</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="post" style="display: inline-block">
                            @csrf
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-sm"><i class="icon-h-02"></i>REMOVE</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection