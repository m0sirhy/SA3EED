

@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>
    <div id="tt-pageContent" class="show_unavailable_variants">

        <div class="container-indent">
            <div class="container">
                <h1 class="tt-title-subpages noborder">ALREADY REGISTERED?</h1>
                <div class="tt-login-form">
                    <div class="row">

                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">
                                <h2 class="tt-title">NEW CUSTOMER</h2>
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                <div class="form-group">
                                    <a href="{{ __('register') }}" class="btn btn-top btn-border">CREATE AN ACCOUNT</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="tt-item">

                                <div id="login">
                                    <h2 class="tt-title">LOGIN</h2>
                                    If you have an account with us, please log in.

                                    <div class="form-default form-top">

                                        <form  method="POST" action="{{ route('login') }}" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" />
                                            <input type="hidden" name="utf8" value="✓" />
                                            @csrf
                                            <div class="tt-base-color">

                                            </div>

                                            <div class="form-group">
                                                <label for="loginInputName">{{ __('E-Mail Address') }} <sup>*</sup></label>
                                                <div class="tt-required">* Required Fields</div>
                                                <input type="email" name="email" class="form-control" id="loginInputName" placeholder="Enter E-mail">
                                            </div>


                                            <div class="form-group">
                                                <label for="loginInputEmail">{{ __('Password') }} <sup>*</sup></label>
                                                <input type="password" value="" name="password" class="form-control" id="loginInputEmail" placeholder="Enter Password">
                                            </div>


                                            <div class="row">
                                                <div class="col-auto mr-auto">
                                                    <div class="form-group">
                                                        <button class="btn btn-border" type="submit"> {{ __('Login') }}</button>
                                                        @if (Route::has('password.request'))

                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="col-auto align-self-end">
                                                    <div class="form-group">
                                                        <ul class="additional-links">
                                                            <li><a href="#" onclick="showRecoverPasswordForm();return false;">Lost your password?</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </form>
                                    </div>
                                </div>

                                <div id="recover-password" style="display:none;" class="wrap">
                                    <h2 class="tt-title">RESET PASSWORD</h2>
                                    We will send you an email to reset your password.

                                    <div class="form-default form-top">
                                        <form method="post" action="#" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password" /><input type="hidden" name="utf8" value="✓" />

                                            <div class="tt-base-color">

                                            </div>

                                            <div class="form-group">
                                                <label for="loginInputName">E-MAIL <sup>*</sup></label>
                                                <div class="tt-required">* Required Fields</div>
                                                <input value="" name="email" class="form-control" id="loginInputName" placeholder="Enter E-mail" autocorrect="off" autocapitalize="off">
                                            </div>

                                            <div class="row">
                                                <div class="col-auto">
                                                    <div class="form-group">
                                                        <button class="btn btn-border" type="submit">SUBMIT</button>
                                                    </div>
                                                </div>
                                                <div class="col-auto align-self-center">
                                                    <div class="form-group">
                                                        <ul class="additional-links">
                                                            <li>&nbsp;or <a href="#" onclick="hideRecoverPasswordForm();return false;">Cancel</a></li>
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

        <script type="text/javascript">
            function showRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'block';
                document.getElementById('login').style.display = 'none';
            }

            function hideRecoverPasswordForm() {
                document.getElementById('recover-password').style.display = 'none';
                document.getElementById('login').style.display = 'block';
            }

            if (window.location.hash == '#recover') {
                showRecoverPasswordForm()
            }
        </script>
    </div>
@endsection
