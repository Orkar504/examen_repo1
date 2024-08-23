<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Proveedor</title>
</head>
<body>
    <div style="width: 100vw; display: flex; justify-content: center; padding-top: 10px" ><h1>Crear Producto</h1></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br>
                <form action="{{route('proveedores.crear')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="id">Id Proveedor:</label>
                        <input type="text" class="form-control" name="idProveedor"/>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Nombre:</label>
                        <input type="text"class="form-control" name="nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="precio">Fecha Registro</label>
                        <input type="text" class="form-control" name="fechaRegistro"/>
                    </div>
                    <div class="form-group">
                        <label for="stock">Telefono:</label>
                        <input type="text" class="form-control" name="telefono"/>
                    </div>
                    <div class="form-group">
                        <label for="pagaIsv">Correo:</label>
                        <input type="text" class="form-control" name="correo"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="{{route('proveedores')}}" class="btn btn-danger">Volver</a>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
