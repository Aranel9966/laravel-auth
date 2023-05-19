@extends('layouts/admin')

@section('content')

<div class="main pt-5">
  <h1>{{$project->title}}</h1>
  <hr>
  <p>
    {{$project->description}}
  </p>
</div>
@endsection