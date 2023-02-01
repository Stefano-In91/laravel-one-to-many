@extends('layouts.admin')incl

@section('content')
  <div class="container">
    <div class="py-4">
      <h1>{{ $type->name }}</h1>
      @if (count($type->projects) > 0)
        <h3>Progetti associati:</h3>
        <ul>
          @foreach ($type->projects as $project)
            <li><a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a></li>
          @endforeach
        </ul>
      @else
        <h3>Nessun progetto associato</h3>
      @endif
    </div>
    <a href="{{ route('admin.types.edit', $type) }}"><button
        class="btn btn-secondary">Modifica</button></a>
    <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class=" d-inline">

      @csrf
      @method('DELETE')

      <button type="submit" class="btn btn-danger">Elimina</button>

    </form>
  </div>
@endsection
