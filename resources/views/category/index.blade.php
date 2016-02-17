@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Categorias</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			{!!link_to_route('category.create','Nueva Categoria',null,['class' => 'btn btn-success'])!!}
		</div>
	</div>
	<div class="row space-table">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{$category->id}}</td>
							<td>{{$category->name}}</td>
							<td>{!!link_to_route('category.edit','Editar',$parameters = $category->id,["class" => "btn btn-primary"])!!}</td>
						<td>
							{!! Form::open(['route' => ["category.destroy",$category->id],'method' => 'DELETE']) !!}
								<button class="btn btn-danger" type="submit">Eliminar
							    	
							  	</button>
							{!! Form::close() !!}
						</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			{!!$categories->render()!!}
		</div>
	</div>
</div>
@endsection