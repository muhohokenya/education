<?php

namespace App\Http\Controllers;

use App\Http\Requests\LessonRequest;
use App\Lesson;
use App\Subject;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'subjects'=>Subject::all(),
            'lessons'=>Lesson::all(),
        ];
        return view('lessons.index',$data);
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
    public function store(LessonRequest $request)
    {
        Lesson::query()->create([
            'name'=>$request->lesson,
            'subject_id'=>$request->subject,
            'content'=>$request->lesson_content,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'lesson'=>Lesson::query()->findOrFail($id)
        ];
        return view('lessons.show',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'subjects'=>Subject::all(),
            'lesson'=>Lesson::query()->findOrFail($id)
        ];
        return view('lessons.edit',$data);
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
        Lesson::query()->where('id',$id)->first()->update([
            'name'=>$request->lesson,
            'subject_id'=>$request->subject,
            'content'=>$request->lesson_content,
        ]);
        return redirect()->route('lessons.index');
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
