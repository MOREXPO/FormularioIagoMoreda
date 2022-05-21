<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="{{asset("app.cs")}}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="centrado">

        <form action="/guardar" method="POST">

            <div class="form-group row">
                <label for="inputNumero" class="col-sm-2 col-form-label">
                    <h1>Introducir un número entre 1 y 10000000000</h1>
                </label>
                <div class="col-sm-10">
                    <input name="numero" type="number" class="form-control" id="inputNumero"
                        placeholder="Introducir número" min="1" max="10000000000">
                </div>

            </div>
            @csrf
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        @isset($numeroMitad)
        <h1>El número es {{$numeroMitad}}</h1>
        @endisset
    </div>


</body>

</html>