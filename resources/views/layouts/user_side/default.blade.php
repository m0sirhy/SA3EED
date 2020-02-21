<!doctype html>
<!--[if IE 9]> <html class="ie9 no-js" lang="en" clrsheme="colorswatch1"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en" clrsheme="colorswatch1">
<!--<![endif]-->

<head>

    @include('includes.user_side.head')
</head>

<body>
    <div id="shopify-section-header-template" class="shopify-section">
        <nav class="panel-menu">
            @include('includes.user_side.nav')
        </nav>
        <header class="desctop-menu-large small-header">
            @include('includes.user_side.header')

        </header>


    </div>
    <div id="tt-pageContent" class="show_unavailable_variants">
        <!-- BEGIN content_for_index -->
        @yield('content')
        <!-- END content_for_index -->
    </div>
    <div id="shopify-section-footer-template" class="shopify-section">
        <footer>
            @include('includes.user_side.footer')
        </footer>


    </div><a href="#" class="tt-back-to-top">BACK TO TOP</a>
    <div class="modal fade" id="ModalquickView" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
              class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-quickview desctope">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-6">
                                <div class="product-main-image"></div>
                            </div>
                            <div class="col-12 col-md-7 col-lg-6">
                                <div class="tt-product-single-info">
                                    <div class="tt-add-info">
                                        <ul>
                                            <li class="sku-js"><span>SKU:</span> <span></span></li>
                                            <li class="availability">
                                                <span>Availability:</span> <span class="stock_quantity hide"></span> <span class="color-base in_stock hide">In Stock</span> <span class="many_in_stock hide">Many in
                          stock</span> <span class="color-red sold_out hide">Out of stock</span> <span class="continue_out hide">You can purchase this product but it&#39;s out of stock</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <h2 class="tt-title">t</h2>
                                    <div class="tt-price"><span></span><span class="old-price hide"></span></div>
                                    <div class="tt-review">
                                        <div class="rating">
                                        </div>
                                    </div>
                                    <div class="description tt-wrapper">
                                        <!--<div class="text"></div>-->
                                    </div>
                                    <div class="tt-swatches-container tt-quickview-swatches-container-js" data-swatches-design1="getButtonHtml" data-swatches-design2="getButtonHtml" data-swatches-design3="getButtonHtml"></div>

                                    <div class="tt-wrapper">
                                        <form action="https://wokiee-demos.myshopify.com/cart/add" id="modal_quick_view" method="post" enctype="multipart/form-data">
                                            <input type="hidden" class="input_variant" name="id" value="">
                                            <div class="tt-row-custom-01">
                                                <div class="col-item">
                                                    <div class="tt-input-counter style-01">
                                                        <span class="minus-btn"></span>
                                                        <input type="text" name="quantity" value="1" size="5">
                                                        <span class="plus-btn"></span>
                                                    </div>
                                                </div>
                                                <div class="col-item">
                                                    <button class="btn btn-lg btn-addtocart addtocart-js"><i class="icon-g-46"></i><span
                              class="icon icon-shopping_basket"></span> <span>ADD TO CART</span></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tt-wrapper">
                                        <div class="tt-add-info">
                                            <ul class="productvendorsmallinfo">
                                                <li><span>Vendor:</span> <span class="qv_vendor"></span></li>
                                                <li><span>Product Type:</span> <span class="qv_type"></span></li>
                                                <li><span>Barcode:</span> <span class="barcode"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tt-wrapper">
                                        <a href="#" class="viewfullinfo">View Full Info</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modalAddToCart -->
    <div class="modal fade" id="modalAddToCartError" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
              class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-add-cart">
                        <i class="icon-h-10"></i>
                        <p class="error_message"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAddToCartProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span
              class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body">
                    <div class="tt-modal-addtocart mobile">
                        <div class="tt-modal-messages">
                            <i class="icon-f-68"></i> Added to cart successfully!
                        </div>
                        <a href="#" class="btn-link btn-close-popup">CONTINUE SHOPPING</a>
                        <a href="cart.html" class="btn-link">VIEW CART</a>

                        <div>
                            <div class="checkbox-group pm-term-conditions-checkbox term-conditions-checkbox-js">
                                <input type="checkbox" id="pmcart-term-conditions-checkbox" value="1">
                                <label for="pmcart-term-conditions-checkbox">
                  <span class="check"></span>
                  <span class="box"></span>
                  I agree with the terms and conditions
                </label>
                            </div>
                        </div>

                        <a href="13050413114/checkouts/4e62ef0a00dd2d397317dcfab0e907997038.html" class="btn-link disabled">PROCEED
              TO CHECKOUT</a>
                    </div>
                    <div class="tt-modal-addtocart desctope">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="tt-modal-messages">
                                    <i class="icon-f-68"></i> Added to cart successfully!
                                </div>
                                <div class="tt-modal-product">
                                    <div class="tt-img"></div>
                                    <div class="tt-title tt-title-js"></div>
                                    <div class="description"></div>
                                    <div class="tt-qty">QTY: <span></span></div>
                                </div>
                                <div class="tt-product-total">
                                    <div class="tt-total total-product-js">
                                        TOTAL: <span class="tt-price"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <a href="cart.html" class="tt-cart-total" title="VIEW CART">
                  There are <span class="modal-total-quantity"></span> items<br> in your cart
                  <div class="tt-total">
                    TOTAL: <span class="tt-price full-total-js"></span>
                  </div>
                </a>

                                <a href="#" class="btn btn-border btn-close-popup">CONTINUE SHOPPING</a>
                                <a href="cart.html" class="btn btn-border">VIEW CART</a>

                                <div class="checkbox-group pdm-term-conditions-checkbox term-conditions-checkbox-js">
                                    <input type="checkbox" id="pcart-term-conditions-checkbox" value="1">
                                    <label for="pcart-term-conditions-checkbox">
                    <span class="check"></span>
                    <span class="box"></span>
                    I agree with the terms and conditions
                  </label>
                                </div>

                                <a href="13050413114/checkouts/4e62ef0a00dd2d397317dcfab0e907997038.html" class="btn disabled">PROCEED
                  TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                    <div class="tt-modal-slider hide">
                        <hr>
                        <div class="tt-title">With this product also buy:</div>
                        <div class="tt-modal-slider-js header-menu-product arrow-location-03 row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="custom-preloader">
        <div class="custom-loader" style="display: none;">
            <img width="32" height="32" alt="Page Loader" class="lazyload" data-src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/ajax-loader.gif')}}">
        </div>
    </div>
   
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/vendor.min.js')}}" defer="defer"></script>
    <div class="revolution_included"></div>
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/jquery.themepunch.revolution_full.min.js')}}" defer="defer"></script>
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/jquery.countdown.min.js')}}" defer="defer"></script>
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/instafeed.min.js')}}" defer="defer"></script>
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/theme.js')}}" defer="defer"></script>
    <script src="{{asset('user_side/javascripts/currencies.js')}}" defer="defer"></script>
    <script src="{{asset('user_side/files/1/0130/5041/3114/t/2/assets/jquery.currencies.min.js')}}" defer="defer"></script>

    <!-- Modals -->
    <style>
        <!-- .tt-external {
            margin-top: 35px;
        }
        
        .tt-external>* {
            background: #08da97 !important;
        }
        
        #tt-boxedbutton .rtlbutton-color {
            height: 30px;
        }
        
        #tt-boxedbutton .rtlbutton.tt-external:hover .box-description {
            width: 102px;
        }
        /* modal-preview-layout */
        
        .modal-preview-layout {
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
            background-color: #ffffff;
            padding: 20px;
        }
        
        .modal-preview-layout .modal-preview-list .tt-item:not(:first-child) {
            margin-top: 20px;
        }
        
        .modal-preview-layout .tt-item img {
            width: 100%;
            max-width: 100%;
        }
        /* modal size */
        
        .modal-external {
            width: 656px;
        }
        
        @media (max-width: 720px) {
            .modal-external {
                width: 500px;
            }
        }
        
        @media (max-width: 580px) {
            .modal-external {
                width: 420px;
            }
        }
        
        @media (max-width: 500px) {
            .modal-external {
                width: 280px;
            }
        }
        
        .tt-back-to-top {
            display: none !important;
        }
        
        #js-facebook-chat-iframe {
            bottom: 10px !important;
            right: 10px !important;
        }
        
        -->
    </style>
    <script>
        // <![CDATA[
        window.addEventListener('DOMContentLoaded', function() {
                $('.tt-box-copyright').length && $('.tt-box-copyright').html('© Wokiee 2020. All Rights Reserved');
            })
            // ]]>
    </script>

</body>


</html>