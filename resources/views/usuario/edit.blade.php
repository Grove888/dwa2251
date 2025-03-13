<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
 EDITARE LA 

<body>
 <form action="{{route('usuarios.update',$usuario->id)}}" method="post">
  @csrf
  @method('put')
  <label for='nombre'>Nombre</label>
  <input type='text' name='nombre' id='nombre' value="{{$usuario->nombre}}"><br>
  <label for='nombre_usuario'>Nombre de usuario</label>
  <input type='text' name='nombre_usuario' id='nombre_usuario'  value="{{$usuario->nombre_usuario}}"><br>
  <label for='clave'>Clave</label>
  <input type='text' name='clave' id='clave'  value="{{$usuario->clave}}"><br>
  <input type="submit" value="ENVIAR"> </form>
</body>
</html>