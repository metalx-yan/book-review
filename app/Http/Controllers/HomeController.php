<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Question::orderBy('id','desc')->paginate(7);
        return view('home', compact('index'));
    }

    public function q($id)
    {
      $question = Question::where('slug', '=', $id)->first();
      $book = $question->books;
      return view('q', compact('question', 'book'));
    }

    public function root()
    {
        $root = Question::all();
        return view('sites.root', compact('root'));
    }

    public function destroy($id)
    {
        $destroy = Question::find($id);
        $destroy->delete();

        return redirect()->back();
    }
}
