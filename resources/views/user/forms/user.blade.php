<div class="form-group">
	{!!Form::Label('name','Nombre')!!}
	{!!Form::Text('name',null,['class' => 'validate form-control','placeholder' => 'Nombre del Usuario'])!!}
</div>
<div class="form-group">
	{!!Form::Label('email','Correo')!!}
	{!!Form::Text('email',null,['class' => 'validate form-control','placeholder' => 'Correo Electronico'])!!}
</div>
<div class="form-group">
	{!!Form::Label('password','Contraseña')!!}
	{!!Form::password('password',['class' => 'form-control','placeholder' => '**********'])!!}
</div>
<div class="form-group">
	{!!Form::Label('type','Tipo')!!}
	{!!Form::Select('type',['member'=>'Miembro','admin'=>'Administrador'],null,['class' => 'validate form-control',
	'placeholder' => 'Seleccione una opcion...'])!!}
</div>