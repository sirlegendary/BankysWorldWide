@extends('layouts.app')


@section('content')

<ul class="breadcrumb">
  <li><a href="/customer/{{ $customer['id'] }}">
  	<span class="glyphicon glyphicon-arrow-left"></span> {{ $customer["first_name"].' '.$customer["last_name"] }}
  </a></li>
</ul>

<div class="well bs-component">

	<div class="row">
		<table class="table table-striped table-hover ">
		  <thead>
		    <tr>
		      <th>Name</th>
		      <th>Bank</th>
		      <th>Account</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<tr>
		      <th>{{ $beneficiary['name'] }}</th>
		      <th>{{ $beneficiary['bank'] }}</th>
		      <th>{{ $beneficiary['account'] }}</th>
		    </tr>
		  </tbody>
		 </table>
	</div>


	@include('partials._addTransaction');
	
</div>

@if(isset($transaction))
	@foreach($transaction as $transaction)
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">{{ $transaction['created_at'] }}</h3>
		  </div>
		  <div class="panel-body">
		    {{ $transaction['total_naira'] }}
		  </div>
		</div>
		{{-- <p>{{ $transaction }}</p> --}}
	@endforeach
@endif


@endsection