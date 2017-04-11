<form class="form-horizontal" action="{{ route('saveNewTransaction') }}" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="total_naira" class="totNaira" value="">
		<input type="hidden" name="beneficiary_id" value="{{ $beneficiary['id'] }}">

	<div class="row">
		<div class="col-md-4">
			<label class="sr-only" for="exchangeRate">Exchange Rate</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&#8358;</div>
			    <input type="number" step="any" name="naira_rate" class="form-control transactionIN" id="exchangeRate" placeholder="Exchange Rate">
			</div>
		</div>
		<div class="col-md-4">
			<label class="sr-only" for="uk_pound">Received Pound</label>
			<div class="input-group mb-2 mr-sm-2 mb-sm-0">
			    <div class="input-group-addon">&pound;</div>
			    <input type="number" step="any" name="uk_pound" class="form-control transactionIN" id="uk_pound" placeholder="Pound Received">
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
	<div class="row">
		<div class="col-md-10 col-md-offset-2">
			<button type="submit" name="submit" id="transactionSubmit" class="btn btn-primary">Save</button>
			<button type="reset" class="btn btn-default">Clear</button>
		</div>
	</div>

</form>