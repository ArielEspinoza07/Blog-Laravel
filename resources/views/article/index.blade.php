@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Articulos</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			{!!link_to_route('article.create','Nuevo Articulo',null,['class' => 'btn btn-success'])!!}
		</div>
	</div>
	<div class="row space-table">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Titulo</th>
						<th>Categoria</th>
						<th>Contenido</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($articles as $article)
						<tr>
							<td>{{$article->id}}</td>
							<td>{{$article->title}}</td>
							<td>{{$article->category->name}}</td>
							<td>{{$article->content}}</td>
							<td>{!!link_to_route('article.edit','Editar',$parameters = $article->id,["class" => "btn btn-primary"])!!}</td>
						<td>
							{!! Form::open(['route' => ["article.destroy",$article->id],'method' => 'DELETE']) !!}
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
			{!!$articles->render()!!}
		</div>
	</div>
</div>
@endsection