<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </head>

    <body>
        <h1 class="text-center mt-5">EDITAR USUARIO</h1>
        <div class="divformcreate">
            <form class="formcreate" action="{{ route('edit',$usuario->id) }}" method="POST">
                @csrf @method('PATCH')
                <div class="form-group" >
                    <label for="exampleInputPassword1">Nombre</label>
                    <input  class="form-control" type="text" value="{{ $usuario->name }}" name="name" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input class="form-control" type="email" value="{{ $usuario->email }}" name="email" placeholder="email">

                </div>
                <button type="submit" class="btn btn-primary">Modificar</button>
                <a href="{{ route('user.read') }}" class="btn btn-primary">LIST PAGE</a>
            </form>
        </div>
    </body>

</html>
