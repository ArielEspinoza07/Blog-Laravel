@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Bienvenido {{Auth::user()->name}}</h2>
		</div>
	</div>
</div>
@endsection