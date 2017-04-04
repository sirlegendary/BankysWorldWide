@extends('layouts.app')


@section('content')

	<div class="jumbotron">
	  
	  <h2>{{ count($listCustomer) }} Customers - Search</h2>

	  @include('partials._searchBar')

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