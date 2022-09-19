@extends('plantilla')
@section('contenido')

<form action=" {{ route('productos.update', $product ) }} " method="post">
    @csrf
    @method('PUT')
<div class="col-md-11">
    <form>
    <div class="card-body">
    <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value=" {{$product->nombre}} " >
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Precio</label>
    <input type="num" class="form-control" name="precio" id="precio" value=" {{$product->precio}} " >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Descripcion</label>
        <input type="text" class="form-control" name="descripcion" id="descripcion" value=" {{$product->descripcion}} " >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Cantidad</label>
            <input type="num" class="form-control" name="cantidad" id="cantidad" value=" {{$product->Cantidad}} " >
            </div>

            <button type="Submit" class="btn btn-dark">Actualizar </button>

</div>
</div>
@endsection