<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

               $student = Student::all();
              $data =  ['students'=> $student ];
          return view('student.index',$data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('student.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
               $validate = $request->validate([
                    'surname'=>'required',
                    'firstname'=>'required',
                    'course'=>'required',
                    'dob'=>'required',
                    'email'=>'required',

               ]);

             
                $std =   Student::create($validate);
                  if($std){
                        return back()->with('success','Student data stored successfully');
                  }else{
                    return back()->with('error','Student datanot stored');


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
        //

          $student =  Student::find($id); 
          $data =  ['students'=> $student ];
          return view('student.index',$data);





    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $student =  Student::find($id); 
        $data =  ['student'=> $student ];
        return view('student.edit',$data);


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
        //
        $validate = $request->validate([
            'surname'=>'required',
            'firstname'=>'required',
            'course'=>'required',
            'dob'=>'required',
            'email'=>'required|email',

       ]);

          $student = Student::find($id);
           $std =  $student->update($validate);
                 if($std){

                    return redirect()->route('student.index');
                 }else {
                      return back()->with('error','un-enable to update student data');
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
        //

        $student = Student::find($id);
        $std =  $student->delete();
              if($std){

                return back()->with('success','student data deleted');
              }else {
                   return back()->with('error','un-enable to delete student data');
              }
    }
}
