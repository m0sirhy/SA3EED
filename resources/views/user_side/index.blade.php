@extends('layouts.user_side.default')
@section('content')

        <div class="container-indent nomargin">
            <div class="container-fluid">
                <div class="row">
                    <div class="slider-revolution revolution-default">
                        <div class="tp-banner-container">
                            <div class="tp-banner revolution">
                                <ul>
                                    <li data-thumb="{{ asset('user_side/images/slides/01/slide-01.jpg') }}" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                                        <img src="{{ asset('user_side/images/slides/01/slide-01.jpg') }}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
                                        <div class="tp-caption tp-caption1 lft stb"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset="0"
                                             data-voffset="0"
                                             data-speed="600"
                                             data-start="900"
                                             data-easing="Power4.easeOut"
                                             data-endeasing="Power4.easeIn">
                                            <div class="tp-caption1-wd-1 tt-base-color">Multipurpose</div>
                                            <div class="tp-caption1-wd-2">Premium<br>Html Template</div>
                                            <div class="tp-caption1-wd-3">30 skins, powerful features, great support, exclusive offer</div>
                                            <div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>
                                        </div>
                                    </li>
                                    <li data-thumb="{{ asset('user_side/images/slides/01/slide-02.jpg') }}" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                                        <img src="{{ asset('user_side/images/slides/01/slide-02.jpg') }}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
                                        <div class="tp-caption tp-caption1 lft stb"
                                             data-x="center"
                                             data-y="center"
                                             data-hoffset="0"
                                             data-voffset="0"
                                             data-speed="600"
                                             data-start="900"
                                             data-easing="Power4.easeOut"
                                             data-endeasing="Power4.easeIn">
                                            <div class="tp-caption1-wd-1 tt-white-color">Ready To</div>
                                            <div class="tp-caption1-wd-2 tt-white-color">Use Unique<br>Demos</div>
                                            <div class="tp-caption1-wd-3 tt-white-color">Optimized for speed, website that sells</div>
                                            <div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>
                                        </div>
                                    </li>

                                    <li data-thumb="{{ asset('user_side/video/video_img.jpg') }}" data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
                                        <img src="{{ asset('user_side/video/blank.png') }}"  alt="slide1"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" >
                                        <!-- LAYER NR. 1 -->
                                        <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                             data-x="0"
                                             data-y="0"
                                             data-speed="600"
                                             data-start="0"
                                             data-easing="Power4.easeOut"
                                             data-endspeed="1500"
                                             data-endeasing="Power4.easeIn"
                                             data-autoplay="true"
                                             data-autoplayonlyfirsttime="false"
                                             data-nextslideatend="true"
                                             data-forceCover="1"
                                             data-dottedoverlay="twoxtwo"
                                             data-aspectratio="16:9">
                                            <video class="video-js vjs-default-skin" preload="none"
                                                   poster="{{ asset('user_side/video/video_img.jpg') }}" data-setup="{}">
                                                <source src="{{ asset('user_side/video/video.mp4') }}" type='video/mp4'>
                                            </video>
                                        </div>
                                        <div class="tp-caption  tp-fade"
                                             data-x="right"
                                             data-y="bottom"
                                             data-voffset="-60"
                                             data-hoffset="-90"
                                             data-speed="600"
                                             data-start="900"
                                             data-easing="Power4.easeOut"
                                             data-endeasing="Power4.easeIn">
                                            <div class="video-play">
                                                <a class="icon-f-29 btn-play" href="#"></a>
                                                <a class="icon-f-28 btn-pause" href="#"></a>
                                            </div>
                                        </div>
                                        <!-- TEXT -->
                                        <div class="tp-caption lfb lft text-center"
                                             data-x="center"
                                             data-y="center"
                                             data-voffset="-20"
                                             data-hoffset="0"
                                             data-speed="600"
                                             data-start="900"
                                             data-easing="Power4.easeOut"
                                             data-endeasing="Power4.easeIn">
                                            <div class="tp-caption1-wd-1 tt-base-color">Oberlo</div>
                                            <div class="tp-caption1-wd-2 tt-white-color">Find Products for<br>Shop Store</div>
                                            <div class="tp-caption1-wd-3 tt-white-color">Oberlo allows you to easily import dropshipped products directly into your ecommerce store</div>
                                            <div class="tp-caption1-wd-4"><a href="listing-left-column.html" target="_blank" class="btn btn-xl" data-text="SHOP NOW!">SHOP NOW!</a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="container-indent">
            <div class="container-fluid-custom">
                <div class="row tt-layout-promo-box">
                @foreach($categories as $category)
                    <div class="col-sm-6 col-md-4">
                        <a href="{{route('category.show',$category->slug)}}" class="tt-promo-box">
                            <img src="{{ asset('user_side/images/loader.svg') }}" data-src="{{$category->image_path }}" alt="">
                            <div class="tt-description">
                                <div class="tt-description-wrapper">
                                    <div class="tt-background"></div>
                                    <div class="tt-title-large">{{$category->name}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                  @endforeach
                </div>
            </div>
        </div>
     
     
        <div class="container-indent">
            <div class="container-fluid">
                <div class="tt-block-title">
                    <h2 class="tt-title"><a target="_blank" href="https://www.instagram.com/wokieeshop/">@ FOLLOW</a> US ON</h2>
                    <div class="tt-description">INSTAGRAM</div>
                </div>
                <div class="row">
                    <div id="instafeed" class="instafeed-fluid"
                         data-accessToken="8626857013.dd09515.0fcd8351c65140d48f5a340693af1c3f"
                         data-clientId="dd095157744c4bd0a67181fc4906e5b6"
                         data-userId="8626857013"
                         data-limitImg="6">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-indent">
            <div class="container">
                <div class="row tt-services-listing">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <a href="#" class="tt-services-block">
                            <div class="tt-col-icon">
                                <i class="icon-f-48"></i>
                            </div>
                            <div class="tt-col-description">
                                <h4 class="tt-title">FREE SHIPPING</h4>
                                <p>Free shipping on all US order or order above $99</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <a href="#" class="tt-services-block">
                            <div class="tt-col-icon">
                                <i class="icon-f-35"></i>
                            </div>
                            <div class="tt-col-description">
                                <h4 class="tt-title">SUPPORT 24/7</h4>
                                <p>Contact us 24 hours a day, 7 days a week</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <a href="#" class="tt-services-block">
                            <div class="tt-col-icon">
                                <i class="icon-e-09"></i>
                            </div>
                            <div class="tt-col-description">
                                <h4 class="tt-title">30 DAYS RETURN</h4>
                                <p>Simply return it within 24 days for an exchange.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

@endsection
