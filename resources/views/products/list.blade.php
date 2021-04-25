@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <div class="justify-content-center row  ">
        <div class=" col-md-10">
            
    <ul class="list-group">
        <li class="list-group-item ">
        <label class="mr-5 col-1 font-weight-bold">nome</label> 
        <label class="mr-5 font-weight-bold col-1"> purchase </label>
        <label class="mr-5 font-weight-bold col-1"> Sale </label>
        <label class="mr-5 font-weight-bold col-1">amount</label>
        <label class="mr-5 font-weight-bold col-1">description</label> 
        <label class="mr-5 font-weight-bold ">Edite</label>
        <label class="mr-5 font-weight-bold ">Delete</label> 
       
        </li>

        @foreach ($products as $product)
          <form class="flex-direction" action="/products/{{$product->id}}" method="POST">   
           @csrf
           @method('DELETE') 
        <li class="list-group-item">
            <label class="mr-5 col-1">{{$product->name}}</label> 
            <label class="mr-5 col-1">{{ $product->purchase }}</label>
            <label class="mr-5 col-1"> {{$product->sale}} </label>
            <label class="mr-5 col-1">{{$product->amount}}</label>
            <label class="mr-5 col-1">{{$product->description}}</label> 
            <a href="/products/edite/{{$product->id}}" type="button" class="btn btn-primary">Edite</a>
            
 
                <button type="submit" class="btn btn-danger ">Deletar</button>
        </form>
        </li>
 
         @endforeach

      </ul>
            </div>
        


     </div>
</body>
</html>
@endsection