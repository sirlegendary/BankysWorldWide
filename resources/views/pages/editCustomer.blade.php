@extends('layouts.app')

@section('content')

	<div class="well bs-component">
	@foreach($customer as $customer)
		
		<div class="well bs-component">
		  <form class="form-horizontal" role="form" method="POST" action="{{ route('update') }}">
		  	{{ csrf_field() }}
		  	<input type="hidden" name="id" value="{{ $customer['id'] }}">
		    <fieldset>
		      <legend>Edit Customer Contact Details</legend>

		      <div class="form-group">
		        <label for="inputFirstName" class="col-lg-2 control-label">First Name</label>
		        <div class="col-lg-10">
		          <input type="text" class="form-control" name="inputFirstName" value="{{ $customer['first_name'] }}" required>
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="inputSurname" class="col-lg-2 control-label">Surname</label>
		        <div class="col-lg-10">
		          <input type="text" class="form-control" name="inputSurname" value="{{ $customer['last_name'] }}" required>
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
		        <div class="col-lg-10">
		          <input type="text" class="form-control" name="inputEmail" value="{{ $customer['email'] }}">
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="inputMobile" class="col-lg-2 control-label">Mobile</label>
		        <div class="col-lg-10">
		          <input type="text" class="form-control" name="inputMobile" value="{{ $customer['mobile'] }}" required>
		        </div>
		      </div>

		      <div class="form-group">
		        <label for="inputNote" class="col-lg-2 control-label">Note</label>
		        <div class="col-lg-10">
		          <textarea class="form-control" rows="4" name="inputNote">{{ $customer['notes'] }}</textarea>
		          <!-- <span class="help-block">You can write any comments about the customer here.</span> -->
		        </div>
		      </div>

		      <div class="form-group">
		        <div class="col-lg-10 col-lg-offset-2">
		          <button type="submit" name="update" class="btn btn-primary">Update</button>
		          <a href="/customer/{{ $customer['id'] }}" name="reset" class="btn btn-default">Cancel</a>
		        </div>
		      </div>
		    </fieldset>
		  </form>
		</div>

	@endforeach
	</div>

@endsection