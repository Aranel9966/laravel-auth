@extends('layouts/admin')

@section('content')
<h1>Pagina di amministrazione</h1>

  <hr>
  
  <h2>Benvenuto {{Auth::user()->name}} </h2>

  {{-- <ul>
    <li><a href="{{route('admin.projects.index')}}">Mostra tutti i post</a></li>
  </ul> --}}
@endsection