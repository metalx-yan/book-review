@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
=======
<div class="container" style="margin-top:50px;">
    <div class="row">
    	<div class="col-md-8">
     	 	<span class="label label-default">Library</span>
			<span class="label label-info">Reading</span>
			<span class="label label-success">Book</span>
			<span class="label label-primary">Dictionary</span>
			<span class="label label-warning">Study</span><br>
			<div class="span" ;">
				<span class="label label-danger">Religion</span>
				<span class="label label-danger">Programing</span>
				<span class="label label-danger">Scientific</span>
				<span class="label label-danger">World</span>
			</div>
			<h1 class="display-3">Hello <b class="buku">Buku</b> !! </h1>
			<p class="lead">Jendela dunia berisi tumpukan ilmu yang kelak akan menjadikan Putra-Putri
			Ibu pertiwi bebas menggapai dunia.</p>
			<hr class="my-4">
			<h2>Review<b class="buku"> Buku</b><br>Sebelum beli<br><b class="buku">Buku</b></span> nya !!</h2>
		</div>
   		<div class="col-md-4">
     	 	<form>
     	 		<div class="form-group">
			    	<input type="text" class="form-control" placeholder="Nama Lengkap">
			  	</div>
			  	<div class="form-group">
			   		<input type="email" class="form-control" placeholder="Email">
			  	</div>
			  	<div class="form-group">
			    	<input type="password" class="form-control" placeholder="Password">
			  	</div>
			  	<div class="form-group">
			    	<input type="password" class="form-control" placeholder="Password Confirmation">
			  	</div>
			  	<a href="#" class="btn btn-success">Register</a>
			</form>
    	</div>
  	</div>       
>>>>>>> e6e77ec1531a3ff7f8977f94d0e8099ec72b1e11
</div>
@endsection
