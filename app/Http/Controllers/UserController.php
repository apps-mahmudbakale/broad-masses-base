<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserUpdateFormRequest;
use App\Models\Member;
use App\Models\Role;
use App\Models\User;
use App\Mail\WelcomeMail;
use App\Mail\ApproveMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Validator;

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
        $this->authorize('create-users');
        $roles = Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserFormRequest $request)
    {
        $user = User::create($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('users.index')->with('success', 'User Added');
    }



    public function register(Request $request)
    {
        $rules = array(
        'fullname' => 'required',                        
        'email' => 'required|email|unique:users',    
        'date_of_birth' => 'required',
        'place_of_birth' => 'required',
        'passport_no' => 'required',
        'phone' => 'required',
        'current_residence' => 'required',
        'yourself' => 'required',
        'acknowledgement' => 'required',
        'terms' => 'required',
        'constitution' => 'required'
    );

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            
            $messages = $validator->messages();

            return back()->withErrors($validator);

        }else{

        $user = User::create([
                'name' => $request->fullname,
                'email' => $request->email
        ]);

        $user->assignRole('member');

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

        Mail::to($request->email)->send(new WelcomeMail());
        return redirect()->route('register')->with('success', 'success');

        }
        
    }

    public function approve($id)
    {
        $user = User::find($id);

        $pass = Str::random(6);

        $user->password = bcrypt($pass);
        
        $user->update();

        $member = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => $pass,
        ];

        Mail::to($user->email)->send(new ApproveMail($member));

        return redirect()->route('admin.members.index')->with('success', 'Membership Approved');    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('read-users');

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update-users');

        // dd($user);

        $roles = Role::all()->pluck('name', 'id');

        $user->load('roles');

        return view('users.edit', compact('roles', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, User $user)
    {
       $this->authorize('update-users');

        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));

        return redirect()->route('admin.users.index')->with('success','User Updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete-users');

        $user->delete();

        return back()->with('success', 'User Deleted');
    }
}
