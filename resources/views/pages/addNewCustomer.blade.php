@extends('app')

@section('title', 'Welcome')

@section('content')

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add Customers Contact Details</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="firstName">First Name</label>
<div class="col-md-4">
<input id="firstName" name="firstName" type="text" placeholder="First Name" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="middleName">Middle Name</label>
<div class="col-md-4">
<input id="middleName" name="middleName" type="text" placeholder="Middle Name" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="surname">Surname</label>
<div class="col-md-4">
<input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="email">Email</label>
<div class="col-md-4">
<input id="email" name="email" type="email" placeholder="Email" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="mobile">Mobile</label>
<div class="col-md-4">
<input id="mobile" name="mobile" type="text" placeholder="Mobile" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="note">Note</label>
<div class="col-md-4">
<textarea class="form-control" id="note" name="note" placeholder="Add some notes"></textarea>

</div>
</div>

</fieldset>
</form>


 <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add Customers Beneficiary Details</legend>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Name</label>
<div class="col-md-4">
<input id="textinput" name="textinput" type="text" placeholder="Name" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Bank Name</label>
<div class="col-md-4">
<input id="textinput" name="textinput" type="text" placeholder="Bank Name" class="form-control input-md">

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Account Number</label>
<div class="col-md-4">
<input id="textinput" name="textinput" type="text" placeholder="Account Number" class="form-control input-md">

</div>
</div>

</fieldset>
</form>



@endsection
