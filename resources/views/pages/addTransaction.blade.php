@extends('layouts.app')


@section('content')

<div class="well bs-component">
	<ul class="breadcrumb">
		<li><a href="/customer">Customer</a></li>
		<li><a href="/customer/{{ $customer['id'] }}">{{ $customer["first_name"].' '.$customer["last_name"] }}</a></li>
		{{-- <li>{{ $beneficiary['name'] }}</li> --}}
	</ul>

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

	@if (count($errors) > 0)
		<div class="alert alert-danger">
		  <ul>
		      @foreach ($errors->all() as $error)
		          <li>{{ $error }}</li>
		      @endforeach
		  </ul>
		</div>
    @endif


	@include('partials._addTransaction')

</div>

@if(isset($transaction))
	@foreach($transaction as $transaction)
		<div class="panel panel-primary">
		  <div class="panel-heading">
		    <h3 class="panel-title">
		    	{{ $transaction['created_at']->format('d-m-Y').' at '.$transaction['created_at']->format('H:i') }}
		    </h3>
		  </div>
		  <div class="panel-body">
		    <div class="col-md-4">Naira sold: <b>&#8358;{{ $transaction['total_naira'] }}</b></div>
		    <div class="col-md-4">Day rate: <b>&#8358;{{ $transaction['naira_rate'] }}</b></div>
		    <div class="col-md-4">Received: <b>&pound;{{ $transaction['uk_pound'] }}</b></div>
		  </div>
		</div>
	@endforeach
@endif


@endsection
