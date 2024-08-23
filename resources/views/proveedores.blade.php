<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="robertomorales@unah.hn">
    <meta name="version" content="1.0.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/app.css">

    <title>Proveedores</title>
</head>
<body>
<div style="width: 100vw; display: flex; justify-content: center; padding-top: 10px" ><h1>Proveedores</h1></div>
    <div class="container my-2 bg-indigo">
        <div class="row justify-content-md-center">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="h1 text-white">Mantenimiento de alumnos</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-md-left">
            <div class="col-12 d-flex justify-content-left">
                <a href="" class="btn btn-success">Crear</a>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row justify-content-md-center">
            <div class="col-12 d-flex justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>IdProveedor</th>
                            <th>Nombre</th>
                            <th>FechaRegistro</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                        </tr>
                    </thead>
                    @foreach($proveedores as $proveedor)
                        <tr>
                            <td>{{$proveedor->Idproveedor;}}</td>
                            <td>{{$proveedor->nombre;}}</td>
                            <td>{{$proveedor->fechaRegistro;}}</td>
                            <td>{{$proveedor->telefono;}}</td>
                            <td>{{$proveedor->correo;}}</td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>