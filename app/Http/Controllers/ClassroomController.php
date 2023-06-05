<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Http\Controllers\CoursesController;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_classes=classroom::all();
        $teachers = Teacher::get();
        $courses = Courses::all();
        // return view('pages.Allclasses',compact('table_classes'));
        return view('pages.Allclasses',['teachers'=>$teachers,'courses'=>$courses,'table_classes'=>$table_classes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::get();
        $courses = Courses::all();

        return view('classesadd',['teachers'=>$teachers,'courses'=>$courses ]);

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
            'teachers_id' => 'required|min:5|max:255',
            'password' => 'required|max:255',
            'description'   => 'required|max:255',
            'course_id'=>'required|max:255'


        ]);

        $Classroom = new Classroom([
            'name'=>$request->name,
            'course_id'=>$request->course_id,
            'description'=>$request->description,
            'teachers_id'=>$request->teachers_id	,
        ]);
        $Classroom->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teachers = Teacher::get();
        $courses = Courses::all();
        $Classroom = Classroom::find($id);

        return view('pages/editclasses',['teachers'=>$teachers,'courses'=>$courses,'Classroom'=>$Classroom ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $Classroom=Classroom::find($id);
        $Classroom->update([
            'name'=>$request->name,
            'course_id'=>$request->course_id,
            'description'=>$request->description,
            'teachers_id'=>$request->teachers_id,
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Classroom::find($id)->delete();
        Classroom::destroy($id);
        return redirect()->route('admin.classesadd.index');

    }
}
