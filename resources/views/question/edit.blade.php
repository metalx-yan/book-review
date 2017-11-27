@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">

        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif

        <h1>Ubah Pertanyaan</h1>
          <hr>
            <form class="" action="{{ route('question.update', $question->slug) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('PUT') }}

              <label for="">Title</label>
              <input type="text" name="title" value="{{ $question->title }}" class="form-control">
              <br>
              <label for="">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control">{{ $question->description }}</textarea>
              <br>
              <label for="">Title Book</label>
              <input type="text" name="titlebook" value="{{ $book->title }}" class="form-control">
              <br>
              <label for="">Writer</label>
              <input type="text" name="writer" value="{{ $book->writer }}" class="form-control">
              <br>
              <label for="">Year</label>
              <input type="text" name="year" id="year" value="{{ $book->year }}" class="form-control">
              <br>
              <label for="">Publisher</label>
              <input type="text" name="publisher" value="{{ $book->publisher }}" class="form-control">
              <br>
              <label for="">Upload Image</label>
              <input type="file" name="image_upload" id="fileToUpload">
              <br>
              <input type="submit" name="" value="Submit" class="btn btn-primary">
              <a href="{{ route('question.index') }}" class="btn btn-success">Back</a>
            </form>
          <br>
      </div>
    </div>
</div>
@endsection
