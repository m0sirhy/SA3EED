@extends('layouts.user_side.default')
@section('content')
<div class="tt-breadcrumb">
    @include('includes.user_side.breedCrumb')

</div>
<br>
<div class="container container-fluid-custom-mobile-padding">
    <h1 class="tt-title-subpages noborder">ACCOUNT</h1>
    <div class="tt-shopping-layout">
        <h2 class="tt-title-border">MY ACCOUNT</h2>


        <div class="tt-wrapper">
            <h3 class="tt-title">ACCOUNT DETAILS</h3>
            @if($user->user_info != null)

            <div class="tt-table-responsive">
            <form action="{{route('user.update',$user->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
            <table class="tt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>FIRST-NAME:</td>
                            <td><input type="text"  class="form-control"  value="{{$user->user_info->first_name}}"></td>
                        </tr>
                        <tr>
                            <td>LAST-NAME:</td>
                            <td><input type="text"  class="form-control"  value="{{$user->user_info->last_name}}"></td>
                        </tr>


                        <tr>
                            <td>ADDRESS 1:</td>
                            <td><input type="text" class="form-control" value="{{$user->user_info->address_1}}"></td>
                        </tr>
                        <tr>
                            <td>ADDRESS 2:</td>
                            <td><input type="text" class="form-control" value="{{$user->user_info->address_2}}"></td>

                        </tr>
                        <tr>
                            <td>COUNTRY:</td>
                            <td><input type="text" class="form-control" value="{{$user->user_info->city}}"></td>
                        </tr>
                        <tr>
                            <td>PHONE:</td>
                            <td><input type="text" class="form-control" value="{{$user->user_info->phone}}"></td>

                        </tr>
                        <tr>
                            <td colspan="2"> <input type="submit" class="form-control btn bt-lg" name="Edit"> </td>
                        </tr>
                    </tbody>
                </table>
                </form>   

            </div>
            @else
            <div class="tt-wrapper">

                <h3 class="tt-title">Please Fill Your Account Data </h3>
                <button class="btn bt-sm">Fill Your Data </button>
            </div>
            @endif
        </div>
    </div>
</div>
</div>

@endsection