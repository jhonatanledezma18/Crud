<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Productos</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td><a href="{{route('product.show',$product->id)}}">Mostrar</a></td>
                <td><a href="{{route('product.edit',$product->id)}}">Editar</a></td>
                <td>
                    <form action="{{route('product.destroy',$product->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>