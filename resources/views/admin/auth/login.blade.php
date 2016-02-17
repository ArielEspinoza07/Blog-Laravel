@extends('layouts.layout')
@section('title','Login')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
    				<h3 class="panel-title">Login</h3>
    			</div>
    			<div class="panel-body">
    				{!!Form::open(['route' => 'admin.auth.login','method' => 'POST'])!!}
						<div class="form-group">
							{!!Form::email('email',null,['class' => 'form-control','placeholder' => 'Email'])!!}
						</div>
						<div class="form-group">
							{!!Form::password('password',['class' => 'form-control','placeholder' => '**********'])!!}
						</div>
						<div class="form-group">
							{!!Form::submit('Log in',['class' => 'btn btn-success'])!!}
						</div>
					{!!Form::close()!!}
    			</div>
    		</div>	
		</div>
	</div>
</div>
@endsection