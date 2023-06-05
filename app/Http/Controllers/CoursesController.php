<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $table_courses=Courses::all();
        return view('pages.Allcourses',compact('table_courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coursesadd');
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
            'title' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'price' => 'required|max:255',
            'description'   => 'required|max:255',



        ]);

        $Cours = new Courses([
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,

        ]);
        $Cours->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses,$id)
    {
        $Courses = Courses::find($id);
        return view('pages.editcourses',compact('Courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Courses=Courses::find($id);
        $Courses->update([
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Courses::destroy($id);
        return redirect()->route('admin.coursesadd.index');
    }
}
