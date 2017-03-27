@extends('layouts.app')

<!-- @section('title', 'Welcome') -->

@section('content')

	@foreach($customer as $customer)
	  {{ $customer }}
	@endforeach

@endsection