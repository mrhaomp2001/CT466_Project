<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Http\Requests\StoreClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Models\Answer;
use App\Models\Question;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $classrooms = Classroom::all();
        return view('admin.classroom.classroom-admin', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.classroom.classroom-admin-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClassroomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClassroomRequest $request)
    {
        //
        $classroom = new Classroom;
        $classroom->name = $request->name;
        $classroom->description = $request->description;
        $classroom->is_opened = 0;

        $classroom->save();
        return redirect()->route('admin-classroom.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $classroom = Classroom::find($id);
        $questions = Question::where('classroom_id', '=', $id)->paginate(5);
        return view('admin.classroom.classroom-admin-show', compact('classroom', 'questions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClassroomRequest  $request
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClassroomRequest $request)
    {
        //
        $classroom = Classroom::find($request->id);

        $classroom->name = $request->name;
        $classroom->description = $request->description;

        $classroom->save();

        return redirect()->route('admin-classroom.show', $classroom->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $classroom = Classroom::find($id);

        foreach ($classroom->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->delete();
            }
            $question->delete();
        }
        $classroom->delete();

        return redirect()->route('admin-classroom.index');
    }
}
