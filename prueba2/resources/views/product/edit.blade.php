<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Contenido</title>
</head>
<body>
    <form action="{{route('product.update', $product )}}" method="POST">
        @csrf
        @method('put')
        <label>Nombre:</label>
        <input type="text" name="name" value="{{old('name',$product->description)}}">
        <br>
        <br>
        <label>Descripcion:</label>
        <input type="text" name="description" value="{{old('description',$product->description)}}">
        <br>
        <br>
        <label>Precio:</label>
        <input type="text" name="price" value="{{old('price',$product->price)}}">
        <br>
        <br>
        <button type="submit">Actualizar producto</button>

    </form>
    
</body>
</html>