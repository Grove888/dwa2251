<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
 <table border="1">
  <thead>
   <th>ID</th>
   <th>NOMBRE</th>
   <th>ACCIONES</th>
  </thead>
  <tbody>

 @foreach ($todos as $uno)
  {{-- <li>{{$uno}}</li> --}}
   <tr>
    <td>{{$uno->id}} <a href="{{route('usuarios.show', $uno->id)}}">VER</a>  </td>
    <td>{{$uno->nombre}}</td>
    <td>
      
      <a href="{{route('usuarios.edit',$uno->id)}}">EDITAR</a>
      - 
      <form action="{{route('usuarios.destroy',$uno->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="BORRAR">
      </form>


    </td>
   </tr>
 @endforeach
 </tbody>
</table>
<a href="{{route('usuarios.create')}}">CREAR</a>

</body>
</html>