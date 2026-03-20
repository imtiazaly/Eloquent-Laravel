<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::paginate(5);
        // $users = User::find([5 , 7 , 3 , 11], ['name' , 'city']);
        // $users = User::count();
        // $users = User::min('age');
        // $users = User::max('age');
       

        // return $users;

        return view('home' , ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create([
            'name' => $request->username,
            'email' => $request->useremail,
            'age' => $request->userage,
            'city' => $request->usercity,
        ]);

        return redirect()->route('user.index')
                        ->with('status' , 'New User Added Successfully!');
        // return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user)
    {
        $users = User::findorfail($user);

        // return $users;
       return view('showuser' , compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        $users = User::findorfail($user -> id);
        return view('updateuser' , compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $user)
    {
        User::where('id',$user)
            ->update([
                'name' => $request->username,
                'email' => $request->useremail,
                'age' => $request->userage,
                'city' => $request->usercity,
            ]);

        return redirect()->route('user.index')
                        ->with('status' , 'User Data Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user =  User::find($id);
        $user->delete();

        return redirect()->route('user.index')
                        ->with('status' , 'User Data Deleted Successfully!');
    
    }
}
