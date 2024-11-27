<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="name">
        <br>
        <br>
        <label>Description:</label>
        <input type="text" name="description">
        <br>
        <br>
        <label>Precio:</label>
        <input type="number" name="price">
        <br>
        <br>
        <label>User_id</label>
        <input type="number" name="user_id">
        <br>
        <button type="submit">Crear Producto</button>
    </form>
</body>
</html>
