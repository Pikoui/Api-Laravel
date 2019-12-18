<?php

namespace App\Http\Controllers;

use App\Skill;
use Validator;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = skill::All();

        return response()->json([
           'state' => 'success',
           'description' => $skills 
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:skills|max:255',
        ]);
        if ($validator->fails()) {
            return redirect('post/create')
                        ->withErrors($validator)
                        ->withInput();
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {

        $skill = new skill([
        'name' => $request->name,
        ]);

        $skill->save();

        return response()->json([
            'state' => 'success',
            'message' => 'compétence crée',
        ]);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        $talent = skill::find($skill);
        return response()->json([
            'state' => 'success',
            'description' => $talent,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:skills|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {

            $skil=Skill::find($id);
            $skil->name = $request->input('name');

            $skil->save();

            return response()->json([
                'state' => 'success',
                'message' => "Compétence modifié !"
                
            ]);

        }              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Skill  $skill
     * @return \Illuminate\Http\Response
     */
     public function destroy(Skill $skill)
  {
    $skil = skill::find($skill->id);

    $skill->delete();

    return response()->json([
        'state' => 'success',
        'message' => "Compétence supprimé !"
        
    ]);
}
}
