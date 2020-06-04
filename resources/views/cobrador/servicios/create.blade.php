@extends('plantillas.plantilla_cobrador')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/servicios')}}" enctype="multipart/form-data">
{{ csrf_field() }}
<div class="card">
  <h5 class="card-header">Servicio Nuevo:  </h5>
  <div class="card-body">

    <div class="form-group">
      <label for="nombre">Title:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre del servicio..." value="{{ old('nombre') }}">
    </div>

    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="text" name="precio" class="form-control" id="precio" placeholder="Precio del servicio..." value="{{ old('precio') }}">
    </div>

    <div class="form-group">
      <label for="descripcion">Descripcion:</label>
      <textarea name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </div>
    </div>
  </div>
</form>

<script>
    CKEDITOR.replace( 'descripcion' );
</script>

@endsection