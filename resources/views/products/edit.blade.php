@extends('layouts.navigation')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
@section('main-body')

        <form class="text-center mt-5 p-5 " method="POST" action='{{route('products.update',$product->id)}}' enctype="multipart/form-data">
            @csrf
            @method("PUT")

            @if ($errors->any())
                <div class="text-left alert alert-danger" style="text-align: left">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Post</h5>
                </div>
                <div class="modal-body">
                    <p>Create New Post here.</p>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">title</span>
                    <input  type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->name}}" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                    <input  type="text" name="description" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->description}}" >
                </div>

                <div class="input-group mb-3">
                    <label for="formFile" name="img"  value="{{$product->img}}" class="input-group-text">Image</label>
                    <input class="form-control" type="file" id="formFile"  name="img" value="{{$product->img}}" >
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
                    <input  type="text" name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->price}}">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Sale</span>
                    <input  type="text" name="sale" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->sale}}">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">isPopular</span>
                    <input  type="text" name="isPopular" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$product->isPopular}}">
                </div>



                </div>
                <div class="w-5 m-5">
                    <button type="submit" name="create_post_btn" class="btn btn-primary">Update</button>
                    <a href={{ route('products.index') }} class="btn btn-secondary">Close</a>
                </div>
            </div>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
@endsection()

