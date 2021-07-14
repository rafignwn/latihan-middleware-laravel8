<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use RealRashid\SweetAlert\Facades\Alert;

class StudentController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs = Student::All();
        return view('students.index', compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8|unique:students',
            'email' => 'required|max:255|unique:students',
            'jurusan' => 'required'
        ]);
        
        $created = Student::create($request->all());
        if($created){
            Alert::success('Berhasil', 'Data Mahasiswa Berhasil Ditambahkan.');
        }else{
            Alert::error('Gagal', 'Data Mahasiswa Gagal Ditambahkan.');
        }
        
        return redirect('/students');
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'email' => 'required|max:255',
            'jurusan' => 'required'
        ]);

        $update = Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nim' => $request->nim,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        
        if ($update){
            Alert::success('Berhasil', 'Data Mahasiswa Berhasil Diubah.');
        }else{
            Alert::error('Gagal', 'Data Mahasiswa Gagal Diubah.');
        }
        return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Student $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $delete = Student::destroy($student->id);
        if($delete){
            Alert::success('Berhasil', 'Data Mahasiswa Berhasil Dihapus.');
        }else{
            Alert::error('Gagal', 'Data Mahasiswa Gagal Dihapus.');
        }
        return redirect('/students');
    }
}
