@extends('layout/layout-master')

@section('body')
	<div class="col-md-4 col-md-offset-4">
	<div id="login-panel" class="panel panel-default login-panel">
		<div class="panel-heading">
			<div class="panel-title"><h4>Authentification <small> Please Login</small></h4></div>	
		</div>
		<div class="panel-body">
			{{Form::open(array('url'=>'auth/login', 'method'=>'post'))}}
			<div class="form-group">
				{{Form::text('username','',array('class'=>'form-control','placeholder'=>'Username'))}}
			</div>
			<div class="form-group">
				{{Form::password('password',array('class'=>'form-control', 'placeholder'=>'Password'))}}
			</div>
			<div class="form-group">
				{{Form::submit("Sign In", array('class'=>'btn btn-primary form-control'))}}
			</div>
			{{Form::close()}}
		</div>
	</div>
	</div>
@stop