<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Servicios</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="listado" style="display: flex; flex-direction: column; ">
    <h1 style="display:flex; justify-content: center;"> Listado de Servicios</h1>
        <table class="table table-striped table-bordered border-dark" style="text-align: center;">
        <thead>
            <tr>
                <th scope="col">Id de servicio</th>
                <th scope="col">Frecuencia</th>
                <th scope="col">Nombre</th>
                <th scope="col">Proveedor</th>
            </tr>
        </thead>
        @foreach ($servicios as $s)
        <tbody>
            <td> {{ $s->id_servicio }}</td>
            <td > {{ $s->frecuencia }} </td>
            <td > {{ $s->nombre }} </td>
            <td > {{ $s->provedor }} </td>
        </tbody>
        @endforeach
        </table>
    </div>
    <h1>Crear Nuevo Servicio</h1>

    <form  action="{{ route('newServicio') }}" method="post">
            Nombre <input type="text" name="nombre" placeholder="Ingrese nombre de servicio"> <br>
            Provedor <input type="text" name="provedor" placeholder="Ingrese nombre del proveedor"> <br>
            Frecuencia <input type="numeric" name="frecuencia" placeholder="Ingrese la frecuencia de pago"> <br>
            <button type="button" class="btn btn-primary" value="crear">Crear</button>
            @csrf
    </form>
</body>
</html>
