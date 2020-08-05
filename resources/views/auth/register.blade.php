
@extends('layouts.user_side.default')
@section('content')
    <div class="tt-breadcrumb">
        @include('includes.user_side.breedCrumb')

    </div>
<div class="container-indent">
    <div class="container">
        <h1 class="tt-title-subpages noborder">CREATE AN ACCOUNT</h1>
        <div class="tt-login-form">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="tt-item">
                        <h2 class="tt-title">PERSONAL INFORMATION</h2>
                        <div class="form-default">
                            <form  method="post" action="{{ route('register') }}" novalidate="novalidate">
                            @csrf
                                <div class="form-group">
                                    <label for="loginInputName">FIRST NAME *</label>
                                    <div class="tt-required">* Required Fields</div>
                                    <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror" id="loginInputName" placeholder="Enter First Name">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="loginInputEmail">E-MAIL *</label>
                                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="loginInputEmail" placeholder="Enter E-mail">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="loginInputPassword">PASSWORD *</label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="loginInputPassword" placeholder="Enter Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="form-group ">
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"   placeholder="Enter Password" required>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                    @enderror
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="form-group">
                                            <button class="btn btn-border" type="submit">CREATE</button>
                                        </div>
                                    </div>
                                    <div class="col-auto align-self-center">
                                        <div class="form-group">
                                            <ul class="additional-links">
                                                <li>or <a href="#">Return to Store</a></li>
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

@endsection
