@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Crear Tag</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'tag.store','method' => 'POST']) !!}
				@include('tag.forms.tag')
				<button class="btn btn-success" type="submit">Guardar
				</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection