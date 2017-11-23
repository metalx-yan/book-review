@extends('layouts.app')

@section('content')

<div class="container" style="margin-top:50px;">
    <div class="row">
    	<div class="col-md-7">
     	 	<span class="label label-default">Library</span>
			<span class="label label-info">Reading</span>
			<span class="label label-success">Book</span>
			<span class="label label-primary">Dictionary</span>
			<span class="label label-warning">Study</span><br>
			<div class="span">
				<span class="label label-danger">Religion</span>
				<span class="label label-danger">Programing</span>
				<span class="label label-danger">Scientific</span>
				<span class="label label-danger">World</span>
			</div>
			<h1 class="display-3">Hello <b class="buku">Buku</b> !! </h1>
			<p class="lead" >Jendela dunia berisi tumpukan ilmu yang kelak akan menjadikan Putra-Putri
			Ibu pertiwi bebas menggapai dunia.</p>
			<hr class="my-4">
			<h2>Review<b class="buku"> Buku</b><br>Sebelum beli<br><b class="buku">Buku</b></span> nya !!</h2>
		</div>
    <div class="col-md-1"></div>
   		<div class="col-md-4">
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama">

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required autofocus placeholder="Full Name">

                    @if ($errors->has('full_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('full_name') }}</strong>
                        </span>
                    @endif
            </div>


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
            </div>


            <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        Register
                    </button>
            </div>
        </form>
    	</div>
  	</div>
@endsection
