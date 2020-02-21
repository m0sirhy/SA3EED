@extends('layouts.user_side.default')
@section('content')
<div class="tt-breadcrumb">
    {{-- breedCrumb--}} 
    @include('includes.user_side.breedCrumb')
</div>
<div id="tt-pageContent" class="show_unavailable_variants">
    <div class="container-indent nomargin tt-empty-cart-js">
        <div class="tt-empty-cart">
            <span class="tt-icon icon-f-39"></span>
            <h1 class="tt-title">SHOPPING CART IS EMPTY</h1>
            <p>You have no items in your shopping cart.</p>
            <a href="index.html" class="btn">CONTINUE SHOPPING</a>
        </div>
    </div>
    <div class="line-items-box-js  hide">
        <div id="shopify-section-cart-template" class="shopify-section"></div>
    </div>
</div>
@endsection