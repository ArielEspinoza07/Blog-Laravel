@extends('layouts.layout')

@section('title','Home')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h2 class="text-center">{{$article->title}}</h2>
				</div>
				<div class="panel-body">
					<h3 class="text-center">Categoria {{$article->category->name}}</h3>
					@foreach($article->images as $image)
						<img  src="{{ asset('images/articles/'. $image->name) }}" alt="Responsive image" class="img-responsive ">
					@endforeach
					<p class='lead'>{{$article->content}}</p>
				</div>
				<div class="panel-footer">
					<h4>Tags
					@foreach($article->tags as $tag)
						<strong>{{$tag->name}}</strong>
					@endforeach
					</h4>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection