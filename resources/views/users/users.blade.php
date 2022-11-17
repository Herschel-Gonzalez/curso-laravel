<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Usuarios</title>
</head>
<body>

    <h1>Usuarios</h1><br>
    <a href="/users/create"><button type="button" class="btn btn-dark">Agregar nuevo usuario</button></a>
    <br><br>
    @foreach ($users as $user)
    
<table class="table">
  <thead class="table-dark">
    <tr>
        <td>Nombre</td>
        <td>Paterno</td>
        <td>Materno</td>
        <td>Edad</td>
        <td>Fecha de nacimiento</td>
        <td>Genero</td>
        <td>Usuario</td>
        <td>Contraseña</td>
        <td>Fecha de creación</td>
        <td>Fecha de actualización</td>
    </tr>    
  </thead>
  <tbody>

  <tr>
    <td>{{$user['nombre']}}</td>
    <td>{{$user['paterno']}}</td>
    <td>{{$user['materno']}}</td>
    <td>{{$user['edad']}}</td>
    <td>{{$user['fecha_nacimiento']}}</td>
    <td>{{$user['genero']}}</td>
    <td>{{$user['usuario']}}</td>
    <td>{{$user['password']}}</td>
    <td>{{$user['created_at']}}</td>
    <td>{{$user['updated_at']}}</td>
  </tr>
    
  </tbody>
</table>


    @endforeach
    
</body>
</html>