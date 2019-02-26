@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Editar Usuario
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
      <form method="post" action="{{ route('users.update', $user->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Nombre:</label>
          <input type="text" class="form-control" name="name" value={{ $user->name }} />
        </div>
        <div class="form-group">
          <label for="price">Email :</label>
          <input type="text" class="form-control" name="email" value={{ $user->email }} />
        </div>
        <div class="form-group">
          <label for="quantity">Contraseña:</label>
          <input type="text" class="form-control" name="password" />
        </div>
        <div class="form-group">
            <label for="quantity">Rol :</label>
            <select name="rol[]" class="form-control" multiple>
              @foreach($roles as $key => $rol)
              <option @if($user->hasRole($rol->name)) selected @endif value="{{$rol->name}}">{{$rol->name}}</option>
              @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </form>
  </div>
</div>
@endsection