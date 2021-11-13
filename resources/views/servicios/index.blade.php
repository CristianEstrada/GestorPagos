@extends("template.master",["title"=>"Servicios"])
@section("content")

<div class="table-responsive">
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th scope="col">Id de servicio</th>
        <th scope="col">Frecuencia</th>
        <th scope="col">Nombre</th>
        <th scope="col">Proveedor</th>
        <th scope="col">Accion</th>
      </tr>
    </thead>
    @foreach ($servicios as $s)
    @if(isset($idservicio) && $idservicio==$s->id_servicio)
    <form method="post">
    <tr>
      <td> <input class="form-control" name="frecuencia" value="{{ $s->frecuencia }}"> </td>
      <td> <input class="form-control" name="nombre" value="{{ $s->nombre }}"> </td>
      <td> <input class="form-control" name="proveedor" value="{{ $s->provedor }}"> </td>
      <td>
          <button class="btn btn-success"><i class="fa fa-save"></i></button>
      </td>
    </tr>
    @csrf
    </form>
    @else
    <tr>
      <td> {{ $s->id_servicio }}</td>
      <td> {{ $s->frecuencia }} </td>
      <td> {{ $s->nombre }} </td>
      <td> {{ $s->provedor }} </td>
      <td>
        <a href="{{route("updateServicio",$s->id_servicio)}}">
          <button class="btn btn-secondary"><i class="fa fa-edit"></i></button>
        </a>
        <a href="{{route("deleteServicio",$s->id_servicio)}}">
          <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
        </a>
      </td>
    </tr>
    @endif
    @endforeach
  </table>
</div>

<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Agregar Nuevo Servicio</h6>
</div>
<div class="card-body">
  <form action="{{ route('newServicio') }}" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Ingrese el Nombre del servicio">
    </div>
    <div class="form-group">
      <label for="provedor">Proveedor</label>
      <input class="form-control" type="text" id="provedor" name="provedor" placeholder="Ingrese el Nombre del proveedor de servicio">
    </div>
    <div class="form-group">
      <label for="frecuencia">Frecuencia</label>
      <input class="form-control" type="numeric" id="frecuencia" name="frecuencia" placeholder="Ingrese la frecuencia de facturacion">
    </div>
    <input type="submit" class="btn btn-primary" value="crear nuevo">
    @csrf
  </form>
</div>
@endsection
