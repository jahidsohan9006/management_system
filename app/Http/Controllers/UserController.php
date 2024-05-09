<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = user::simplePaginate(5);

        // return  $users;


        // foreach ($users as
        //     $user) {
        //     echo  $user->name;
        // }

        return  view('users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add_user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        // $user = new user;
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->phone = $request->userphone;
        // $user->save();
        $request->validate(
            [
                'username' => 'required | string',
                'useremail' => 'required | email',
                'userphone' => 'required | numeric',
            ]
        );
        user::create(
            [
                'name' => $request->username,
                'email' => $request->useremail,
                'phone' => $request->userphone,
            ]
        );
        return redirect()->route('user.index')
            ->with('status', 'New user added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users =  user::find($id);
        // return  $users;
        return view("view_user", compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(user $user)
    public function edit(string $id)
    {
        // $users = user::find($user->id);
        $users = user::find($id);

        return view('update_user', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $users = user::find($id);
        // $user->name = $request->username;
        // $user->email = $request->useremail;
        // $user->phone = $request->userphone;
        // $user->save();

        // return $user;


        $request->validate(
            [
                'username' => 'required | string',
                'useremail' => 'required | email',
                'userphone' => 'required | numeric',
            ]
        );



        $user = user::where('id', $id)
            ->update(
                [
                    'name' => $request->username,
                    'email' => $request->useremail,
                    'phone' => $request->userphone,
                ]
            );
        return redirect()->route('user.index')
            ->with('status', 'User Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {


        // user::destroy($id);
        // $user = user::where('email','kumawa@mailinator.com');
        $user = user::find($id);
        $user->delete();
        return redirect()->route('user.index')
            ->with('status', 'Data Delete Successfully');
    }
}