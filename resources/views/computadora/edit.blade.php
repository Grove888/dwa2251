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
 <form action="{{route('computadoras.update',$computadora->id)}}" method="post">
  @csrf
  @method('put')
  <label for='marca'>marca</label>
  <input type='text' name='marca' id='marca' value="{{$computadora->marca}}" ><br>
  <input type="submit" value="ENVIAR">

 </form>
</body>
</html>