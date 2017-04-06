@extends('layouts.app')


@section('content')

<div class="well bs-component">
	
	<div class="row">
		<div class="col-md-4">
			<label class="sr-only" for="exchangeRate">Exchange Rate</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&#8358;</div>
			    <input type="text" name="exchangeRate" class="form-control transactionIN" id="exchangeRate" placeholder="Exchange Rate">
			</div>
		</div>
		<div class="col-md-4">
			<label class="sr-only" for="uk_pound">Received Pound</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&pound;</div>
			    <input type="text" name="uk_pound" class="form-control transactionIN" id="uk_pound" ng-controller="inputCtrl" real-time-currency placeholder="Pound Received">
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

	

	<!-- {{ $customer }} -->

	<br>

	<!-- {{ $beneficiary }} -->

</div>

@endsection