<?php

namespace App\Http\Controllers;

use App\DTO\StudentStoreDTO;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Student;
use App\Repositories\StudentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class StudentController extends Controller
{
    protected $student;

    public function __construct(StudentRepository $studentRepository)
    {
        $this->student = $studentRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # code...
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # code...
        Log::info('message');
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreRequest $request)
    {

        $data = new StudentStoreDTO($request->validated());
        $student = $this->student->save($request->validated());

        // $student = Student::create(['name' => $request->input('name'), 'rno' => $request->input('rno')]);

        return redirect(route('students.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        # code...
        $student = Student::find($id);
        return view('students.edit', compact("student", $student));
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
        Log::info('message');
        //
        $student = Student::find($id);

        $student->name = $request->input("name");
        $student->rno = $request->input("rno");

        $student->save();

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::destroy($id);
        //Student::refre
    }
}
