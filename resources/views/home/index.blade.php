@extends('layouts.layout')

@section('title','Home')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						@foreach($articles as $article)
							<div class="col-md-6">
								<div class="panel panel-default">
									<div class="panel-body">
										<a href="/home/{{$article->id}}" class="thumbnail">
											@foreach($article->images as $image)
												<img  src="{{ asset('images/articles/'. $image->name) }}"
												style="height: 200px" alt="" class="img-responsive ">
											@endforeach
										</a>
										<h3 class="text-center">{{$article->title}}</h3>
									</div>
									<div class="panel-footer">
										<div class="row">
											<div class="col-md-6"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> {{$article->category->name}}</div>
											<div class="col-md-6 text-right"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{$article->created_at->diffForHumans()}}</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			@include('layouts.partial.aside')
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-4">
			{!!$articles->render()!!}
		</div>
	</div>
</div>

@endsection