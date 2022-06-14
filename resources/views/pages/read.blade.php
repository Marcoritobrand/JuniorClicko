<!DOCTYPE html>
<html>

<head>
    <link href="{{ asset('css/tabla.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <hr>
    <h1 class="text-center ">LIST USERS</h1>
    <hr>

    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">EMAIL</th>
            <th scope="col"></th>
            <th scope="col">OPTIONS</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $prod)
                <tr>
                    <td>{{ $prod->id}}</td>
                    <td>{{ $prod->name}}</td>
                    <td>{{ $prod->email}}</td>
                    <td></td>
                    <td class="d-flex ">
                        <form action="{{ route('editform',$prod->id )}}" method="GET">
                            @csrf @method('PATCH')
                            <button class="margenesderecha" type="submit">
                                EDIT
                            </button>
                        </form>
                        <br>
                        <form action="{{ route('delete',$prod->id )}}" method="POST">
                            @csrf @method('DELETE')
                            <button type="submit"  onclick="return confirm('¿ESTAS SEGURO QUE DESEAS BORRAR AL USUARIO?');">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    <div class="centrodiv">
        <div class="tabladiv">
            <table class="default">
                <thead>
                    <th>  </th>
                    <th>  </th>
                    <th>  </th>
                </thead>

                <tbody>


                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    <hr>
    <div>
        <h2 class="text-center">CONTADOR CORREOS:</h2>
        <hr>
        <table class="resultmail">
                <tr>
                    <td> @php
                        echo implode(" <br> ",$gmailtotal);
                    @endphp
                    </td>

                    <td>@php
                        echo implode(" <br> ",$valors);
                    @endphp</td>
                </tr>
        </table>

    </div>
    <hr>


</body>

</html>
