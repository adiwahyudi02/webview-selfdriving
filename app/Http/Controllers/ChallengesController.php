<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Challenges;
use Auth;

class ChallengesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;

        $data_challenges =  Challenges::where('user_id', $user)->orderBy('created_at', 'DESC')->get();

        // return dd($data_challenges);

        return view('challenges', compact('data_challenges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id; 

        $create = Challenges::create([
            'user_id' => $user,
            'category_id' => $request->inputCategori,
            'title' => $request->inputTitle,
            'goal' => $request->inputGoal,
            'tag' => '',
            'starting_at' => $request->dateStarting,
            'be_notified_at' => $request->notified,
            'notification' => $request->turnOnNotification,
            'private' => $request->private
        ]);

        return redirect('/challenge')->with('sukses', 'Challnge Created !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
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
        //
    }
}
