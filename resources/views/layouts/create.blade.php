@extends('main')

@section('title', 'Buat Buku Baru')

@section('stylesheets')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <div class="row">
    <div class="col-md-10">
      <h4><p><b>Buku Baru</b></p></h4>
    </div>


    <div class="col-md-10 offset-md-2">
      <form class="form" action="{{ route('books.store') }}" method="post">
        {{ csrf_field() }}
        {{-- <a href="{{ route('books.index') }}" class="btn btn-success">Buat aBuku</a> --}}
        <input type="submit" class="btn btn-success col-md-2 offset-md-8" name="" value="Buat Buku">
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-md-6">
            <input type="text" name="judul" class="form-control" id="staticEmail" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Review</label>
          <div class="col-md-6">
            <textarea name="review" rows="8" cols="80" class="form-control"></textarea>
            {{-- <input type="textarea" class="form-control" id="inputPassword" placeholder=""> --}}
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-12">
      <hr>
    </div>
  </div>
@endsection
