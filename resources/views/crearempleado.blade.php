<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear nueva propiedad</title>
</head>
<body>
    <div style="width: 100vw; display: flex; justify-content: center; padding-top: 10px" ><h1>Crear Empleado</h1></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <br>
                <form action="{{route('empleados.crear')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Idprestamo">Id prestamo</label>
                        <input type="text" class="form-control" name="Idprestamo"/>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text"class="form-control" name="nombre"/>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" name="apellido"/>
                    </div>
                    <div class="form-group">
                        <label for="fechaIngreso">Fecha Ingreso:</label>
                        <input type="text" class="form-control" name="fechaIngreso"/>
                    </div>
                    <div class="form-group">
                        <label for="salario">Salario</label>
                        <input type="text" class="form-control" name="salario"/>
                    </div>
                    <br>
                    <div class="form-group">
                        <a href="{{route('empleados')}}" class="btn btn-danger">Volver</a>
                        <button type="submit" class="btn btn-success">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
