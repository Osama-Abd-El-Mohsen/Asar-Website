<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="card p-5 m-5">
        <a href="{{route('products.index')}}" class="btn btn-success" aria-current="page" href="#">All Products</a>
        <h5 class="card-header">Product Info</h5>
        <div class="card-body">
            <h5 class="card-title">Title : {{$product->name}}</h5>
            <p class="card-title">ID : {{$product->id}}</p>
            <p class="card-text">Description : {{$product->description}} </p>
            <h5 class="card-title">Created At : {{$product->created_at}}</h5>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
