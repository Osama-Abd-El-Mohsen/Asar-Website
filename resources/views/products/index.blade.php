<x-app-layout>
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
        <form class="text-center mt-5" method="GET" action="">
            <a href={{route("products.create")}} class="btn btn-success" name="create-product" type="submit">Add Product</a>
        </form>
        <div class="rounded text-center  p-5 ">
                <table class=" text-center table table-striped table-bordered border-success border border-4 ">
                <thead class="table-success">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sale</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->id}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->sale}}</td>
                            <td>
                                <form class="btn-group" role="group" aria-label="Basic mixed styles example" method="POST" action='')>
                                    @csrf
                                    @method("DELETE")
                                    <a href={{route('products.show',$product->id)}} class="btn btn-dark" >View</a>
                                    <a  class="btn btn-primary" >Edit</a>
                                    <button   type="submit" class="btn btn-danger" >Delete</button>
                                </form>
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
    </body>

    </html>
</x-app-layout>
