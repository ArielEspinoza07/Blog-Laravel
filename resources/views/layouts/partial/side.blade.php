<div class="col-md-2 sidebar ">
	<ul class="nav nav-sidebar">
		@if(Auth::user()->type == 'admin')
			<li class="dropdown">{!!link_to('/user','Usuarios')!!}</li>
		@endif
		<li class="dropdown">{!!link_to('/tag','Tags')!!}</li>
		<li class="dropdown">{!!link_to('/category','Categorias')!!}</li>
        <li class="dropdown">{!!link_to('/article','Articulos')!!}</li>
    </ul>
</div>