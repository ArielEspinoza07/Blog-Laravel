@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Editar Categoria</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($category,['route' => ["category.update",$category->id],'method' => 'PUT']) !!}
			    @include('category.forms.category')
			    <button class="btn btn-success" type="submit">Actualizar
				</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection