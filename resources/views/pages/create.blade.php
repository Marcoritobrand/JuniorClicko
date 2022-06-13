<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <h1>CREATE USER</h1>

    <form action="{{ route('save') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Agregar</button>
    </form>

    <a href="{{ route('user.read') }}">BACK</a>
</body>

</html>
