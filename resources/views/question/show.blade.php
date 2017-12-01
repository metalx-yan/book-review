@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-md-10">
      </div>

      <div class="col-md-2">
        <a href="{{ route('question.index') }}" class="btn btn-primary" style="margin-top: 24px;">Kembali</a>
      </div>

      <div class="col-md-12">
        <hr>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <!-- Default panel contents -->
          <div class="panel-heading">Title : {{ $question->title }}</div>
          <div class="panel-body">
            <p>Description : {{ $question->description }}</p>
          </div>

          <!-- List group -->
          <ul class="list-group">
            <li class="list-group-item">Title : {{ $book->title }}</li>
            <li class="list-group-item">Writer : {{ $book->writer }}</li>
            <li class="list-group-item">Year : {{ $book->year }}</li>
            <li class="list-group-item">Publisher : {{ $book->publisher }}</li>
            <li class="list-group-item">Full Image : <a href="{{ url('/image').'/'.$book->cover }}" target="_blank">Image</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
