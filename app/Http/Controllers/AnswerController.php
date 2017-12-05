<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Rate;
use Auth;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'message' => 'required',
        ]);
        $a = new Answer;
        $a->question_id = $request->question_id;
        $a->user_id = Auth::user()->id;
        $a->id = $request->id;
        $a->message = $request->message;
        $a->save();


        return redirect()->back();

    }

    public function rate(Request $req)
    {

      // dd($req);
      $rate = new Rate;
      $rate->type = 1;
      $rate->user_id = Auth::user()->id;
      $rate->answer_id = $req->answer_id;
      $rate->save();

      return redirect()->back();

    }

    public function disrate(Request $req)
    {
      $rate = new Rate;
      $rate->type = 0;
      $rate->user_id = Auth::user()->id;
      $rate->answer_id = $req->answer_id;
      $rate->save();

      return redirect()->back();
    }

    public function detach($id)
    {
      $detach = Rate::where('user_id', Auth::user()->id)->where('answer_id', $id)->first();
      $detach->delete();

      return redirect()->back();
    }

    public function attach($id)
    {
      $attach = Rate::where('user_id', Auth::user()->id)->where('answer_id', $id)->first();
      $attach->delete();

      return redirect()->back();
    }

    public function jawaban_terbaik($id)
    {
      $b = Answer::find($id);

      $b->super = 1;
      $b->save();

      return redirect()->back();

    }

    public function hapus($id)
    {
      $b = Answer::find($id);

      $b->super = 0;
      $b->save();

      return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $destroy = Answer::find($id);
      $destroy->delete();

      return redirect()->back();
    }
}
