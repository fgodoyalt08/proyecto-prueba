@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Archivo
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
      <form method="post" action="{{ route('files.update', $file->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Título:</label>
          <input type="text" class="form-control" name="title" value={{ $file->title }} />
        </div>
        <div class="form-group">
          <label for="price">Descripción :</label>
          <input type="text" class="form-control" name="description" value={{ $file->description }} />
        </div>
        <div class="form-group">
              <label for="upload">
                <span class="btn btn-info" aria-hidden="true">Archivo (Excel)</span>
                <input type="file" id="upload" name="file" style="display:none">
              </label>
          </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection