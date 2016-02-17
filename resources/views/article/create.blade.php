@extends('layouts.admin')
@section('title','Panel de Administracion')
@section('css')
<link rel="stylesheet" href="{{asset('plugins/chosen/chosen.css')}}">
<link rel="stylesheet" href="{{asset('plugins/trumbowyg/ui/trumbowyg.min.css')}}">
@endsection
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h2 class='page-header text-center'>Crear Articulo</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'article.store','method' => 'POST','files' => true]) !!}
				@include('article.forms.article')
				<button class="btn btn-success" type="submit">Guardar
				</button>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection
@section('js')
<script src="{{asset('plugins/chosen/chosen.jquery.js')}}"></script>
<script src="{{asset('plugins/trumbowyg/trumbowyg.min.js')}}"></script>
<script src="{{asset('plugins/trumbowyg/langs/fr.min.js')}}"></script>
<script src="{{asset('js/chose.js')}}"></script>
@endsection