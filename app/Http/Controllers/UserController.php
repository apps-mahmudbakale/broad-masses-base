<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('read-users');
        $users = User::all();
        return view('users.index', compact('users'));
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
        //
    }



    public function register(Request $request)
    {
        $user = User::create([
                'name' => $request->fullname,
                'email' => $request->email
        ]);


        $member = Member::create([
                'user_id' => $user->id,
                'date_of_birth' => $request->date_of_birth,
                'place_of_birth' => $request->place_of_birth,
                'passport_no' => $request->passport_no,
                'profession' => $request->profession,
                'qualification' => $request->qualification,
                'job' => $request->job,
                'fixed_phone' => $request->fixed_phone,
                'phone' => $request->phone,
                'current_residence' => $request->current_residence,
                'skills' => $request->skills,
                'hobby' => $request->hobby,
                'languages' => $request->languages,
                'experience' => $request->experience,
                'achievements' => $request->achievements,
                'party' => $request->party,
                'date_party' => $request->date_party,
                'survive' => $request->survive,
                'date_resign' => $request->date_resign,
                'reason_leaving' => $request->reason_leaving,
                'reason_join' => $request->reason_join,
                'offer' => $request->offer,
                'ideas' => $request->ideas,
                'yourself' => $request->yourself,
                'acknowledgement' => $request->acknowledgement
        ]);

        return redirect()->route('register')->with('success', 'Registration Success');

        
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
        //
    }
}
