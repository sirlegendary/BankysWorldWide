@extends('layouts.app')

@section('content')

    <div class="jumbotron">
      
      @include('partials._searchBar')

      <div class="list-group" id="ajaxResult"></div>
    </div>

@endsection
