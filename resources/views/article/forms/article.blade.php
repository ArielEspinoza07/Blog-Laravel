<div class="form-group">
	{!!Form::Label('title','Titulo:')!!}
	{!!Form::text('title',null,['class' => 'validate form-control','placeholder' => 'Titulo del Articulo'])!!}
</div>
<div class="form-group">
	{!!Form::Label('category_id','Categoria:')!!}
	{!!Form::select('category_id',$categories,null,['class' => 'form-control select-category','placeholder' => 'Seleccione una opcion...'])!!}
</div>
<div class="form-group">
	{!!Form::Label('content','Contenido:')!!}
	{!!Form::textarea('content',null,['class' => 'validate form-control textarea-content'])!!}
</div>
<div class="form-group">
	{!!Form::Label('tags','Tags:')!!}
	@if(isset($my_tags))
		{!!Form::select('tags[]',$tags,$my_tags,['class' => 'form-control select-tag','multiple'])!!}
	@else
		{!!Form::select('tags[]',$tags,null,['class' => 'form-control select-tag','multiple'])!!}
	@endif
</div>
<div class="form-group">
	{!!Form::Label('image','Imagen:')!!}
	{!!Form::file('image',null, ['class' => 'form-control'])!!}
</div>
