<!doctype html>

<html lang="en">


<head>

    @include('includes.user_side.head')

    {{--     <script defer src="{{ asset('js/app.js') }}"></script>--}}
    {{--  <link href="{{asset('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">--}}
</head>

<body>
<div id="loader-wrapper">
    <div id="loader">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>

<header>
    @include('includes.user_side.header')

</header>


<div id="tt-pageContent">

    <!-- BEGIN content_for_index -->
@yield('content')
<!-- END content_for_index -->
</div>
<footer>
    @include('includes.user_side.footer')
</footer>

<!-- Modal (Login) -->
<div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true"  data-pause=3500>
	<div class="modal-dialog modal-discount">
		<div class="modal-content ">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
			</div>
			<form class="form-default"  method="post" action="{{ route('login') }}">
                @csrf
				<div class="modal-body tt-background">
					<div class="tt-modal-discount row">
						<div class="col-6 ml-auto">
							<div class="tt-promo-title">
							
								<div class="text-03">Login Now</div>
							</div>
							<div class="form-group">
								<input type="text" name="email" class="form-control" placeholder="Enter Email">
                                @error('email')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                            </div>
                            <div class="form-group">
								<input type="passsword" name="password" class="form-control" placeholder="Enter Password">
                                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                        @enderror
                            </div>
                            <button type="submit">Login</a>
							<p>
								<a href="{{ __('register') }}" class="tt-link-underline js-reject-discount">NEW CUSTOMER,CREATE AN ACCOUNT</a>
							</p>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- modal (quickViewModal) -->
<div class="modal  fade"  id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content ">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
            </div>
            <div class="modal-body">
                <div class="tt-modal-quickview desctope">
                    <div class="row">
                        <div class="col-12 col-md-5 col-lg-6">
                            <div class="tt-mobile-product-slider arrow-location-center">
                                <div><img src="images/loader.svg" data-src="images/product/product-01.jpg" alt=""></div>
                                <div><img src="images/loader.svg" data-src="images/product/product-01-02.jpg" alt=""></div>
                                <div><img src="images/loader.svg" data-src="images/product/product-01-03.jpg" alt=""></div>
                                <div><img src="images/loader.svg" data-src="images/product/product-01-04.jpg" alt=""></div>
                                <div>
                                    <div class="tt-video-block">
                                        <a href="#" class="link-video"></a>
                                        <video class="movie" src="video/video.mp4" poster="video/video_img.jpg"></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 col-lg-6">
                            <div class="tt-product-single-info">
                                <div class="tt-add-info">
                                    <ul>
                                        <li><span>SKU:</span> 001</li>
                                        <li><span>Availability:</span> 40 in Stock</li>
                                    </ul>
                                </div>
                                <h2 class="tt-title">Cotton Blend Fleece Hoodie</h2>
                                <div class="tt-price">
                                    <span class="new-price">$29</span>
                                    <span class="old-price"></span>
                                </div>
                                <div class="tt-review">
                                    <div class="tt-rating">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-half"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                    <a href="#">(1 Customer Review)</a>
                                </div>
                                <div class="tt-wrapper">
                                    Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                                </div>
                                <div class="tt-swatches-container">
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">SIZE</div>
                                        <form class="form-default">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>21</option>
                                                    <option>25</option>
                                                    <option>36</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">COLOR</div>
                                        <form class="form-default">
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Red</option>
                                                    <option>Green</option>
                                                    <option>Brown</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-title-options">TEXTURE:</div>
                                        <ul class="tt-options-swatch options-large">
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-01.jpg" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li class="active"><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-02.jpg" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-03.jpg" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-04.jpg" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                            <li><a class="options-color" href="#">
												<span class="swatch-img">
													<img src="images/loader.svg" data-src="images/custom/texture-img-05.jpg" alt="">
												</span>
                                                    <span class="swatch-label color-black"></span>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tt-wrapper">
                                    <div class="tt-row-custom-01">
                                        <div class="col-item">
                                            <div class="tt-input-counter style-01">
                                                <span class="minus-btn"></span>
                                                <input type="text" value="1" size="5">
                                                <span class="plus-btn"></span>
                                            </div>
                                        </div>
                                        <div class="col-item">
                                            <a href="#" class="btn btn-lg"><i class="icon-f-39"></i>ADD TO CART</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('user_side/external/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('user_side/external/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('user_side/external/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
{{-- store scripts--}}
<script src="{{ asset('user_side/external/panelmenu/panelmenu.js') }}"></script>
<script src="{{ asset('user_side/external/isotope/imagesloaded.js') }}"></script>
<script src="{{ asset('user_side/external/isotope/isotope.pkgd.min.js') }}"></script>

{{--product scripts--}}

<script src="{{ asset('user_side/external/elevatezoom/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('user_side/external/panelmenu/panelmenu.js') }}"></script>
<script src="{{ asset('user_side/external/slick/slick.min.js') }}"></script>

<script src="{{ asset('user_side/external/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('user_side/external/instafeed/instafeed.min.js') }}"></script>
<script src="{{ asset('user_side/external/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('user_side/external/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('user_side/external/countdown/jquery.plugin.min.js') }}"></script>
<script src="{{ asset('user_side/external/countdown/jquery.countdown.min.js') }}"></script>

<script src="{{ asset('user_side/external/lazyLoad/lazyload.min.js') }}"></script>
{{--product scripts--}}
<script src="{{ asset('user_side/external/elevatezoom/jquery.elevatezoom.js') }}"></script>
<script src="{{ asset('user_side/external/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('user_side/js/main.js') }}"></script>
<!-- form validation and sending to mail -->
<script src="{{ asset('user_side/external/form/jquery.form.js') }}"></script>
<script src="{{ asset('user_side/external/form/jquery.validate.min.js') }}"></script>
<script src="{{ asset('user_side/external/form/jquery.form-init.js') }}"></script>


</body>


</html>
