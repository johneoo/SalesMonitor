<?php

namespace App\Http\Controllers;

use App\Goal;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('goals.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Auth $auth)
    {

        // check if user has a set goal for the current month
        $has_goal = $auth::user()->goals()->whereMonth('updated_at', now())->first();


        if ($has_goal) :
            return $this->update($request, new Goal);

        endif;

        $auth::user()->goals()->create($request->validate([
            'amount' => 'required|digits_between:5,15|numeric',
        ]));
        return redirect()->route('goals.create')->with('message', 'Your Sales Goal Added!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {

        auth()->user()->goals()->update($request->validate([
            'amount' => 'required|digits_between:5,15|numeric',
        ]));
        return redirect()->route('goals.create')->with('message', 'Your Sales Goal has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
