<!doctype html>

<html lang="en">


<head>

    @include('includes.user_side.head')

    {{--noty--}}
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>

    {{-- <script defer src="{{ asset('js/app.js') }}"></script>--}}
    {{-- <link href="{{asset('css/app.css')}}" rel="stylesheet" data-turbolinks-track="true">--}}

    @livewireStyles
    @livewireScripts
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
                    @auth

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
                            <input type="text" class="form-control" name="title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <label>DESCRIPTION</label>
                            <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea> </div>
                        <div class="form-group">
                            <label>Brand</label>
                            <select name="brand" class="form-control">
                                <option value="bmw">BMW</option>
                                <option value="hyundai">hyundai</option>
                                <option value="kia">kia</option>
                                <option value="skoda">skoda</option>

                            </select>


                            <div class="form-group">
                                <label>Color</label>
                                <select name="color" class="form-control">

                                    <option value="red">Red</option>
                                    <option value="pink">Pink</option>
                                    <option value="orange">Orange</option>
                                    <option value="yellow">Yellow</option>
                                    <option value="purple">Purple</option>
                                    <option value="green">Green</option>
                                    <option value="blue">Blue</option>
                                    <option value="brown">Brown</option>
                                    <option value="white">White</option>
                                    <option value="gray">Gray</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Year</label>
                                <select name="model" class="form-control">
                                    @for ($year=1900; $year <= 2020; $year++)
                                     <option value="{{$year}}">{{$year}}</option>

                                        @endfor

                                </select>
                            </div>
                            <div class="form-group">
                                <label>PRICE</label>
                                <input type="number" class="form-control" name="price" value="{{old('price')}}">
                            </div>

                            <div class="form-group">
                                <label>PHONE</label>
                                <input type="number" class="form-control" name="phone" value="{{old('phone')}}">
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn bt-lg"> </div>
                    </form>

                    @endauth
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