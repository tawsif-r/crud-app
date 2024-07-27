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
    <h1>create a product</h1>
    <div>
        <form method="post" action="{{route('products.store')}}">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name='name' placeholder="name">
            </div>
            <div class="mb-3">
                <label for="qty">Qty</label>
                <input type="text" name= 'qty' placeholder="Qty">
            </div>
            <div class="mb-3">
                <label for="price">Price</label>
                <input type="text" name= 'price' placeholder="Price">
            </div>
            <div class="form-control">
                <textarea name="description" placeholder="Description" id="floatingTextarea"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Save Product">
            </div>
            
        </form>
    </div>
</body>
</html>