<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_students=Student::all();
        return view('pages.Allstudents',compact('table_students'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentsadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$attributes = request()->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|min:5|max:255',
            'role_id'   => 'sometimes',
            'phone'=>'required|min:5|max:255'


        ]);*/
        $user = new User([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>12345678,
            'role_id'=>1,
        ]);
        $user->save();
        $student = new Student([
            'phone'=>$request->phone,
            'user_id'=>$user->id,
        ]);
        $student->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $student = Student::find($id);
        $user = User::find($id);
        return view('pages.editstudents',['student'=>$student,'user'=>$user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user=User::find($id);
        $Student=Student::find($id);

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>12345678,
            'role_id'=>1,
        ]);

        $Student->update([
            'phone'=>$request->phone,
            'user_id'=>$user->id,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {

        Student::delete($id);
        return redirect()->route('admin.coursesadd.index');
    }
}
