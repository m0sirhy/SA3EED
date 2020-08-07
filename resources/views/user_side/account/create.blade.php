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

            <div class="tt-table-responsive">
            <form action="{{route('user.store')}}" method="POST">
                @csrf
            <table class="tt-table-shop-02">
                    <tbody>
                        <tr>
                            <td>FIRST-NAME:</td>
                            <td><input type="text"  class="form-control"   name="first_name" ></td>
                        </tr>
                        <tr>
                            <td>LAST-NAME:</td>
                            <td><input type="text"  class="form-control"  name="last_name"></td>
                        </tr>


                        <tr>
                            <td>ADDRESS 1:</td>
                            <td><input type="text" class="form-control"  name="address_1" ></td>
                        </tr>
                        <tr>
                            <td>ADDRESS 2:</td>
                            <td><input type="text" class="form-control"  name="address_2" ></td>

                        </tr>
                        <tr>
                            <td>COUNTRY:</td>
                            <td><input type="text" class="form-control"   name="city" ></td>
                        </tr>
                        <tr>
                            <td>PHONE:</td>
                            <td><input type="text" class="form-control"   name="phone" ></td>

                        </tr>
                        <tr>
                            <td colspan="2"> <input type="submit" class="form-control btn bt-lg" name="Edit"> </td>
                        </tr>
                    </tbody>
                </table>
                </form>   

            </div>
   
        </div>
    </div>
</div>
</div>

@endsection