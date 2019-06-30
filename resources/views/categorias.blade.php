
@extends('layouts.plantilla-tabla-admin')

@section('title','Categoria')

@section('content')


@section('parte1')
    <div class="row">
        <div class="col-md-10">
            <h4>Categoria</h4>
        </div>
        <div class="col-md-2">
                <a href="categoria_registrar" class="btn btn-primary btn-sm" role="button" >Nueva Categoria</a>
        </div>

    </div>
@endsection


@section('parte2')
@if (session('mensaje'))
                  <div class="alert alert-success" role="alert">
                  {{ session('mensaje') }}
                  </div>
                @endif
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">Botones</th>
              <th scope="col">Nombre Categoria</th>
              
            </tr>
          </thead>
          <tbody>
            @foreach ($cate as $item)
              <tr>
              <th scope="row">
                <a href="{{ route('categoria.edit', $item) }}" class="btn btn-primary btn-sm" role="button">Editar</a>

                <form action="{{ route('categoria.eliminar', $item) }}" method="post" class="d-inline">
                  @method('DELETE')
                  @csrf
                 
                  <button class="btn btn-primary btn-sm" type="submit">Eliminar</button>
                </form>
                
              </th>
              <td>{{ $item-> nombre_categoria }}</td>
            </tr>
            @endforeach
            
            
          </tbody>
    </table>

  </div>
@endsection

@endsection




