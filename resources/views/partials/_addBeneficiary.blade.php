<div class="col-md-6">
<form class="form-horizontal" role="form" action="{{ route('addNewBeneficiary') }}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="customer_id" value="{{ $customer['id'] }}">
	  <fieldset>
	    <legend>Add Beneficiaries</legend>
	    <div class="form-group">
	      <label for="name" class="col-lg-2 control-label">Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="name" placeholder="Name" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="bank" class="col-lg-2 control-label">Bank</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="bank" placeholder="Name of Bank" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="account" class="col-lg-2 control-label">Bank</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="account" placeholder="Account number" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<button type="submit" class="btn btn-primary">Submit</button>
	        <button type="reset" class="btn btn-default">Cancel</button>
	      </div>
	    </div>

	 </fieldset>
</form>
</div>