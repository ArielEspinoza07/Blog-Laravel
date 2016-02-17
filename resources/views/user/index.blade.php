@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Usuarios</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			{!!link_to_route('user.create','Nuevo Usuario',null,['class' => 'btn btn-success'])!!}
		</div>
	</div>
	<div class="row space-table">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Correo</th>
						<th>Tipo</th>
						<th colspan="2">Opciones</th>
					</tr>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->id}}</td>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							@if($user->type=="admin")
								<td><h4><span class="label label-danger">Administrador</span></h4></td>
							@else
							<td><h4><span class="label label-success">Miembro</span></h4></td>
							@endif
							<td>{!!link_to_route('user.edit','Editar',$parameters = $user->id,["class" => "btn btn-primary"])!!}</td>
						<td>
							{!! Form::open(['route' => ["user.destroy",$user->id],'method' => 'DELETE']) !!}
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
			{!!$users->render()!!}
		</div>
	</div>
</div>
@endsection