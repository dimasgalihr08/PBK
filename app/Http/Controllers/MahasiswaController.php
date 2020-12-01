<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $mahasiswa = DB::table('students')->get();
       $mahasiswa = Student::all();
        return view('mahasiswa.index', ['mahasiswa' => $mahasiswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('create');
       }
   
       public function insert(Request $request){
        $mahasiswa=new Students();
           $mahasiswa->nim=$request->get('nim');
           $mahasiswa->nama=$request->get('nama');
           $mahasiswa->jurusan=$request->get('jurusan');
           $mahasiswa->save();
        return redirect ('/');
       }
   
       public function delete($id){
        $data=Students::find($id);
           $data->delete();
           return back();
       }
   
       public function edit($id){
        $data=Students::find($id);
        return view('edit',compact('data'));
       }
   
       public function update(Request $request, $id){     
        $data = Students::findOrFail($id);
           $data->nim=$request->get('nim');
           $data->nama_lengkap=$request->get('nama');
           $data->jurusan=$request->get('jurusan');
           $data->save();
        return redirect ('/')->with('alert-success','Data berhasil Diubah.');
       }
   
       public function read($id){
        $data=Students::find($id);
        return view('read',compact('data'));
       }
   }