@extends('layouts.app')

<!-- @section('title', 'Welcome')
 -->
@section('content')

<div class="well bs-component">
  <form class="form-horizontal" role="form" method="POST" action="{{ route('addNewCustForm') }}">
  	{{ csrf_field() }}
    <fieldset>
      <legend>Add Customers Contact Details</legend>

      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
        <label for="first_name" class="col-lg-2 control-label">First Name</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required>
          @if ($errors->has('first_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('first_name') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
        <label for="last_name" class="col-lg-2 control-label">Surname</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="last_name" placeholder="Surname" value="{{ old('last_name') }}" required>
          @if ($errors->has('last_name'))
              <span class="help-block">
                  <strong>{{ $errors->first('last_name') }}</strong>
              </span>
          @endif
        </div>
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required>
          
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif

        </div>
      </div>

      <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
        <label for="mobile" class="col-lg-2 control-label">Mobile</label>
        <div class="col-lg-10">
          <input type="text" class="form-control" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}" required>

          @if ($errors->has('mobile'))
              <span class="help-block">
                  <strong>{{ $errors->first('mobile') }}</strong>
              </span>
          @endif

        </div>
      </div>

      <div class="form-group{{ $errors->has('notes') ? ' has-error' : '' }}">
        <label for="notes" class="col-lg-2 control-label">Note</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="4" name="notes">{{ old('notes') }}</textarea>
          <span class="help-block">You can write any comments about the customer here.</span>

        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
          <button type="reset" name="reset" class="btn btn-default">Clear</button>
        </div>
      </div>
    </fieldset>
  </form>
</div>

@endsection
