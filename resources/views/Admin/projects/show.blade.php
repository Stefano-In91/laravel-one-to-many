@extends('layouts.admin')

@section('content')
  <h2>{{ $project->title }}</h2>
  <p>{{ $project->description }}</p>
  <img src="{{ asset("storage/$project->cover_image") }}" alt="">
  <div>
    <a href="{{ route('admin.projects.edit', $project) }}"><button
        class="btn btn-secondary">Modifica</button></a>
    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class=" d-inline">

      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-danger">Elimina</button>

    </form>
  </div>
@endsection
