@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-md-10">
        <h1><a href="{{ route('home') }}" class="judul" style="text-decoration:none;"><span>Semua Pertanyaan</span></a></h1>
      </div>

      <div class="col-md-2">
        <a href="{{ route('question.create') }}" class="btn btn-primary" style="margin-top: 24px;">Buat Pertanyaan</a>
      </div>

      <div class="col-md-12">
        <hr>
      </div>

      <div class="col-md-8 col-md-offset-2">

      <div class="panel panel-default">
      <!-- Default panel contents -->

        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Description</th>
              <th>Opsi</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($index as $indexis)
            <tr>
              <td>{{ $indexis->id }}</td>
              <td>{{ $indexis->title }}</td>
              <td>{{ $indexis->description }}</td>
              <td>
                  <div class="col-md-2" style="margin-right: 6px;">
                    <a href="{{ route('question.show', $indexis->slug) }}" class="btn btn-primary">View</a>
                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('question.edit', $indexis->slug) }}" class="btn btn-warning">Edit</a>
                  </div>
                  <div class="col-md-1">
                    <form class="" action="{{ route('question.destroy', $indexis->slug) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                    </form>
                  </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>

    </div>
  </div>
</div>


@endsection
