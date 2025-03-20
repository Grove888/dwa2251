<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Documento</title>
</head>
<body>
 <form action="{{route('puerta.validar')}}" method="post">
   @csrf
   <label for='nombre_usuario'>Nombre de usuario</label>
   <input type='text' name='nombre_usuario' id='nombre_usuario'><br>
   <label for='clave'>Clave</label>
   <input type='text' name='clave' id='clave'><br>
   <input type="submit" value="Validar">
 </form>
 
</body>
</html>