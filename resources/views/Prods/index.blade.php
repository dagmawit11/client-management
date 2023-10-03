<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{session('success')}}
        </div>


        @endif
    </div>

    <div>
        <a href="{{route('prod.create')}}">Create a new product</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Last Updated Date</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach($products as $product )
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->desc}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->date}}</td>
                    <td>
                        <a href="{{route('prod.edit',['product'=>$product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('prod.destroy', ['product'=>$product])}}">
                            @csrf
                            @method('delete')
                    
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

        
    </div>
</body>
</html>