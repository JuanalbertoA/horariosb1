@extends("plantillas/plantilla2")

@section("contenido1")
@include("puestos/tablahtml")
@endsection

@section("contenido2")
<h1>Ver todos los datos</h1>
<form action="{{route('puestos.destroy',$puesto)}}" method="POST">
  @csrf
    <div class="row mb-3">
      <label for="nombre" class="col-sm-3 col-form-label">Nombre:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="nombre" name="nombre" disabled value="{{$puesto->nombre}}">
      </div>
    </div>
      <div class="row mb-3">
        <label for="email" class="col-sm-3 col-form-label">Tipo de puesto</label>
        <div class="col-sm-9">
          <input type="tipo" class="form-control" id="tipo" name="tipo" disabled value="{{$puesto->tipo}}">
        </div>
      </div>
    <button type="submit" class="btn btn-primary">Confirma eliminacion?</button>
    <a href="{{route('puestos.index')}}" class="btn btn-primary">regresar</a>
  </form>

@endsection