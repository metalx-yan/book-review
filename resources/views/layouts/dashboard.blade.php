<div class="container" style="margin-top:50px;">
    <div class="row">
    	<div class="col-md-8">

            @foreach ($index as $indexis)
              <div class="panel panel-default">
              <div class="panel-body">
              <h3>Title : {{ $indexis->title }}</h3>
              <hr>
              <h4>Description : {{ $indexis->description }}
                <ul style="list-style: none; float: right; margin-top: 35px;">
                  <li>
                    <form class="" action="{{ route('destroy', $indexis->id) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <div class="col-md-2 glip">
                        <button class="btn btn-link" name="button" type="submit">
                          <span class="glyphicon glyphicon-trash trash " aria-hidden="true"></span>
                        </button>
                      </div>
                    </form>
                      <div class="col-md-2 pen">
                        <a href="{{ route('question.edit', $indexis->slug) }}">
                            <span class="glyphicon glyphicon-pencil pencil" aria-hidden="true"></span>
                        </a>
                        </button>
                      </div>
                    </form>
                  </li>
                </ul>
              </h4>

            </div>
          </div>
            @endforeach
  		</div>

      <div class="col-md-4">
     	 	<a href="{{ route('question.create') }}" class="btn btn-success form-control">Buat Pertanyaan</a>
    	</div>
  	</div>
</div>

<div class="col-md-3 col-md-offset-4">
  {{ $index->links() }}
</div>
