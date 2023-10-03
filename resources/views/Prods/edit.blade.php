<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit A Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <form method="post" action="{{route('prod.update',['product'=> $product])}}">
        @csrf
        @method('put')

        <div>
            <label for="name"> Product Name</label>
            <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <br>
        <div>
            <label for="desc"> Description</label>
            <input type="text" name="desc" placeholder="Description" value="{{$product->desc}}">
        </div>
        <br>
        <div>
            <label for="price"> Price</label>
            <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <br>
        <div>
            <label for="date"> Last Updated Date</label>
            <input type="date" name="date" placeholder="Date" value="{{$product->date}}">
        </div>
        <br>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
</body>
</html>