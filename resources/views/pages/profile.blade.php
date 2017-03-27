@extends('layouts.app')

@section('content')

	<div class="well bs-component">
	@foreach($customer as $customer)
		
		<div class="page-header">
			<h2>{{ $customer["first_name"].' '.$customer["last_name"] }}</h2>
			<p>{{ $customer["mobile"].' / '.$customer["email"] }}</p>
		</div>

		@if (!isset($beneficiary))
			<div class="row">
		    	@include('partials._addBeneficiary')
			</div>
		@else 
			yoooo
		@endif

	@endforeach
	</div>

@endsection