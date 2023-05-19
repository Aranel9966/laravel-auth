@extends('layouts/admin')

@section('content')


<table class="mt-5 table table-striped">
  <thead>
    <th>
      Titolo
    </th>
    <th>Contenuto</th>
    <th>
      Slug
    </th>
    <th>
      Comandi
    </th>
  </thead>

  <tbody>

    @foreach($projects as $project)
    <tr >
      <td>{{$project->title}}</td>
      <td>{{$project->description}}</td>
      <td>{{$project->slug}}</td>
      <td><a href="{{route('admin.projects.show', $project->slug)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
    </tr>
    @endforeach


  </tbody>
</table>
@endsection