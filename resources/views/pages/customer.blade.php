@extends('layouts.app')


@section('content')

	<div class="jumbotron">
	  <h1>Jumbotron</h1>
	  <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
	  <p><a class="btn btn-primary btn-lg">Learn more</a></p>
	</div>


	<div class="list-group">
	@foreach($listCustomer as $listCustomer)
	  <a href="/customer/{{ $listCustomer['id'] }}" class="list-group-item">
	    <h4 class="list-group-item-heading">{{ $listCustomer["first_name"].' '.$listCustomer["last_name"] }}</h4>
	    <p class="list-group-item-text">{{ $listCustomer["mobile"] }}</p>
	  </a>
	@endforeach
	</div>

@endsection