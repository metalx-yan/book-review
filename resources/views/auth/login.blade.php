@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
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
			    <input type="email" class="form-control" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <input type="password" class="form-control" placeholder="Password">
			  </div>
			  <a href="#" class="btn btn-success">Login</a>
			</form>
    	</div>
  	</div>       
>>>>>>> e6e77ec1531a3ff7f8977f94d0e8099ec72b1e11
</div>
@endsection
