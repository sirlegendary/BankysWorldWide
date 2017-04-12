@extends('layouts.app')

@push('styles')
	{!! Charts::assets() !!}
@endpush


@section('content')

    <div class="jumbotron">
      
      @include('partials._searchBar')

      <div class="list-group" id="ajaxResult"></div>
    </div>

    <center>
        {!! $chart->render() !!}
    </center>

@endsection
