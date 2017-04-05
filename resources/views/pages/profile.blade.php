@extends('layouts.app')

@section('content')

	<div class="well bs-component">
	@foreach($customer as $customer)
		
		<div class="page-header">
			<h2>{{ $customer["first_name"].' '.$customer["last_name"] }}</h2>
			<p><span>{{ $customer["mobile"].' / '.$customer["email"] }}</span> <a href="/customer/edit/{{ $customer['id'] }}" class="btn btn-primary btn-xs">Edit</a></p>

		</div>
		<div class="row">
		@if(count($beneficiary) == 0)
			<div class="col-md-6">
		    	@include('partials._addBeneficiary')
			</div>
		@else 
		<div class="col-md-6">
			<div id="addBeneficiary" class="collapse">
		    	@include('partials._addBeneficiary')
		  	</div>

			<div class="panel panel-primary">
				<div class="panel-heading">
				    <h3 class="panel-title">Beneficiaries
				    	@if(count($beneficiary) < 5) 
							<button type="button" class="btn btn-default btn-xs" data-toggle="collapse" data-target="#addBeneficiary">ADD NEW</button>
						@endif
				    </h3>
				</div>
				<div class="panel-body">
						@foreach($beneficiary as $beneficiary)
							<a href="/customer/addTransaction/{{ $beneficiary['id'] }}" class="list-group-item">
							    <h4 class="list-group-item-heading">{{ $beneficiary['name'] }}</h4>
							    <p class="list-group-item-text">{{ $beneficiary['account'].'/'.$beneficiary['bank'] }}</p>
							</a>
						@endforeach
				</div>
			</div>
		</div>
		@endif

	@endforeach
	</div>

@endsection