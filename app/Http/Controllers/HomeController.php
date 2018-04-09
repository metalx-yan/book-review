<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use File;
use Auth;

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
        $index = Question::where('user_id', Auth::user()->id)->orderBy('id','desc')->paginate(7);
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
        // $ans = $root->answers;
        return view('sites.root', compact('root'));
    }

    public function destroy($id)
    {
        $destroy = Question::find($id);
        File::delete('image/'.$destroy->books->cover);
        $destroy->delete();

        return redirect()->back();
    }

    // public function deleted($id)
    // {
    //   $answer = Question::find($id);
    //   $answer->delete();
    //
    //   return redirect()->back();
    // }


    public function up()
    {
      if (Auth::user()->rates()->type == null) {

      }else {

      }
    }
}
