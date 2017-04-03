@extends('layouts.app')


@section('content')

	<div class="jumbotron">
	  
	  <h2>Search for customer</h2>

	  	<form role="search">
	  		{{csrf_field()}}
		  <div class="form-group">
		    <input type="text" name="search" class="form-control" id="searchForCustomer" placeholder="Search">
		  </div>
		</form>

	</div>

	<div class="list-group" id="ajaxResult"></div>


	<div class="list-group" id="listCustomer">
	@foreach($listCustomer as $listCustomer)
	  <a href="/customer/{{ $listCustomer['id'] }}" class="list-group-item">
	    <h4 class="list-group-item-heading">{{ $listCustomer["first_name"].' '.$listCustomer["last_name"] }}</h4>
	    <p class="list-group-item-text">{{ $listCustomer["mobile"] }}</p>
	  </a>
	@endforeach
	</div>

@endsection