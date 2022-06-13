<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>UPDATE USER</h1>
        <form action="{{ route('edit',$usuario->id) }}" method="POST">
            @csrf @method('PATCH')
            <input type="text" value="{{ $usuario->name }}" name="name" placeholder="name">
            <input type="email" value="{{ $usuario->email }}" name="email" placeholder="email">
            <button type="submit">Modificar</button>
        </form>
    </body>
</html>
