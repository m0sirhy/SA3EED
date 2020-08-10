@auth
@if ( auth()->user()->user_info == null)
<div class="tt-color-scheme-01">
    <div class="container">
        <div class="tt-header-row tt-top-row">
            <div class="tt-col-left">
                <div class="tt-box-info">
                    <ul>
                        <li><i class="icon-f-44"></i>To add Product please continue and fill your data  <a href="{{route('user.create')}}" class="tt-link-underline">FILL  DETAILS</a></li>
                    </ul>
                </div>
            </div>
            <div class="tt-col-right ml-auto">

                <ul class="tt-social-icon">
                    <li><a class="icon-g-64" target="_blank" href="http://www.facebook.com/"></a></li>
                    <li><a class="icon-h-58" target="_blank" href="http://www.twitter.com/"></a></li>
                    <li><a class="icon-g-66" target="_blank" href="http://www.google.com/"></a></li>
                    <li><a class="icon-g-67" target="_blank" href="http://www.instagram.com/"></a></li>
                    <li><a class="icon-g-70" target="_blank" href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endif   
@endauth
<!-- tt-mobile-header -->
<div class="tt-mobile-header">
    <div class="container-fluid">
        <div class="tt-header-row">
            <div class="tt-mobile-parent-menu">
                <div class="tt-menu-toggle">
                    <i class="icon-03"></i>
                </div>
            </div>
            <!-- search -->
            <div class="tt-mobile-parent-search tt-parent-box"></div>
            <!-- /search -->
            <!-- cart -->
            <div class="tt-mobile-parent-cart tt-parent-box"></div>
            <!-- /cart -->
            <!-- account -->
            <div class="tt-mobile-parent-account tt-parent-box"></div>
            <!-- /account -->
            <!-- currency -->
            <div class="tt-mobile-parent-multi tt-parent-box"></div>
            <!-- /currency -->
        </div>
    </div>
    <div class="container-fluid tt-top-line">
        <div class="row">
            <div class="tt-logo-container">
                <!-- mobile logo -->
                <a class="tt-logo tt-logo-alignment" href="/"><img src="{{ asset('user_side/images/custom/logo.png') }}" alt=""></a>
                <!-- /mobile logo -->
            </div>
        </div>
    </div>
</div>
<!-- tt-desktop-header -->
<div class="tt-desktop-header">
    <div class="container">
        <div class="tt-header-holder">
            <div class="tt-col-obj tt-obj-logo">
                <!-- logo -->
                <a class="tt-logo tt-logo-alignment" href="/"><img src="{{ asset('user_side/images/custom/logo.png') }}" alt=""></a>
                <!-- /logo -->
            </div>
            <div class="tt-col-obj tt-obj-menu">
                <!-- tt-menu -->
                <div class="tt-desctop-parent-menu tt-parent-box">
                    <div class="tt-desctop-menu">
                        <nav>
                            <ul>
                                <li class="dropdown tt-megamenu-col-02 selected">
                                    <a href="/">HOME</a>

                                </li>
                                <li class="dropdown megamenu">
                                    <a href="{{route('category.index')}}">CATEGORIES</a>

                                </li>
                                <li class="dropdown megamenu">
                                    <a href="{{route('product.index')}}">All Products</a>

                                </li>

                                <li class="dropdown megamenu">
                                    <a href="listing-right-column.html">About</a>

                                </li>
                                <li class="dropdown">
                                    <a href="index-rtl.html">Contact Us</a>
                                </li>
                                @role('SuperAdmin')

                                <li class="dropdown">
                                    <a href="/dashboard">Admin DASHBOARD</a>
                                </li>
                                @endrole
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /tt-menu -->
            </div>
            <div class="tt-col-obj tt-obj-options obj-move-right">
                <!-- tt-search -->
                <div class="tt-desctop-parent-search tt-parent-box">
                    <div class="tt-search tt-dropdown-obj">
                        <button class="tt-dropdown-toggle">
                            <i class="icon-f-85"></i>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="container">
                                <form>
                                    <div class="tt-col">
                                        <input type="text" class="tt-search-input" placeholder="Search Products..." wire:model="searchTerm">
                                        <button class="tt-btn-search" type="submit"></button>
                                    </div>
                                    <div class="tt-col">
                                        <button class="tt-btn-close icon-g-80"></button>
                                    </div>
                                    <div class="tt-info-text">
                                        What are you Looking for?
                                    </div>
                                    <div class="search-results">
                                        <ul>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-03.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            <span class="new-price">$14</span>
                                                            <span class="old-price">$24</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-02.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $24
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-01.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $14
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-04.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $24
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-05.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $17
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product.html">
                                                    <div class="thumbnail"><img src="images/loader.svg" data-src="images/product/product-06.jpg" alt=""></div>
                                                    <div class="tt-description">
                                                        <div class="tt-title">Flared Shift Bag</div>
                                                        <div class="tt-price">
                                                            $20
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                        <button type="button" class="tt-view-all">View all products</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-search -->
                @auth
                <!-- tt-cart -->
                <div class="tt-desctop-parent-cart tt-parent-box">
                    <div class="tt-cart tt-dropdown-obj">
                        <button class="tt-dropdown-toggle">
                            <i class="icon-f-39"></i>
                            <span class="tt-badge-cart">{{auth()->user()->product->count()}}</span>
                        </button>
                        <div class="tt-dropdown-menu">
                            <div class="tt-mobile-add">
                                <h6 class="tt-title">My Products</h6>
                                <button class="tt-close">Close</button>
                            </div>
                            <div class="tt-dropdown-inner">
                                <div class="tt-cart-layout">
                                    <!-- layout emty cart -->


                                    @if (auth()->user()->product != null)

                                    <div class="tt-cart-content">
                                        <div class="tt-cart-list"  >
                                            @foreach(auth()->user()->product->take(3) as $product)
                                            <div class="tt-item">
                                                <a href="{{route('product.show',$product->id)}}">
                                                    <div class="tt-item-img">
                                                        <img src="{{ asset('user_side/images/loader.svg')}}" data-src="{{ $product->productimages->first()->image_path }}" alt="">
                                                    </div>
                                                    <div class="tt-item-descriptions">
                                                        <h2 class="tt-title">{{$product->title}}</h2>

                                                        <div class="tt-quantity">{{$product->quantity}} X</div>
                                                        <div class="tt-price">₪{{$product->price}}</div>
                                                    </div>
                                                </a>
                                                <div class="tt-item-close">
                                                    <a href="#" class="tt-btn-close"></a>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>

                                        <div class="tt-cart-btn">
                                            <div class="tt-item">
                                                <button class="btn" data-toggle="modal" data-target="#ModalAddProduct">ADD PRODUCT NOW!</button>

                                            </div>
                                            <div class="tt-item">
                                                <a href="{{route('my')}}" class="btn-link-02 tt-hidden-mobile">See More ,My Product</a>
                                                <a href="{{route('my')}}" class="btn btn-border tt-hidden-desctope">See More ,My Product</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-cart -->
                @endauth
                <!-- tt-account -->
                <div class="tt-desctop-parent-account tt-parent-box">
                    <div class="tt-account tt-dropdown-obj">
                        <button class="tt-dropdown-toggle"><i class="icon-f-94"></i></button>
                        <div class="tt-dropdown-menu">
                            <div class="tt-mobile-add">
                                <button class="tt-close">Close</button>
                            </div>
                            <div class="tt-dropdown-inner">
                                <ul>
                                    @guest
                                    <li><a href="{{ route('login') }}"><i class="icon-f-76"></i>{{ __('Login') }}</a></li>
                                    <li><a href="{{ route('register') }}"><i class="icon-f-94"></i>{{ __('Register') }}</a></li>

                                    @else
                                    <li><a href="{{route('user.index')}}"><i class="icon-f-94"></i>Account</a></li>
                                    <li><a href="{{route('my')}}"><i class="icon-n-072"></i>My Products</a></li>


                                    <li>

                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-f-77"></i>Sign Out</a></li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-account -->
                <!-- tt-langue  -->
                <div class="tt-desctop-parent-multi tt-parent-box">
                    <div class="tt-multi-obj tt-dropdown-obj">
                        <button class="tt-dropdown-toggle"><i class="icon-f-79"></i></button>
                        <div class="tt-dropdown-menu">
                            <div class="tt-mobile-add">
                                <button class="tt-close">Close</button>
                            </div>
                            <div class="tt-dropdown-inner">
                                <ul>
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li>
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                        @endforeach
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /tt-langue  -->
            </div>
        </div>
    </div>
</div>
<!-- stuck nav -->
<div class="tt-stuck-nav">
    <div class="container">
        <div class="tt-header-row ">
            <div class="tt-stuck-parent-menu"></div>
            <div class="tt-stuck-parent-search tt-parent-box"></div>
            <div class="tt-stuck-parent-cart tt-parent-box"></div>
            <div class="tt-stuck-parent-account tt-parent-box"></div>
            <div class="tt-stuck-parent-multi tt-parent-box"></div>
        </div>
    </div>
</div>