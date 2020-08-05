@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>
<div class="container-indent">
    <div class="container">
        <div class="tt-layout-promo-box">
            <div class="row">

@foreach($categories as $category)
                <div class="col-sm-6 col-md-4">
                    <a href="{{route('category.show',$category->slug)}}" class="tt-promo-box tt-one-child">
                        <img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{ $category->image_path}}" alt="">
                        <div class="tt-description">
                            <div class="tt-description-wrapper">
                                <div class="tt-background"></div>
                                <div class="tt-title-small">{{$category->name}}</div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
