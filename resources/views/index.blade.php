@extends('layout/plantilla')

@section('titulos','Ferreteria Angeles')

@section('contenido')
<div class="card" style="width: 18rem;">
    <img src='{{asset('')}}' class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <button>
    <a href="{{ route('producto.create')}}" class="btn btn-primary">
        <i class="fa-solid fa-user-plus"></i>Agregar
    </a>
  </button>
@endsection