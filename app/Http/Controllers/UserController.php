<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_managements=User::all();
        return view('pages.laravel-examples.user-management',compact('users_managements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.adduser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email,',
            'name' => 'required',
            'phone' => 'required|max:10',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        $user = new User([
            'email' => $request->email,
            'name' => $request->name,
            'phone' => $request->phone,
            'about' => $request->about,
            'location' =>$request->location ,
            'role_id' => 5,
            'password' => $request->password
        ]);
        $user->save();


        return back()->withStatus('Profile successfully created.');
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
        $user = User::find($id);
        return view('pages.edituser',['user'=>$user ]);
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
        // $user = request()->user();
        $attributes = request()->validate([
            'email' => 'required|email|unique:users,email,'.$user->id,
            'name' => 'required',
            'phone' => 'required|max:10',
            'about' => 'required:max:150',
            'location' => 'required'
        ]);

        // auth()->user()->update($attributes);
        // return back()->withStatus('Profile successfully updated.');
        $user=User::find($id);
        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'role_id'=>1,
        ]);
        return back()->withStatus('Profile successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::delete($id);

            $User = User::findOrFail($id);
             $User->delete();

             $users_managements=User::all();
             return view('pages.laravel-examples.user-management',compact('users_managements'));
    }
}
