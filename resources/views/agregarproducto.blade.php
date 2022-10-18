@extends('layout.plantilla') 
@section("titulos","Crear")
@section('contenido')
<div class="card text-center">
    <div class="card-header">
      Nuevo producto
    </div>
    <div class="card-body">
        <p class="card-text">
            <form action="{{route('producto.store')}}" method="POST">
              @csrf
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
              <br>
              <div class="input-group mb-3">
                <input type="file" class="form-control" id="inputGroupFile02">
                <label class="input-group-text" for="inputGroupFile02"></label>
              </div>
              <br>
              <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
                <br>
                <label for="">Nombre</label>
                <input type="text" name="apPat" class="form-control" required>
                <br>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                <br>
                <label for="">Cantidad</label>
                <input type="number" name="nombre" class="form-control" required>
                <br>
                <label for="">Precio</label>
                <input type="number" name="fecNac" class="form-control" required>
                <br>
                <button class="btn btn-primary">AGREGAR</button>
                <br><br>
                <a href="{{route('producto.index')}}" class="btn btn-danger">volver</a>
            </form>
        </p>
    </div>
  </div>
@endsection