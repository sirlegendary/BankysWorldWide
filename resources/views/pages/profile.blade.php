@extends('layouts.app')

@section('content')

	<div class="well bs-component">
	@foreach($customer as $customer)
		
		<div class="page-header">
			<h2>{{ $customer["first_name"].' '.$customer["last_name"] }}</h2>
			<p><span>{{ $customer["mobile"].' / '.$customer["email"] }}</span> <a href="edit/{{ $customer['id'] }}" class="btn btn-primary btn-xs">Edit</a></p>

		</div>
		<div class="row">
		@if(count($beneficiary) == 0)
			
		    	@include('partials._addBeneficiary')
			</div>
		@else 
		<div class="col-md-6">
		<h2>Beneficiaries</h2>
			<table class="table table-striped table-hover ">
			  <thead>
			    <tr>
			      <th>Name</th>
			      <th>Bank</th>
			      <th>Account Number</th>
			    </tr>
			  </thead>
			  <tbody>
			   
			@foreach($beneficiary as $beneficiary)

				<tr>
			      <td>{{ $beneficiary['name'] }}</td>
			      <td>{{ $beneficiary['bank'] }}</td>
			      <td>{{ $beneficiary['account'] }}</td>
			    </tr>

			@endforeach
			</tbody>
			 </table>
			 </div>
		@endif

	@endforeach
	</div>

@endsection