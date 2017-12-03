@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><a href="{{ route('sites.root') }}" class="judul" style="text-decoration:none;">Posts</a></h1>
      </div>

      <div class="col-md-12">
        <hr>
      </div>

      <div class="col-md-10 col-md-offset-1">
          @foreach ($root as $roots)
            <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-md-6" >
                <h3><a href="{{ route('q', $roots->slug) }}" style="text-decoration:none;">{{ $roots->title }}</a></h3>
                <small>{{ $roots->user->name." <".$roots->user->email.">"  }}</small>
                <div class="thumbnail">
                  <img src="{{asset('image/'.$roots->books->cover)}}" alt="{{ $roots->books->title }}">
              </div>
            </div>

              <div class="col-md-6">
                <h3>{{ $roots->description }}</h3>
                {{-- <input type="text" name="" class="form-control" value="" placeholder="Komentar"> --}}
              </div>

          </div>
        </div>
          @endforeach
      </div>
    </div>
  </div>
</div>


@endsection
