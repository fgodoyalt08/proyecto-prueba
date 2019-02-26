@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Ver Usuario
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
      <form method="post" action="{{ route('roles.update', $role->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" disabled="true" class="form-control" name="name" value={{ $role->name }} />
        </div>
        <div class="form-group">
          <label for="price">Descripción :</label>
          <input type="text" disabled="true"class="form-control" name="description" value={{ $role->description }} />
        </div>
      </form>
  </div>
</div>
@endsection