@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ver Archivo
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('files.update', $file->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Título:</label>
          <input type="text" disabled="true" class="form-control" name="title" value={{ $file->title }} />
        </div>
        <div class="form-group">
          <label for="price">Descripción :</label>
          <input type="text" disabled="true"class="form-control" name="description" value={{ $file->description }} />
        </div>
        <div class="form-group">
              <a href="{{Storage::disk('public')->url($file->path)}}" class="btn btn-info" target="_BLANK">Ver archivo</a>
        </div>
      </form>
  </div>
</div>
@endsection