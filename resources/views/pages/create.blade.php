<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <h1 class="text-center mt-5">CREAR USUARIO</h1>
    <div class="divformcreate">
        <form class="formcreate" action="{{ route('save') }}" method="POST">
            @csrf
            <div class="form-group" >
                <label for="exampleInputPassword1">Nombre</label>
                <input  class="form-control" type="text" name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input class="form-control"  type="email" name="email" placeholder="email">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input class="form-control"  type="password" name="password" placeholder="password">

            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="{{ route('user.read') }}" class="btn btn-primary">LIST PAGE</a>
        </form>
    </div>


</body>

</html>
