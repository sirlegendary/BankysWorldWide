@extends('layouts.app')


@section('content')

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

	<div class="row">
		<div class="col-md-4">
			<label class="sr-only" for="exchangeRate">Exchange Rate</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&#8358;</div>
			    <input type="number" name="exchangeRate" class="form-control transactionIN" id="exchangeRate" placeholder="Exchange Rate">
			</div>
		</div>
		<div class="col-md-4">
			<label class="sr-only" for="uk_pound">Received Pound</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&pound;</div>
			    <input type="number" name="uk_pound" class="form-control transactionIN" id="uk_pound" placeholder="Pound Received">
			</div>
		</div>
		<div class="col-md-4">
			<label class="sr-only" for="totalNaira"></label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&#8358;</div>
			    <input type="text" name="totalNaira" class="form-control" id="totalNaira" value="" disabled="">
			</div>
		</div>
	</div>
	<br/>
	<div class="form-group">
		<div class="col-lg-10 col-lg-offset-2">
			<button type="submit" name="submit" class="btn btn-primary">ADD</button>
		</div>
	</div>

	

	

	<!-- {{ $customer }} -->

	

	<!-- {{ $beneficiary }} -->

</div>

@endsection