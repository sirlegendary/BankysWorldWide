@extends('layouts.app')

@section('content')

	<div class="well bs-component">
	@foreach($customer as $customer)
		
		<div class="page-header">
			<h2>{{ $customer["first_name"].' '.$customer["last_name"] }}</h2>
			<p><span>{{ $customer["mobile"].' / '.$customer["email"] }}</span> <a href="edit/{{ $customer['id'] }}" class="btn btn-primary btn-xs">Edit</a></p>

		</div>
		
		@if(count($beneficiary) == 0)
			<div class="row">
		    	@include('partials._addBeneficiary')
			</div>
		@else 
			@foreach($beneficiary as $beneficiary)
				<p>{{ $beneficiary }}</p>
			@endforeach
		@endif

	@endforeach
	</div>

@endsection