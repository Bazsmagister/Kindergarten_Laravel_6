<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    protected $rules =
        [
            //'first_name' => 'required|min:2|max:32|regex:/^[a-z ,.\'-]+$/i',
            //'last_name' => 'required|min:2|max:128|regex:/^[a-z ,.\'-]+$/i',
            'first_name' => 'bail|required|alpha_dash|max:250',
            'last_name' => 'bail|required|alpha_dash|max:250',
            'sign' => 'required|alpha_dash|max:250',
            'age' => 'required|numeric|max:99',
            'street_name' => 'max:250',
            'street_number' => 'max:250',
            'zip' => 'nullable|numeric|digits:4',
            'city' => 'required|alpha_dash|max:250',
            //'siblings_num' => 'bail|required|numeric|max:11',
            'siblings_num' => 'numeric'
        ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $students = DB::table('students')
        ->leftJoin('addresses', 'students.id', '=', 'addresses.student_id')
        ->select('students.*', 'addresses.siblings_num', 'addresses.city', 'addresses.zip', 'addresses.street_name', 'addresses.street_number')
        ->orderBy('id', 'desc')
        //->get();
        ->get(['first_name', 'last_name', 'sign', 'age', 'siblings_num']);//->stringify();
        //var_dump($students);
        //$students= json_decode( json_encode($students));
        //$students->address()->save($address);
        return view('ajax', compact('students'));
        */
        $students = DB::table('students')->all();
        return view('students', compact('students'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
