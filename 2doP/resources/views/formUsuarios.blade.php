<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>

    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container  col-md-4">

    <form>

        <div class="mb-3">
            <label  class="form-label">Correo: </label>
            <input type="text" class="form-control" id="correo">
        </div>

        <div class="mb-3">
            <label class="form-label">Contraseña: </label>
            <input type="text"class="form-control" id="contraseña">
        </div>                

        <div class="mb-3">
            <label  class="form-label">Edad: </label>
            <input type="text" class="form-control" id="edad">
        </div>



        <button type="" class="btn btn-danger "> Guardar Usuario</button>


</div>


@yield('contenido')
</body>
</html>