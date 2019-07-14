@extends('layouts.plantilla-tabla-admin')

@section('title','Prestamo')

@section('content')

@section('parte1')
<div class="row"><h4>Nuevo Prestamo</h4></div>
	<div class="row">
		<div class="col-md-8">
			<label>Buscar libro por Titulo o ISBN</label>
			<div class="row">
			<div class="col-md-8">
				<input type="search" name="q" class="  form-control">
			</div>
			<div class="col-md-4">
				<input type="submit" class="btn btn-primary">
			</div>
			<div class="col-md-4"></div></div>
			
			
		</div>
	</div>
@endsection
@section('parte2')
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
              <th scope="col">ISBN</th>
              <th scope="col">Titulo</th>
              <th scope="col">Ejemplares</th>
            </tr>
          </thead>
          <tbody>
          
                   
          </tbody>
    </table>
  </div>
@endsection
@endsection