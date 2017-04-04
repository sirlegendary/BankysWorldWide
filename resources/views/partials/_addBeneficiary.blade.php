
<form class="form-horizontal" role="form" action="{{ route('addNewBeneficiary') }}" method="POST">
	{{ csrf_field() }}
	<input type="hidden" name="customer_id" value="{{ $customer['id'] }}">
	  <fieldset>
	    <legend>Add Beneficiaries</legend>
	    @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
	    <div class="form-group">
	      <label for="name" class="col-lg-2 control-label {{ $errors->has('name') ? ' has-error' : '' }}">Name</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="bank" class="col-lg-2 control-label {{ $errors->has('bank') ? ' has-error' : '' }}">Bank</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="bank" placeholder="Name of Bank" value="{{ old('bank') }}" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <label for="account" class="col-lg-2 control-label">Account number</label>
	      <div class="col-lg-10">
	        <input type="text" class="form-control" name="account" placeholder="Account number" value="{{ old('account') }}" required>
	      </div>
	    </div>

	    <div class="form-group">
	      <div class="col-lg-10 col-lg-offset-2">
	      	<button type="submit" class="btn btn-primary">Submit</button>
	        <button type="reset" class="btn btn-default">Clear</button>
	      </div>
	    </div>

	 </fieldset>
</form>
