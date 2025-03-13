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
   <th>MARCA</th>
   <th>ACCIONES</th>
  </thead>
  <tbody>

 @foreach ($todas as $uno)
  {{-- <li>{{$uno}}</li> --}}
   <tr>
    <td>{{$uno->id}} <a href="{{route('computadoras.show', $uno->id)}}">VER</a>  </td>
    <td>{{$uno->marca}}</td>
    <td>
      
      <a href="{{route('computadoras.edit',$uno->id)}}">EDITAR</a>
      - 
      <form action="{{route('computadoras.destroy',$uno->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="BORRAR">
      </form>


    </td>
   </tr>
 @endforeach
 </tbody>
</table>
<a href="{{route('computadoras.create')}}">CREAR</a>

</body>
</html>