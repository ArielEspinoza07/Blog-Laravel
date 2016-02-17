<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      {!!link_to("/","Blog",['class' => 'navbar-brand'])!!}
	    </div>

	    <ul class="nav navbar-nav navbar-right">
			<li>{!!link_to_route("admin.auth.login","Log In")!!}</li>
		</ul>
  </div><!-- /.container-fluid -->
</nav>