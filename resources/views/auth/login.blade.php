@extends('layouts.app')

@section('content')
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
</div>
@endsection
