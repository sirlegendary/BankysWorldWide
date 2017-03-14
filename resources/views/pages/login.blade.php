@extends('login')


@section('content')

  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<br/><br/>
<div class="box standard_panel">
  <h1>Login</h1>
  <form>
<div class="Borders ">
<input type="email" id="txtEmail" onblur="ClickTxtBox(this,event,'lbExample');" onfocus="ClickTxtBox(this,event,'lbExample');" class="TxtBox" />
<label class="LBposition" id="lbExample" onclick="FocusThis('txtEmail')">Email</label>
 <br/><br/> 
<div>
  <div class="Borders">
<input id="txtpassword" type="password" onblur="ClickTxtBox(this,event,'lbExamplePass');" onfocus="ClickTxtBox(this,event,'lbExamplePass');" class="TxtBox" />
<label class="LBposition" onclick="FocusThis('txtpassword')" id="lbExamplePass">Password</label>
</div>
  <button type="button" class="Button">Login</button>

  </form>
</div>


@endsection