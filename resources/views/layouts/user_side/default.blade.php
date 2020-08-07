<!doctype html>

<html lang="en">


<head>

    @include('includes.user_side.head')

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

    {{-- <script defer src="{{ asset('js/app.js') }}"></script>--}}
    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">--}}
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
        @include('partials._session')

    </div>
    <footer>
        @include('includes.user_side.footer')
    </footer>
    <!-- Modal (AddProduct) -->
    <div class="modal fade" id="ModalAddProduct" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true" data-pause=3500>
        <div class="modal-dialog  modal-lg">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <div class="modal-body ">
                    @if ( auth()->user()->user_info != null)
                    <form class="form-default" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>IMAGE</label>
                            <input type="file" name="image[]" class="form-control image" multiple>
                        </div>
                        <div class="form-group">
                            <label>CATEGORIES</label>
                            <select name="category_id" class="form-control">
                                @foreach (App\Category::get() as $category)
                                <option value=" {{$category->id }}" {{old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>TITLE</label>
                            <input type="text" class="form-control" name="title" value="{{old('')}}">
                        </div>
                        <div class="form-group">
                            <label>DESCRIPTION</label>
                            <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea> </div>
                        <div class="form-group">
                            <label>PRICE</label>
                            <input type="number" class="form-control" name="price" value="{{old('')}}">
                        </div>
                        <div class="form-group">
                            <label>QUANTITY</label>
                            <input type="number" class="form-control" name="quantity" value="{{old('')}}">
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn bt-lg"> </div>
                    </form>
                    @else
                    <div class="tt-page404">
                        <h1 class="tt-title">SORRY YOU CAN’T ADD PRODUCT, PLEASE COMPLETE YOUR PROFILE.</h1>
                        <p>We do that to create safe enviroment</p>
                        <a href="{{route('user.create')}}" class="btn">COMPLETE THE PROFILE</a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div> <!-- Modal (Login) -->
    <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true" data-pause=3500>
        <div class="modal-dialog modal-discount">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
                </div>
                <form class="form-default" method="post" action="{{ route('login') }}">
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
                                <button class="btn btn-sm" type="submit">Login</button>
                                <p>
                                    <a href="{{ route('register') }}" class="tt-link-underline js-reject-discount">NEW CUSTOMER,CREATE AN ACCOUNT</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </form>
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

    {{--ckeditor standard--}}
    <script src="{{ asset('dashboard_files/plugins/ckeditor/ckeditor.js') }}"></script>
</body>


</html>