<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product</title>

</head>
<body class="bg-dark">
    <div class="container-fluid">
        <header class="d-flex flex-wrap justify-content-center py-4 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <img src="images/logo2.svg" width="40px" height="40px"/>
            <span class="fs-3 fw-bold text-light mx-3">Product Management</span>
          </a>
    
          <ul class="nav nav-pills">
            <li class="btn btn-primary"><div>
                <a href="{{route("product.create")}}" class="text-light">Create New Product</a>
            </div></li>
       
          </ul>
        </header>
      </div>

      <div class="container">
        <div class="row">
            <form action="{{ route('product.index') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </div>
            </form>
                  </div>
        </div>
   

    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div class="container-fluid">
        <table class="table table-dark table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @if($products->isEmpty())
            <tr>
                <td colspan="7" class="text-center">No products found</td>
            </tr>
        @else
            @foreach($products as $product)
           {{-- @foreach($products as $product) --}}

                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <button class="btn btn-warning ">
                            <a href="{{route('product.edit', ['product' => $product])}}" class="text-light text-decoration-none">Edit</a>
                        </button>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
            @endif
        </table>

        <!-- Pgaination -->
        <div class="d-flex justify-content-center my-5">
            {{ $products->appends(['search' => request('search')])->links() }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>