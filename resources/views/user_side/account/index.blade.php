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
					<h3 class="tt-title">Your Advertisement</h3>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-01">
							<thead>
								<tr>
									<th>Title</th>
									<th>Description</th>
									<th>Price</th>
									<th>Quantity</th>
                                    <th>Category</th>
                                    <th>Created At</th>

								</tr>
							</thead>
							<tbody>
                                @foreach($my_products as $product)
								<tr>
									<td><a href="{{route('product.show',$product->id)}}"></a>{{$product->title}}</td>
									<td>{{$product->description}}</td>
									<td>{{$product->price}}</td>
									<td>{{$product->quantity}}</td>
                                    <td>{{$product->category->name}}</td>
                                    <td>{{$product->created_at}}</td>

                                </tr>
                                @endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div class="tt-wrapper">
					<h3 class="tt-title">ACCOUNT DETAILS,</h3> 
                    @if($user->user_info != null)
					<h4> <a href="{{route('user.edit',$user->id)}}"> Edit<i class="icon-01"></i></a></h4>
					<div class="tt-table-responsive">
						<table class="tt-table-shop-02">
							<tbody>
								<tr>
									<td>USER-NAME:</td>
									<td>{{$user->user_name}}</td>
								</tr>
								
								<tr>
									<td>E-MAIL:</td>
									<td>{{$user->email}}</td>
								</tr>
								<tr>
									<td>FIRST NAME :</td>
									<td>{{$user->user_info->first_name}}</td>
								</tr>	<tr>
									<td>LAST NAME :</td>
									<td>{{$user->user_info->last_name}}</td>
								</tr>
								<tr>
									<td>ADDRESS 1:</td>
									<td>{{$user->user_info->address_1}}</td>
								</tr>
								<tr>
									<td>ADDRESS 2:</td>
									<td>{{$user->user_info->address_2}}</td>
								</tr>
								<tr>
									<td>COUNTRY:</td>
									<td>{{$user->user_info->city}}</td>
								</tr>
								<tr>
									<td>CREATED AT:</td>
									<td>{{$user->created_at}}</td>
								</tr>
								<tr>
									<td>PHONE:</td>
									<td>{{$user->user_info->phone}}</td>
								</tr>
							</tbody>
						</table>
                    </div>
                    @else
                    <div class="tt-wrapper">

                    <h3 class="tt-title">Please Fill Your Account Data  </h3>
                    <a href="{{route('user.create')}}" class="btn bt-sm">Fill Your Data </a>
                    </div>
                    @endif
				</div>
			</div>
		</div>
    </div>
    
    @endsection