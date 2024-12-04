<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       body{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
     

        }

        .top-container{
            width: 500px;
            background-color: rgba(255, 255, 255, 0.1); 
          
            
        }
    </style>
</head>
<body class="bg-dark bg-gradient text-light">
    
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>

    <div class="top-container border border-light rounded-4 text-center py-5 px-5">
        <h1 class="mb-5 text-light">Create a product</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        @method('post')
        <div>
            <label class="me-5">Name:</label>
            <input type="text" name="name" placeholder="name" class="mb-3"/>
        </div>
        <div>
            <label class="me-4">Quantity:</label>
            <input type="text" name="qty" placeholder="qty" class="ms-1 mb-3"/>
        </div>
        <div>
            <label class="me-4">Price ($): </label>
            <input type="text" name="price" placeholder="price" class="ms-2 mb-3"/>
        </div>
        <div>
            <label>Description:</label>
            <input type="text" name="description" placeholder="description" class="ms-2 mb-3"/>
        </div>
        <div class="mx-5 mt-4">
            <input class="btn btn-primary" type="submit" value="Save a New Product"/>
        </div>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>