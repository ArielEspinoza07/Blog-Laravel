@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Editar Usuario</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($user,['route' => ["user.update",$user->id],'method' => 'PUT']) !!}
			    @include('user.forms.user')
			    <button class="btn btn-success" type="submit">Actualizar
				</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection