




@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>
    <div id="tt-pageContent" class="show_unavailable_variants">

        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">CREATE AN ACCOUNT</h1>
                <div class="tt-login-form">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6">
                            <div class="tt-item">
                                <h2 class="tt-title">PERSONAL INFORMATION</h2>
                                <div class="form-default">
                                    <form method="POST" action="{{ route('register') }} id="create_customer accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />
                                    @csrf
                                        <div class="tt-base-color">

                                        </div>

                                        <div class="form-group">
                                            <label for="loginInputName">{{ __('Name') }} <sup>*</sup></label>
                                            <div class="tt-required">* Required Fields</div>
                                            <input type="text" name="customer[first_name]" class="form-control" id="loginInputName" placeholder="Enter First Name">
                                        </div>

                                        <div class="form-group">
                                            <label for="loginInputEmail">{{ __('E-Mail Address') }} <sup>*</sup></label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="loginInputPassword">{{ __('Password') }} <sup>*</sup></label>
                                            <input id="password" type="password" name="password"  class="form-control" id="loginInputPassword" placeholder="Enter Password">

                                        </div>
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="form-group">
                                                    <button class="btn btn-border" type="submit">{{ __('Register') }}</button>
                                                </div>
                                            </div>
                                            <div class="col-auto align-self-center">
                                                <div class="form-group">
                                                    <ul class="additional-links">
                                                        <li>&nbsp;or <a href="../index.html">Return to Store</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
