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

        <h1>Buat Pertanyaan</h1>
          <hr>
            <form class="" action="{{ route('question.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <label for="">Title Question</label>
              <input type="text" name="title" value="" class="form-control">
              <br>
              <label for="">Description</label>
              <textarea name="description" rows="8" cols="80" class="form-control"></textarea>
              <br>
              <label for="">Title Book</label>
              <input type="text" name="titlebook" value="" class="form-control">
              <br>
              <label for="">Writer</label>
              <input type="text" name="writer" value="" class="form-control">
              <br>
              <label for="">Year</label>
              <input type="text" name="year" id="year" value="" class="form-control">
              <br>
              <label for="">Publisher</label>
              <input type="text" name="publisher" value="" class="form-control">
              <br>
              <label for="">Cover</label>
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

{{-- @section('script')
  <script type="text/javascript">
  $( document ).ready(function() {
    $("#year").datetimepicker({
      timepicker: false,
      format:''
    });
  });

  </script>
@endsection --}}
