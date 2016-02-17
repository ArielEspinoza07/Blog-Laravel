@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Editar Tag</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($tag,['route' => ["tag.update",$tag->id],'method' => 'PUT','files' => true]) !!}
			    @include('tag.forms.tag')
			    <button class="btn btn-success" type="submit">Actualizar
				</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection