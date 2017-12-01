@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 25px;">

        <div class="col-md-4">
          <div class="thumbnail">
            <img src="{{asset('image/'.$question->books->cover)}}" alt="{{ $question->books->title }}">
          </div>
          <center><h3>{{ $question->books->title }}</h3></center>
        </div>

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
              <form class="" action="index.html" method="post">
                  <div class="col-md-8">
                    <h3><a href="{{ route('q', $question->slug) }}" style="text-decoration:none;">{{ $question->title }}</a></h3>
                    <textarea name="qanswer" rows="4" cols="90" placeholder="Answer" class="form-control">
                    </textarea>
                    <br>
                      <input type="submit" name="answer" value="Jawab" class="btn btn-success" style="margin-left: 80%;">
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection
