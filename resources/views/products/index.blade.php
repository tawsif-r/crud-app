<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url("CSS/index.css")}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    @if (session()->has('success'))
    <div>
        {{session('success')}}
    </div>
    
    @endif
    <div>
        <table class="table">
            <tr><th>Product Id</th>
            <th>Product name</th>
            <th>Product qty</th>
            <th>Product price</th>
            <th>Product description</th>
            <th>Action</th>
            <th>Delete</th>
        </tr>
        @foreach ($products as $product)
            <tr><td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td><a href="{{route('products.edit',['product'=>$product])}}"><button class="btn btn-primary">Edit</button></a></td>
            <td>
                <form method="post" action="{{route('products.destroy',['product' => $product])}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>
            </td>
            </tr>
        @endforeach
            
        </table>
    </div>
    <div class="p-3">
        <a href="{{route('products.create')}}"><button class="btn btn-primary">Add Product</button></a></a>
    </div>
</body>
</html>