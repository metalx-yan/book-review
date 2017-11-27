@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><a href="{{ route('sites.root') }}" class="judul" style="text-decoration:none;"><span>Semua Pertanyaan</span></a></h1>
      </div>

      <div class="col-md-12">
        <hr>
      </div>

      <div class="col-md-8 col-md-offset-2">
          @foreach ($root as $roots)
            <div class="panel panel-default">
            <div class="panel-body">
            <h3>Title : {{ $roots->title }}</h3>
            <hr>
            <h4>Description : {{ $roots->description }}

            </h4>

          </div>
        </div>
          @endforeach
      </div>
    </div>
  </div>
</div>


@endsection
