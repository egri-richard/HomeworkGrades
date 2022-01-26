<?php

namespace App\Http\Controllers;

use App\Models\Homework;
use Illuminate\Http\Request;

class HomeworkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Homework::all();

        return view('home', ['list' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validated = $request->validate([
            'url' => 'required',
            'grade' => 'min:0|max:10|numeric|required',
        ]);

        $data = $request->only('url', 'grade', 'grade_details');
        $hw = new Homework();

        if($validated) {
            $hw->fill($data);
            $hw->save();
    
            return redirect()->route('homework.index');
        } else {
            return view('homework.create');    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hw = Homework::findOrFail($id);
        return view('show', ['hw' => $hw]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hw = Homework::findOrFail($id);
        return view('edit', ['hw' => $hw]);
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
        $validated = $request->validate([
            'url' => 'required',
            'grade' => 'min:0|max:10|numeric|required'
        ]);

        $data = $request->only('url', 'grade', 'grade_details');
        $hw = Homework::findOrFail($id);

        if($validated) {   
            $hw->fill($data);
            $hw->save();

            return redirect()->route('homework.show', $hw->id);
        } else {
            return view('edit', ['hw' => $hw]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hw = Homework::findOrFail($id);
        $hw->delete();
        return redirect()->route('homework.index');
    }
}
