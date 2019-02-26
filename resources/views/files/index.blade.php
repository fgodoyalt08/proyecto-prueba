@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <a style="margin-bottom: 20px;" href="{{ route('files.create')}}" class="btn btn-primary">Agregar</a>
  <form action="{{ url('/files') }}" method="GET" class='navbar-form navbar-left' role="search">
      <div class="input-group custom-search-form">
          <input type="text" class="form-control" value="{{request()->search}}" name="search" placeholder="Search...">
          <span class="input-group-btn">
              <button class="btn btn-default-sm" type="submit">
                  <i class="fa fa-search">Filtrar
              </button>
          </span>
      </div>
  </form>
 
  <table class="table table-striped">
    <thead>
        <tr>
          <td>{{ App\Traits\SortableTrait::link_to_sorting_action('id', 'ID') }}</td>
          <td>{{ App\Traits\SortableTrait::link_to_sorting_action('title', 'Título') }}</td>
          <td>{{ App\Traits\SortableTrait::link_to_sorting_action('description', 'Descripción') }}</td>
          <td>Archivo</td>
          <td colspan="2">Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($files as $file)
        <tr>
            <td>{{$file->id}}</td>
            <td>{{$file->title}}</td>
            <td>{{$file->description}}</td>
            <td><a href="{{Storage::disk('public')->url($file->path)}}" target="_BLANK">Descargar</a></td>
            <td><a href="{{ route('files.show',$file->id)}}" class="btn btn-primary">Ver</a></td>
            <td><a href="{{ route('files.edit',$file->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('files.destroy', $file->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  {!! $files->render() !!}
<div>
@endsection