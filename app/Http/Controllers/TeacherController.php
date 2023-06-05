<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Database\Seeders\RolesTableSeeder;



class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        {
            $table_teachers=Teacher::all();
            return view('pages.Allteachers',compact('table_teachers'));
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachersadd');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'role_id'   => 'sometimes',
            'phone'=>'required|min:5|max:255'


        ]);
        $user = new User([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role_id'=>2,
        ]);
        $user->save();
        $teacher = new Teacher([
            'phone'=>$request->phone,
            'user_id'=>$user->id,
        ]);
        $teacher->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher,$id)
    {
        $teacher = Teacher::find($id);
        $user = User::find($id);
        return view('pages.edittaecher',['teacher'=>$teacher,'user'=>$user ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'role_id'   => 'sometimes',
            'phone'=>'required|min:5|max:255'


        ]);
        $user=User::find($id);
        $Teacher=Teacher::find($id);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'role_id'=>2,
        ]);

        $Teacher->update([
            'phone'=>$request->phone,
            'user_id'=>$user->id,
        ]);
        return back();







    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Teacher ::destroy($id);
        return redirect()->route('admin.teacheradd.index');
    }
}
