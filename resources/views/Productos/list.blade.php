@extends('plantilla')
@section('contenido')


<div class="row">
    <div class="col-12">
    <div class="card-body">
    <table id="example1" class="table table-green table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Cantidad</th>
        <th scope="col">Fecha</th>
        <th scope="col">Acciones</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach ($product as $produc)
        <tr>
            <td>{{ $produc->id }}</td>
            <td>{{ $produc->nombre }}</td>
            <td>Q. {{ $produc->precio }}</td>
            <td>{{ $produc->descripcion }}</td>
            <td>{{ $produc->Cantidad }}</td>
            <td>{{ $produc->updated_at }}</td>
            <td>
                
              <a href ="{{route('productos.edit', $produc->id) }}" class="btn btn-warning" title="editar"><i class="fas fa-user-edit"></i></a>
              <a href ="{{route('productos.delete', $produc) }}" class="btn btn-danger" title="eliminar"><i class="fas fa-trash"></i></a>  

            </td>
           </tr>
           @endforeach
        </tbody>
    </table>
</div> 
</div>
  </div>
@endsection