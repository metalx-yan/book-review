@extends('layouts.app')

@section('style')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1" style="margin-top: 25px;">

          @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

        <div class="col-md-4">
          <div class="thumbnail">
            <img src="{{asset('image/'.$question->books->cover)}}" alt="{{ $question->books->title }}">
          </div>
          <center><h3>{{ $question->books->title }}</h3></center>
        </div>

        <div class="col-md-8">
          <div class="panel panel-default">
            <div class="panel-body">
                  <div class="col-md-12">
                    <h3><a href="{{ route('q', $question->slug) }}" style="text-decoration:none;">{{ $question->title }}</a></h3>
                    <small>{{ $question->user->full_name." <".$question->user->email.">"  }}</small> <hr>
                    @foreach ($question->answers as $b)
                      <div class="col-md-10">
                        {{ $b->message }}
                        @if ($b->super == true)
                          <span class="glyphicon glyphicon-ok text-primary" style="font-size: 20px;"></span>
                        @endif
                       </div>

                       <div class="col-md-12">
                         <form class="" action="{{ $b->rates()->where('type', true)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? route('attach', $b->id) : route('rate') }}" method="post">
                           {{ csrf_field() }}
                           {{ $b->rates()->where('type', true)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? method_field('DELETE') : null }}
                           <button class="btn btn-link pull-right" name="button" type="submit">
                             <span class="glyphicon glyphicon-thumbs-up {{ $b->rates()->where('type', true)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? "text-danger" : null }}" aria-hidden="true"></span>
                             {{ $b->rates()->where('type', true)->get()->count() }}
                           </button>
                           <input type="hidden" name="answer_id" value="{{ $b->id }}">
                         </form>

                         <form class="" action="{{ $b->rates()->where('type', false)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? route('detach', $b->id) : route('disrate') }}" method="post">
                           {{ csrf_field() }}
                           {{ $b->rates()->where('type', false)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? method_field('DELETE') : null }}
                           <button class="btn btn-link pull-right" name="button" type="submit">
                             <span class="glyphicon glyphicon-thumbs-down {{ $b->rates()->where('type', false)->where('user_id', Auth::user()->id)->where('answer_id', $b->id)->count() > 0 ? "text-danger": null }}" aria-hidden="true"></span>
                               {{ $b->rates()->where('type',  false)->get()->count()}}
                           </button>
                           <input type="hidden" name="answer_id" value="{{ $b->id }}">
                         </form>

                         @if ((Auth::user()->id == $question->id) && !$b->super)
                           <form class="" action="{{ route('jawaban_terbaik', $b->id) }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                             <button type="submit" class="btn btn-primary btn-xs" name="button">Jawaban Terbaik</button>
                           </form>
                         @elseif ((Auth::user()->id == $question->id) && $b->super)
                           <form class="" action="{{ route('hapus', $b->id) }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('PUT') }}
                              <button type="submit" name="button" class="btn btn-danger btn-xs">Hapus Jawaban Terbaik</button>
                            </form>
                         @endif


                         <div class="col-md-10">
                           <hr>
                         </div>
                         @if ($b->user->id == Auth::user()->id)
                           <form class="" action="{{ route('answer.destroy', $b->id) }}" method="post">
                             {{ csrf_field() }}
                             {{ method_field('DELETE') }}
                             <button class="btn btn-link pull-right" name="button" type="submit">
                               <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                             </button>
                           </form>
                         @endif
                       </div>
                    @endforeach

                <form class="" action="{{ route('answer.store') }}" method="post">
                    {{ csrf_field() }}
                    <textarea name="message" rows="4" cols="90" placeholder="Answer" class="form-control">
                    </textarea>
                    <br>
                      <input type="hidden" name="question_id" value="{{ $question->id }}">
                      <input type="submit" name="answer" value="Jawab" class="btn btn-success" style="margin-left: 87%;">
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection
