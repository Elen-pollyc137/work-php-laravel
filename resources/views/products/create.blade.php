@extends('layouts.app')

@section('content')

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card p-5">
        <h2 class="card-header">{{ __('Register Product') }}</h2> 

        <form action="/products/create" method="POST" >
        @csrf
        @method('POST')
          <div class="form-group">
            <label for="formGroupExampleInput">Nome</label>
            <input type="text" name="name" class="form-control " id="formGroupExampleInput" placeholder="Nome do Produto">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput2">Valor de Compra</label>
            <input type="text" name="purchase" class="form-control" id="formGroupExampleInput2" placeholder="Valor de Compra Produto">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Preco de Venda</label>
            <input type="text" name="sale" class="form-control" id="formGroupExampleInput" placeholder="Valor de Venda do Produto">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Quantidade</label>
            <input type="text" name="amount" class="form-control" id="formGroupExampleInput2" placeholder="Quantidade">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Descrição</label>
            <input type="text" name="description" class="form-control" id="formGroupExampleInput" placeholder="Descrição">
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>

      </div>
    </div>
  </div>
</div>
</html>
@endsection