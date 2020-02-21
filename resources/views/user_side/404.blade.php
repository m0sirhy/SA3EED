@extends('layouts.user_side.default') 
@section('content')
<div class="tt-breadcrumb">
    @include('includes.user_side.breedCrumb')
</div>
<div id="tt-pageContent" class="show_unavailable_variants">
    <div id="shopify-section-404-template" class="shopify-section">
        <div class="container-indent nomargin">
            <div class="tt-page404" style="background: #ffffff;">

                <h1 class="tt-title" style="color: #191919;">THAT PAGE CAN’T BE FOUND.</h1>
                <p style="color: #191919;">It looks like nothing was found at this location.</p>
                <a href="/" class="btn btn-white" style="color:#ffffff; background:#2879fe;" data-c="#ffffff" data-ac="#ffffff" data-bgc="#2879fe" data-abgc="#2267d8" data-hovercolors>GO TO HOME</a>
            </div>
        </div>


    </div>
</div>
@endsection