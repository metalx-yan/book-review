<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Image;
use Auth;
use File;

class QuestionsController extends Controller
{

    public function __construct()
    {
      return $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Question::all();
        return view('question.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request, [
          'title' => 'required',
          'description' => 'required',
          'titlebook' => 'required',
          'writer' => 'required',
          'year' => 'required',
          'publisher' => 'required',
          'image_upload' => 'required',
        ]);

        $next = Question::where('slug', '=', str_slug($request->title))->first();

        $create = Auth::user()->questions()->create([
          'title' => $request->title,
          'slug' => str_random(),
          'description' => $request->description,
        ]);

        if (isset($next)) {
          $create->slug = str_slug("$create->id $create->title");
        }else {
          $create->slug = str_slug($create->title);
        }

        $create->save();

        $ques = Question::where('slug', '=', $create->slug)->first();

        if ($request->hasFile('image_upload')) {
          $image = $request->file('image_upload');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          $location = public_path('image/' . $filename);
          Image::make($image)->resize(300,300)->save($location);

          $ques->books()->create([
          'title' => $request->titlebook,
          'writer' => $request->writer,
          'year' => $request->year,
          'publisher' => $request->publisher,
          'cover' => $filename
          ]);
        }

        return redirect()->route('question.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $question = Question::where('slug', '=', $id)->first();
        $book = $question->books;
        return view('question.show', compact('question', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::where('slug', '=', $id)->first();
        $book = $question->books;

        return view('question.edit', compact('question', 'book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'title' => 'required'
      ]);

      $create = Question::where('slug', '=', $id)->first();

      $create->title = $request->title;
      $create->slug = str_random();
      $create->description = $request->description;

      $update = $create->books;
      $update->update([
        'title' => $request->titlebook,
        'writer' => $request->writer,
        'year' => $request->year,
        'publisher' => $request->publisher,

      ]);

      if ($request->hasFile('image_upload')) {
        $image = $request->file('image_upload');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('image/' . $filename);
        Image::make($image)->resize(800,400)->save($location);

        $update->image = $filename;
      }

      $create->save();

      $next = Question::where('slug', '=', str_slug($create->slug))->first();

      if (isset($next)) {
        $create->slug = str_slug("$create->id $create->title");
      }else {
        $create->slug = str_slug($create->title);
      }

      $create->save();

      return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Question::where('slug', '=', $id)->first();
        File::delete('image/'.$destroy->books->cover);
        $destroy->delete();

        return redirect()->back();
    }
}
