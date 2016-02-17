<div class="row">
	<div class="col md 12">
		<div class="panel panel-danger">
			<div class="panel-heading">
		    	<h3 class="panel-title">Categorias</h3>
		  	</div>
		  	<div class="panel-body">
		  		<ul class="list-group">
		  			@foreach($categories as $category)
			  			<a href='' class='list-group-item'>{{$category->name}}<span class="badge ">2</span></a>
			  		@endforeach
		  		</ul>
		  	</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col md 12">
		<div class="panel panel-primary">
			<div class="panel-heading">
		    	<h3 class="panel-title">Tags</h3>
		  	</div>
		  	<div class="panel-body">
		  		@foreach($tags as $tag)
		  			<span class="badge ">{{$tag->name}}</span>
		  		@endforeach
		  	</div>
		</div>
	</div>
</div>