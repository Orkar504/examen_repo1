<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="robertomorales@unah.hn">
    <meta name="version" content="1.0.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../resources/css/app.css">

    <title>Productos</title>
</head>
<body>
<div style="width: 100vw; display: flex; justify-content: center; padding-top: 10px" ><h1>Productos</h1></div>
    <div class="container">
        <div class="row justify-content-md-left">
            <div class="col-12 d-flex justify-content-left">
                <a href="{{route('productos.vista.nuevo')}}" class="btn btn-success">Crear</a>
            </div>
        </div>
    </div>
    <div class="container my-2">
        <div class="row justify-content-md-center">
            <div class="col-12 d-flex justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Paga Isv</th>
                        </tr>
                    </thead>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{$producto->Id;}}</td>
                            <td>{{$producto->descripcion;}}</td>
                            <td>{{$producto->precio;}}</td>
                            <td>{{$producto->stock;}}</td>
                            <td>{{$producto->pagaIsv;}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    
</body>
</html>
