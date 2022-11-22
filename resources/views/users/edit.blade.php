<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <title>Editar usuario</title>
</head>
<body>


<form action="/users/update" method="POST">
@csrf
<input type="hidden" name="user_id" value="{{$user->id}}">
  <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="Nombre" value="{{$user->name}}">
  </div>
  <div class="mb-3">
        <label for="paterno" class="form-label">Apellido paterno</label>
        <input type="text" class="form-control" name="paterno" id="paterno" aria-describedby="Paterno" value="{{$user->paterno}}">
  </div>
  <div class="mb-3">
        <label for="materno" class="form-label">Apellido materno</label>
        <input type="text" class="form-control" name="materno" id="materno" aria-describedby="Materno" value="{{$user->materno}}">
  </div>
  <div class="mb-3">
        <label for="edad" class="form-label">Edad</label>
        <input type="number" class="form-control" name="edad" id="edad" aria-describedby="Edad" value="{{$user->edad}}">
  </div>
  <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" aria-describedby="Fecha" value="{{$user->fecha_nacimiento}}">
  </div>

  <div class="mb-3">
        <label for="genero" class="form-label">Genero</label>
        <input type="text" class="form-control" name="genero" id="genero" aria-describedby="Genero" value="{{$user->genero}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Correo</label>
    <input type="email" class="form-control"  name="email" id="email" aria-describedby="emailHelp" value="{{$user->email}}">
  </div>
  
  <input type="submit" class="btn btn-primary" value="Actualizar">
</form>
    
</body>
</html>