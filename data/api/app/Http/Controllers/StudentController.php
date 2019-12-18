<?php

namespace App\Http\Controllers;

use App\Student;
use Validator;
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
        $students = student::All();

        return response()->json([
           'state' => 'success',
           'description' =>$students 
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
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'age' => 'required|max:255',
            'phone_number' => 'required|unique:students|max:255',
            'email' => 'required|unique:students|max:255',
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

        $student = new student([
        'lastname' => $request->lastname,
        'firstname' => $request->firstname,
        'age' => $request->age,
        'email' => $request->email,
        'phone_number' => $request->phone_number,
        ]);

        $student->save();

        return response()->json([
            'state' => 'success',
            'message' => 'apprenant crée',
        ]);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $apprenant = student::find($student);
        return response()->json([
            'state' => 'success',
            'description' => $apprenant,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validator = Validator::make($request->all(), [
            'lastname' => 'required|max:255',
            'firstname' => 'required|max:255',
            'age' => 'required|max:255',
            'phone_number' => 'required|unique:students|max:255',
            'email' => 'required|unique:students|max:255',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'state' => 'error',
                'message' => $validator->errors()
            ]);
        } else {

            $stud=Student::find($id);
            $stud->lastname = $request->input('lastname');
            $stud->firstname = $request->input('firstname');
            $stud->age = $request->input('age');
            $stud->email = $request->input('email');
            $stud->phone_number = $request->input('phone_number');

            $stud->save();

            return response()->json([
                'state' => 'success',
                'message' => "Utilisateur modifié !"
                
            ]);

           
            }              
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
     public function destroy(Student $student)
  {
//         $validator = Validator::make($request->all(), [
//             'lastname' => 'required|max:255',
//             'firstname' => 'required|max:255',
//             'age' => 'required|max:255',
//             'phone_number' => 'required|unique:students|max:255',
//             'email' => 'required|unique:students|max:255',
//         ]);
//         if ($validator->fails()) {
//             return redirect('post/create')
//                         ->withErrors($validator)
//                         ->withInput();
//             return response()->json([
//                 'state' => 'error',
//                 'message' => $validator->errors()
//             ]);
//         } else {
    $stud = student::find($student->id);

    $student->delete();

    return response()->json([
        'state' => 'success',
        'message' => "Utilisateur supprimé !"
        
    ]);
}
}
