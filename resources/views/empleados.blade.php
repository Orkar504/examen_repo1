<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="robertomorales@unah.hn">
    <meta name="version" content="1.0.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/app.css">

    <title>Empleados</title>
</head>
<body>
    <div style="width: 100vw; display: flex; justify-content: center; padding-top: 10px" ><h1>Empleados</h1></div>
    <div class="container">
        <div class="row justify-content-md-left">
            <div class="col-12 d-flex justify-content-left">
                <a href="{{route('empleados.vista.nuevo')}}" class="btn btn-success">Crear</a>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row justify-content-md-center">
            <div class="col-12 d-flex justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>IdPrestamo</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>FechaIngreso</th>
                            <th>Salario</th>
                        </tr>
                    </thead>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{$empleado->Idprestamo;}}</td>
                            <td>{{$empleado->nombre;}}</td>
                            <td>{{$empleado->apellido;}}</td>
                            <td>{{$empleado->fechaIngreso;}}</td>
                            <td>{{$empleado->salario;}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>